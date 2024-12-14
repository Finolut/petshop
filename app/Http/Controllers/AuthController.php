<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    public function register(Request $request)
{
    // Validate input
    $request->validate([
        'username' => 'required|unique:users,username|max:255',
        'email' => 'required|email|unique:users,email|max:255', // Validate email
        'password' => 'required|min:6',
    ]);

    // Store user data with email and default 'customer' role
    User::create([
        'username' => $request->username,
        'email' => $request->email,  // Save email
        'password' => Hash::make($request->password),
        'role' => 'customer', // Default role
    ]);

    // Redirect to login page with success message
    return redirect()->route('login')->with('success', 'Akun berhasil dibuat, silakan login.');
}


public function login(Request $request)
{
    $request->validate([
        'username' => 'required',
        'password' => 'required',
    ]);

    if (Auth::attempt($request->only('username', 'password'))) {
        // Ambil data user yang sedang login
        $user = User::find(Auth::id());

        if (!$user) {
            return back()->withErrors(['user' => 'User tidak ditemukan.']);
        }

        // Redirect berdasarkan role
        if (in_array($user->role, ['admin', 'pegawai'])) {
            return redirect()->route('dashboard'); // Route untuk admin dan pegawai
        }

        // Default redirect untuk selain admin/pegawai
        return redirect()->route('reservation.index'); // Route default
    }

    return back()->withErrors(['username' => 'Username atau password salah.']);
}

    
    

    

    public function logout()
    {
        Auth::logout();
        return redirect()->route('landing');
    }
}
