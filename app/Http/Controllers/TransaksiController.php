<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class TransaksiController extends Controller
{
    public function index()
    {
        $data = DB::table('transaksi')
            ->leftJoin('reservasi', 'transaksi.reservasi_id', '=', 'reservasi.id')
            ->leftJoin('penitipan', 'transaksi.penitipan_id', '=', 'penitipan.id')
            ->select(
                'transaksi.id as transaksi_id',
                'reservasi.name as reservasi_name',
                'reservasi.kelas',
                'penitipan.nama_hewan',
                'penitipan.jenis',
                'transaksi.total_harga',
                'transaksi.tanggal_transaksi'
            )
            ->get();

        return view('transaksi.index', compact('data'));
    }
}
