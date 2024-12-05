<?php

namespace App\Http\Controllers;

use App\Models\Penitipan;
use Illuminate\Http\Request;

class PenitipanController extends Controller
{
    public function index()
    {
        $penitipan = Penitipan::all();
        return view('penitipan.index', compact('penitipan'));
    }

    public function create()
    {
        return view('penitipan.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama_hewan' => 'required|string',
            'jenis' => 'required|in:anjing,kucing',
            'gender' => 'required|in:jantan,betina',
            'ras' => 'required|string',
            'ukuran' => 'required|in:kecil,sedang,besar',
            'warna' => 'required|string',
        ]);

        Penitipan::create($request->all());

        return redirect()->route('landing')->with('success', 'Data hewan berhasil disimpan.');
    }
}
