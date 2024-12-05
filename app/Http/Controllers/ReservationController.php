<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Reservation;

class ReservationController extends Controller
{
    public function pembayaran()
    {
        return view('pembayaran');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'days' => 'required|integer|min:1',
        ]);

        Reservation::create($validated);

        return redirect()->route('form')->with('success', 'Reservation berhasil dibuat!');
    }
}
