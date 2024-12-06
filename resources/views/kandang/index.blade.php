@extends('layouts.admin')

@section('content')
    <div class="container mt-5">
        <h2 class="text-center">Daftar Kandang</h2>
        <div class="row">
            @for($i = 1; $i <= 30; $i++)
                @php
                    $kandang = $penitipan->firstWhere('kandang_no', $i);
                @endphp
                <div class="col-md-4">
                    <div class="kandang {{ $kandang ? 'occupied' : 'available' }}">
                        <h5>Kandang #{{ $i }}</h5>
                        @if($kandang)
                            <p>Nama Hewan: {{ $kandang->nama_hewan }}</p>
                            <p>Jenis: {{ $kandang->jenis }}</p>
                            <p>Pemilik: {{ $kandang->pemilik }}</p>
                            <button class="btn btn-secondary btn-sm" disabled>Occupied</button>
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
                                <button type="submit" class="btn btn-primary btn-sm">Assign</button>
                            </form>
                        @endif
                    </div>
                </div>
            @endfor
        </div>
    </div>
    @endsection