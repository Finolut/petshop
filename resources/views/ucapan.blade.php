<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Pesanan Selesai</title>
    <style>
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f9f9f9;
            color: #333;
            text-align: center;
        }

        .container {
            margin-top: 50px;
        }

        .checkmark {
            width: 80px;
            height: 80px;
            margin: 0 auto;
        }

        .checkmark__circle {
            stroke: #FF5900; /* Oranye */
            stroke-width: 2;
            animation: circle-animation 0.6s ease-in-out forwards;
        }

        .checkmark__check {
            stroke: #FF5900;
            stroke-width: 5;
            stroke-linecap: round;
            stroke-linejoin: round;
            animation: check-animation 0.4s 0.6s ease-in-out forwards;
        }

        @keyframes circle-animation {
            0% {
                stroke-dasharray: 0 157;
            }
            100% {
                stroke-dasharray: 157 157;
            }
        }

        @keyframes check-animation {
            0% {
                stroke-dasharray: 0 36;
            }
            100% {
                stroke-dasharray: 36 36;
            }
        }

        h3 {
            font-size: 2.5em;
            font-weight: bold;
            color: #FF5900; /* Oranye */
            text-shadow: 2px 2px 5px rgba(243, 238, 238, 0.1);
            margin-top: 20px;
        }

        p {
            font-size: 1.2em;
            color: #666;
            margin: 10px auto;
            width: 80%;
            line-height: 1.6;
        }

        p::after {
            content: '';
            display: block;
            width: 80px;
            height: 3px;
            background-color: #FF5900;
            margin: 10px auto 0;
            border-radius: 2px;
        }

        .thank-you-btn {
            margin-top: 30px;
            display: inline-block;
            padding: 12px 24px;
            background-color: #FF5900;
            color: white;
            text-decoration: none;
            font-size: 1em;
            border-radius: 8px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            transition: background-color 0.3s ease, transform 0.2s ease;
        }

        .thank-you-btn:hover {
            background-color:#FF5900;
            transform: translateY(-2px);
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="checkmark-animation">
            <svg class="checkmark" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 52 52">
                <circle class="checkmark__circle" cx="26" cy="26" r="25" fill="none"/>
                <path class="checkmark__check" fill="none" d="M14 27l7.8 7.8L38 18"/>
            </svg>
        </div>
        <h3>Terima Kasih!</h3>
        <p>Pesanan anda telah kami terima. Kami akan menghubungi email anda setelah pesanan diproses.</p>
        <a href="{{ route('landing') }}" class="thank-you-btn">Kembali ke Beranda</a>
    </div>
</body>
</html>
