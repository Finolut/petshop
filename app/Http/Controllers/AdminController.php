<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use Symfony\Component\HttpFoundation\Response;

class AdminController extends Controller
{
    // Halaman dashboard admin/pegawai
    public function index()
    {
        $user = Auth::user();

        // Periksa apakah pengguna memiliki role admin atau pegawai
        if (!$user || !in_array($user->role, ['admin', 'pegawai'])) {
            return response()->json([
                'message' => 'Akses ditolak. Anda tidak memiliki izin untuk mengakses halaman ini.'
            ], Response::HTTP_FORBIDDEN);
        }

        return view('dashboard', ['user' => $user]);
    }

    // Login handler
    public function login(Request $request)
    {
        $credentials = $request->only('username', 'password');

        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();

            // Periksa role
            $user = Auth::user();
            if (!in_array($user->role, ['admin', 'pegawai'])) {
                Auth::logout();
                return back()->withErrors([
                    'username' => 'Akses ditolak. Anda tidak memiliki izin untuk login.',
                ]);
            }

            return redirect()->route('admin.dashboard');
        }

        return back()->withErrors([
            'username' => 'Username atau password salah.',
        ])->onlyInput('username');
    }

    // Logout handler
    public function logout(Request $request)
    {
        Auth::logout();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect()->route('admin.login');
    }
}
