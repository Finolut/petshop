@extends('layouts.admin')

@section('content')
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 20px;
        }

        .container {
            max-width: 800px;
            margin: auto;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-bottom: 20px;
        }

        table th, table td {
            border: 1px solid #ddd;
            padding: 8px;
            text-align: left;
        }

        table th {
            background-color: #f4f4f4;
        }

        .btn {
            display: inline-block;
            padding: 10px 15px;
            font-size: 14px;
            color: #fff;
            background-color: #007bff;
            border: none;
            border-radius: 4px;
            text-decoration: none;
            cursor: pointer;
        }

        .btn:hover {
            background-color: #0056b3;
        }

        .btn-success {
            background-color: #28a745;
        }

        .btn-success:hover {
            background-color: #218838;
        }

        .alert-success {
            background-color: #28a745;
            color: white;
            padding: 10px;
            border-radius: 4px;
            margin-bottom: 20px;
        }
    </style>
</head>
<body>
    <div class="container">
        <h2>Daftar Hewan Menginap</h2>

        <!-- Success message -->
        @if(session('success'))
            <div class="alert-success">
                {{ session('success') }}
            </div>
        @endif

        <a href="{{ route('penitipan.create') }}" class="btn btn-success">Tambah Hewan</a>
        
        @if($penitipan->isEmpty())
            <p>Belum ada data penitipan hewan.</p>
        @else
        <table>
            <thead>
                <tr>
                    <th>Nama Hewan</th>
                    <th>Pemilik</th>
                    <th>Jenis</th>
                    <th>Gender</th>
                    <th>Ras</th>
                    <th>Ukuran</th>
                    <th>Warna</th>
                </tr>
            </thead>
            <tbody>
                @foreach($penitipan as $hewan)
                <tr>
                    <td>{{ $hewan->nama_hewan }}</td>
                    <td>{{ $hewan->pemilik }}</td>
                    <td>{{ $hewan->jenis }}</td>
                    <td>{{ $hewan->gender }}</td>
                    <td>{{ $hewan->ras }}</td>
                    <td>{{ $hewan->ukuran }}</td>
                    <td>{{ $hewan->warna }}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
        @endif
    </div>
    @endsection
