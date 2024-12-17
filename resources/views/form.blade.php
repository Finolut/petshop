<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Penitipan Hewan</title>
    <style>
        /* General Body Styling */
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f9f9f9;
            color: #333;
        }

        .container {
            max-width: 700px;
            margin: 20px auto;
            background-color: #ffffff;
            padding: 15px 20px;
            border-radius: 10px;
            box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.1);
        }

        /* Header Styling */
        h2 {
            text-align: center;
            color: #FF5900;
            font-weight: 700;
            margin-bottom: 15px;
            font-size: 1.5rem;
        }

        /* Table Styling */
        table {
            width: 100%;
            border-collapse: collapse;
            margin-bottom: 15px;
        }

        table th, table td {
            border: 1px solid #e1e1e1;
            padding: 8px;
            text-align: center;
            font-size: 0.9rem;
        }

        table th {
            background-color: #FF5900;
            color: #fff;
            font-weight: bold;
            text-transform: uppercase;
        }

        table tr:nth-child(even) {
            background-color: #f2f2f2;
        }

        table tr:hover {
            background-color: #e9ecef;
            transition: background-color 0.3s ease;
        }

        /* Form Styling */
        .form-group {
            margin-bottom: 10px;
        }

        .form-group label {
            display: block;
            font-weight: 600;
            margin-bottom: 5px;
            color: #555;
            font-size: 0.9rem;
        }

        .form-group input,
        .form-group select {
            width: 100%;
            padding: 8px;
            border: 1px solid #ccc;
            border-radius: 5px;
            box-sizing: border-box;
            font-size: 0.9rem;
        }

        /* Button Styling */
        button {
            background-color: #FF5900;
            color: white;
            padding: 8px 15px;
            border: none;
            border-radius: 5px;
            font-weight: bold;
            cursor: pointer;
            transition: background-color 0.3s ease;
            font-size: 0.9rem;
        }

        button:hover {
            background-color: #FF5900;
        }

        .btn {
            display: inline-block;
            padding: 8px 12px;
            font-size: 0.9rem;
            color: #fff;
            border: none;
            border-radius: 5px;
            text-decoration: none;
            cursor: pointer;
            transition: background-color 0.3s ease;
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
            <div class="form-group">
                <button type="submit">Kirim</button>
            </div>
        </form>
        @endif
    </div>
</body>
</html>
