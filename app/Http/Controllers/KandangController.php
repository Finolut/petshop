<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class KandangController extends Controller
{
    public function index()
    {
        $penitipan = DB::table('penitipan')->get();
        return view('kandang.index', compact('penitipan'));
    }

    public function assign(Request $request, $kandang_no)
    {
        $hewan = DB::table('penitipan')->where('id', $request->hewan_id)->first();

        // Pastikan hewan ada
        if (!$hewan) {
            return redirect()->back()->with('error', 'Hewan tidak ditemukan!');
        }

        // Assign hewan ke kandang
        DB::table('penitipan')
            ->where('id', $request->hewan_id)
            ->update(['kandang_no' => $kandang_no]);

        return redirect()->back()->with('success', 'Hewan berhasil ditempatkan di kandang #' . $kandang_no);
    }
}
