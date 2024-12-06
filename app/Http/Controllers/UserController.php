<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function index()
    {
        // Mengambil semua data user
        $users = DB::table('users')->get();
    
        return view('user.user', compact('users'));
    }
    

    public function store(Request $request)
    {
        // Validasi input
        $request->validate([
            'username' => 'required|unique:users,username|max:255',
            'password' => 'required|min:6',
            'role' => 'required|in:customer,admin,pegawai', // Sesuai dengan ENUM di database
        ]);
    
        // Simpan data ke database
        DB::table('users')->insert([
            'username' => $request->username,
            'password' => Hash::make($request->password),
            'role' => $request->role,
            'created_at' => now(),
            'updated_at' => now(),
        ]);
    
        return redirect()->route('users.index')->with('success', 'User berhasil ditambahkan');
    }
    

// Tampilkan halaman edit user
public function edit($id)
{
    // Ambil data user berdasarkan id
    $user = DB::table('users')->where('id', $id)->first();

    if (!$user) {
        return redirect()->route('users.index')->with('error', 'User tidak ditemukan');
    }

    return view('user.edit', compact('user'));
}


// Update data user
public function update(Request $request, $id)
{
    // Validasi input
    $request->validate([
        'username' => 'required|max:255|unique:users,username,' . $id,
        'role' => 'required|in:customer,admin,pegawai',
    ]);

    // Siapkan data untuk update
    $data = [
        'username' => $request->username,
        'role' => $request->role,
        'updated_at' => now(),
    ];

    // Jika password diisi, hash dan tambahkan ke data
    if ($request->password) {
        $data['password'] = Hash::make($request->password);
    }

    // Update data di database
    DB::table('users')->where('id', $id)->update($data);

    return redirect()->route('users.index')->with('success', 'User berhasil diperbarui');
}


// Hapus data user
public function destroy($id)
{
    DB::table('users')->where('id', $id)->delete();

    return redirect()->route('users.index')->with('success', 'User berhasil dihapus');
}


public function register(Request $request)
{
    // Validasi input
    $request->validate([
        'username' => 'required|unique:user,username|max:45',
        'password' => 'required|min:6',
    ]);

    // Insert data ke database
    DB::insert("
        INSERT INTO user (username, password, idrole)
        VALUES (?, ?, ?)
    ", [
        $request->username,
        Hash::make($request->password),
        2, // ID role default, misalnya '2' untuk pengguna biasa
    ]);

    // Redirect ke halaman login dengan pesan sukses
    return redirect()->route('login')->with('success', 'Akun Anda telah dibuat. Silakan login.');
}


}
