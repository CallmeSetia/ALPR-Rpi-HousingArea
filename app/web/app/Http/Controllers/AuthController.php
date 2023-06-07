<?php

namespace App\Http\Controllers;

use Illuminate\Http\JsonResponse;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\RateLimiter;
use Illuminate\Validation\ValidationException;
use Illuminate\Foundation\Auth\ThrottlesLogins;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class AuthController extends Controller
{
    /**
     * @param Request $request
     * @return JsonResponse|RedirectResponse
     */
    public function login(Request $request)
    {
        $request->validate([
            'username' => 'required',
            'password' => 'required',
        ]);

        // Cek apakah ada terlalu banyak percobaan login yang gagal dari alamat IP ini
        if ($this->hasTooManyLoginAttempts($request)) {
            return $this->sendLockoutResponse($request);
        }

        // Coba melakukan autentikasi
        if (Auth::attempt($request->only('username', 'password'))) {
            // Auth berhasil
            $user = Auth::user();
            $user->rumah;

            // Reset percobaan login gagal
            $this->clearLoginAttempts($request);

            // Generate token JWT
            $token = $this->generateJwtToken($user);

            if ($request->wantsJson()) {
                return response()->json([

                    'token' => $token,
                    'user' => $user,

                ], 200);
            } else {
                session()->flash('alert', [
                    'type' => 'success',
                    'message' => sprintf('Selamat datang, %s (%s). Anda berhasil masuk.', $user->nama, $user->username),
                ]);

                // Jika bukan permintaan JSON, redirect ke halaman yang sesuai
                return view('view.auth.login')->with([
                    'token' => $token,
                    'user' => $user,
                ]);
            }
        }
        else {
            // Auth gagal
            $this->incrementLoginAttempts($request);

            if ($request->wantsJson() || $request->isJson()) {
                return response()->json(['message' => 'Username atau password salah.'], 401);
            } else {
                session()->flash('alert', [
                    'type' => 'danger',
                    'message' => sprintf('Username atau password salah.'),
                ]);
                // Jika bukan permintaan JSON, redirect kembali ke halaman login dengan pesan error
                return view('view.auth.login')->withErrors([
                    'username' => 'Username atau password salah.',
                ]);
            }
        }
    }
    public function logout(Request $request)
    {
        // Mengecek apakah pengguna sedang autentikasi
        if (Auth::check()) {
            // Menghapus semua token autentikasi pengguna
            Auth::user()->tokens()->delete();
        }

        if ($request->wantsJson()) {
            return response()->json(['message' => 'Logged out successfully'], 200);
        } else {
            // Jika bukan permintaan JSON, redirect ke halaman login atau halaman lain yang sesuai
            return response()->json(['message' => 'Logged out successfully'], 200);
        }
    }
    protected function hasTooManyLoginAttempts(Request $request)
    {
        $maxAttempts = 5;
        $lockoutMinutes = 5;

        return RateLimiter::tooManyAttempts(
            $this->throttleKey($request),
            $maxAttempts,
            $lockoutMinutes
        );
    }

    protected function incrementLoginAttempts(Request $request)
    {
        RateLimiter::hit($this->throttleKey($request));
    }

    protected function clearLoginAttempts(Request $request)
    {
        RateLimiter::clear($this->throttleKey($request));
    }

    protected function sendLockoutResponse(Request $request)
    {
        $lockoutMinutes = 5;
        $seconds = RateLimiter::availableIn($this->throttleKey($request));

        return response()->json([
            'message' => 'Too many login attempts. Please try again after ' . $seconds . ' seconds.',
        ], 429);
    }

    protected function throttleKey(Request $request)
    {
        return Str::lower($request->input('username')) . '|' . $request->ip();
    }

    protected function generateJwtToken($user)
    {
        $token = $user->createToken('MyApp')->plainTextToken;
        return $token;
    }
}
