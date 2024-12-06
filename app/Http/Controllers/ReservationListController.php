<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ReservationListController extends Controller
{
    // Method untuk menampilkan daftar reservasi
    public function index()
    {
        $reservations = DB::table('reservasi')->get();
        return view('reservation.index', compact('reservations'));
    }
}
