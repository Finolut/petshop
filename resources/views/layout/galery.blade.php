
    <style>
        body {
            margin: 0;
            font-family: 'Arial', sans-serif;
            background-color: #f9f9f9;
        }

        .gallery-section {
            padding: 20px;
            text-align: center;
        }

        .gallery-title {
            font-size: 2.5rem;
            color: #ff5733;
            margin-bottom: 20px;
        }

        .gallery-container {
            display: flex;
            justify-content: center;
            flex-wrap: wrap;
            gap: 20px;
        }

        .gallery-item {
            position: relative;
            overflow: hidden;
            border-radius: 10px;
            cursor: pointer;
            transition: transform 0.3s;
        }

        .gallery-item img {
            width: 250px;
            height: 150px;
            object-fit: cover;
            transition: transform 0.3s;
            border-radius: 10px;
        }

        .gallery-item:hover img {
            transform: scale(1.1);
        }

        .gallery-item:hover {
            transform: scale(1.05);
        }

        .gallery-label {
            position: absolute;
            bottom: 10px;
            left: 10px;
            background: rgba(255, 87, 51, 0.8);
            color: white;
            padding: 5px 10px;
            font-size: 14px;
            border-radius: 5px;
        }

        /* Fullscreen Image Modal */
        .modal {
            display: none;
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-color: rgba(0, 0, 0, 0.8);
            justify-content: center;
            align-items: center;
            z-index: 1000;
        }

        .modal img {
            max-width: 80%;
            max-height: 80%;
            border-radius: 10px;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.5);
        }

        .modal-close {
            position: absolute;
            top: 20px;
            right: 30px;
            color: white;
            font-size: 2rem;
            cursor: pointer;
        }
    </style>

    <!-- Gallery Section -->
    <section class="gallery-section">
        <h1 class="gallery-title">From Gallery</h1>
        <div class="gallery-container">
            <div class="gallery-item">
                <img src="https://marlenemayunachanblog.wordpress.com/wp-content/uploads/2014/11/wpid-img_20141107_111659.jpg" alt="Dog 1">
                <div class="gallery-label">GALLERY</div>
            </div>
            <div class="gallery-item">
                <img src="https://www.shutterstock.com/image-photo/travel-carrier-box-animals-cute-600nw-2229474659.jpg" alt="Dog 2">
                <div class="gallery-label">GALLERY</div>
            </div>
            <div class="gallery-item">
                <img src="https://www.shutterstock.com/image-photo/cute-corgi-dog-hat-carrier-600nw-2452485089.jpg" alt="Dog 3">
                <div class="gallery-label">GALLERY</div>
            </div>
            <div class="gallery-item">
                <img src="https://c4.wallpaperflare.com/wallpaper/748/631/716/puppy-cute-dog-dachshund-wallpaper-preview.jpg" alt="Dog 4">
                <div class="gallery-label">GALLERY</div>
            </div>
        </div>
    </section>

    <!-- Modal for Enlarged Image -->
    <div class="modal" id="imageModal">
        <span class="modal-close" id="modalClose">&times;</span>
        <img src="" alt="Fullscreen Image" id="modalImage">
    </div>

    <!-- JavaScript -->
    <script>
        // Select all gallery items
        const galleryItems = document.querySelectorAll('.gallery-item img');
        const modal = document.getElementById('imageModal');
        const modalImage = document.getElementById('modalImage');
        const modalClose = document.getElementById('modalClose');

        // Add click event to each gallery item
        galleryItems.forEach(item => {
            item.addEventListener('click', () => {
                modal.style.display = 'flex';
                modalImage.src = item.src; // Set modal image source
            });
        });

        // Close modal when clicking on close button
        modalClose.addEventListener('click', () => {
            modal.style.display = 'none';
        });

        // Close modal when clicking outside the image
        modal.addEventListener('click', (e) => {
            if (e.target === modal) {
                modal.style.display = 'none';
            }
        });
    </script>

