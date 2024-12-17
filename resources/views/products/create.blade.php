<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Upload Bukti Pembayaran</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Custom CSS -->
    <style>
        /* General Styles */
        body {
            background-color: #f8f9fa;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }

        .container {
            max-width: 600px;
            margin: 50px auto;
        }

        /* Card Styling */
        .card {
            border: none;
            border-radius: 16px;
            box-shadow: 0px 4px 15px rgba(0, 0, 0, 0.1);
        }

        .card-header {
            background-color: #FF5900;
            color: #ffffff;
            text-align: center;
            font-weight: bold;
            border-top-left-radius: 16px; /* Tumpulkan sisi atas */
            border-top-right-radius: 16px;
            padding: 20px;
        }

        .card-body {
            background-color: #ffffff;
            padding: 30px;
            border-bottom-left-radius: 16px; /* Tumpulkan sisi bawah */
            border-bottom-right-radius: 16px;
        }

        /* Input and Textarea Styling */
        .form-label {
            font-weight: 600;
            color: #333333;
        }

        .form-control {
            border: 1px solid #ccc;
            border-radius: 12px; /* Lebih tumpul */
            padding: 10px;
            transition: all 0.3s ease;
        }

        .form-control:focus {
            border-color: #FF5900; /* Orange hint */
            box-shadow: 0 0 5px rgba(248, 220, 197, 0.5);
            outline: none;
        }

        /* Button Styling */
        .btn {
            border-radius: 12px; /* Tumpul */
            padding: 10px 20px;
            font-weight: 600;
        }

        .btn-success {
            background-color: #28a745;
            border: none;
            transition: all 0.3s ease;
        }

        .btn-success:hover {
            background-color: #218838;
            box-shadow: 0 0 8px rgba(40, 167, 69, 0.4);
        }

        .btn-secondary {
            background-color: #6c757d;
            border: none;
            transition: all 0.3s ease;
        }

        .btn-secondary:hover {
            background-color: #5a6268;
            box-shadow: 0 0 8px rgba(108, 117, 125, 0.4);
        }

        /* Small Text Styling */
        .text-muted {
            font-size: 0.85rem;
            color: #6c757d;
        }
    </style>
</head>
<body>
    <div class="container mt-5">
        <div class="card shadow-sm">
            <div class="card-header">
                <h3 class="text-center mb-0">Upload Bukti Pembayaran</h3>
            </div>
            <div class="card-body">
                <!-- Error Handling -->
                @if ($errors->any())
                    <div class="alert alert-danger">
                        <h5><i class="bi bi-exclamation-triangle-fill"></i> Whoops! Ada beberapa masalah:</h5>
                        <ul class="mb-0">
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif

                <!-- Product Form -->
                <form action="{{ route('products.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="mb-4">
                        <label for="name" class="form-label fw-bold">Nama Anda</label>
                        <input type="text" name="name" class="form-control" placeholder="Masukkan nama Anda" value="{{ old('name') }}" required>
                    </div>

                    <div class="mb-4">
                        <label for="detail" class="form-label fw-bold">Catatan</label>
                        <textarea name="detail" class="form-control" rows="4" placeholder="Tambahkan catatan jika diperlukan" required>{{ old('detail') }}</textarea>
                    </div>

                    <div class="mb-4">
                        <label for="image" class="form-label fw-bold">Unggah Bukti Pembayaran</label>
                        <input type="file" name="image" class="form-control" accept="image/*" required>
                        <small class="text-muted">Format file: JPG, PNG, atau PDF. Maksimal ukuran 2MB.</small>
                    </div>

                    <div class="d-flex justify-content-between">
                        <button type="submit" class="btn btn-success"><i class="bi bi-check-circle-fill"></i> Submit</button>
                        <a href="{{ route('products.index') }}" class="btn btn-secondary"><i class="bi bi-x-circle-fill"></i> Cancel</a>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <!-- Bootstrap Icons -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet">
</body>
</html>
