

<?php
// kashmir.php - Jammu and Kashmir Travel Package Page
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Rajasthan Travel Package | Tours & Travels</title>
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
    <h1>Experience Rajasthan</h1>
    <p class="lead">6 Days & 5 Nights Himalayan Paradise Tour</p>
</header>

<main class="container my-5">
    <div class="package-card">
        <h2 class="text-primary">Rajasthan= - 6D/5N</h2>
        <p>
            Discover the breathtaking beauty of Jammu and Kashmir with our curated tour covering Srinagar, Pahalgam, and Gulmarg.
            From Dal Lake shikara rides to snow-capped mountains, experience nature at its finest in India’s most scenic destination.
        </p>
        <p class="price-tag">Starting from ₹32,000 per person</p>

        <!-- Booking Form -->
        <form action="reviewraj.php" method="POST" onsubmit="return validateForm()">
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
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

<!-- Form Validation Script -->
<script>
    function validateForm() {
        const name = document.getElementById('name').value.trim();
        const email = document.getElementById('email').value.trim();
        const phone = document.getElementById('phone').value.trim();
        const travelers = document.getElementById('travelers').value;
        const errorMsg = document.getElementById('errorMsg');

        errorMsg.textContent = "";

        const nameRegex = /^[A-Za-z\s]+$/;
        const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
        const phoneRegex = /^[0-9]{10}$/;

        if (!nameRegex.test(name)) {
            errorMsg.textContent = "Name should contain only letters and spaces.";
            return false;
        }

        if (!emailRegex.test(email)) {
            errorMsg.textContent = "Please enter a valid email address.";
            return false;
        }

        if (!phoneRegex.test(phone)) {
            errorMsg.textContent = "Phone number must be 10 digits.";
            return false;
        }

        if (travelers === "") {
            errorMsg.textContent = "Please select the number of travelers.";
            return false;
        }

        return true;
    }
</script>

</body>
</html>
