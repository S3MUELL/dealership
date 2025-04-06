<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>BMW Official</title>
    <link rel="stylesheet" href="../css/models.css" />
  </head>
  <body>
    <section id="header">
      <div class="logo">
        <img class="logo-animation" src="/img/logo.png" alt="" />
      </div>
      <div class="nav">
        <ul class="selector">
          <a href="home.php"><li class="home">Home</li></a>
          <a href="about.php"><li class="about">About</li></a>
          <a href="models.php"><li class="models">Models</li></a>
          <a href="contact.php"><li class="contact">Contact Us</li></a>
          <a href="sign.php"><li class="sign"><img class="profile" src="./../img/pfp.png" alt="" /></li></a>
        </ul>
      </div>
    </section>
    <p class="allbmw">DISCOVER ALL OUR BMW MODELS</p>
    <p id="descbmw">42 Models Avalible</p>
    <!--Buttons for scrolling to desired BMW-->
    <div class="scroll-buttons">
      <ul class="sb-list">
        <a href="#first-series"><li class="first-button">1</li></a>
        <a href="#second-series"><li class="second-button">2</li></a>
        <a href="#third-series"><li class="third-button">3</li></a>
        <a href="#fourth-series"><li class="fourth-button">4</li></a>
        <a href="#fifth-series"><li class="fifth-button">5</li></a>
        <a href="#seventh-series"><li class="seventh-button">7</li></a>
        <a href="#eighth-series"><li class="eighth-button">8</li></a>
        <a href="#x-series"><li class="xth-button">X</li></a>
        <a href="#ix-series"><li class="ixth-button">iX</li></a>
      </ul>
    </div>
    <a href="#descbmw" class="scroll-top">↑</a>
