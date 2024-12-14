<?php

namespace App\Http\Controllers;

use App\Models\Penitipan;
use Illuminate\Http\Request;

class PenitipanController extends Controller
{
    public function index()
    {
        // Ambil data penitipan beserta nomor kandang
        $penitipan = Penitipan::all();
        return view('penitipan.index', compact('penitipan'));
    }

    public function create()
    {
        return view('form');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama_hewan' => 'required|string',
            'pemilik' => 'required|string',
            'jenis' => 'required|in:anjing,kucing',
            'gender' => 'required|in:jantan,betina',
            'ras' => 'required|string',
            'ukuran' => 'required|in:kecil,sedang,besar',
            'warna' => 'required|string',
        ]);
    
        Penitipan::create($request->all());
    
        return redirect()->route('ucapan')->with('success', 'Data hewan berhasil disimpan.');
    }
    

    public function destroy($id)
{
    $hewan = Penitipan::findOrFail($id);

    // Hapus data hewan
    $hewan->delete();

    return redirect()->route('penitipan.index')->with('success', 'Data hewan berhasil dihapus.');
}

}
