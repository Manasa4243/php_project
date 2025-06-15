<?php
// kashmir.php - Jammu and Kashmir Travel Package Page
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Jammu and Kashmir Travel Package | Tours & Travels</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Oswald:200,300,400|Raleway:100,300,400,500|Roboto:100,400,500,700" rel="stylesheet">
    
    <!-- Font Awesome Icons -->
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
    
    <!-- Bootstrap CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet"/>
    
    <style>
        /* Global Styles */
        body {
            font-family: 'Segoe UI', sans-serif;
            background-color: #f5f9ff; /* Light travel-themed background */ 
            color: #333;
            line-height: 1.6;
        }

        /* Navbar */
        .navbar {
            background-color: #004d99 !important;
        }

        .navbar-brand {
            font-weight: bold;
            font-size: 1.3rem;
        }

        .back-btn-container {
            display: flex;
            align-items: center;
        }

        .back-btn-container a {
            color: white;
            font-size: 0.95rem;
        }

        /* Header */
        header {
            background: linear-gradient(to right, #0077b6, #00b4d8);
            color: white;
            padding: 2rem 0;
            text-align: center;
            box-shadow: 0 4px 15px rgba(0,0,0,0.2);
        }

        header h1 {
            font-size: 2.8rem;
            margin-bottom: 0.5rem;
            font-weight: 600;
        }

        header p.lead {
            font-size: 1.2rem;
            font-weight: 300;
        }

        /* Main Content */
        main.container.my-5 {
            background-color: #ffffff;
            border-radius: 15px;
            padding: 3rem;
            box-shadow: 0 4px 20px rgba(0,0,0,0.1);
            max-width: 1000px;
            margin: 2rem auto;
        }

        .package-card h2 {
            color: #0077b6;
            font-size: 2rem;
            margin-top: 1rem;
        }

        .price-tag {
            color: #28a745;
            font-size: 1.6rem;
            font-weight: bold;
            margin: 1rem 0;
            display: inline-block;
        }

        .package-card p {
            font-size: 1.1rem;
            margin-bottom: 1.5rem;
            background-color: #e6f2ff; /* Paragraph background */
            padding: 1rem;
            border-left: 4px solid #0077b6;
            border-radius: 8px;
        }

        /* Image Styling */
        .package-card img {
            width: 100%;
            height: auto;
            border-radius: 10px;
            box-shadow: 0 4px 10px rgba(0,0,0,0.15);
            transition: transform 0.3s ease;
            margin-bottom: 1.5rem;
        }

        .package-card img:hover {
            transform: scale(1.02);
        }

        /* Gallery */
        .gallery {
            margin-top: 2rem;
        }

        .gallery .col-md-4 {
            margin-bottom: 1rem;
        }

        .gallery img {
            width: 100%;
            height: auto;
            border-radius: 10px;
            box-shadow: 0 4px 10px rgba(0,0,0,0.1);
        }

        /* Book Now Button */
        .btn-success {
            background-color: #0077b6;
            border: none;
            padding: 0.6rem 1.5rem;
            font-size: 1.1rem;
            border-radius: 30px;
            transition: background-color 0.3s ease;
        }

        .btn-success:hover {
            background-color: #005f86;
        }

        /* Footer */
        footer {
            background: #003366;
            color: #fff;
            text-align: center;
            padding: 1.5rem 0;
            margin-top: 3rem;
        }

        footer p {
            margin: 0;
            font-size: 0.95rem;
        }

        @media (max-width: 768px) {
            header h1 {
                font-size: 2rem;
            }

            .price-tag {
                font-size: 1.3rem;
            }

            .btn-success {
                font-size: 1rem;
                padding: 0.5rem 1.2rem;
            }
        }
    </style>
</head>
<body>

<!-- Navbar -->
<nav class="navbar navbar-expand-lg navbar-dark bg-primary">
    <div class="container d-flex justify-content-between align-items-center">
        <div class="back-btn-container">
            <a href="index.php" class="btn btn-outline-light">← Back to Home</a>
        </div>
        <a class="navbar-brand" href="#">Tours & Travels</a>
        <div></div> <!-- Placeholder to keep alignment -->
    </div>
</nav>

<!-- Header -->
<header>
    <h1>Experience Jammu and Kashmir</h1>
    <p class="lead">6 Days & 5 Nights Himalayan Paradise Tour</p>
</header>

<main class="container my-5">
    <div class="package-card">
        <img src="images/popularDestinations/kk.webp" alt="Dal Lake" class="mb-3">
        <h2>Kashmir Valley Adventure - 6D/5N</h2>

        <!-- Description -->
        <p>
            Discover the breathtaking beauty of Jammu and Kashmir with our curated tour covering Srinagar, Pahalgam, and Gulmarg.
            From Dal Lake shikara rides to snow-capped mountains, experience nature at its finest in India’s most scenic destination.
        </p>

        <!-- Price -->
        <p class="price-tag">Starting from ₹32,000 per person</p>

        <!-- Inclusions -->
        <h4>Included in the Package</h4>
        <p>
            The package includes round-trip airfare from Delhi to Srinagar, a comfortable stay at 3-star hotels with breakfast included,
            local sightseeing using a private cab, a memorable shikara ride on Dal Lake, one session of gondola ride in Gulmarg,
            and all applicable taxes and service charges.
        </p>

        <!-- Exclusions -->
        <h4>Not Included</h4>
        <p>
            This package does not include lunch or dinner, personal expenses such as shopping or photography, and any optional adventure activities that are not part of the standard itinerary.
        </p>

        <!-- Itinerary -->
        <h4>Sample Itinerary</h4>
        <p>
            On Day 1 you will arrive in Srinagar and check into your hotel, followed by some leisure time in the evening.
            Day 2 includes a full-day city tour featuring Dal Lake and Mughal Gardens.
            On Day 3, you will drive to Pahalgam, enjoying scenic views along the River Lidder.
            Day 4 is dedicated to sightseeing in Aru Valley and Betaab Valley.
            Day 5 takes you to Gulmarg for a thrilling gondola ride and snow-based fun.
            Finally, on Day 6, you'll visit Shankaracharya Temple in the morning before departing back home.
        </p>

        <!-- Image Gallery -->
        <h4>Gallery</h4>
        <div class="row gallery">
            <div class="col-md-4 mb-3">
                <img src="images/popularDestinations/jk-1.jpg" alt="Dal Lake">
            </div>
            <div class="col-md-4 mb-3">
                <img src="images/popularDestinations/jk-2.jpg" alt="Gulmarg">
            </div>
            <div class="col-md-4 mb-3">
                <img src="images/popularDestinations/jk-3.jpeg" alt="Pahalgam Valley">
            </div>
        </div>

        <!-- Book Now Button -->
        <a href="jbooking.php" class="btn btn-success mt-3">
            Book This Package
        </a>

    </div>
</main>

<!-- Footer -->
<footer>
    <p>&copy; 2025 Tours & Travels Management System. All rights reserved.</p>
</footer>

<!-- Bootstrap JS (Optional) -->
<script src="js/bootstrap.bundle.min.js"></script>

</body>
</html>
