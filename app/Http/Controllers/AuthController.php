<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Admin;
use Illuminate\Support\Facades\Hash;


class AuthController extends Controller
{
    // Menampilkan form registrasi
    public function showRegistrationForm()
    {
        return view('registrasi'); // Pastikan view ini ada
    }

    // Menangani proses registrasi
    public function register(Request $request)
    {
        // Validasi input
        $request->validate([
            'username' => 'required|string|max:255|unique:admins', // Atur sesuai tabel Anda
            'no_hp' => 'required|digits_between:10,13',
            'alamat' => 'required|string|max:255',
            'tgl_lahir' => 'required|date',
            'password' => 'required|string|min:8|confirmed', // pastikan ada 'password_confirmation' di form
        ]);

        // Buat user baru
        $user = Admin::create([
            'username' => $request->username,
            'no_hp' => $request->no_hp,
            'alamat' => $request->alamat,
            'tgl_lahir' => $request->tgl_lahir,
            'password' => Hash::make($request->password),
        ]);

        // Redirect ke halaman login setelah registrasi sukses
        return redirect()->route('login')->with('success', 'Akun berhasil dibuat. Silakan login.');
    }

    // Menampilkan Form Login
    public function showLoginForm()
    {
        return view('login');
    }

    public function login(Request $request)
{
    // Validasi input
    $request->validate([
        'username' => 'required|string',
        'password' => 'required|string',
    ]);

    // Mencari admin berdasarkan username
    $admin = Admin::where('username', $request->username)->first();

    // Cek apakah admin ditemukan dan password cocok
    if ($admin && Hash::check($request->password, $admin->password)) {
        // Login berhasil
        Auth::guard('dashboard')->login($admin);
        return redirect()->route('dashboard');
    }

    // Jika login gagal
    return redirect()->route('login')->withErrors(['login_error' => 'Invalid username or password']);
}

    // Logout
    public function logout()
    {
        Auth::logout(); // Proses logout pengguna
        return redirect('/login-admin')->with('success', 'Logout berhasil!'); // Redirect ke halaman login
    }
}
