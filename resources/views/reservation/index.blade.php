<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Reservasi</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/4.6.2/css/bootstrap.min.css">
</head>
<body>
    <div class="container mt-5">
        <h2 class="text-center mb-4">Daftar Reservasi</h2>
        <table class="table table-bordered table-striped">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Nama</th>
                    <th>Email</th>
                    <th>Jumlah Hari</th>
                    <th>Kelas</th>
                    <th>Dibuat Pada</th>
                    <th>Diperbarui Pada</th>
                </tr>
            </thead>
            <tbody>
                @forelse ($reservations as $reservation)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $reservation->name }}</td>
                        <td>{{ $reservation->email }}</td>
                        <td>{{ $reservation->days }}</td>
                        <td>{{ $reservation->kelas }}</td>
                        <td>{{ $reservation->created_at }}</td>
                        <td>{{ $reservation->updated_at }}</td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="7" class="text-center">Tidak ada data reservasi.</td>
                    </tr>
                @endforelse
            </tbody>
        </table>
    </div>
</body>
</html>
