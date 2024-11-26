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
</body>
</html>
