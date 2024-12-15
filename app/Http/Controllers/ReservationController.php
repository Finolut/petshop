<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ReservationController extends Controller
{

    public function index()
{
    $reservations = DB::table('reservasi')->get();
    return view('reservasi', compact('reservations'));
}


public function store(Request $request)
{
    $request->validate([
        'name' => 'required|max:255',
        'email' => 'required|email|max:255',
        'days' => 'required|integer|min:1',
        'kelas' => 'required|in:basic plan,medium plan,pro plan,vip plan',
    ]);

    $kelasHarga = [
        'basic plan' => 10000,
        'medium plan' => 15000,
        'pro plan' => 20000,
        'vip plan' => 30000,
    ];

    $totalHarga = $kelasHarga[$request->kelas] * $request->days;

    DB::table('reservasi')->insert([
        'name' => $request->name,
        'email' => $request->email,
        'days' => $request->days,
        'kelas' => $request->kelas,
        'total_harga' => $totalHarga,
        'status' => 'belum bayar',
        'created_at' => now(),
        'updated_at' => now(),
    ]);

    // Return JSON response for AJAX success
    return response()->json(['success' => true]);
}


}
