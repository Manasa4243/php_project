<?php
// kashmir.php - Jammu and Kashmir Travel Package Page
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Jammu and Kashmir Travel Package | Tours & Travels</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    	<link href="css/bootstrap.min.css" rel="stylesheet"/>
	<link href="css/hover-min.css" rel="stylesheet"/>
	<link href="css/min.css" rel="stylesheet"/>
   	<link href="https://fonts.googleapis.com/css?family=Oswald:200,300,400|Raleway:100,300,400,500|Roboto:100,400,500,700" rel="stylesheet">
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">

    <style>
        body {
            font-family: 'Segoe UI', sans-serif;
        }
        .package-card {
            background: #fff;
            border-radius: 10px;
            box-shadow: 0 2px 10px rgba(0,0,0,0.1);
            padding: 2rem;
        }
        .price-tag {
            color: #28a745;
            font-size: 1.5rem;
            font-weight: bold;
        }
        .gallery img {
            width: 100%;
            height: auto;
            margin-bottom: 10px;
            border-radius: 8px;
        }
        footer {
            background: #343a40;
            color: white;
            text-align: center;
            padding: 1rem 0;
            margin-top: 2rem;
        }
    </style>
</head>
<body>

<!-- Navbar -->
<nav class="navbar navbar-expand-lg navbar-dark bg-primary">
    <div class="container">
        <a class="navbar-brand" href="#">Tours & Travels</a>
        <a href="index.php" class="btn btn-outline-light">← Back to Home</a>
    </div>
</nav>

<!-- Header -->
<header class="bg-primary text-white text-center py-4">
    <h1>Experience Jammu and Kashmir</h1>
    <p class="lead">6 Days & 5 Nights Himalayan Paradise Tour</p>
</header>

<main class="container my-5">
    <div class="package-card">
<img src=" images\popularDestinations\kk.webp" alt="Dal Lake">
        <h2 class="text-primary">🏔️ Kashmir Valley Adventure - 6D/5N</h2>

        <!-- Description -->
        <p>
            Discover the breathtaking beauty of Jammu and Kashmir with our curated tour covering Srinagar, Pahalgam, and Gulmarg.
            From Dal Lake shikara rides to snow-capped mountains, experience nature at its finest in India’s most scenic destination.
        </p>

        <!-- Price -->
        <p class="price-tag">Starting from ₹32,000 per person</p>

        <!-- Inclusions -->
        <h4>Included in the Package</h4>
        <ul>
            <li>✔️ Round-trip airfare from Delhi to Srinagar</li>
            <li>✔️ Stay at 3-star hotels with breakfast included</li>
            <li>✔️ Local sightseeing with private cab</li>
            <li>✔️ Shikara ride on Dal Lake</li>
            <li>✔️ Gondola ride in Gulmarg (1 session)</li>
            <li>✔️ All applicable taxes and service charges</li>
        </ul>

        <!-- Exclusions -->
        <h4>Not Included</h4>
        <ul>
            <li>✖️ Lunch and dinner</li>
            <li>✖️ Personal expenses (shopping, photography, etc.)</li>
            <li>✖️ Optional adventure activities beyond package</li>
        </ul>

        <!-- Itinerary -->
        <h4>Sample Itinerary</h4>
        <ul>
            <li><strong>Day 1:</strong> Arrival in Srinagar – Hotel Check-in & Evening Leisure</li>
            <li><strong>Day 2:</strong> Full Day Srinagar – Dal Lake + Mughal Gardens</li>
            <li><strong>Day 3:</strong> Drive to Pahalgam – Scenic views along River Lidder</li>
            <li><strong>Day 4:</strong> Aru Valley & Betaab Valley Sightseeing</li>
            <li><strong>Day 5:</strong> Visit Gulmarg – Gondola Ride & Snow Fun</li>
            <li><strong>Day 6:</strong> Morning visit to Shankaracharya Temple – Departure</li>
        </ul>

        <!-- Image Gallery -->
        <h4>Gallery</h4>
        <div class="row gallery">
            <div class="col-md-4 mb-3">
                <img src="images\popularDestinations\jk-1.jpg " alt="Dal Lake">
            </div>
            <div class="col-md-4 mb-3">
                <img src=" images\popularDestinations\jk-2.jpg" alt="Gulmarg">
            </div>
            <div class="col-md-4 mb-3">
                <img src="images\popularDestinations\jk-3.jpeg" alt="Pahalgam Valley">
            </div>
        </div>

     

        <!-- Book Now Button -->
       <a href="jbooking.php" class="btn btn-success">
            Book This Package
        </button>

    </div>
    </a>
</main>



</body>
</html>



