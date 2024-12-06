<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Penitipan Hewan</title>
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

        .form-group {
            margin-bottom: 15px;
        }

        .form-group label {
            display: block;
            font-weight: bold;
            margin-bottom: 5px;
        }

        .form-group input,
        .form-group select {
            width: 100%;
            padding: 8px;
            border: 1px solid #ccc;
            border-radius: 4px;
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
    </style>
</head>
<body>
    <div class="container">
        @if(isset($penitipan))
        <h2>Daftar Hewan Menginap</h2>
        <a href="{{ route('penitipan.create') }}" class="btn btn-success">Tambah Hewan</a>
        <table>
            <thead>
                <tr>
                    <th>Nama Hewan</th>
                    <th>pemilik</th>
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
        @else
        <h2>Form Hewan Menginap</h2>
        <form action="{{ route('penitipan.store') }}" method="POST">
            @csrf
            <div class="form-group">
                <label for="nama_hewan">Nama Hewan</label>
                <input type="text" name="nama_hewan" id="nama_hewan" required>
            </div>
            <div class="form-group">
                <label for="pemilik">Pemilik</label>
                <input type="text" name="pemilik" id="pemilik" required>
            </div>
            <div class="form-group">
                <label for="jenis">Jenis Hewan</label>
                <select name="jenis" id="jenis" required>
                    <option value="anjing">Anjing</option>
                    <option value="kucing">Kucing</option>
                </select>
            </div>
            <div class="form-group">
                <label for="gender">Gender</label>
                <select name="gender" id="gender" required>
                    <option value="jantan">Jantan</option>
                    <option value="betina">Betina</option>
                </select>
            </div>
            <div class="form-group">
                <label for="ras">Ras</label>
                <input type="text" name="ras" id="ras" required>
            </div>
            <div class="form-group">
                <label for="ukuran">Ukuran</label>
                <select name="ukuran" id="ukuran" required>
                    <option value="kecil">Kecil</option>
                    <option value="sedang">Sedang</option>
                    <option value="besar">Besar</option>
                </select>
            </div>
            <div class="form-group">
                <label for="warna">Warna</label>
                <input type="text" name="warna" id="warna" required>
            </div>
            <button type="submit" class="btn">Kirim</button>
        </form>
        @endif
    </div>
</body>
</html>
