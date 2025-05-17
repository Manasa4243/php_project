
<?php
// rajasthan.php - Rajasthan Travel Package Page
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Rajasthan Travel Package | Tours & Travels</title>
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
    <h1>Discover Rajasthan</h1>
    <p class="lead">6 Days & 5 Nights Cultural & Heritage Tour</p>
</header>

<main class="container my-5">
    <div class="package-card">

        <h2 class="text-primary">🏰 Rajasthan Royal Heritage Tour - 6D/5N</h2>
        <img src=" images\popularDestinations\rajmain.jpg" alt="Dal Lake">

        <!-- Description -->
        <p>
            Experience the royalty of Rajasthan with our cultural tour that covers Jaipur (Pink City), Udaipur (City of Lakes), and Jodhpur (Blue City).
            Explore majestic forts, royal palaces, vibrant markets, and taste authentic Rajasthani cuisine.
        </p>

        <!-- Price -->
        <p class="price-tag">Starting from ₹28,000 per person</p>

        <!-- Inclusions -->
        <h4>Included in the Package</h4>
        <ul>
            <li>✔️ Round-trip train or flight (based on option)</li>
            <li>✔️ Stay at heritage hotels and 3-star accommodations</li>
            <li>✔️ Local sightseeing with private cab</li>
            <li>✔️ Entry tickets to major attractions</li>
            <li>✔️ Daily breakfast included</li>
            <li>✔️ All applicable taxes and service charges</li>
        </ul>

        <!-- Exclusions -->
        <h4>Not Included</h4>
        <ul>
            <li>✖️ Airfare (if not opted)</li>
            <li>✖️ Lunch and dinner</li>
            <li>✖️ Personal expenses (shopping, photography, etc.)</li>
        </ul>

        <!-- Itinerary -->
        <h4>Sample Itinerary</h4>
        <ul>
            <li><strong>Day 1:</strong> Arrival in Jaipur – Hotel Check-in & Evening Leisure</li>
            <li><strong>Day 2:</strong> Amer Fort + Hawa Mahal + City Palace</li>
            <li><strong>Day 3:</strong> Transfer to Udaipur – Lake Pichola & Jag Mandir</li>
            <li><strong>Day 4:</strong> City Palace Udaipur + Saheliyon Ki Bari</li>
            <li><strong>Day 5:</strong> Drive to Jodhpur – Mehrangarh Fort + Jaswant Thada</li>
            <li><strong>Day 6:</strong> Morning visit to Umaid Bhawan Palace – Departure</li>
        </ul>

        <!-- Image Gallery -->
        <h4>Gallery</h4>
        <div class="row gallery">
            <div class="col-md-4 mb-3">
                <img src="images\popularDestinations\raj1.jpg " alt="Amer Fort">
            </div>
            <div class="col-md-4 mb-3">
                <img src="images\popularDestinations\raj2.jpg " alt="Udaipur Lake">
            </div>
            <div class="col-md-4 mb-3">
                <img src=" images\popularDestinations\raj3.jpg" alt="Mehrangarh Fort">
            </div>
        </div>

       
    </div>
</main>

<!-- Book Now Button -->
       <a href="rajbooking.php" class="btn btn-success">
            Book This Package
        </button>

<!-- Footer -->
<footer>
    <p>&copy; 2025 Tours & Travels. All rights reserved.</p>
</footer>

<!-- Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap @5.3.3/dist/js/bootstrap.bundle.min.js"></script>

<script>
    function updatePrice(value) {
        const basePrice = 28000;
        let total = basePrice * parseInt(value || 1);
        document.getElementById('totalPrice').innerText = "₹" + total.toLocaleString();
    }
</script>

</body>
</html>
