<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Mail;
use App\Mail\PaymentNotification;
use Carbon\Carbon;

class PaymentController extends Controller
{
    public function BuktiPembayaran(Request $request)
    {
        // Validasi input file
        $request->validate([
            'bukti_pembayaran' => 'required|image|mimes:jpeg,png,jpg|max:2048',
        ]);

        // Simpan file ke storage
        $path = $request->file('bukti_pembayaran')->store('bukti_pembayaran', 'public');

        // Ambil email pengguna yang sedang login
        $userEmail = Auth::user()->email;

        // Persiapkan data untuk email
        $data = [
            'email' => $userEmail,
            'image_path' => $path,
            'timestamp' => Carbon::now()->toDateTimeString()
        ];

        // Kirim notifikasi email ke admin
        Mail::to('admin@example.com')->send(new PaymentNotification($data));

        // Redirect kembali dengan pesan sukses
        return redirect()->route('form');

        
    }
}
