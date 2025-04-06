<?php
include("db_config.php");

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Order Status</title>
    <style>
        body {
            font-family: 'Segoe UI', sans-serif;
            background: #f4f7fa;
            background-image: url('../img/background.jpg');
            color: #333;
            display: flex;
            align-items: center;
            justify-content: center;
            height: 100vh;
            margin: 0;
        }
        .confirmation-box {
            background: #ffffff;
            padding: 40px;
            border-radius: 12px;
            box-shadow: 0 8px 16px rgba(0,0,0,0.1);
            max-width: 500px;
            text-align: center;
        }
        h2 {
            color: #2c7be5;
            margin-bottom: 15px;
        }
        p {
            font-size: 1rem;
            margin-bottom: 10px;
        }
        .error {
            color: #e74c3c;
        }
        .success {
            color: #2ecc71;
        }
        a.button {
            margin-top: 20px;
            display: inline-block;
            padding: 10px 20px;
            background: #2c7be5;
            color: white;
            text-decoration: none;
            border-radius: 6px;
            transition: background 0.3s ease;
        }
        a.button:hover {
            background: #1a5fc3;
        }
    </style>
</head>
<body>

<div class="confirmation-box">
    <?php
    if ($_SERVER["REQUEST_METHOD"] === "POST") {
        if (
            isset($_POST["car_id"], $_POST["name"], $_POST["email"], $_POST["address"], $_POST["surname"], $_POST["phone"])
            && isset($_POST["terms"]) && isset($_POST["verify"])
        ) {
            $car_id = intval($_POST["car_id"]);
            $name = trim($_POST["name"]);
            $surname = trim($_POST["surname"]);
            $email = trim($_POST["email"]);
            $address = trim($_POST["address"]);
            $phone = trim($_POST["phone"]);

            $stmt = $conn->prepare("INSERT INTO orders (car_id, name, surname, email, address, phone, order_date) 
                                    VALUES (?, ?, ?, ?, ?, ?, NOW())");
            $stmt->bind_param("isssss", $car_id, $name, $surname, $email, $address, $phone);

            if ($stmt->execute()) {
                echo "<h2 class='success'>✅ Order placed successfully!</h2>";
                echo "<p>Thank you, <strong>$name $surname</strong>!</p>";
                echo "<p>We'll contact you soon via <strong>$email</strong> or call you in <strong>$phone</strong>.</p>";
                echo "<a href='home.php' class='button'>Back to Home</a>";
            } else {
                echo "<h2 class='error'>❌ Something went wrong.</h2>";
                echo "<p>Please try again later.</p>";
                echo "<a href='checkout.php' class='button'>Back to Order</a>";
            }

            $stmt->close();
        } else {
            echo "<h2 class='error'>⚠️ Missing Data</h2>";
            echo "<p>Please fulfill all the fields</p>";
            echo "<a href='checkout.php' class='button'>Back to Form</a>";
        }
    } else {
        echo "<h2 class='error'>⛔ Invalid Request</h2>";
        echo "<a href='home.php' class='button'>Back to Home</a>";
    }
    ?>
</div>

</body>
</html>
