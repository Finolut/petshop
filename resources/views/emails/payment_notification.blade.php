<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bukti Pembayaran</title>
</head>
<body>
    <h1>Bukti Pembayaran Diterima</h1>
    <p><strong>Email Pengguna:</strong> {{ $data['email'] }}</p>
    <p><strong>Waktu Pengiriman:</strong> {{ $data['timestamp'] }}</p>
    <p><strong>Bukti Pembayaran:</strong></p>
    <img src="{{ asset('storage/' . $data['image_path']) }}" alt="Bukti Pembayaran" style="max-width: 100%; height: auto;">
</body>
</html>
