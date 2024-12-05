<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Checkout</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 20px;
        }

        .form-container {
            width: 300px;
            margin: auto;
            padding: 20px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }

        .form-container h2 {
            text-align: center;
        }

        .total {
            text-align: center;
            font-size: 20px;
            margin-bottom: 10px;
        }

        .input-group {
            margin-bottom: 15px;
        }

        .input-group label {
            display: block;
            font-weight: bold;
        }

        .input-group input {
            width: 100%;
            padding: 8px;
            margin-top: 5px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }

        .days-group {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 15px;
        }

        .days-group button {
            padding: 5px 10px;
            background-color: #007bff;
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }

        .days-group button:disabled {
            background-color: #ccc;
            cursor: not-allowed;
        }

        .checkout-button {
            display: block;
            width: 100%;
            padding: 10px;
            background-color: #007bff;
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }
    </style>
</head>
<body>
    <div class="form-container">
        <h2>Basic plan</h2>
        <div class="total" id="total-price">Total: Rp 20.000</div>
        <form id="checkout-form">
            <div class="input-group">
                <label for="name">Name</label>
                <input type="text" id="name" name="name" required>
            </div>
            <div class="input-group">
                <label for="email">Email</label>
                <input type="email" id="email" name="email" required>
            </div>
            <p>per hari</p>
            <div class="days-group">
                <button type="button" id="decrease-days">-</button>
                <span id="days-count">1</span>
                <button type="button" id="increase-days">+</button>
            </div>
            <button type="submit" class="checkout-button">Checkout</button>
        </form>
    </div>

    <script>
        const pricePerDay = 15000;
        let days = 1;

        const totalPriceElement = document.getElementById('total-price');
        const daysCountElement = document.getElementById('days-count');
        const decreaseDaysButton = document.getElementById('decrease-days');
        const increaseDaysButton = document.getElementById('increase-days');

        function updateTotalPrice() {
            totalPriceElement.textContent = `Total: Rp ${days * pricePerDay}`;
            daysCountElement.textContent = days;
            decreaseDaysButton.disabled = days === 1;
        }

        decreaseDaysButton.addEventListener('click', () => {
            if (days > 1) {
                days--;
                updateTotalPrice();
            }
        });

        increaseDaysButton.addEventListener('click', () => {
            days++;
            updateTotalPrice();
        });

        document.getElementById('checkout-form').addEventListener('submit', (event) => {
            event.preventDefault(); // Mencegah refresh halaman
            alert('Checkout berhasil!');
            // Redirect ke halaman form.blade.php
            window.location.href = "{{ route('form') }}";
        });

        // Initialize
        updateTotalPrice();

        document.getElementById('checkout-form').addEventListener('submit', (event) => {
    event.preventDefault();

    const name = document.getElementById('name').value;
    const email = document.getElementById('email').value;

    fetch("{{ route('reservation.store') }}", {
        method: "POST",
        headers: {
            "Content-Type": "application/json",
            "X-CSRF-TOKEN": "{{ csrf_token() }}"
        },
        body: JSON.stringify({ name, email, days })
    })
    .then(response => response.json())
    .then(data => {
        if (data.success) {
            alert('Checkout berhasil!');
            window.location.reload();
        } else {
            alert('Terjadi kesalahan. Silakan coba lagi.');
        }
    });
});

    </script>
</body>
</html>
