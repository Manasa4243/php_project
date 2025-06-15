<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Rajasthan Cultural & Heritage Tour</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"  rel="stylesheet">

    <style>
        /* General Styles */
        body {
            font-family: 'Poppins', sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f0f8ff; /* Soft light blue background */
            overflow-x: hidden;
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

        /* Header Section */
        .header-section {
            background-color: #0099cc; /* Darker blue header */
            color: white;
            text-align: center;
            padding: 2rem 0;
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.2);
        }

        .header-section h1 {
            font-size: 2.5rem;
            margin-bottom: 0.5rem;
        }

        .header-section p {
            font-size: 1.2rem;
            margin-bottom: 2rem;
        }

        /* Form Container */
        .form-container {
            background-color: white;
            border-radius: 10px;
            padding: 2rem;
            max-width: 600px;
            width: 100%;
            box-shadow: 0 4px 20px rgba(0, 0, 0, 0.1);
            margin: 3rem auto;
        }

        /* Form Labels */
        label {
            font-weight: 500;
            margin-bottom: 0.5rem;
            display: block;
        }

        /* Input Fields */
        input[type="text"],
        input[type="email"],
        input[type="tel"],
        select {
            width: 100%;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 8px;
            font-size: 1rem;
            transition: all 0.3s ease;
        }

        input[type="text"]:focus,
        input[type="email"]:focus,
        input[type="tel"]:focus,
        select:focus {
            border-color: #28a745;
            box-shadow: 0 0 0 0.25rem rgba(40, 167, 69, 0.25);
        }

        /* Button */
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

        /* Responsive Design */
        @media (max-width: 768px) {
            .form-container {
                padding: 1.5rem;
                margin-top: 2rem;
            }
        }
    </style>

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600&display=swap" rel="stylesheet">
</head>
<body>

<!-- Header Section -->
<div class="header-section">
    <h1></h1>
    <p></p>
</div>

<!-- Main Content -->
<div class="form-container">
    <h2> Royal Legacy 6D/5N Package</h2>
    <p>From the Golden Sands of Thar Desert to the Serene Lakes of Udaipur</p>
    <p><strong>Only ₹32,000 per person</strong></p>

    <!-- Booking Form -->
    <form action="reviewraj.php" method="POST" onsubmit="return validateForm()">
        <input type="hidden" name="package_name" value="Kashmir 6D/5N Himalayan Adventure">

        <div class="mb-3">
            <label for="name" class="form-label">Full Name</label>
            <input type="text" id="name" name="name" class="form-control" placeholder="Enter your full name here" required>
        </div>

        <div class="mb-3">
            <label for="email" class="form-label">Email Address</label>
            <input type="email" id="email" name="email" class="form-control" placeholder="Enter your email here" required>
        </div>

        <div class="mb-3">
            <label for="phone" class="form-label">Phone Number</label>
            <input type="tel" id="phone" name="phone" class="form-control" placeholder="Enter your phone number here" maxlength="10" required>
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

        <button type="submit" class="btn btn-success w-100">Review & Confirm</button>
    </form>
</div>

<!-- Footer -->
<footer class="bg-dark text-white text-center py-3 mt-5">
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
