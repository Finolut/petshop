<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ReservationListController extends Controller
{
    // Menampilkan daftar reservasi
    public function index()
    {
        $reservations = DB::table('reservasi')
            ->select('id', 'name', 'email', 'kelas', 'days', 'total_harga', 'start_date', 'created_at', 'status_pembayaran')
            ->get();
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
