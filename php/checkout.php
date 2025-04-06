<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Checkout</title>
    <link rel="stylesheet" href="../css/checkout.css">
</head>
<body>

<?php include "header.php"; ?>
<?php
include("db_config.php");

if ($_SERVER["REQUEST_METHOD"] === "POST" && isset($_POST["car_id"])) {
    $car_id = intval($_POST["car_id"]);

    $stmt = $conn->prepare("SELECT * FROM cars_info WHERE id = ?");
    $stmt->bind_param("i", $car_id);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result && $result->num_rows > 0) {
        $car = $result->fetch_assoc();
?>

<section id="checkout-page">
    <div class="information">
        <h1>Checkout</h1>
        <form action="processOrder.php" method="POST">
            <!-- Hidden field to pass car_id -->
            <input type="hidden" name="car_id" value="<?php echo htmlspecialchars($car['id']); ?>">

            <input type="text" id="name" name="name" placeholder="Name" required>
            <input type="text" id="surname" name="surname" placeholder="Surname" class="info" required>
            <input type="text" id="address" name="address" placeholder="Address" class="info" required>
            <input type="email" id="email" name="email" placeholder="Email" class="info" required>
            <input type="tel" id="phone" name="phone" placeholder="Phone Number" class="info" required>

            <div class="checkbox-group">
                <input type="checkbox" id="terms" name="terms" required> I agree with terms and conditions
                <!-- <label for="terms" class="agreement"></label> -->
            </div>

            <div class="checkbox-group">
                <input type="checkbox" id="verify" name="verify" required> Verify you are a human
                <!-- <label for="verify" class="verification"></label> -->
            </div>

            <button type="submit" class="order">Order</button>
        </form>
    </div>
</section>

<?php
    } else {
        echo "<p>Car not found.</p>";
    }
    $stmt->close();
} else {
    echo "<p>Invalid access.</p>";
}
?>

</body>
</html>
