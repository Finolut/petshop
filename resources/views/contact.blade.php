<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet" />
    <style>
        .highlight {
            color: #ff5733;
        }

        .container {
            display: flex;
            max-width: 1200px;
            margin: 0 auto;
            padding: 20px;
            gap: 20px;
        }

        .about-section, .contact-form {
            flex: 1;
            padding: 20px;
            background-color: #fff;
            border-radius: 5px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        }

        .contact-form label {
            font-weight: bold;
            margin-bottom: 5px;
        }

        .contact-form input, .contact-form textarea {
            width: 100%;
            margin-bottom: 15px;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }

        .contact-form button {
            padding: 10px;
            background-color: #ff5733;
            color: #fff;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            transition: background-color 0.3s;
        }

        .contact-form button:hover {
            background-color: #e04e2b;
        }

        .map-container {
            display: flex;
            justify-content: center;
            margin-top: 20px;
            margin-bottom: 20px;
            padding: 20px;
            background-color: #f9f9f9;
            border-radius: 10px;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
        }

        .map-container iframe {
            border-radius: 10px;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.2);
        }

        @media (max-width: 768px) {
            .container {
                flex-direction: column;
            }
        }
    </style>
</head>
<body>
    @include('layout.navbar')

    <!-- Contact Us Section -->
    <section class="text-center py-16">
        <h1 class="text-4xl font-bold">
            <span class="border-l-4 border-orange-500 pl-4">Contact</span>
            <span class="text-orange-500">Us</span>
        </h1>
        <p class="text-gray-600 mt-4 max-w-2xl mx-auto">
            Alamat: Jl. Mulyorejo No. 1, Mulyorejo, Surabaya, Jawa Timur 60115, Indonesia
            Telepon: (+62) 812-3456-7890
            Email: goldenpetcare@gmail.com
            Jam Operasional: Senin - Sabtu: 08.00 - 17.00
            Media Sosial: Instagram @goldenpetcare
        </p>
    </section>

    <!-- Map Section -->
    <section class="map-container">
        <iframe
            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d31693.668975340273!2d112.74471552752288!3d-7.277723200000013!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dd7fb3dd8401f05%3A0xf4a9edc23d062316!2sUniversitas%20Airlangga%20Kampus%20B!5e0!3m2!1sen!2sid!4v1688539531452!5m2!1sen!2sid"
            width="100%"
            height="400"
            style="border:0;"
            allowfullscreen=""
            loading="lazy">
        </iframe>
    </section>

    <!-- Contact Section -->
    <div class="container">
        <div class="about-section">
            <h2>About <span class="highlight">PetHouse</span></h2>
            <p>
Kami menyediakan layanan perawatan hewan yang profesional dan penuh kasih sayang untuk teman-teman berbulu Anda. Kami berkomitmen untuk memberikan kenyamanan dan keamanan terbaik untuk setiap hewan yang kami rawat.

            </p>
            <address>
            <strong>Golden Pet Care</strong><br>
            Universitas Airlangga (UNAIR) Kampus C<br>
            Jl. Mulyorejo No. 1, Mulyorejo, Surabaya, Jawa Timur 60115, Indonesia<br>
            <span>P:</span> (+62) 812-3456-7890<br>
            <a href="http://www.goldenpetcare.com" target="_blank">www.goldenpetcare.com</a>

            </address>
        </div>

        <div class="contact-form">
            <form>
                <label for="name">Name *</label>
                <input type="text" id="name" name="name" required>

                <label for="email">Email *</label>
                <input type="email" id="email" name="email" required>

                <label for="subject">Subject *</label>
                <input type="text" id="subject" name="subject" required>

                <label for="message">Message *</label>
                <textarea id="message" name="message" rows="4" required></textarea>


                <button type="submit">Send Email</button>
            </form>
        </div>
    </div>
    @include('layout.footer')
</body>
</html>
