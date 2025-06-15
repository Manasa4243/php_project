<?php
// kashmir.php - Kashmir Tour Package
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Kashmir Tour Package | Tours & Travels</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"  rel="stylesheet">
    
    <style>
        /* Background and General Styles */
        body {
            margin: 0;
            padding: 0;
            background-color: #e6f2ff; /* Soft travel-themed background */
            font-family: 'Segoe UI', sans-serif;
            scroll-behavior: smooth;
        }

        /* Hero Section */
        .hero-section {
            background: linear-gradient(to right, #0077b6, #00b4d8);
            color: white;
            text-align: center;
            padding: 4rem 2rem;
            position: relative;
            box-shadow: 0 4px 15px rgba(0,0,0,0.2);
        }

        .hero-section h1 {
            font-size: 3.5rem;
            font-weight: bold;
            text-shadow: 2px 2px 5px rgba(0,0,0,0.7);
        }

        .hero-section p {
            font-size: 1.25rem;
            margin-top: 0.5rem;
        }

        /* Package Card */
        .package-card {
            background: #ffffff;
            border-radius: 12px;
            padding: 2rem;
            margin-top: -60px;
            box-shadow: 0 8px 25px rgba(0,0,0,0.1);
            position: relative;
            z-index: 5;
        }

        .price-tag {
            color: #28a745;
            font-size: 1.5rem;
            font-weight: bold;
        }

        /* Footer */
        footer {
            background: #343a40;
            color: white;
            text-align: center;
            padding: 1rem 0;
            margin-top: 2rem;
        }

        /* Animations */
        @keyframes zoomIn {
            from { transform: scale(1); }
            to { transform: scale(1.1); }
        }

        @keyframes fadeIn {
            from {
                opacity: 0;
                transform: translateY(-20px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        /* Responsive */
        @media (max-width: 768px) {
            .hero-section h1 {
                font-size: 2rem;
            }

            .hero-section p {
                font-size: 1rem;
            }
        }
    </style>
</head>
<body>

<!-- Hero Section -->
<section class="hero-section">
    <h1>Kashmir Valley Adventure</h1>
    <p>6 Days & 5 Nights | Explore the Himalayas</p>
</section>

<!-- Main Content -->
<main class="container my-5">
    <div class="package-card">
        <h2 class="text-primary">Explore Kashmir - 6D/5N Package</h2>
        <p>
            Enjoy the pristine beauty of Kashmir with our guided tour covering Srinagar, Pahalgam, and Gulmarg.
            Witness snow-capped mountains, serene lakes, and lush meadows.
        </p>
        <p class="price-tag">Only ₹32,000 per person</p>

        <!-- Booking Form -->
        <form action="reviewancb.php" method="POST" onsubmit="return validateForm()">
            <input type="hidden" name="package_name" value="Kashmir 6D/5N Himalayan Adventure">

            <div class="mb-3">
                <label for="name" class="form-label">Full Name</label>
                <input type="text" id="name" name="name" class="form-control" required>
            </div>

            <div class="mb-3">
                <label for="email" class="form-label">Email Address</label>
                <input type="email" id="email" name="email" class="form-control" required>
            </div>

            <div class="mb-3">
                <label for="phone" class="form-label">Phone Number</label>
                <input type="tel" id="phone" name="phone" class="form-control" maxlength="10" required>
            </div>

            <div class="mb-3">
                <label for="travelers" class="form-label">Number of Travelers</label>
                <select id="travelers" name="travelers" class="form-select" required>
                    <option value="">Select</option>
                    <option value="1">1 Person</option>
                    <option value="2">2 People</option>
                    <option value="3">3 People</option>
                    <option value="4">4+ People</option>
                </select>
            </div>

            <div class="mb-3 text-danger" id="errorMsg"></div>

            <button type="submit" class="btn btn-success">Review & Confirm</button>
        </form>
    </div>
</main>

<!-- Footer -->
<footer>
    <p>&copy; 2025 Tours & Travels. All rights reserved.</p>
</footer>

<!-- Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></
