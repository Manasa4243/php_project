<?php
// jbook.php - Handle Booking Submission

$package_name = $name = $email = $phone = $travelers = $total_price = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve and sanitize form data
    $package_name = htmlspecialchars($_POST['package_name']);
    $name = htmlspecialchars($_POST['name']);
    $email = filter_var($_POST['email'], FILTER_SANITIZE_EMAIL);
    $phone = htmlspecialchars($_POST['phone']);
    $travelers = intval($_POST['travelers']);
    $base_price = 32000;
    $total_price = $base_price * $travelers;

    // Validate required fields
    if (empty($name) || empty($email) || empty($phone) || empty($travelers)) {
        $error = "All fields are required.";
    }
} else {
    $error = "Invalid request. Please use the booking form.";
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Booking Confirmation</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap @5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
        body {
            background-color: #f0f4f8;
            font-family: 'Segoe UI', sans-serif;
        }

        .confirmation-box {
            background: white;
            padding: 2rem;
            border-radius: 10px;
            box-shadow: 0 4px 20px rgba(0, 0, 0, 0.1);
            margin-top: 3rem;
        }

        h2 {
            color: #28a745;
        }

        p {
            font-size: 1.1rem;
        }

        strong {
            color: #333;
        }

        .btn-back {
            display: inline-block;
            margin-top: 1rem;
        }
    </style>
</head>
<body>

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="confirmation-box text-center">

                <?php if (!empty($error)): ?>
                    <h2 class="text-danger">Error</h2>
                    <p class="text-danger"><?= $error ?></p>
                    <a href="javascript:history.back()" class="btn btn-primary btn-back">Go Back</a>
                <?php else: ?>
                    <h2>✅ Booking Confirmed!</h2>
                    <p><strong>Package:</strong> <?= $package_name ?></p>
                    <p><strong>Name:</strong> <?= $name ?></p>
                    <p><strong>Email:</strong> <?= $email ?></p>
                    <p><strong>Phone:</strong> <?= $phone ?></p>
                    <p><strong>Travelers:</strong> <?= $travelers ?></p>
                    <p><strong>Total Price:</strong> ₹<?= number_format($total_price) ?></p>
                    <p>We'll contact you shortly with more details.</p>
                    <a href="index.php" class="btn btn-success btn-back">Back to Home</a>
                <?php endif; ?>

            </div>
        </div>
    </div>
</div>

<!-- Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap @5.3.3/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>
