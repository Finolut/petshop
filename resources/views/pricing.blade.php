<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="utf-8"/>
    <meta content="width=device-width, initial-scale=1.0" name="viewport"/>
    <title>Harga Penitipan Hewan</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="text-gray-800">
    @include('layout.navbar')
    <div class="container mx-auto py-12">
        <h1 class="text-4xl font-bold text-center text-gray-800">
            <span class="text-orange-500">|</span>
            <span>Harga </span>
            <span class="text-orange-500">Penitipan Hewan</span>
        </h1>
        <p class="text-center text-gray-600 mt-4">
            Pilih paket penitipan hewan peliharaan Anda sesuai kebutuhan dengan harga terjangkau dan layanan terbaik.
        </p>
        <div class="flex flex-wrap justify-center mt-12">
        <!-- Paket Basic -->
<div class="w-full sm:w-1/2 md:w-1/4 p-4">
   <div class="bg-gray-800 text-white rounded-lg shadow-lg p-6">
       <h2 class="text-xl font-bold text-orange-500">Paket Basic</h2>
       <p class="text-2xl font-bold text-orange-500 mt-4">
           Rp 10.000
           <span class="text-lg">/ Hari</span>
       </p>
       <ul class="mt-4 space-y-2">
           <li>2 Kali Makan Sehari</li>
           <li>Pemeriksaan Kesehatan Dasar</li>
           <li>Pembersihan Kandang Harian</li>
           <li>Waktu Bermain 30 Menit</li>
       </ul>
       <button onclick="window.location.href='{{ route('login') }}'" class="mt-6 bg-orange-500 text-white py-2 px-4 rounded">
           Pesan Sekarang
       </button>
   </div>
</div>

<!-- Paket Medium -->
<div class="w-full sm:w-1/2 md:w-1/4 p-4">
   <div class="bg-gray-800 text-white rounded-lg shadow-lg p-6">
       <h2 class="text-xl font-bold text-orange-500">Paket Medium</h2>
       <p class="text-2xl font-bold text-orange-500 mt-4">
           Rp 15.000
           <span class="text-lg">/ Hari</span>
       </p>
       <ul class="mt-4 space-y-2">
           <li>3 Kali Makan Sehari</li>
           <li>Pemeriksaan Kesehatan Dasar</li>
           <li>Pembersihan Kandang Harian</li>
           <li>Waktu Bermain 1 Jam</li>
           <li>Snack Tambahan</li>
       </ul>
       <button class="mt-6 bg-orange-500 text-white py-2 px-4 rounded">
           Pesan Sekarang
       </button>
   </div>
</div>

<!-- Paket Pro -->
<div class="w-full sm:w-1/2 md:w-1/4 p-4">
   <div class="bg-gray-800 text-white rounded-lg shadow-lg p-6">
       <h2 class="text-xl font-bold text-orange-500">Paket Pro</h2>
       <p class="text-2xl font-bold text-orange-500 mt-4">
           Rp 20.000
           <span class="text-lg">/ Hari</span>
       </p>
       <ul class="mt-4 space-y-2">
           <li>3 Kali Makan Premium Sehari</li>
           <li>Pemeriksaan Kesehatan Lengkap</li>
           <li>Pembersihan Kandang 2 Kali Sehari</li>
           <li>Waktu Bermain 2 Jam</li>
           <li>Grooming Ringan (Sisir & Bersih)</li>
           <li>Snack Premium</li>
       </ul>
       <button class="mt-6 bg-orange-500 text-white py-2 px-4 rounded">
           Pesan Sekarang
       </button>
   </div>
</div>

<!-- Paket VIP -->
<div class="w-full sm:w-1/2 md:w-1/4 p-4">
   <div class="bg-gray-800 text-white rounded-lg shadow-lg p-6">
       <h2 class="text-xl font-bold text-orange-500">Paket VIP</h2>
       <p class="text-2xl font-bold text-orange-500 mt-4">
           Rp 30.000
           <span class="text-lg">/ Hari</span>
       </p>
       <ul class="mt-4 space-y-2">
           <li>4 Kali Makan Premium Sehari</li>
           <li>Pemeriksaan Kesehatan Lengkap & Laporan Harian</li>
           <li>Pembersihan Kandang 3 Kali Sehari</li>
           <li>Waktu Bermain Sepuasnya</li>
           <li>Full Grooming (Mandi, Sisir, Kuku)</li>
           <li>Snack Premium & Vitamin</li>
           <li>Perawatan Khusus Sesuai Kebutuhan</li>
       </ul>
       <button class="mt-6 bg-orange-500 text-white py-2 px-4 rounded">
           Pesan Sekarang
       </button>
   </div>
</div>

    @include('layout.footer') 
</body>
</html>
