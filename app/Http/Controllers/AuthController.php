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
        $request->validate([
            'username' => 'required|unique:users',
            'password' => 'required|min:6',
        ]);

        User::create([
            'username' => $request->username,
            'password' => Hash::make($request->password),
            'role' => 'customer',
        ]);

        return redirect()->route('login')->with('success', 'Registrasi berhasil. Silakan login.');
    }

    public function login(Request $request)
    {
        $request->validate([
            'username' => 'required',
            'password' => 'required',
        ]);
    
        if (Auth::attempt($request->only('username', 'password'))) {
            // Ambil data user yang sedang login
            $user = Auth::user();
    
            // Simpan data user ke session
            session([
                'user.username' => $user->username,
                'user.role' => $user->role,
            ]);
    
            return redirect()->route('dashboard');
        }
    
        return back()->withErrors(['username' => 'Username atau password salah.']);
    }
    

    public function logout()
    {
        Auth::logout();
        return redirect()->route('login');
    }
}
