<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pet House</title>
    <link rel="stylesheet" href="styles.css">
</head>
<style>
    /* Global Styles */
body {
    margin: 0;
    font-family: Arial, sans-serif;
}

body {
            margin: 0;
            font-family: Arial, sans-serif;
        }

        /* Header */
        .header {
            background-color: #ff5733;
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 10px 20px;
        }

        .header .logo {
            color: white;
            font-weight: bold;
            font-size: 24px;
        }

        .header nav ul {
            list-style: none;
            display: flex;
            gap: 20px;
            margin: 0;
            padding: 0;
        }

        .header nav ul li {
            position: relative;
        }

        .header nav ul li a {
            text-decoration: none;
            color: white;
            font-size: 16px;
            padding: 8px 12px;
            border-radius: 5px;
            transition: background-color 0.3s ease, color 0.3s ease;
        }

        .header nav ul li a:hover {
            background-color: white;
            color: #ff5733;
        }

        .header nav ul li .btn {
            background-color: #007BFF;
            padding: 8px 16px;
            color: white;
            font-weight: bold;
            border-radius: 5px;
            transition: background-color 0.3s ease;
        }

        .header nav ul li .btn:hover {
            background-color: #0056b3;
        }

        /* Responsive Navbar */
        @media (max-width: 768px) {
            .header {
                flex-wrap: wrap;
            }

            .header nav ul {
                flex-direction: column;
                align-items: flex-start;
                gap: 10px;
                width: 100%;
            }

            .header nav ul li {
                width: 100%;
            }

            .header nav ul li a {
                display: block;
                width: 100%;
                text-align: left;
            }
        }

body, html {
    margin: 0;
    padding: 0;
    height: 100%;
    background-color: #f9f9f9;
}

.hero {
    display: flex;
    align-items: center;
    justify-content: center;
    height: 75vh; /* Full screen height */

}

.hero-content {
    display: flex;
    align-items: center;
    width: 1400%;
    max-width: 1200px;
}

.hero-content img {
    width: 50%; /* Occupies half the screen */
    height: 100%;
    object-fit: cover; /* Ensures the image fills the space without distortion */
    border-radius: 10px;
    box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.3);
}

.text-content {
    padding: 20px;
    width: 50%; /* Occupies half the screen */
    box-sizing: border-box;
}

.text-content h1 {
    font-size: 2.5rem;
    color: #333;
}

.text-content h1 span {
    color: #ff5733; /* Highlighted color */
}

.text-content p {
    font-size: 1rem;
    color: #555;
    line-height: 1.6;
}

/* Services Section */
.services {
    display: flex;
    justify-content: space-around;
    background-color: #f9f9f9;
    padding: 20px;
}

.service-item {
    text-align: center;
}

/* Features Section */
.features {
    display: flex;
    justify-content: space-around;
    padding: 20px;
}

.feature-card {
    background-color: #ff5733;
    color: white;
    padding: 20px;
    border-radius: 5px;
}

.container {
  width: 100%;
  padding: 0;
  margin: 0;
  display: flex;
  justify-content: center;
  align-items: center;
}

.table {
  width: 100%;
  max-width: 1200px;
  padding: 5px;
  margin: 10px auto;
  background-color: #ff5733;
  border-radius: 10px;
  box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
}

.table-row {
  display: flex;
  justify-content: space-around;
  align-items: center;
  padding: 15px 0;
}

.table-cell {
  width: 33.33%;
  text-align: center;
  padding: 10px;
}

.table-cell h2 {
  font-size: 24px;
  margin-bottom: 10px;
  color: #333;
}

.table-cell p {
  font-size: 16px;
  color: #666;
}

.table-cell img {
  width: 100%;
  max-width: 300px;
  height: auto;
  border-radius: 10px;
}

.pagination {
  display: flex;
  justify-content: center;
  align-items: center;
  margin-top: 20px;
}

.pagination-item {
  width: 20px;
  height: 20px;
  background-color: #ddd;
  border-radius: 50%;
  margin: 0 5px;
  cursor: pointer;
}

.pagination-item.active {
  background-color : #007bff;
}

.pagination-item:hover {
  background-color: #0056b3;
}
/* Footer */
footer {
  text-align: center;
  padding: 3px;
  background-color: rgb(16, 16, 16);
  color: white;
}

</style>
<body>
    <!-- Header -->
    <header class="header">
        <div class="logo">Golden Pet Care</div>
        <nav>
            <ul>
                <li><a href="{{ route('landing') }}">Home</a></li>
                <li><a href="{{ route('pricing') }}">Pricing</a></li>
                <li><a href="{{ route('about') }}">About Us</a></li>
                <li><a href="{{ route('services') }}">Services</a></li>
                <li><a href="{{ route('contact') }}">Contact Us</a></li>
            </ul>
        </nav>
    </header>

    <!-- Hero Section -->
    <section class="hero">
        <div class="hero-content">
            <img src="http://www.pixelstalk.net/wp-content/uploads/2016/04/Winter-dog-snowflakes-wallpaper-HD.jpg" alt="Dog in Winter">
            <div class="text-content">
                <h1>Kami Peduli dengan  <span>Hewan Peliharaan Anda</span></h1>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.</p>
            </div>
        </div>
    </section>
    

    <!-- Services Section -->
    <section class="services">
        <div class="service-item">
            <h3>RESERVE</h3>
        </div>
        <div class="service-item">
            <h3>MATCH</h3>
        </div>
        <div class="service-item">
            <h3>RELAX</h3>
        </div>
    </section>

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

    <!-- Footer -->
    <footer>
        <p>Author: Hege Refsnes<br>
        <a href="mailto:hege@example.com">hege@example.com</a></p>
      </footer>
</body>
</html>
