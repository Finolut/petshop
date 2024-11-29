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

        .services {
            display: flex;
            justify-content: space-around;
            background-color: #fff;
            padding: 40px 20px;
        }

        .service-item {
            text-align: center;
            flex: 1;
        }

        .service-item h3 {
            font-size: 1.5rem;
            color: #ff5733;
        }

        .table {
            width: 90%;
            margin: 20px auto;
            background-color: white;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            padding: 20px;
        }

        .table-row {
            display: flex;
            flex-wrap: wrap;
            justify-content: space-between;
        }

        .table-cell {
            flex: 1;
            text-align: center;
            margin: 10px;
            max-width: 30%;
        }

        .table-cell img {
            width: 100%;
            height: auto;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }

        .pagination {
            display: flex;
            justify-content: center;
            margin-top: 20px;
        }

        .pagination-item {
            width: 30px;
            height: 30px;
            margin: 0 5px;
            background: #ddd;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            cursor: pointer;
        }

        .pagination-item.active {
            background: #007bff;
            color: white;
        }
    </style>
</head>
<body>
    @include('layout.navbar')

    <!-- Hero Section -->
    <section class="hero">
        <div class="hero-content">
            <h1>Kami Peduli dengan <span>Hewan Peliharaan Anda</span></h1>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.</p>
        </div>
    </section>

    <!-- Services Section -->
    <section class="services">
        <div class="service-item"><h3>RESERVE</h3></div>
        <div class="service-item"><h3>MATCH</h3></div>
        <div class="service-item"><h3>RELAX</h3></div>
    </section>

    <!-- Features Section -->
    <div class="container">
        <div class="table">
          <div class="table-row">
            <div class="table-cell">
              <h2>Dog Examination</h2>
              <img src="https://imgs.search.brave.com/KOWRTKgtcKq0h-pt5rgwiY1GyQuMXoZgx4wpNJmKEJY/rs:fit:860:0:0:0/g:ce/aHR0cHM6Ly90aHVt/YnMuZHJlYW1zdGlt/ZS5jb20vYi9leGFt/aW5hdGlvbi12ZXQt/ZG9jdG9yLXlvdW5n/LWJlYXV0aWZ1bC13/b21hbi12ZXRlcmlu/YXJ5LWV4YW1pbmVz/LXdoaXRlLXBvb2Rs/ZS1kb2ctbWVkaWNp/bmUtcGV0LWNhcmUt/aGVhbHRoeS1saWZl/c3R5bGUtMjMwODE2/MDE2LmpwZw" alt="Image 1">
            </div>
            <div class="table-cell">
              <h2>Pet Vaccination</h2>
              <img src="https://smb.ibsrv.net/imageresizer/image/article_manager/1200x1200/9408/457913/heroimage0.468204001639519434.jpg" alt="Image 2">
            </div>
            <div class="table-cell">
              <h2>Doggy Grooming</h2>
              <img src="https://imgs.search.brave.com/CJrSgtnFzXfEUZslnN-Ll1BM7IJiE0qc83mtT_h7NzI/rs:fit:860:0:0:0/g:ce/aHR0cHM6Ly9tZWRp/YS5pc3RvY2twaG90/by5jb20vaWQvMTAz/NDYxMzAxMi9waG90/by9naXJsLWh1Z2dp/bmctaGVyLWRvZy5q/cGc_cz02MTJ4NjEy/Jnc9MCZrPTIwJmM9/MWo0TmtLRlVBTWtf/UlI0R1kwT0dMTUFR/ZkNmSVJqRHNMMm1V/U1drYzM1az0" alt="Image 3">
            </div>
          </div>
        </div>
      </div>
@include('layout.kata')
@include('layout.galery')
@include('layout.testimoni')
    <!-- Footer -->
    @include('layout.footer')

</body>
</html>
