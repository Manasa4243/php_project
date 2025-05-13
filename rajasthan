
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
    <link href="https://cdn.jsdelivr.net/npm/bootstrap @5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

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
                <img src="https://via.placeholder.com/400x250?text=Amer+Fort " alt="Amer Fort">
            </div>
            <div class="col-md-4 mb-3">
                <img src="https://via.placeholder.com/400x250?text=Udaipur+Lake " alt="Udaipur Lake">
            </div>
            <div class="col-md-4 mb-3">
                <img src="https://via.placeholder.com/400x250?text=Mehrangarh+Fort " alt="Mehrangarh Fort">
            </div>
        </div>

        <!-- Testimonials -->
        <h4>User Reviews</h4>
        <div class="row">
            <div class="col-md-6 mb-3">
                <blockquote class="blockquote">
                    <p>"Rajasthan is pure magic! Every palace was breathtaking."</p>
                    <footer class="blockquote-footer">Sneha Mehta</footer>
                </blockquote>
            </div>
            <div class="col-md-6 mb-3">
                <blockquote class="blockquote">
                    <p>"The guide knew all the hidden gems. Highly recommended!"</p>
                    <footer class="blockquote-footer">Rahul Khanna</footer>
                </blockquote>
            </div>
        </div>

        <!-- Book Now Button -->
        <button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#bookingModal">
            Book This Package
        </button>

    </div>
</main>

<!-- Booking Modal -->
<div class="modal fade" id="bookingModal" tabindex="-1" aria-labelledby="bookingModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <form class="modal-content" action="submit_booking.php" method="POST">
            <div class="modal-header">
                <h5 class="modal-title" id="bookingModalLabel">Book Your Trip</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <input type="hidden" name="package_name" value="Rajasthan 6D/5N Royal Heritage Tour">
                <div class="mb-3">
                    <label for="name" class="form-label">Full Name</label>
                    <input type="text" name="name" class="form-control" required>
                </div>
                <div class="mb-3">
                    <label for="email" class="form-label">Email Address</label>
                    <input type="email" name="email" class="form-control" required>
                </div>
                <div class="mb-3">
                    <label for="phone" class="form-label">Phone Number</label>
                    <input type="tel" name="phone" class="form-control" required>
                </div>
                <div class="mb-3">
                    <label for="travelers" class="form-label">Number of Travelers</label>
                    <select name="travelers" class="form-select" id="travelersSelect" onchange="updatePrice(this.value)" required>
                        <option value="">Select</option>
                        <option value="1">1 Person</option>
                        <option value="2">2 People</option>
                        <option value="3">3 People</option>
                        <option value="4">4+ People</option>
                    </select>
                </div>
                <div class="mb-3">
                    <p>Total Price: <span id="totalPrice" class="text-success fw-bold">₹28,000</span></p>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-success">Confirm Booking</button>
            </div>
        </form>
    </div>
</div>

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
