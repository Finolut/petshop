<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bukti Pembayaran</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
</head>
<body>
    <div class="container d-flex flex-column align-items-center mt-5">
        <!-- Gambar Barcode -->
        <img src="https://beasiswa.kamajaya.id/wp-content/uploads/2021/04/qris-yayasan-bakti-kamajaya-pf.jpg" alt="Barcode Pembayaran" class="img-fluid" style="max-width: 300px; margin-bottom: 20px;">

        <!-- Form Upload Bukti Pembayaran -->
        <form action="{{ route('upload.payment') }}" method="POST" enctype="multipart/form-data" class="w-50">
            @csrf
            <div class="mb-3">
                <label for="buktiPembayaran" class="form-label">Upload Bukti Pembayaran</label>
                <input type="file" class="form-control" id="buktiPembayaran" name="bukti_pembayaran" required>
            </div>
            
            <a href="{{ route('form') }}" class="btn btn-primary btn-block">
                <button type="submit">kirim</button>
              </a>
        </form>
    </div>
</body>
</html>
