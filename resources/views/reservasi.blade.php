<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reservation Form</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/4.6.2/css/bootstrap.min.css">
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 20px;
        }
        .form-container {
            width: 400px;
            margin: auto;
            padding: 20px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }
    </style>
</head>
<body>
    <div class="form-container">
        <h2 class="text-center">Reservasi</h2>
        <form id="reservation-form">
            <div class="form-group">
                <label for="name">Nama</label>
                <input type="text" class="form-control" id="name" name="name" required>
            </div>
            <div class="form-group">
                <label for="email">Email</label>
                <input type="email" class="form-control" id="email" name="email" required>
            </div>
            <div class="form-group">
                <label for="kelas">Pilih Kelas</label>
                <select class="form-control" id="kelas" name="kelas" required>
                    <option value="basic plan">Basic Plan</option>
                    <option value="medium plan">Medium Plan</option>
                    <option value="pro plan">Pro Plan</option>
                    <option value="vip plan">VIP Plan</option>
                </select>
            </div>
            <div class="form-group">
                <label for="days">Jumlah Hari</label>
                <input type="number" class="form-control" id="days" name="days" min="1" value="1" required>
            </div>
            <button type="submit" class="btn btn-primary btn-block">Checkout</button>
        </form>
    </div>

    <script>
        document.getElementById('reservation-form').addEventListener('submit', function (event) {
            event.preventDefault();

            const name = document.getElementById('name').value;
            const email = document.getElementById('email').value;
            const days = document.getElementById('days').value;
            const kelas = document.getElementById('kelas').value;

            fetch("{{ route('reservation.store') }}", {
                method: "POST",
                headers: {
                    "Content-Type": "application/json",
                    "X-CSRF-TOKEN": "{{ csrf_token() }}"
                },
                body: JSON.stringify({ name, email, days, kelas })
            })
                .then(response => response.json())
                .then(data => {
                    if (data.success) {
                        alert('Reservasi berhasil!');
                        window.location.reload();
                    } else {
                        alert('Terjadi kesalahan. Silakan coba lagi.');
                    }
                });
        });
    </script>
</body>
</html>
