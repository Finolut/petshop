
    <style>
        body {
            font-family: 'Arial', sans-serif;
            margin: 0;
            background-color: #f9f9f9;
        }

        .testimonial-section {
            background-color: #ff5733;
            color: white;
            text-align: center;
            padding: 50px 20px;
            position: relative;
            overflow: hidden;
        }

        .testimonial-title {
            font-size: 2.5rem;
            margin-bottom: 30px;
        }

        .testimonial-slider {
            display: flex;
            transition: transform 0.5s ease-in-out;
        }

        .testimonial {
            min-width: 100%;
            display: flex;
            align-items: center;
            justify-content: center;
            text-align: left;
            padding: 0 50px;
            box-sizing: border-box;
        }

        .testimonial img {
            width: 150px;
            height: 150px;
            border-radius: 50%;
            margin-right: 30px;
            object-fit: cover;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.2);
        }

        .testimonial-content {
            max-width: 600px;
        }

        .testimonial-content h3 {
            margin: 0;
            font-size: 1.5rem;
        }

        .testimonial-content p {
            margin: 10px 0;
            font-size: 1rem;
            line-height: 1.6;
        }

        .controls {
            position: absolute;
            top: 50%;
            width: 100%;
            display: flex;
            justify-content: space-between;
            transform: translateY(-50%);
        }

        .control-btn {
            background: none;
            border: none;
            font-size: 2rem;
            color: white;
            cursor: pointer;
        }

        .control-btn:focus {
            outline: none;
        }

        .dots {
            margin-top: 20px;
            display: flex;
            justify-content: center;
        }

        .dot {
            width: 10px;
            height: 10px;
            background: rgba(255, 255, 255, 0.5);
            border-radius: 50%;
            margin: 0 5px;
            cursor: pointer;
            transition: background 0.3s;
        }

        .dot.active {
            background: white;
        }
    </style>


    <!-- Testimonial Section -->
    <section class="testimonial-section">
        <h1 class="testimonial-title">Testimoni</h1>
        <div class="testimonial-slider" id="testimonialSlider">
            <!-- Testimonial 1 -->
            <div class="testimonial">
                <img src="https://randomuser.me/api/portraits/men/45.jpg" alt="User 1">
                <div class="testimonial-content">
                    <h3>Steven Sample</h3>
                    <p>“Pet House merawat hewan peliharaan kami dengan profesional. Saya sangat puas dengan perhatian dan layanan mereka yang luar biasa.”</p>
                    <div>⭐⭐⭐⭐⭐</div>
                </div>
            </div>
    
            <!-- Testimonial 2 -->
            <div class="testimonial">
                <img src="https://randomuser.me/api/portraits/women/45.jpg" alt="User 2">
                <div class="testimonial-content">
                    <h3>Anna Smith</h3>
                    <p>“Saya sangat senang dengan layanan mereka. Stafnya ramah dan profesional. Sangat direkomendasikan untuk siapa pun yang memiliki hewan peliharaan.”</p>
                    <div>⭐⭐⭐⭐⭐</div>
                </div>
            </div>
    
            <!-- Testimonial 3 -->
            <div class="testimonial">
                <img src="https://randomuser.me/api/portraits/men/85.jpg" alt="User 3">
                <div class="testimonial-content">
                    <h3>Michael Brown</h3>
                    <p>“Tempat yang luar biasa untuk hewan peliharaan! Mereka benar-benar peduli dan memberikan layanan terbaik. Anjing saya senang sekali berkunjung ke sini!”</p>
                    <div>⭐⭐⭐⭐⭐</div>
                </div>
            </div>
    
            <!-- Testimonial 4 -->
            <div class="testimonial">
                <img src="https://randomuser.me/api/portraits/women/67.jpg" alt="User 4">
                <div class="testimonial-content">
                    <h3>Linda Taylor</h3>
                    <p>“Hewan peliharaan saya mendapatkan perawatan yang sempurna. Tim Pet House sangat perhatian dan detail dalam memberikan layanan.”</p>
                    <div>⭐⭐⭐⭐⭐</div>
                </div>
            </div>
    
            <!-- Testimonial 5 -->
            <div class="testimonial">
                <img src="https://randomuser.me/api/portraits/men/72.jpg" alt="User 5">
                <div class="testimonial-content">
                    <h3>John Doe</h3>
                    <p>“Pelayanan yang luar biasa! Hewan peliharaan saya selalu pulang dengan senang dan sehat.”</p>
                    <div>⭐⭐⭐⭐⭐</div>
                </div>
            </div>
    
            <!-- Testimonial 6 -->
            <div class="testimonial">
                <img src="https://randomuser.me/api/portraits/women/21.jpg" alt="User 6">
                <div class="testimonial-content">
                    <h3>Sarah Johnson</h3>
                    <p>“Sungguh pengalaman yang menyenangkan! Staf sangat ramah, dan saya merasa aman menitipkan kucing saya di sini.”</p>
                    <div>⭐⭐⭐⭐⭐</div>
                </div>
            </div>
    
            <!-- Testimonial 7 -->
            <div class="testimonial">
                <img src="https://randomuser.me/api/portraits/men/90.jpg" alt="User 7">
                <div class="testimonial-content">
                    <h3>David Williams</h3>
                    <p>“Rekomendasi terbaik! Fasilitas yang nyaman dan layanan yang profesional. Saya sangat puas.”</p>
                    <div>⭐⭐⭐⭐⭐</div>
                </div>
            </div>
        </div>
    
        <!-- Controls -->
        <div class="controls">
            <button class="control-btn" id="prevBtn">&#10094;</button>
            <button class="control-btn" id="nextBtn">&#10095;</button>
        </div>
    
        <!-- Dots -->
        <div class="dots" id="dotsContainer"></div>
    </section>
    

        <!-- Controls -->
        <div class="controls">
            <button class="control-btn" id="prevBtn">&#10094;</button>
            <button class="control-btn" id="nextBtn">&#10095;</button>
        </div>

        <!-- Dots -->
        <div class="dots" id="dotsContainer"></div>
    </section>

    <!-- JavaScript -->
    <script>
        const slider = document.getElementById('testimonialSlider');
        const dotsContainer = document.getElementById('dotsContainer');
        const testimonials = slider.children;
        let currentIndex = 0;

        // Create dots
        for (let i = 0; i < testimonials.length; i++) {
            const dot = document.createElement('div');
            dot.classList.add('dot');
            if (i === 0) dot.classList.add('active');
            dot.dataset.index = i;
            dotsContainer.appendChild(dot);

            dot.addEventListener('click', () => {
                currentIndex = i;
                updateSlider();
            });
        }

        // Update slider
        function updateSlider() {
            slider.style.transform = `translateX(-${currentIndex * 100}%)`;
            document.querySelectorAll('.dot').forEach((dot, index) => {
                dot.classList.toggle('active', index === currentIndex);
            });
        }

        // Auto-slide
        setInterval(() => {
            currentIndex = (currentIndex + 1) % testimonials.length;
            updateSlider();
        }, 3000);

        // Controls
        document.getElementById('prevBtn').addEventListener('click', () => {
            currentIndex = (currentIndex - 1 + testimonials.length) % testimonials.length;
            updateSlider();
        });

        document.getElementById('nextBtn').addEventListener('click', () => {
            currentIndex = (currentIndex + 1) % testimonials.length;
            updateSlider();
        });
    </script>

