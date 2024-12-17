<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Layanan Populer Kami</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet"/>
</head>
<body class="bg-gray-100">
    @include('layout.navbar')

    <!-- Header Layanan -->
    <section class="bg-white py-12">
        <div class="container mx-auto text-center">
            <h1 class="text-4xl font-bold">
                <span class="text-orange-500">|</span>
                Layanan Kami
            </h1>
            <p class="mt-4 text-gray-600">
                Kami menyediakan berbagai layanan profesional untuk memastikan kesehatan, kenyamanan, dan kebahagiaan hewan kesayangan Anda.
            </p>
        </div>
    </section>

    <!-- Bagian Layanan -->
    <section>
        <div class="container mx-auto px-6">
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-8">

                <!-- Pemeriksaan Anjing -->
                <div class="relative bg-orange-500 text-white p-6 rounded-lg shadow-lg">
                    <h2 class="text-2xl font-bold mb-4">Pemeriksaan Anjing</h2>
                    <p class="text-sm mb-6">Jumat, 30 Juni 2023 | Admin</p>
                    <p class="text-sm">
                        Layanan pemeriksaan kesehatan menyeluruh untuk memastikan kondisi fisik anjing Anda dalam keadaan prima.
                    </p>
                </div>

                <!-- Vaksinasi Hewan -->
                <div class="relative bg-orange-500 text-white p-6 rounded-lg shadow-lg">
                    <h2 class="text-2xl font-bold mb-4">Vaksinasi Hewan</h2>
                    <p class="text-sm mb-6">Jumat, 30 Juni 2023 | Admin</p>
                    <p class="text-sm">
                        Program vaksinasi lengkap untuk melindungi hewan kesayangan Anda dari penyakit berbahaya dan menular.
                    </p>
                </div>

                <!-- Grooming Anjing -->
                <div class="relative bg-orange-500 text-white p-6 rounded-lg shadow-lg">
                    <h2 class="text-2xl font-bold mb-4">Grooming Anjing</h2>
                    <p class="text-sm mb-6">Jumat, 30 Juni 2023 | Admin</p>
                    <p class="text-sm">
                        Layanan grooming profesional termasuk mandi, menyisir bulu, membersihkan telinga, dan memotong kuku anjing Anda.
                    </p>
                </div>

                <!-- Operasi Hewan -->
                <div class="relative bg-orange-500 text-white p-6 rounded-lg shadow-lg">
                    <h2 class="text-2xl font-bold mb-4">Operasi Hewan</h2>
                    <p class="text-sm mb-6">Jumat, 30 Juni 2023 | Admin</p>
                    <p class="text-sm">
                        Penanganan operasi medis oleh dokter hewan berpengalaman untuk berbagai kondisi kesehatan hewan Anda.
                    </p>
                </div>

                <!-- Perawatan Pencegahan -->
                <div class="relative bg-orange-500 text-white p-6 rounded-lg shadow-lg">
                    <h2 class="text-2xl font-bold mb-4">Perawatan Pencegahan</h2>
                    <p class="text-sm mb-6">Jumat, 30 Juni 2023 | Admin</p>
                    <p class="text-sm">
                        Program pencegahan penyakit untuk menjaga kesehatan hewan kesayangan Anda dalam jangka panjang.
                    </p>
                </div>

                <!-- Perawatan Gigi -->
                <div class="relative bg-orange-500 text-white p-6 rounded-lg shadow-lg">
                    <h2 class="text-2xl font-bold mb-4">Perawatan Gigi</h2>
                    <p class="text-sm mb-6">Jumat, 30 Juni 2023 | Admin</p>
                    <p class="text-sm">
                        Layanan kebersihan dan perawatan gigi untuk memastikan gigi hewan kesayangan Anda sehat dan bebas dari masalah.
                    </p>
                </div>
            </div>
        </div>
    </section>

    @include('layout.footer')
</body>
</html>
