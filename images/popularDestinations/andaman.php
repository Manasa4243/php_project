<?php
// andaman.php - Enhanced Andaman Travel Package Page
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Andaman Travel Package | Tours & Travels</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

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
    </div>
</nav>

<!-- Header -->
<header class="bg-primary text-white text-center py-4">
    <h1>Explore The Andaman Islands</h1>
    <p class="lead">6 Days & 5 Nights Premium Tour Package</p>
</header>

<main class="container my-5">
    <div class="package-card">

        <h2 class="text-primary">🌴 Andaman Island Adventure - 6D/5N</h2>

        <!-- Description -->
        <p>
            Dive into the beauty of the Andaman Islands with our premium travel package that covers Port Blair, Havelock Island, and North Bay.
            Enjoy pristine beaches, coral reefs, and rich cultural experiences in one of India’s most exotic destinations.
        </p>

        <!-- Price -->
        <p class="price-tag">Starting from ₹35,000 per person</p>

        <!-- Inclusions -->
        <h4>Included in the Package</h4>
        <ul>
            <li>✔️ Round-trip airfare from Delhi/Mumbai to Port Blair</li>
            <li>✔️ Stay at 3-star hotels with breakfast included</li>
            <li>✔️ Transfers between islands via ferry</li>
            <li>✔️ Sightseeing tours to popular spots (Cellular Jail, Radhanagar Beach, etc.)</li>
            <li>✔️ Boat ride and snorkeling at North Bay</li>
            <li>✔️ All applicable taxes and service charges</li>
        </ul>

        <!-- Exclusions -->
        <h4>Not Included</h4>
        <ul>
            <li>✖️ Lunch and dinner</li>
            <li>✖️ Personal expenses (shopping, spa, etc.)</li>
            <li>✖️ Travel insurance (optional add-on)</li>
        </ul>

        <!-- Itinerary -->
        <h4>Sample Itinerary</h4>
        <ul>
            <li><strong>Day 1:</strong> Arrival in Port Blair – Hotel Check-in & Evening Leisure</li>
            <li><strong>Day 2:</strong> Cellular Jail + Chidiyatapu Sunset Point</li>
            <li><strong>Day 3:</strong> Ferry to Havelock – Relax at Radhanagar Beach</li>
            <li><strong>Day 4:</strong> Full Day Tour – Elephant Beach by boat + Snorkeling</li>
            <li><strong>Day 5:</strong> Ferry to North Bay – Coral Reef & Water Sports</li>
            <li><strong>Day 6:</strong> Departure – Visit Corbyn’s Cove Beach before flying out</li>
        </ul>

        <!-- Image Gallery -->
        <h4>Gallery</h4>
        <div class="row gallery">
            <div class="col-md-4 mb-3">
                <img src="https://via.placeholder.com/400x250?text=Radhanagar+Beach" alt="Radhanagar Beach">
            </div>
            <div class="col-md-4 mb-3">
                <img src="https://via.placeholder.com/400x250?text=North+Bay+Island" alt="North Bay Island">
            </div>
            <div class="col-md-4 mb-3">
                <img src="https://via.placeholder.com/400x250?text=Cellular+Jail" alt="Cellular Jail">
            </div>
        </div>

        <!-- Testimonials -->
        <h4>User Reviews</h4>
        <div class="row">
            <div class="col-md-6 mb-3">
                <blockquote class="blockquote">
                    <p>"One of the best trips ever! Service was amazing."</p>
                    <footer class="blockquote-footer">Amit Sharma</footer>
                </blockquote>
            </div>
            <div class="col-md-6 mb-3">
                <blockquote class="blockquote">
                    <p>"The itinerary was well-planned and worth every penny!"</p>
                    <footer class="blockquote-footer">Priya Rao</footer>
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
                <input type="hidden" name="package_name" value="Andaman 6D/5N Adventure">
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
                    <p>Total Price: <span id="totalPrice" class="text-success fw-bold">₹35,000</span></p>
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