@extends('layouts.app')

@section('content')
    <div class="container text-center mt-5">
        <h1 class="display-1 text-danger">403</h1>
        <h3 class="text-muted">Access Denied</h3>
        <p class="mt-3">Anda tidak memiliki izin untuk mengakses halaman ini.</p>
        <a href="{{ route('login') }}" class="btn btn-primary mt-3">Kembali ke Login</a>
    </div>
@endsection
