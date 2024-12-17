<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AcceptedReservationController extends Controller
{
    // Menampilkan daftar reservasi yang sudah di-ACC (status = 'Lunas')
    public function index()
    {
        // Ambil data reservasi dengan status pembayaran 'Lunas'
        $reservations = DB::table('reservasi')
            ->where('status_pembayaran', 'Lunas')
            ->select('id', 'name', 'email', 'kelas', 'days', 'total_harga', 'start_date', 'created_at', 'status_pembayaran')
            ->get();

        return view('accepted.index', compact('reservations'));
    }
    public function create()
    {
        return view('accepted.create');
    }

    // Menyimpan reservasi baru
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'kelas' => 'required',
            'days' => 'required|integer',
            'total_harga' => 'required|integer',
            'start_date' => 'required|date',
        ]);

        // Simpan data dengan status pembayaran "Lunas"
        Reserv::create(array_merge($request->all(), ['status_pembayaran' => 'Lunas']));

        return redirect()->route('accepted.index')->with('success', 'Reservasi berhasil ditambahkan.');
    }

    // Form untuk edit reservasi (opsional)
    public function edit($id)
    {
        $reservation = Reservasi::findOrFail($id);
        return view('accepted.edit', compact('reservation'));
    }

    // Update data reservasi (opsional)
    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'kelas' => 'required',
            'days' => 'required|integer',
            'total_harga' => 'required|integer',
            'start_date' => 'required|date',
        ]);

        $reservation = Reservasi::findOrFail($id);
        $reservation->update($request->all());

        return redirect()->route('accepted.index')->with('success', 'Reservasi berhasil diperbarui.');
    }

    // Hapus data reservasi
    public function destroy($id)
    {
        $reservation = Reservasi::findOrFail($id);
        $reservation->delete();

        return redirect()->route('accepted.index')->with('success', 'Reservasi berhasil dihapus.');
    }
}
