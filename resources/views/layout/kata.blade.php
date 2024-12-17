
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f9f9f9;
        }

        .section {
            display: flex;
            flex-wrap: wrap;
            align-items: center;
            justify-content: center;
            padding: 50px 20px;
            background-color: #fff;
        }

        .image-container {
            flex: 1;
            max-width: 500px;
        }

        .image-container img {
            width: 100%;
            border-radius: 10px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.2);
        }

        .text-container {
            flex: 1;
            max-width: 600px;
            padding: 20px;
        }

        .text-container h1 {
            font-size: 2.5rem;
            color: #ff5733;
            margin-bottom: 20px;
        }

        .text-container p {
            font-size: 1rem;
            line-height: 1.6;
            color: #555;
        }

        @media (max-width: 768px) {
            .section {
                flex-direction: column;
            }

            .image-container,
            .text-container {
                max-width: 100%;
            }

            .text-container h1 {
                font-size: 2rem;
            }

            .text-container p {
                font-size: 0.9rem;
            }
        }
    </style>



    <!-- Section -->
    <div class="section">
        <div class="image-container">
            <img src="https://pethouse.joomlatema.net/images/dogs.jpg" alt="Pet House">
        </div>
        <div class="text-container">
            <h1>Pet House Menyayangi Kami,
                Itulah Sebabnya Kami Begitu Ceria</h1>
            <p>Kami tetap aktif dan ceria berkat perhatian penuh dari Pet House. Dengan kenyamanan, kasih sayang, dan perawatan terbaik, kami bisa bermain sepuasnya dan tetap sehat!</p>
        </div>
    </div>


