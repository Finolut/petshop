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
                <label for="idrole">Role</label>
                <select class="form-control" id="idrole" name="idrole" required>
                    <option value="" disabled selected>-- Pilih Role --</option>
                    @foreach($roles as $role)
                        <option value="{{ $role->idrole }}">{{ $role->nama_role }}</option>
                    @endforeach
                </select>
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
                    <th scope="row">{{ $user->iduser }}</th>
                    <td>{{ $user->username }}</td>
                    <td>{{ $user->idrole }}</td>
                    <td class="text-center">
                        <td class="text-center">
                            <a href="#" class="btn btn-warning btn-sm">Edit</a>
                            <form action="{{ route('barang.destroy', $user->iduser) }}" method="POST" style="display:inline;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger btn-sm mx-1" onclick="return confirm('Apakah Anda yakin ingin menghapus user ini?')">Delete</button>
                            </form>
                        </td>
                        
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection
