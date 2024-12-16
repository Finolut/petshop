<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pet House</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="styles.css">
   <style>
        body, html {
            margin: 0;
            padding: 0;
            height: 100%;
            font-family: 'Poppins', sans-serif;
            background-color: #f9f9f9;
        }

        .hero {
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            text-align: center;
            height: 75vh;
            background: linear-gradient(rgba(0, 0, 0, 0.3), rgba(0, 0, 0, 0.3)),
                url('http://www.pixelstalk.net/wp-content/uploads/2016/04/Winter-dog-snowflakes-wallpaper-HD.jpg') no-repeat center/cover;
            color: white;
        }

        .hero-content h1 {
            font-size: 3rem;
            margin: 10px 0;
        }

        .hero-content p {
            font-size: 1.2rem;
            max-width: 600px;
        }


    </style>
</head>
<body>
    @include('layout.navbar')

    <!-- Hero Section -->
    <section class="hero">
        <div class="absolute inset-0 flex flex-col items-center justify-center text-center text-white">
            <h1 class="text-4xl md:text-6xl font-bold">
             WE CARE FOR
             <br/>
             <span class="text-orange-500">
              YOUR PET
             </span>
            </h1>
            <div class="bg-[#ff5733] p-6 mt-4 max-w-md mx-auto">
             <p>
                Selamat datang di Golden Pet Care, tempat di mana hewan peliharaan Anda akan merasa seperti di rumah sendiri dengan perhatian dan kasih sayang yang sepenuh hati.
             </p>
            </div>
           </div>
          </div>
    </section>

    <!-- Services Section -->
    <div class="bg-gray-900 text-white py-8">
        <div class="container mx-auto flex justify-around">
            <div class="text-center">
                <div class="relative inline-block">
                    <i class="fas fa-headset text-4xl"></i>
                    <span class="absolute top-0 right-0 bg-orange-500 text-white rounded-full px-2">1</span>
                </div>
                <h2 class="mt-2">RESERVE</h2>
            </div>
            <div class="text-center">
                <div class="relative inline-block">
                    <i class="fas fa-heart text-4xl"></i>
                    <span class="absolute top-0 right-0 bg-orange-500 text-white rounded-full px-2">2</span>
                </div>
                <h2 class="mt-2">MATCH</h2>
            </div>
            <div class="text-center">
                <div class="relative inline-block">
                    <i class="fas fa-tree text-4xl"></i>
                    <span class="absolute top-0 right-0 bg-orange-500 text-white rounded-full px-2">3</span>
                </div>
                <h2 class="mt-2">RELAX</h2>
            </div>
        </div>
    </div>


    <!-- Features Section -->

@include('layout.kata')
<div class="bg-[#ff5733] py-12">
    <div class="max-w-6xl mx-auto grid grid-cols-1 md:grid-cols-4 gap-8 text-center text-white">
        <div>
            <i class="fas fa-cat text-6xl"></i>
            <p class="text-4xl font-bold mt-4">175</p>
            <p class="text-xl font-semibold">HAPPY CATS</p>
        </div>
        <div>
            <i class="fas fa-dog text-6xl"></i>
            <p class="text-4xl font-bold mt-4">240</p>
            <p class="text-xl font-semibold">SUPER DOGS</p>
        </div>
        <div>
            <i class="fas fa-award text-6xl"></i>
            <p class="text-4xl font-bold mt-4">45</p>
            <p class="text-xl font-semibold">AWARDS</p>
        </div>
        <div>
            <i class="fas fa-crown text-6xl"></i>
            <p class="text-4xl font-bold mt-4">15</p>
            <p class="text-xl font-semibold">BUSINESS YEARS</p>
        </div>
    </div>
</div>


@include('layout.galery')
@include('layout.testimoni')
    <!-- Footer -->
    @include('layout.footer')

</body>
</html>
