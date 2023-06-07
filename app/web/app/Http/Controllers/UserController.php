<?php
namespace App\Http\Controllers;

use App\Models\User;
use App\Models\PlatNomor;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

// TODO: THROTTLE
class UserController extends Controller
{
    public function getUserPenjaga()
    {
        $user = Auth::user();

        if ($user->role === 'Penjaga') {
            // Lakukan operasi yang sesuai untuk mendapatkan data penjaga
            // Contoh:
            $penjaga = User::where('role', 'Penjaga')->with('rumah')->get();

            return response()->json($penjaga, 200);
        } else {
            return response()->json(['message' => 'Unauthorized'], 401);
        }
    }

    public function getUserPenghuni()
    {
        $user = Auth::user();

        if ($user->role === 'Penghuni' || $user->role === 'Penjaga') {
            // Lakukan operasi yang sesuai untuk mendapatkan data penghuni
            // Contoh:
            $penghuni = User::where('role', 'Penghuni')->with('rumah')->get();

            $response = $penghuni->map(function ($penghuni) {
                return [
                    'id' => $penghuni->id,
                    'username' => $penghuni->username,
                    'role' => $penghuni->role,
                    'created_at' => $penghuni->created_at,
                    'updated_at' => $penghuni->updated_at,
                    'nama' => $penghuni->nama,
                    'rumah' => [
                        'id' => $penghuni->rumah->id,
                        'nama_pemilik' => $penghuni->rumah->nama_pemilik,
                        'alamat' => $penghuni->rumah->alamat,
                        'created_at' => $penghuni->rumah->created_at,
                        'updated_at' => $penghuni->rumah->updated_at,
                        'plat_nomor' => PlatNomor::where('rumah_id',  $penghuni->rumah->id)->get(),
                    ],
                ];
            });

            return response()->json($response, 200);

        } else {
            return response()->json(['message' => 'Unauthorized'], 401);
        }
    }
}
