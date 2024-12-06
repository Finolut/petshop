<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ReservationController extends Controller
{

    public function index()
{
    $reservations = DB::table('reservations')->get();
    return view('reservation.index', compact('reservations'));
}

    public function create()
    {
        return view('reservasi');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|max:255',
            'email' => 'required|email|max:255',
            'days' => 'required|integer|min:1',
            'kelas' => 'required|in:basic plan,medium plan,pro plan,vip plan',
        ]);

        DB::table('reservations')->insert([
            'name' => $request->name,
            'email' => $request->email,
            'days' => $request->days,
            'kelas' => $request->kelas,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        return response()->json(['success' => true, 'message' => 'Reservation successful']);
    }
}
