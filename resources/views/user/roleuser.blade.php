@extends('layouts.admin')

@section('content')
<!-- Form untuk menambahkan Role -->
<div class="container">
    <div class="card p-4 shadow-sm">
        <h1 class="mb-4 text-center text-primary">Tambahkan Role</h1>
        <form action="{{ route('role.store') }}" method="POST">
            @csrf
            <div class="form-group">
                <label for="nama_role">Nama Role</label>
                <input type="text" class="form-control" id="nama_role" name="nama_role" placeholder="Masukkan nama role" required>
                @if ($errors->has('nama_role'))
                    <small class="text-danger">{{ $errors->first('nama_role') }}</small>
                @endif
            </div>
            <button type="submit" class="btn btn-primary btn-block">Simpan</button>
        </form>
    </div>
</div>

<!-- Tabel untuk menampilkan data Role -->
<div class="container my-5">
    <div class="card p-4 shadow-sm">
        <h1 class="mb-4 text-center text-primary">Data Role</h1>
        @if(session('success'))
            <div class="alert alert-success">{{ session('success') }}</div>
        @endif
        <table class="table table-hover table-bordered">
            <thead class="thead-dark">
                <tr>
                    <th>#</th>
                    <th>Nama Role</th>
                    <th class="text-center">Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($roles as $role)
                <tr>
                    <th scope="row">{{ $role->idrole }}</th>
                    <td>{{ $role->nama_role }}</td>
                    <td class="text-center">
                        <a href="{{ route('role.edit', $role->idrole) }}" class="btn btn-warning btn-sm">Edit</a>
                        <form action="{{ route('role.destroy', $role->idrole) }}" method="POST" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger btn-sm mx-1" onclick="return confirm('Apakah Anda yakin ingin menghapus role ini?')">Delete</button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection
