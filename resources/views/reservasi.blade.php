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
        <form id="reservation-form" action="{{ route('reservation.store') }}" method="POST">
            @csrf
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
                    <option value="basic plan" data-price="10000">Basic Plan (Rp 10.000)</option>
                    <option value="medium plan" data-price="15000">Medium Plan (Rp 15.000)</option>
                    <option value="pro plan" data-price="20000">Pro Plan (Rp 20.000)</option>
                    <option value="vip plan" data-price="30000">VIP Plan (Rp 30.000)</option>
                </select>
            </div>
            <div class="form-group">
                <label for="days">Jumlah Hari</label>
                <input type="number" class="form-control" id="days" name="days" min="1" value="1" required>
            </div>
            <div class="form-group">
                <label for="total">Total Harga</label>
                <input type="text" class="form-control" id="total" readonly>
            </div>
            <a href="{{ route('payment') }}" class="btn btn-primary btn-block">
                <button type="submit">Checkout</button>
              </a>
              
        </form>
    </div>

    <script>
        const kelasSelect = document.getElementById('kelas');
        const daysInput = document.getElementById('days');
        const totalInput = document.getElementById('total');

        function calculateTotal() {
            const price = parseInt(kelasSelect.options[kelasSelect.selectedIndex].dataset.price);
            const days = parseInt(daysInput.value);
            totalInput.value = 'Rp ' + (price * days).toLocaleString();
        }

        kelasSelect.addEventListener('change', calculateTotal);
        daysInput.addEventListener('input', calculateTotal);

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

        // Initialize total on page load
        calculateTotal();
    </script>
</body>
</html>
