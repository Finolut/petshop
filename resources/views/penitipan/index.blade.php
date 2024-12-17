@extends('layouts.admin')

@section('content')
    <div class="container mt-5">
        <div class="bg-white p-4 rounded shadow">
            <h2 class="text-center mb-4">Daftar Hewan Menginap</h2>

            @if(session('success'))
                <div class="alert alert-success">
                    {{ session('success') }}
                </div>
            @endif

            @if($penitipan->isEmpty())
                <p class="text-center">Belum ada data penitipan hewan.</p>
            @else
                <div class="table-responsive">
                    <table class="table table-bordered table-striped">
                        <thead class="table-light">
                            <tr>
                                <th>Nama Hewan</th>
                                <th>Pemilik</th>
                                <th>Jenis</th>
                                <th>Gender</th>
                                <th>Ras</th>
                                <th>Ukuran</th>
                                <th>Warna</th>
                                <th>Kandang</th>
                                <th>Aksi</th> <!-- Kolom tambahan -->
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($penitipan as $hewan)
                                <tr>
                                    <td>{{ $hewan->nama_hewan }}</td>
                                    <td>{{ $hewan->pemilik }}</td>
                                    <td>{{ $hewan->jenis }}</td>
                                    <td>{{ $hewan->gender }}</td>
                                    <td>{{ $hewan->ras }}</td>
                                    <td>{{ $hewan->ukuran }}</td>
                                    <td>{{ $hewan->warna }}</td>
                                    <td>{{ $hewan->kandang_no ? 'Kandang ' . $hewan->kandang_no : 'Belum di tambahkan' }}</td>
                                    <td>
                                        <!-- Form Hapus -->
                                        <form action="{{ route('penitipan.destroy', $hewan->id) }}" method="POST" onsubmit="return confirm('Apakah Anda yakin ingin menghapus data ini?');">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-danger btn-sm">Hapus</button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            @endif
        </div>
    </div>
@endsection
