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
    <h2>✅ Payment Successful!</h2>
    <p>You will be redirected to your receipt shortly...</p>
</div>

<!-- Redirect to receipt page -->
<script>
    setTimeout(function() {
        window.location.href = "receipt.html";
    }, 3000); // Redirect after 3 seconds
</script>

</body>
</html>
