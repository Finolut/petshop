<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Transaksi</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <h2 class="mb-4">Data Transaksi</h2>
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>ID Transaksi</th>
                    <th>Nama Reservasi</th>
                    <th>Kelas Reservasi</th>
                    <th>Nama Hewan</th>
                    <th>Jenis Hewan</th>
                    <th>Total Harga</th>
                    <th>Tanggal Transaksi</th>
                </tr>
            </thead>
            <tbody>
                @forelse ($data as $row)
                    <tr>
                        <td>{{ $row->transaksi_id }}</td>
                        <td>{{ $row->reservasi_name ?? '-' }}</td>
                        <td>{{ $row->kelas ?? '-' }}</td>
                        <td>{{ $row->nama_hewan ?? '-' }}</td>
                        <td>{{ $row->jenis ?? '-' }}</td>
                        <td>{{ number_format($row->total_harga, 2) }}</td>
                        <td>{{ $row->tanggal_transaksi }}</td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="7" class="text-center">Tidak ada data transaksi</td>
                    </tr>
                @endforelse
            </tbody>
        </table>
    </div>
</body>
</html>
