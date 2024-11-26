<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pet House</title>
    <link rel="stylesheet" href="styles.css">
    <style>
        /* Global Styles */
        body {
            margin: 0;
            font-family: Arial, sans-serif;
        }

        /* Header */
        .header {
            background-color: #ff5733;
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 10px 20px;
        }

        .header .logo {
            color: white;
            font-weight: bold;
            font-size: 24px;
        }

        .header nav ul {
            list-style: none;
            display: flex;
            gap: 20px;
            margin: 0;
            padding: 0;
        }

        .header nav ul li a {
            text-decoration: none;
            color: white;
            font-size: 16px;
            padding: 8px 12px;
            border-radius: 5px;
            transition: background-color 0.3s ease, color 0.3s ease;
        }

        .header nav ul li a:hover {
            background-color: white;
            color: #ff5733;
        }

        .text-content {
    padding: 20px;
    width: 50%; /* Occupies half the screen */
    box-sizing: border-box;
    
}

.text-content h1 {
    font-size: 2.5rem;
    color: #333;
}

.text-content h1 span {
    color: #ff5733; /* Highlighted color */
}

.text-content p {
            font-size: 16px;
            margin: 0;
            color: #555; /* Warna teks <p> */
            line-height: 1.5;
        }
        /* Pricing Table */
        .pricing-table h2 span {
    color: #ff5733; /* Highlighted color */
}
        .pricing-table {
    display: flex;
    justify-content: center;
    gap: 20px;
    margin: 0; /* Hilangkan margin */
    padding: 50px; /* Tambahkan padding jika dibutuhkan */
    width: 100vw; /* Lebar penuh viewport */
    height: 70vh; /* Tinggi penuh viewport */
    background-color: #ff5733; /* Warna latar belakang */
    box-sizing: border-box; /* Sertakan padding dalam perhitungan ukuran */
}

        .pricing-card {
            background-color: #222;
            color: #fff;
            padding: 20px;
            border-radius: 10px;
            text-align: center;
            width: 300px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }

        .pricing-card h2 {
            margin-top: 0;
        }

        .pricing-card p {
            font-size: 14px;
            line-height: 1.6;
        }

        .pricing-card .price {
            font-size: 24px;
            font-weight: bold;
            margin-bottom: 10px;
        }

        .pricing-card ul {
            list-style: none;
            padding: 0;
        }

        .pricing-card ul li {
            padding: 5px 0;
        }

        .pricing-card button {
            background-color: #ff5733;
            color: white;
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            font-size: 16px;
        }

        .pricing-card button:hover {
            background-color: #ff937b;
        }

        /* Responsive Design */
        @media (max-width: 768px) {
            .pricing-table {
                flex-direction: column;
                align-items: center;
            }

            .pricing-card {
                width: 90%;
            }
        }
    </style>
</head>
<body>
    <!-- Header -->
    <header class="header">
        <div class="logo">Golden Pet Care</div>
        <nav>
            <ul>
                <li><a href="{{ route('landing') }}">Home</a></li>
                <li><a href="{{ route('pricing') }}">Pricing</a></li>
                <li><a href="{{ route('about') }}">About Us</a></li>
                <li><a href="{{ route('services') }}">Services</a></li>
                <li><a href="{{ route('contact') }}">Contact Us</a></li>
            </ul>
        </nav>
    </header>

    <div class="text-content">
        <h1>Harga Penitipan  <span> anjing</span></h1>
    </div>

    <div class="pricing-table">
        <div class="pricing-card">
            <h2><span>Basic</span> Plan</h2>
            <div class="price">$12 Per Day</div>
            <ul>
                <li>3 Times Full Diet</li>
                <li>Medical Checkup</li>
                <li>Daily Cleaning</li>
                <li>Extra Activities</li>
            </ul>
            <button>Choose Plan</button>
        </div>

        <div class="pricing-card">
            <h2>Standard Plan</h2>
            <div class="price">$20 Per Day</div>
            <ul>
                <li>5 Times Full Diet</li>
                <li>Medical Checkup</li>
                <li>Daily Cleaning</li>
                <li>Extra Activities</li>
                <li>Grooming Service</li>
            </ul>
            <button>Choose Plan</button>
        </div>

        <div class="pricing-card">
            <h2>Premium Plan</h2>
            <div class="price">$30 Per Day</div>
            <ul>
                <li>Unlimited Full Diet</li>
                <li>Medical Checkup</li>
                <li>Daily Cleaning</li>
                <li>Extra Activities</li>
                <li>Grooming Service</li>
                <li>24/7 Care</li>
            </ul>
            <button>Choose Plan</button>
        </div>
    </div>
</body>
</html>
