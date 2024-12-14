@extends('layouts.admin')

@section('content')
    <div class="container mt-5">
        <h1>Selamat Datang di Dashboard</h1>
        <p>Anda login sebagai {{ auth()->user()->role }}</p>
    </div>
@endsection
