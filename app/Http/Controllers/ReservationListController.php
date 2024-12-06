<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ReservationListController extends Controller
{
    // Menampilkan daftar reservasi
    public function index()
    {
        $reservations = DB::table('reservasi')->get();
        return view('reservation.index', compact('reservations'));
    }

    // Konfirmasi pembayaran
    public function confirmPayment($id)
    {
        DB::table('reservasi')
            ->where('id', $id)
            ->update(['status_pembayaran' => 'Lunas']);

        return redirect()->back()->with('success', 'Pembayaran berhasil dikonfirmasi.');
    }
}
