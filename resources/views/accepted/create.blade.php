@extends('layouts.admin')

@section('content')
<div class="container mt-5">
    <h2>Tambah Reservasi</h2>
    <form action="{{ route('accepted.store') }}" method="POST">
        @csrf
        <div class="form-group">
            <label>Nama</label>
            <input type="text" name="name" class="form-control" required>
        </div>
        <div class="form-group">
            <label>Email</label>
            <input type="email" name="email" class="form-control" required>
        </div>
        <div class="form-group">
            <label>Kelas</label>
            <input type="text" name="kelas" class="form-control" required>
        </div>
        <div class="form-group">
            <label>Jumlah Hari</label>
            <input type="number" name="days" class="form-control" required>
        </div>
        <div class="form-group">
            <label>Total Harga</label>
            <input type="number" name="total_harga" class="form-control" required>
        </div>
        <div class="form-group">
            <label>Tanggal Mulai</label>
            <input type="date" name="start_date" class="form-control" required>
        </div>
        <button type="submit" class="btn btn-primary mt-3">Simpan</button>
    </form>
</div>
@endsection
