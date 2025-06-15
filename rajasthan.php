<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Rajasthan Travel Package | Tours & Travels</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"  rel="stylesheet">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600&display=swap" rel="stylesheet">

    <style>
        /* General Styles */
        body {
            font-family: 'Poppins', sans-serif;
            background-color: #f9fbfd; 
            color: #333;
        }

        h2, h4 {
            font-weight: 600;
        }

        a {
            color: #007bff;
            text-decoration: none;
            transition: color 0.3s ease;
        }

        a:hover {
            color: #0056b3;
        }

        /* Navbar */
        .navbar {
            background-color: #007bff;
            box-shadow: 0 2px 5px rgba(0,0,0,0.1);
        }

        .navbar-brand {
            font-size: 1.6rem;
            font-weight: bold;
            color: #fff;
            transition: color 0.3s ease;
        }

        .navbar-brand:hover {
            color: #ffffff;
        }

        /* Header */
        header {
            background-color: #007bff;
            color: white;
            text-align: center;
            padding: 2rem 0;
        }

        header h1 {
            font-size: 3rem;
            margin-bottom: 1rem;
        }

        header p.lead {
            font-size: 1.5rem;
        }

        /* Main Content */
        .package-card {
            background: #ffffff;
            border-radius: 12px;
            box-shadow: 0 4px 20px rgba(0,0,0,0.08);
            padding: 2.5rem;
            margin-top: -50px;
            position: relative;
            z-index: 2;
            transition: transform 0.3s ease;
        }

        .package-card:hover {
            transform: translateY(-5px);
        }

        .package-card img {
            width: 100%;
            height: auto;
            border-radius: 10px;
            margin-bottom: 1.5rem;
            box-shadow: 0 4px 12px rgba(0,0,0,0.1);
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }

        .package-card img:hover {
            transform: scale(1.02);
            box-shadow: 0 6px 20px rgba(0,0,0,0.15);
        }

        .price-tag {
            color: #28a745;
            font-size: 1.6rem;
            font-weight: bold;
            margin-bottom: 1.5rem;
            display: block;
        }

        .section-title {
            font-size: 1.4rem;
            margin-top: 2rem;
            margin-bottom: 1rem;
            color: #17a2b8;
            padding-left: 0; /* Removed small line before text */
        }

        /* Background Colors for Sections */
        .included-section,
        .not-included-section,
        .itinerary-section,
        .gallery-section {
            background-color: #f0f8ff;
            padding: 1.5rem;
            border-radius: 10px;
            margin-bottom: 2rem;
        }

        .content-block {
            line-height: 1.7;
            margin-bottom: 1.5rem;
            opacity: 0.95;
            transition: transform 0.3s ease;
        }

        .content-block:hover {
            transform: translateX(5px);
        }

        /* Gallery */
        .gallery img {
            width: 100%;
            height: auto;
            border-radius: 8px;
            box-shadow: 0 2px 10px rgba(0,0,0,0.1);
            transition: all 0.3s ease;
        }

        .gallery img:hover {
            transform: scale(1.03);
            box-shadow: 0 6px 15px rgba(0,0,0,0.15);
        }

        /* Book Now Button */
        .btn-success {
            background-color: #28a745;
            border-color: #28a745;
            font-weight: bold;
            padding: 12px 24px;
            font-size: 1.1rem;
            border-radius: 30px;
            transition: all 0.3s ease;
        }

        .btn-success:hover {
            background-color: #218868;
            border-color: #218868;
            transform: scale(1.05);
            box-shadow: 0 4px 12px rgba(40, 167, 69, 0.3);
        }

        /* Footer */
        footer {
            background: #1e2d3b;
            color: #ccc;
            text-align: center;
            padding: 1.5rem 0;
            margin-top: 3rem;
            font-size: 0.95rem;
            transition: background-color 0.3s ease;
        }

        footer:hover {
            background: #2c3e50;
        }

        /* Responsive Typography */
        @media (max-width: 768px) {
            header h1 {
                font-size: 2.5rem;
            }

            header p.lead {
                font-size: 1.2rem;
            }

            .package-card {
                padding: 2rem;
            }
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
    <h1>Discover Rajasthan</h1>
    <p class="lead">6 Days and 5 Nights Cultural & Heritage Tour</p>
</header>

<main class="container my-5">
    <div class="package-card">

        <h2 class="text-primary text-center"> Rajasthan Royal Heritage Tour </h2>
        <img src="images/popularDestinations/rajmain.jpg" alt="Rajasthan" class="img-fluid mb-4">

        <!-- Description -->
        <p class="content-block">
            Experience the royalty of Rajasthan with our cultural tour that covers Jaipur (Pink City), Udaipur (City of Lakes), and Jodhpur (Blue City).
            Explore majestic forts, royal palaces, vibrant markets, and taste authentic Rajasthani cuisine.
        </p>

        <!-- Price -->
        <p class="price-tag">Starting from ₹28,000 per person</p>

        <!-- Inclusions -->
        <h4 class="section-title">Included in the Package</h4>
        <div class="included-section">
            <p class="content-block">
                Round-trip train or flight (based on option). Stay at heritage hotels and 3-star accommodations. Local sightseeing with private cab.
                Entry tickets to major attractions. Daily breakfast included. All applicable taxes and service charges.
            </p>
        </div>

        <!-- Exclusions -->
        <h4 class="section-title">Not Included</h4>
        <div class="not-included-section">
            <p class="content-block">
                Airfare (if not opted). Lunch and dinner. Personal expenses (shopping, photography, etc.).
            </p>
        </div>

        <!-- Itinerary -->
        <h4 class="section-title">Sample Itinerary</h4>
        <div class="itinerary-section">
            <p class="content-block">
                <strong>Day 1:</strong> Arrival in Jaipur – Hotel Check-in & Evening Leisure  
                <strong>Day 2:</strong> Amer Fort + Hawa Mahal + City Palace  
                <strong>Day 3:</strong> Transfer to Udaipur – Lake Pichola & Jag Mandir  
                <strong>Day 4:</strong> City Palace Udaipur + Saheliyon Ki Bari  
                <strong>Day 5:</strong> Drive to Jodhpur – Mehrangarh Fort + Jaswant Thada  
                <strong>Day 6:</strong> Morning visit to Umaid Bhawan Palace – Departure
            </p>
        </div>

        <!-- Image Gallery -->
        <h4 class="section-title mt-4">Gallery</h4>
        <div class="gallery-section">
            <div class="row gallery g-3">
                <div class="col-md-4">
                    <img src="images/popularDestinations/raj1.jpg" alt="Amer Fort">
                </div>
                <div class="col-md-4">
                    <img src="images/popularDestinations/raj2.jpg" alt="Udaipur Lake">
                </div>
                <div class="col-md-4">
                    <img src="images/popularDestinations/raj3.jpg" alt="Mehrangarh Fort">
                </div>
            </div>
        </div>

    </div>
</main>

<!-- Book Now Button -->
<div class="text-center my-5">
    <a href="rajbooking.php" class="btn btn-success btn-lg">
        Book This Package
    </a>
</div>

<!-- Footer -->
<footer>
    <p>&copy; 2025 Tours & Travels. All rights reserved.</p>
</footer>

<!-- Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script> 

<script>
    function updatePrice(value) {
        const basePrice = 28000;
        let total = basePrice * parseInt(value || 1);
        document.getElementById('totalPrice').innerText = "₹" + total.toLocaleString();
    }
</script>

</body>
</html>
