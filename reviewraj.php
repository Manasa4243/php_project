

<?php
// confirm_booking.php

// Ensure all expected POST values are set
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    $phone = htmlspecialchars($_POST['phone']);
    $travelers = intval($_POST['travelers']);
    $package = htmlspecialchars($_POST['package_name']);
    $base_price = 32000;
    $total_price = $base_price * $travelers;
} else {
    // Redirect back if accessed directly
    header("Location: kashmir.php");
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Confirm Booking</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

<div class="container mt-5">
    <h2 class="text-center text-primary mb-4">Please Confirm Your Booking</h2>

    <div class="card p-4 mb-4">
        <p><strong>Package:</strong> <?= $package ?></p>
        <p><strong>Name:</strong> <?= $name ?></p>
        <p><strong>Email:</strong> <?= $email ?></p>
        <p><strong>Phone:</strong> <?= $phone ?></p>
        <p><strong>Travelers:</strong> <?= $travelers ?></p>
        <p><strong>Total Price:</strong> ₹<?= number_format($total_price) ?></p>
    </div>

    <div class="text-center">
        <p class="mb-3">Would you like to proceed to payment?</p>

        <form action="payment1.php" method="POST" class="d-inline">
            <input type="hidden" name="name" value="<?= $name ?>">
            <input type="hidden" name="email" value="<?= $email ?>">
            <input type="hidden" name="phone" value="<?= $phone ?>">
            <input type="hidden" name="travelers" value="<?= $travelers ?>">
            <input type="hidden" name="total_price" value="<?= $total_price ?>">
            <input type="hidden" name="package_name" value="<?= $package ?>">
            <button type="submit" class="btn btn-success btn-lg">Yes</button>
        </form>

        <a href="rajasthan.php" class="btn btn-danger btn-lg">No</a>
    </div>
</div>

</body>
</html>
