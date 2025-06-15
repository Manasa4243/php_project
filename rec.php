<?php
session_start();

if (!isset($_SESSION['bookingDetails'])) {
    header("Location: payment.html");
    exit();
}

$booking = $_SESSION['bookingDetails'];
?>

<!DOCTYPE html>
<html>
<head>
    <title>Booking Receipt</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background: #f9f9f9;
            padding: 40px;
        }
        .receipt {
            background: #fff;
            max-width: 600px;
            margin: auto;
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0,0,0,0.1);
        }
        .receipt h2 {
            color: green;
            text-align: center;
        }
        .receipt p {
            font-size: 1.1rem;
            margin: 10px 0;
        }
        .receipt strong {
            color: #333;
        }
        .btn-print {
            display: block;
            margin: 20px auto;
            padding: 10px 20px;
            background-color: #007bff;
            color: white;
            text-decoration: none;
            border-radius: 5px;
            text-align: center;
        }
        .btn-print:hover {
            background-color: #0056b3;
        }
    </style>
</head>
<body>

<div class="receipt">
    <h2>✅ Booking Confirmed</h2>
    <p><strong>Package:</strong> <?= htmlspecialchars($booking['package']) ?></p>
    <p><strong>Name:</strong> <?= htmlspecialchars($booking['name']) ?></p>
    <p><strong>Email:</strong> <?= htmlspecialchars($booking['email']) ?></p>
    <p><strong>Travelers:</strong> <?= htmlspecialchars($booking['travelers']) ?></p>
    <p><strong>Total Amount:</strong> <?= htmlspecialchars($booking['amount']) ?></p>
    <p><strong>Booking Date:</strong> <?= htmlspecialchars($booking['date']) ?></p>
    <p><strong>Transaction ID:</strong> <?= htmlspecialchars($booking['transactionId']) ?></p>

    <a href="#" class="btn-print" onclick="window.print()">🖨️ Print / Download Receipt</a>
</div>

</body>
</html>
