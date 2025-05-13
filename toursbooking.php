<?php session_start(); ?>
<?php
if (!isset($_SESSION["username"])) {
    header("Location: blocked.php");
    $_SESSION['url'] = $_SERVER['REQUEST_URI'];
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <title>Book Tour Package | Tourism Management</title>
    <link href="css/main.css" rel="stylesheet">
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Oswald :200,300,400|Raleway:100,300,400,500|Roboto:100,400,500,700" rel="stylesheet">
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css " rel="stylesheet">
    <script src="js/jquery-3.2.1.min.js"></script>
    <script src="js/main.js"></script>
    <script src="js/bootstrap.min.js"></script>
</head>
<body>

<?php include("common/headerLoggedIn.php"); ?>

<?php
// Database connection
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "projectmeteor";

$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Get POST data from previous form
$packageID = $_POST['packageIDHidden'];
$travelers = $_POST['travelersHidden'];
$selectedDate = $_POST['dateHidden'];

// Fetch tour package details
$sql = "SELECT * FROM tour_packages WHERE package_id = ?";
$stmt = $conn->prepare($sql);
$stmt->bind_param("i", $packageID);
$stmt->execute();
$result = $stmt->get_result();

if ($result->num_rows === 0) {
    echo "<div class='alert alert-danger text-center'>Invalid Package ID.</div>";
    exit;
}

$row = $result->fetch_assoc();
?>

<div class="spacer">a</div>
<div class="bookingWrapper container">

    <div class="headingOne text-center">
        Please Review and Confirm Your Tour Package Booking
    </div>

    <!-- Tour Package Summary -->
    <div class="row mt-4">
        <div class="col-md-7">
            <div class="boxLeftHotel">
                <div class="col-sm-12 hotelMode">Tour Details</div>
                <div class="col-sm-12">
                    <strong><?php echo htmlspecialchars($row['name']); ?></strong><br>
                    <?php echo nl2br(htmlspecialchars($row['description'])); ?>
                </div>
                <div class="col-sm-6 borderRight mt-3">
                    <div class="checkIn"><strong>Date:</strong> <?php echo $selectedDate; ?></div>
                </div>
                <div class="col-sm-6 mt-3">
                    <div class="noOfGuests"><strong>Travelers:</strong> <?php echo $travelers; ?></div>
                </div>
            </div>
        </div>

        <!-- Fare Summary -->
        <div class="col-md-5">
            <div class="boxRightHotel">
                <div class="fareSummary">Payment Summary</div>
                <div class="row">
                    <div class="col-8">
                        <div class="heading"><?php echo $travelers; ?> Traveler(s)</div>
                        <div class="heading">Convenience Fee</div>
                    </div>
                    <div class="col-4">
                        <div class="price">₹ <?php echo $travelers * $row['price_per_person']; ?></div>
                        <div class="price">₹ 250</div>
                    </div>
                </div>
                <div class="col-12 mt-2">
                    <hr class="calcBar">
                </div>
                <div class="row">
                    <div class="col-8">
                        <div class="headingTotal">Total Payment</div>
                    </div>
                    <div class="col-4">
                        <?php
                        $totalFare = ($travelers * $row['price_per_person']) + 250;
                        ?>
                        <div class="priceTotal">₹ <?php echo $totalFare; ?></div>
                    </div>
                </div>

                <!-- Confirmation Form -->
                <form action="payment.php" method="POST">
                    <div class="bookingButton text-center mt-3">
                        <input type="submit" class="confirmButton btn btn-success" value="Confirm Booking">
                    </div>

                    <!-- Hidden Inputs -->
                    <input type="hidden" name="fareHidden" value="<?php echo $totalFare; ?>">
                    <input type="hidden" name="packageIDHidden" value="<?php echo $packageID; ?>">
                    <input type="hidden" name="travelersHidden" value="<?php echo $travelers; ?>">
                    <input type="hidden" name="dateHidden" value="<?php echo $selectedDate; ?>">
                    <input type="hidden" name="modeHidden" value="tourPackage">
                </form>
            </div>
        </div>
    </div>
</div>

<div class="spacerLarge">.</div>
<?php include("common/footer.php"); ?>

</body>
</html>
