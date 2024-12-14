<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        .checkmark {
            width: 80px;
            height: 80px;
            margin: 0 auto;
        }
    
        .checkmark__circle {
            stroke: #4CAF50;
            stroke-width: 2;
            animation: circle-animation 0.6s ease-in-out forwards;
        }
    
        .checkmark__check {
            stroke: #4CAF50;
            stroke-width: 2;
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

        .thank-you-btn {
            margin-top: 20px;
            padding: 10px 20px;
            background-color: #4CAF50;
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            font-size: 16px;
        }

        .thank-you-btn:hover {
            background-color: #45a049;
        }
    </style>
</head>
<body>
    <!-- Blade View untuk Konfirmasi Pesanan -->
<div class="container text-center mt-5">
    <div class="checkmark-animation">
        <svg class="checkmark" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 52 52">
            <circle class="checkmark__circle" cx="26" cy="26" r="25" fill="none"/>
            <path class="checkmark__check" fill="none" d="M14 27l7.8 7.8L38 18"/>
        </svg>
    </div>
    <h3 class="mt-4">Terima Kasih!</h3>
    <p class="mt-2">Pesanan anda telah kami terima. Kami akan menghubungi email anda setelah pesanan anda diproses.</p>
    <a href="{{ route('landing') }}" class="thank-you-btn">
        <button type="button">Terima Kasih</button>
    </a>
</div>
</body>
</html>
