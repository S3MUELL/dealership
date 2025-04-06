<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Car Information</title>
    <link rel="stylesheet" href="../css/car-info.css">
</head>
<body>
   <?php include "header.php";?>
    <section id="car-info-page">
    <?php
include("db_config.php");

if (isset($_GET['id'])) {
  $carId = intval($_GET['id']);
  $query = "SELECT * FROM cars_info WHERE id = $carId";
  $result = $conn->query($query);

  if ($result && $result->num_rows > 0) {
    $car = $result->fetch_assoc(); ?>
    <img class="car-image" src="../img/<?php echo $car['Photo'];?>" alt="">
    <div class="information">
        <h1 class="title"><?php echo $car['Name'];?></h1>
        <ul>
            <li class="info">Power: 290kW (395HP)</li>
            <li class="info">Consumption: 16.4kWh/100 km</li>
            <li class="info">CO₂ Emissions: 0g/km</li>
        </ul>
        <p class="price">Monthly Payment: 732.50EUR/Mt.</p>
        <p class="final-price"><?php echo $car['Price'];?></p>
        <button class="order">Order Now</button>
    </div>
    <?php }}
?>
    </section>
</body>
</html>