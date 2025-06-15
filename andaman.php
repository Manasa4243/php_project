<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Andaman Travel Package | Tours & Travels</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"  rel="stylesheet">

    <style>
        /* General Styles */
        body {
            font-family: 'Poppins', sans-serif;
            background-color: #f9fbfd; /* Light blue background */
            color: #333;
            transition: background-color 0.3s ease;
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
            background-color: #1a252f;
            box-shadow: 0 2px 5px rgba(0,0,0,0.1);
        }

        .navbar-brand {
            font-size: 1.6rem;
            font-weight: bold;
            color: #fff;
            transition: color 0.3s ease;
            text-align: center; /* Center the navbar brand text */
        }

        .navbar-brand:hover {
            color: #17a2b8;
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
            padding-left: 0; /* Remove the small line before the text */
        }

        /* Background Colors for Sections */
        .included-section,
        .not-included-section,
        .itinerary-section,
        .gallery-section {
            background-color: #f0f8ff; /* Light blue background for sections */
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
            box-shadow: 0 2px 10px rgba(0,0,0,0.08);
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

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600&display=swap" rel="stylesheet">
</head>
<body>

<!-- Navbar -->
<nav class="navbar navbar-expand-lg navbar-dark bg-primary">
    <div class="container">
        <a class="navbar-brand text-center" href="#">Tours & Travels</a> <!-- Centered Navbar Brand --> 
    </div>
</nav>

<!-- Main Content -->
<main class="container my-5">
    <div class="package-card">

        <!-- Centered Heading -->
        <h2 class="text-primary text-center"> Andaman Island Adventure </h2>
        <img src="images/popularDestinations/anmain.jpg" alt="Andaman Islands" class="img-fluid">

        <!-- Description -->
        <p class="content-block">
            Dive into the beauty of the Andaman Islands with our premium travel package that covers Port Blair, Havelock Island, and North Bay.
            Enjoy pristine beaches, coral reefs, and rich cultural experiences in one of India’s most exotic destinations.
        </p>

        <!-- Price -->
        <p class="price-tag">Starting from ₹35,000 per person</p>

        <!-- Inclusions -->
        <h4 class="section-title">Included in the Package</h4>
        <div class="included-section">
            <p class="content-block">
                Round-trip airfare from Delhi/Mumbai to Port Blair. Stay at 3-star hotels with breakfast included. Transfers between islands via ferry.
                Sightseeing tours to popular spots like Cellular Jail, Radhanagar Beach, and Chidiyatapu. Boat ride and snorkeling at North Bay.
                All applicable taxes and service charges are covered.
            </p>
        </div>

        <!-- Exclusions -->
        <h4 class="section-title">Not Included</h4>
        <div class="not-included-section">
            <p class="content-block">
                Lunch and dinner during the tour. Personal expenses such as shopping, spa treatments, or optional activities.
                Travel insurance is not included but can be added as an optional add-on.
            </p>
        </div>

        <!-- Itinerary -->
        <h4 class="section-title">Sample Itinerary</h4>
        <div class="itinerary-section">
            <p class="content-block">
                Day 1: Arrival in Port Blair – Hotel Check-in & Evening Leisure.  
                Day 2: Visit the historic Cellular Jail followed by Chidiyatapu Sunset Point.  
                Day 3: Ferry to Havelock Island – Relax at the famous Radhanagar Beach.  
                Day 4: Full day tour to Elephant Beach by boat including snorkeling.  
                Day 5: Ferry to North Bay – Explore coral reefs and enjoy water sports.  
                Day 6: Departure – Visit Corbyn’s Cove Beach before flying back home.
            </p>
        </div>

        <!-- Image Gallery -->
        <h4 class="section-title mt-4">Gallery</h4>
        <div class="gallery-section">
            <div class="row gallery g-3">
                <div class="col-md-4">
                    <img src="images/popularDestinations/imageAndaman.jpg" alt="Radhanagar Beach">
                </div>
                <div class="col-md-4">
                    <img src="images/popularDestinations/an2.jpg" alt="North Bay Island">
                </div>
                <div class="col-md-4">
                    <img src="images/popularDestinations/an3.jpg" alt="Cellular Jail">
                </div>
            </div>
        </div>

    </div>
</main>

<!-- Book Now Button -->
<div class="text-center my-5">
    <a href="andamanbooking.php" class="btn btn-success">
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
        const basePrice = 35000;
        let total = basePrice * parseInt(value || 1);
        document.getElementById('totalPrice').innerText = "₹" + total.toLocaleString();
    }
</script>

</body>
</html>
