<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Image Upload</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        body {
            background-color: #f8f9fa;
        }
        .image-container {
            background-color: #ffffff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            display: inline-block;
            text-align: center; /* Center the image horizontally */
        }
        img {
            max-width: 100%; /* Ensures the image doesn't exceed its container width */
            width: 400px; /* Set the image width to 150px */
            height: auto; /* Maintain aspect ratio */
            object-fit: contain; /* Ensures the image fits nicely inside the container without stretching */
        }
        .page-title {
            font-weight: bold;
            color: #333333;
            text-align: center; /* Center the page title */
        }
        .btn-success {
            margin-top: 20px;
        }
    </style>
    
</head>
<body>

    <div class="container my-5">

        <!-- Page Title -->
        <h2 class="text-center page-title">Barcode pembayayan Golden pet care</h2>

        <!-- QR Code Image (Centered with Background) -->
        <div class="d-flex justify-content-center my-4">
            <div class="image-container">
                <img src="assets/img/barcode.jpg" alt="QR Code" class="img-fluid">
            </div>
        </div>

        <!-- Button to Create New Product -->
        <div class="text-center">
            <a class="btn btn-primary" href="{{ route('products.create') }}">Kirim bukti tranfer</a>
        </div>

        <!-- Success Message -->
        <div class="alert alert-success text-center mt-4" style="display: none;">
            <p>Reservasi berhasil!</p>
        </div>

    </div>

</body>
</html>
