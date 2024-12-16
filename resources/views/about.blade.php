<html lang="en">
 <head>
  <meta charset="utf-8"/>
  <meta content="width=device-width, initial-scale=1.0" name="viewport"/>
  <title>
   About Us
  </title>
  <script src="https://cdn.tailwindcss.com">
  </script>
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet"/>
  <style>

   .rotate-text {
            writing-mode: vertical-rl;
            transform: rotate(180deg);
        }
        .bg-pattern {
            background-color: dimgrey;
            background-repeat: repeat;
        }
  </style>
 </head>
 <body class="font-sans">
@include('layout.navbar')
  <section class="bg-white py-12">
   <div class="container mx-auto text-center">
    <h1 class="text-4xl font-bold">
     <span class="text-orange-500">
      |
     </span>
     About
     <span class="text-orange-500">
      Us
     </span>
    </h1>
    <p class="mt-4 text-gray-600">
        Selamat datang di Golden Pet Care, tempat di mana hewan peliharaan Anda akan mendapatkan perhatian, kenyamanan, dan kasih sayang yang mereka butuhkan. Kami memahami betapa berharganya hewan peliharaan bagi Anda, dan kami berkomitmen untuk memberikan pengalaman penitipan yang aman dan menyenangkan.

        Di Golden Pet Care, kami menawarkan berbagai layanan penitipan yang dirancang untuk memenuhi kebutuhan spesifik hewan peliharaan Anda. Mulai dari tempat tidur yang nyaman hingga ruang bermain yang luas, kami memastikan hewan peliharaan Anda merasa seperti di rumah sendiri. Dengan pengawasan 24 jam, fasilitas yang lengkap, dan layanan yang dapat disesuaikan, kami memastikan setiap hewan merasa bahagia dan tenang selama menginap.
    </p>
   </div>
  </section>
  <section class="bg-black py-12 bg-pattern">
   <div class="container mx-auto flex flex-col md:flex-row justify-between items-start md:items-center">
    <div class="md:w-1/2 text-white">
     <h2 class="text-3xl font-bold text-orange-500">
      Who We Are ?
     </h2>
     <p class="mt-4">
        Kami adalah tim pecinta hewan yang berdedikasi, dengan pengalaman luas dalam merawat dan menjaga kesejahteraan hewan peliharaan. Di Golden Pet Care, kami tidak hanya menyediakan tempat penitipan, tetapi juga menciptakan lingkungan yang penuh kasih, aman, dan nyaman bagi teman berbulu Anda.

Staf kami terdiri dari para profesional yang mengerti pentingnya kebutuhan emosional dan fisik hewan peliharaan. Dengan pengawasan sepanjang waktu dan perhatian penuh pada setiap detail, kami memastikan setiap hewan peliharaan mendapatkan perhatian khusus. Dari fasilitas modern hingga layanan yang disesuaikan, kami memastikan hewan peliharaan Anda merasa nyaman dan dicintai.

Di Golden Pet Care, kami lebih dari sekedar hotel hewan – kami adalah keluarga yang peduli dan berkomitmen memberikan pengalaman penitipan yang tak terlupakan bagi hewan peliharaan Anda.

     </p>

    </div>
    <div class="md:w-1/2">
     <img alt="A group of diverse people working together in an office setting" height="400" src="https://storage.googleapis.com/a1aa/image/f9XkAWoqGfv72kFiwvehGzMNZiVAF1UA7hqHFmiDmeQb8dZPB.jpg" width="600"/>
    </div>
   </div>
  </section>
  <div class="text-center text-black">
    <h1 class="text-4xl font-bold mb-8">Our <span class="text-orange-500">Skills</span></h1>
    <div class="flex justify-center space-x-8">
        <!-- Emergency Skill -->
        <div class="flex flex-col items-center">
            <div class="relative w-16 h-64 bg-white bg-opacity-20 rounded-lg overflow-hidden border-2 border-gray-300">
                <div class="absolute bottom-0 w-full h-4/5 bg-orange-500 flex items-center justify-center text-white text-lg font-bold">80%</div>
            </div>
            <span class="mt-4 text-lg tracking-widest font-bold text-orange-500">EMERGENCY</span>
        </div>
        <!-- Grooming Skill -->
        <div class="flex flex-col items-center">
            <div class="relative w-16 h-64 bg-white bg-opacity-20 rounded-lg overflow-hidden border-2 border-gray-300">
                <div class="absolute bottom-0 w-full h-3/5 bg-orange-500 flex items-center justify-center text-white text-lg font-bold">60%</div>
            </div>
            <span class="mt-4 text-lg tracking-widest font-bold text-orange-500">GROOMING</span>
        </div>
        <!-- Nutrition Skill -->
        <div class="flex flex-col items-center">
            <div class="relative w-16 h-64 bg-white bg-opacity-20 rounded-lg overflow-hidden border-2 border-gray-300">
                <div class="absolute bottom-0 w-full h-9/10 bg-orange-500 flex items-center justify-center text-white text-lg font-bold">90%</div>
            </div>
            <span class="mt-4 text-lg tracking-widest font-bold text-orange-500">NUTRITION</span>
        </div>
    </div>
</div>
@include('layout.footer')
 </body>
</html>
