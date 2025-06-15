<?php
session_start();

// Initialize error message
$errorMsg = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get POST Data
    $cardNumber = $_POST['cardNumber'] ?? '';
    $cardName = $_POST['cardName'] ?? '';
    $expMonth = $_POST['expMonth'] ?? '';
    $expYear = $_POST['expYear'] ?? '';
    $cvv = $_POST['cvv'] ?? '';

    // Validation
    if (!preg_match('/^[0-9]{16}$/', $cardNumber)) {
        $errorMsg = "Card number must be 16 digits.";
    } elseif (!preg_match('/^[A-Za-z\s]+$/', $cardName)) {
        $errorMsg = "Cardholder name must only contain letters.";
    } elseif (!preg_match('/^(0[1-9]|1[0-2])$/', $expMonth)) {
        $errorMsg = "Invalid expiry month.";
    } elseif (!preg_match('/^[0-9]{2}$/', $expYear)) {
        $errorMsg = "Invalid expiry year.";
    } elseif (!preg_match('/^[0-9]{3}$/', $cvv)) {
        $errorMsg = "CVV must be 3 digits.";
    } else {
        // Simulate booking data
        $_SESSION['bookingDetails'] = [
            'package' => 'Kashmir 6D/5N Himalayan Adventure',
            'name' => 'John Doe',
            'email' => 'john@example.com',
            'travelers' => 2,
            'amount' => '₹32,000',
            'date' => date('d-m-Y'),
            'transactionId' => 'TXN' . rand(100000, 999999)
        ];

        // Redirect to receipt page
        header("Location: receipt.php");
        exit();
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Payment Successful</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #e6ffe6;
            text-align: center;
            padding-top: 100px;
        }
        .message {
            background-color: #d4edda;
            color: green;
            padding: 20px;
            border-radius: 8px;
            max-width: 400px;
            margin: auto;
            box-shadow: 0 0 10px rgba(0,0,0,0.1);
        }
    </style>
</head>
<body>

<div class="message">
    <?php if ($errorMsg): ?>
        <h3 style="color:red;">⚠️ <?= htmlspecialchars($errorMsg) ?></h3>
        <p><a href="payment.html">← Try Again</a></p>
    <?php else: ?>
        <h2>✅ Payment Successful!</h2>
        <p>You will be redirected to your receipt shortly...</p>
    <?php endif; ?>
</div>

<?php if (!$errorMsg): ?>
<script>
    setTimeout(function() {
        window.location.href = "receipt.php";
    }, 3000); // Redirect after 3 seconds
</script>
<?php endif; ?>

</body>
</html>
