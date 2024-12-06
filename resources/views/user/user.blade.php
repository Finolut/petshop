@extends('layouts.admin')

@section('content')
<!-- Form untuk menambahkan User -->
<div class="container">
    <div class="card p-4 shadow-sm">
        <h1 class="mb-4 text-center text-success">Tambahkan User</h1>
        <form action="{{ route('users.store') }}" method="POST">
            @csrf
            <div class="form-group">
                <label for="username">Username</label>
                <input type="text" class="form-control" id="username" name="username" placeholder="Masukkan username" required>
                @if ($errors->has('username'))
                    <small class="text-danger">{{ $errors->first('username') }}</small>
                @endif
            </div>
            <div class="form-group">
                <label for="password">Password</label>
                <input type="password" class="form-control" id="password" name="password" placeholder="Masukkan password" required>
                @if ($errors->has('password'))
                    <small class="text-danger">{{ $errors->first('password') }}</small>
                @endif
            </div>
            <div class="form-group">
                <label for="role">Role</label>
                <select class="form-control" id="role" name="role" required>
                    <option value="" disabled selected>-- Pilih Role --</option>
                    <option value="customer">Customer</option>
                    <option value="admin">Admin</option>
                    <option value="pegawai">Pegawai</option>
                </select>
            </div>
            
            </div>
            <button type="submit" class="btn btn-primary btn-block">Simpan</button>
        </form>
    </div>
</div>

<!-- Tabel untuk menampilkan data User -->
<div class="container my-5">
    <div class="card p-4 shadow-sm">
        <h1 class="mb-4 text-center text-success">Data User</h1>
        <table class="table table-hover table-bordered">
            <thead class="thead-dark">
                <tr>
                    <th>#</th>
                    <th>Username</th>
                    <th>Role</th>
                    <th class="text-center">Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($users as $user)
                <tr>
                    <td>{{ $user->id }}</td>
                    <td>{{ $user->username }}</td>
                    <td>{{ $user->role }}</td>
                    <td class="text-center">
                        <a href="{{ route('users.edit', $user->id) }}" class="btn btn-warning btn-sm">Edit</a>
                        <form action="{{ route('users.destroy', $user->id) }}" method="POST" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Yakin ingin menghapus user ini?')">Hapus</button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
            
        </table>
    </div>
</div>
@endsection
