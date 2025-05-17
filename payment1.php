

<!DOCTYPE html>
<html>
<head>
    <title>Payment Page</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background: #f0f0f0;
        }
        .container {
            width: 400px;
            background: #fff;
            padding: 25px;
            margin: 50px auto;
            box-shadow: 0 0 10px rgba(0,0,0,0.1);
            border-radius: 10px;
        }
        h2 {
            text-align: center;
        }
        input[type=text], input[type=number], select {
            width: 100%;
            padding: 10px;
            margin: 10px 0;
            border: 1px solid #ccc;
            border-radius: 5px;
        }
        .btn {
            width: 100%;
            background: #28a745;
            color: white;
            padding: 12px;
            border: none;
            border-radius: 5px;
            font-size: 16px;
            cursor: pointer;
        }
        .btn:hover {
            background: #218838;
        }
        .error {
            color: red;
            margin: 5px 0;
        }
    </style>
</head>
<body>

<div class="container">
    <h2>Secure Payment</h2>
    <form id="paymentForm" method="POST">
        <label>Card Number</label>
        <input type="text" id="cardNumber" maxlength="16" placeholder="1234 5678 9012 3456">

        <label>Cardholder Name</label>
        <input type="text" id="cardName" placeholder="John Doe">

        <label>Expiry Month (MM)</label>
        <input type="text" id="expMonth" maxlength="2" placeholder="MM">

        <label>Expiry Year (YY)</label>
        <input type="text" id="expYear" maxlength="2" placeholder="YY">

        <label>CVV</label>
        <input type="text" id="cvv" maxlength="3" placeholder="123">

        <div class="error" id="errorMsg"></div>

        <button type="submit" class="btn">Pay Now</button>
    </form>
</div>

<script>
    document.getElementById('paymentForm').addEventListener('submit', function(e) {
        let cardNumber = document.getElementById('cardNumber').value.trim();
        let cardName = document.getElementById('cardName').value.trim();
        let expMonth = document.getElementById('expMonth').value.trim();
        let expYear = document.getElementById('expYear').value.trim();
        let cvv = document.getElementById('cvv').value.trim();
        let errorMsg = document.getElementById('errorMsg');

        errorMsg.innerText = '';

        // Regex checks
        if (!/^\d{16}$/.test(cardNumber)) {
            errorMsg.innerText = 'Card number must be 16 digits.';
            e.preventDefault();
            return;
        }
        if (!/^[A-Za-z\s]+$/.test(cardName)) {
            errorMsg.innerText = 'Cardholder name must only contain letters.';
            e.preventDefault();
            return;
        }
        if (!/^\d{2}$/.test(expMonth) || parseInt(expMonth) > 12 || parseInt(expMonth) < 1) {
            errorMsg.innerText = 'Invalid expiry month.';
            e.preventDefault();
            return;
        }
        if (!/^\d{2}$/.test(expYear)) {
            errorMsg.innerText = 'Invalid expiry year.';
            e.preventDefault();
            return;
        }
        if (!/^\d{3}$/.test(cvv)) {
            errorMsg.innerText = 'CVV must be 3 digits.';
            e.preventDefault();
            return;
        }

        alert("Payment successful!"); // Replace with actual processing logic
    });
</script>

</body>
</html>
