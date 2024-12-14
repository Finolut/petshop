@extends('layouts.admin')

@section('content')
    <div class="container mt-5">
        <div class="bg-white p-5 rounded shadow">
            <h2 class="text-center mb-4">Daftar Kandang</h2>
            <div class="row">
                @for($i = 1; $i <= 40; $i++)
                    @php
                        $kandang = $penitipan->firstWhere('kandang_no', $i);
                    @endphp
                    <div class="col-md-4 mb-4">
                        <div class="kandang {{ $kandang ? 'occupied' : 'available' }} border p-3 rounded">
                            <h5 class="text-center">Kandang #{{ $i }}</h5>
                            @if($kandang)
                                <p>Nama Hewan: {{ $kandang->nama_hewan }}</p>
                                <p>Jenis: {{ $kandang->jenis }}</p>
                                <p>Pemilik: {{ $kandang->pemilik }}</p>
                                <button class="btn btn-secondary btn-sm w-100" disabled>Penuh</button>
                            @else
                                <form action="{{ route('kandang.assign', $i) }}" method="POST">
                                    @csrf
                                    <div class="form-group">
                                        <label for="hewan">Pilih Hewan:</label>
                                        <select name="hewan_id" id="hewan" class="form-control" required>
                                            <option value="">Pilih Hewan</option>
                                            @foreach($penitipan as $hewan)
                                                <option value="{{ $hewan->id }}">{{ $hewan->nama_hewan }} ({{ $hewan->pemilik }})</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <button type="submit" class="btn btn-primary btn-sm w-100">Tambahkan</button>
                                </form>
                            @endif
                        </div>
                    </div>
                @endfor
            </div>
        </div>
    </div>
@endsection
