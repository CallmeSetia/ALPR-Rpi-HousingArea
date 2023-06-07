<?php
namespace App\Http\Controllers;

use App\Models\Tamu;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class TamuController extends Controller
{
    public function index()
    {
        $user = Auth::user();

        if ($user->role === 'Penghuni' || $user->role === 'Penjaga') {
            // Lakukan operasi yang sesuai untuk mendapatkan data penghuni
            // Contoh:
            $tamu = Tamu::with(['rumah', 'approvedBy'])->get();

            return response()->json($tamu, 200);

        } else {
            return response()->json(['message' => 'Unauthorized'], 401);
        }
    }

    public function show($id)
    {
        $user = Auth::user();
        if ($user->role === 'Penghuni' || $user->role === 'Penjaga') {
            $tamu = Tamu::with(['rumah', 'approvedBy'])->find($id);
            if (!$tamu) {
                return response()->json(['message' => 'Tamu not found'], 404);
            }
            return response()->json($tamu, 200);
        }
        else {
            return response()->json(['message' => 'Unauthorized'], 401);
        }


    }

    public function store(Request $request)
    {
        $user = Auth::user();
        if ($user->role === 'Penghuni' || $user->role === 'Penjaga') {
            $request->validate([
                'nama' => 'required',
                'plat' => 'required',
                'rumah_id' => 'required',
                'approved_by' => 'required',
            ]);

            $tamu = Tamu::create($request->all());
            return response()->json($tamu, 201);
        }
        else {
            return response()->json(['message' => 'Unauthorized'], 401);
        }
    }

    public function update(Request $request, $id)
    {
        $user = Auth::user();
        if ($user->role === 'Penghuni' || $user->role === 'Penjaga') {
            $request->validate([
                'nama' => 'sometimes',
                'plat' => 'sometimes',
                'rumah_id' => 'sometimes',
                'approved_by' => 'sometimes',
            ]);

            $tamu = Tamu::find($id);
            if (!$tamu) {
                return response()->json(['message' => 'Tamu not found'], 404);
            }
            $tamu->update($request->all());

            return response()->json($tamu, 200);
        }
        else {
            return response()->json(['message' => 'Unauthorized'], 401);
        }

    }

    public function destroy($id)
    {
        $user = Auth::user();
        if ($user->role === 'Penjaga' || $user->role === 'Penghuni') {
            $tamu = Tamu::find($id);
            if (!$tamu) {
                return response()->json(['message' => 'Tamu not found'], 404);
            }
            $tamu->delete();
            return response()->json(['message' => 'Tamu deleted'], 200);

        }
        else {
            return response()->json(['message' => 'Unauthorized'], 401);
        }
    }
}
