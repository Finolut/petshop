@extends('layouts.admin')

@section('content')
    <div class="container mt-5">
        <h2 class="text-center">Daftar Reservasi</h2>

        @if(session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif

        <table class="table table-bordered mt-4">
            <thead>
                <tr>
                    <th>Nama</th>
                    <th>Email</th>
                    <th>Kelas</th>
                    <th>Jumlah Hari</th>
                    <th>Total Harga</th>
                    <th>Tanggal Mulai Booking</th>
                    <th>Tanggal Reservasi</th>
                    <th>Status Pembayaran</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach($reservations as $reservation)
                    <tr>
                        <td>{{ $reservation->name }}</td>
                        <td>{{ $reservation->email }}</td>
                        <td>{{ $reservation->kelas }}</td>
                        <td>{{ $reservation->days }}</td>
                        <td>Rp {{ number_format($reservation->total_harga, 0, ',', '.') }}</td>
                        <td>{{ $reservation->start_date }}</td>
                        <td>{{ $reservation->created_at }}</td>
                        <td>{{ $reservation->status_pembayaran }}</td>
                        <td>
                            @if($reservation->status_pembayaran === 'Belum Bayar')
                                <form action="{{ route('reservasi.konfirmasi', $reservation->id) }}" method="POST">
                                    @csrf
                                    <button type="submit" class="btn btn-success btn-sm">Konfirmasi</button>
                                </form>
                            @else
                                <span class="badge badge-success">Lunas</span>
                            @endif
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