<?php include "db_config.php";?>
    <!--1 Series-->
    <section id="first-series">
      <p class="title-number">1</p>
      <div class="series-container">
      <?php
      $result = $conn->query("SELECT * FROM cars_info WHERE car_class=1");
      while ($row = $result->fetch_assoc()){
    
      ?>
      
      <div class="first">
        <img class="one" src="../img/<?php echo $row["Photo"];?>">
        <a href="singleCar.php?id=<?php echo $row['id']; ?>" class="car-link">
        <h1 class="title"><?php echo $row["Name"];?></h1></a>
        <h2 class="desc"><?php echo $row["Fuel"];?></h2>
        <h3 class="price"><?php echo $row["Price"];?></h3>
      </div>
      <?php } ?>
    </div>
    </section>
    <!--2 Series-->
    <section id="second-series">
      <p class="title-number">2</p>
      <div class="series-container">
      <?php
      $result = $conn->query("SELECT * FROM cars_info WHERE car_class=2");
      while ($row = $result->fetch_assoc()){
      
      ?>
      <div class="second">
        <img class="two" src="../img/<?php echo $row["Photo"];?>">
        <a href="singleCar.php?id=<?php echo $row['id']; ?>" class="car-link">
        <h1 class="title"><?php echo $row["Name"];?></h1></a>
        <h2 class="desc"><?php echo $row["Fuel"];?></h2>
        <h3 class="price"><?php echo $row["Price"];?></h3>
      </div>
      <?php } ?>
      </div>
    </section>
    <!--3 Series-->
    <section id="third-series">
      <p class="title-number">3</p>
      <div class="series-container">
      <?php
      $result = $conn->query("SELECT * FROM cars_info WHERE car_class=3");
      while ($row = $result->fetch_assoc()){
      
      ?>
      <div class="third">
        <img class="three" src="../img/<?php echo $row["Photo"];?>">
        <a href="singleCar.php?id=<?php echo $row['id']; ?>" class="car-link">
        <h1 class="title"><?php echo $row["Name"];?></h1></a>
        <h2 class="desc"><?php echo $row["Fuel"];?></h2>
        <h3 class="price"><?php echo $row["Price"];?></h3>
      </div>
      <?php } ?>
      </div>
    </section>
    <!--4 Series-->
    <section id="fourth-series">
      <p class="title-number">4</p>
      <div class="series-container">
      <?php
      $result = $conn->query("SELECT * FROM cars_info WHERE car_class=4");
      while ($row = $result->fetch_assoc()){
      
      ?>
      <div class="fourth">
        <img class="four" src="../img/<?php echo $row["Photo"];?>">
        <a href="singleCar.php?id=<?php echo $row['id']; ?>" class="car-link">
        <h1 class="title"><?php echo $row["Name"];?></h1></a>
        <h2 class="desc"><?php echo $row["Fuel"];?></h2>
        <h3 class="price"><?php echo $row["Price"];?></h3>
      </div>
      <?php } ?>
      </div>
    </section>
    <!--5 Series-->
    <section id="fifth-series">
      <p class="title-number">5</p>
      <div class="series-container">
      <?php
      $result = $conn->query("SELECT * FROM cars_info WHERE car_class=5");
      while ($row = $result->fetch_assoc()){
      
      ?>
      <div class="fifth">
        <img class="five" src="../img/<?php echo $row["Photo"];?>">
        <a href="singleCar.php?id=<?php echo $row['id']; ?>" class="car-link">
        <h1 class="title"><?php echo $row["Name"];?></h1></a>
        <h2 class="desc"><?php echo $row["Fuel"];?></h2>
        <h3 class="price"><?php echo $row["Price"];?></h3>
      </div>
      <?php } ?>
      </div>
    </section>
    <!--7 Series-->
    <section id="seventh-series">
        <p class="title-number">7</p>
        <div class="series-container">
        <?php
      $result = $conn->query("SELECT * FROM cars_info WHERE car_class=7");
      while ($row = $result->fetch_assoc()){
      
      ?>
        <div class="seventh">
          <img class="seven" src="../img/<?php echo $row["Photo"];?>">
          <a href="singleCar.php?id=<?php echo $row['id']; ?>" class="car-link">
        <h1 class="title"><?php echo $row["Name"];?></h1></a>
        <h2 class="desc"><?php echo $row["Fuel"];?></h2>
        <h3 class="price"><?php echo $row["Price"];?></h3>
      </div>
      <?php } ?>
        </div>
      </section>
      <!--8 Series-->
    <section id="eighth-series">
        <p class="title-number">8</p>
        <div class="series-container">
        <?php
      $result = $conn->query("SELECT * FROM cars_info WHERE car_class=8");
      while ($row = $result->fetch_assoc()){
      
      ?>
        <div class="eighth">
          <img class="eight" src="../img/<?php echo $row["Photo"];?>">
          <a href="singleCar.php?id=<?php echo $row['id']; ?>" class="car-link">
        <h1 class="title"><?php echo $row["Name"];?></h1></a>
        <h2 class="desc"><?php echo $row["Fuel"];?></h2>
        <h3 class="price"><?php echo $row["Price"];?></h3>
      </div>
      <?php } ?>
        </div>
      </section>
      <!--X Series-->
    <section id="x-series">
        <p class="title-number">X</p>
        <div class="series-container">
        <?php
      $result = $conn->query("SELECT * FROM cars_info WHERE car_class='X'");
      while ($row = $result->fetch_assoc()){
      
      ?>
        <div class="xmth">
          <img class="xm" src="../img/<?php echo $row["Photo"];?>">
          <a href="singleCar.php?id=<?php echo $row['id']; ?>" class="car-link">
        <h1 class="title"><?php echo $row["Name"];?></h1></a>
        <h2 class="desc"><?php echo $row["Fuel"];?></h2>
        <h3 class="price"><?php echo $row["Price"];?></h3>
      </div>
      <?php } ?>
      </div> 
    </section>
        <!--XI-->
        <section id="ix-series">
        <p class="title-number">iX</p>
        <div class="series-container">
        <?php
      $result = $conn->query("SELECT * FROM cars_info WHERE car_class='iX'");
      while ($row = $result->fetch_assoc()){
      
      ?>
        <div class="ixth">
          <img class="ix" src="../img/<?php echo $row["Photo"];?>">
          <a href="singleCar.php?id=<?php echo $row['id']; ?>" class="car-link">
        <h1 class="title"><?php echo $row["Name"];?></h1></a>
        <h2 class="desc"><?php echo $row["Fuel"];?></h2>
        <h3 class="price"><?php echo $row["Price"];?></h3>
      </div>
      <?php } ?>
      </div>
        </section>
        <section id="footer">
          <h1 class="title-for-links">Related</h1>
          <p class="rights1"><a href="https://www.bmw.com/en/index.html">BMW.com</a></p>
          <p class="rights2"><a href="https://www.bmw-m.com/en/index.html">BMW-M.com</a></p>
          <p class="rights3"><a href="https://www.bmwgroup.com/en.html">BMW Group</a></p>
          <p class="rights4"><a href="sign.html">BMW ConnectedDrive</a></p>
          <img class="insta" src="./../img/Instagram-Emblem.png" alt="">
          <img class="fb" src="./../img/7ccb40e2fa23d39346cc9dc8691d68b3-removebg-preview.png" alt="">
          <img class="yt" src="./../img/Black-youtube-icon-design-on-transparent-background-PNG-removebg-preview.png" alt="">
      </section>
    </body>
</html>
