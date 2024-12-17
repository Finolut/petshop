@extends('layouts.admin')

@section('content')
<div class="container mt-5">
    <h2 class="text-center">Daftar Member</h2>

    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    <table class="table table-bordered">
        <thead>
            <tr>
                <th>Nama</th>
                <th>Email</th>
                <th>Kelas</th>
                <th>Jumlah Hari</th>
                <th>Total Harga</th>
                <th>Tanggal Mulai</th>
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
                <td>{{ $reservation->status_pembayaran }}</td>
                <td>
                    <a href="{{ route('accepted.create', $reservation->id) }}" class="btn btn-warning btn-sm">Edit</a>
                    <form action="{{ route('accepted.destroy', $reservation->id) }}" method="POST" style="display:inline-block;">
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
@endsection
