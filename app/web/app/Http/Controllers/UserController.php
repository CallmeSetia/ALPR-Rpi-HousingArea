<?php
namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

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

            return response()->json($penghuni, 200);
        } else {
            return response()->json(['message' => 'Unauthorized'], 401);
        }
    }
}
