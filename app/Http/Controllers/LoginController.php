<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

class LoginController extends Controller
{
    // Menampilkan halaman login
    public function showLoginForm()
    {
        return view('index'); // Merender index.blade.php
    }

    // Proses login
    public function login(Request $request)
{
    // Validasi input
    $credentials = $request->validate([
        'email' => 'required|email',
        'password' => 'required',
    ]);

    // Periksa apakah email terdaftar
    $user = User::where('email', $credentials['email'])->first();
    if (!$user) {
        return response()->json([
            'status' => 'error',
            'message' => 'Email tidak terdaftar. Silakan melakukan pendaftaran terlebih dahulu.',
            'redirect' => route('register'), // Rute ke halaman register
        ], 404);
    }

    // Periksa autentikasi
    if (!Auth::attempt($credentials)) {
        return response()->json([
            'status' => 'error',
            'message' => 'Password salah. Silakan coba lagi.',
        ], 401);
    }       

    // Regenerasi sesi dan arahkan ke dashboard
    $request->session()->regenerate();

    // Pengembalian respons yang sukses
    return response()->json([

        'redirect' => route('dashboard'), 
    ]);
}


    // Logout
    public function logout(Request $request)
    {
        Auth::logout();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect('/');
    }
}
