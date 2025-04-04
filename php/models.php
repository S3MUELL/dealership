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
      <?php
      $result = $conn->query("SELECT * FROM cars_info WHERE car_class=1");
      while ($row = $result->fetch_assoc()){
      
    
      ?>
      
      <div class="first">
        <img class="one" src="../img/<?php echo $row["Photo"];?>">
        <h1 class="title"><?php echo $row["Name"];?></h1>
        <h2 class="desc"><?php echo $row["Fuel"];?></h2>
        <h3 class="price"><?php echo $row["Price"];?></h3>
      </div>
      <?php } ?>
    </section>
    <!--2 Series-->
    <section id="second-series">
      <p class="title-number">2</p>
      <div class="second">
        <img class="two" src="/img/2.jpg" alt="" />
        <h1 class="title">BMW 2 Series</h1>
        <h2 class="desc">Diesel/Petrol</h2>
        <h3 class="price">Upcoming</h3>
      </div>
      <div class="secondM">
        <img class="twom" src="/img/2m.jpg" alt="" />
        <h1 class="title">BMW 2 Series M</h1>
        <h2 class="desc">Petrol</h2>
        <h3 class="price">Upcoming</h3>
      </div>
    </section>
    <!--3 Series-->
    <section id="third-series">
      <p class="title-number">3</p>
      <div class="third">
        <img class="three" src="/img/3.png" alt="" />
        <h1 class="title">BMW 3 Series</h1>
        <h2 class="desc">Diesel/Petrol</h2>
        <h3 class="price">From EUR 55'000</h3>
      </div>
      <div class="threeT">
        <img class="threet" src="/img/3t.jpg" alt="" />
        <h1 class="title">BMW 3 Series Touring</h1>
        <h2 class="desc">Diesel/Petrol</h2>
        <h3 class="price">From EUR 56'200</h3>
      </div>
      <div class="threeM">
        <img class="threem" src="/img/3m.jpg" alt="" />
        <h1 class="title">BMW 3 Series M</h1>
        <h2 class="desc">Petrol</h2>
        <h3 class="price">From EUR 110'200</h3>
      </div>
    </section>
    <!--4 Series-->
    <section id="fourth-series">
      <p class="title-number">4</p>
      <div class="fourth">
        <img class="four" src="/img/4.jpg" alt="" />
        <h1 class="title">BMW 4 Series</h1>
        <h2 class="desc">Diesel/Petrol</h2>
        <h3 class="price">From EUR 55'400</h3>
      </div>
      <div class="fourthM">
        <img class="fourm" src="/img/4m.jpg" alt="" />
        <h1 class="title">BMW 4 Series M</h1>
        <h2 class="desc">Petrol</h2>
        <h3 class="price">From EUR 81'600</h3>
      </div>
    </section>
    <!--5 Series-->
    <section id="fifth-series">
      <p class="title-number">5</p>
      <div class="fifth">
        <img class="five" src="/img/5.jpg" alt="" />
        <h1 class="title">BMW 5 Series</h1>
        <h2 class="desc">Diesel/Petrol/Plug-in Hybrid</h2>
        <h3 class="price">From EUR 65'700</h3>
      </div>
      <div class="fifthT">
        <img class="fivet" src="/img/5t.jpg" alt="" />
        <h1 class="title">BMW 5 Series Touring</h1>
        <h2 class="desc">Diesel/Petrol/Plug-in Hybrid</h2>
        <h3 class="price">From EUR 70'000</h3>
      </div>
      <div class="fifthI">
        <img class="fivei" src="/img/5i.jpg" alt="" />
        <h1 class="title">BMW i5</h1>
        <h2 class="desc">Electric</h2>
        <h3 class="price">From EUR 76'700</h3>
      </div>
      <div class="fifthIT">
        <img class="fiveit" src="/img/5it.jpg" alt="" />
        <h1 class="title">BMW i5 Touring</h1>
        <h2 class="desc">Electric</h2>
        <h3 class="price">From EUR 80'000</h3>
      </div>
      <!--M5-->
      <div class="fifthM">
        <img class="fivem" src="/img/5m.png" alt="" />
        <h1 class="title">BMW M5</h1>
        <h2 class="desc">Plug-in Hybrid</h2>
        <h3 class="price">From EUR 150'800</h3>
      </div>
      <div class="fifthMT">
        <img class="fivemt" src="/img/m5t.jpg" alt="" />
        <h1 class="title">BMW M5 Touring</h1>
        <h2 class="desc">Plug-in Hybrid</h2>
        <h3 class="price">From EUR 157'800</h3>
      </div>
    </section>
    <!--7 Series-->
    <section id="seventh-series">
        <p class="title-number">7</p>
        <div class="seventh">
          <img class="seven" src="/img/7.png" alt="" />
          <h1 class="title">BMW 7 Series</h1>
          <h2 class="desc">Diesel/Plug-in Hybrid</h2>
          <h3 class="price">From EUR 143'200</h3>
        </div>
          <div class="seventhI">
            <img class="seveni" src="/img/7i.png" alt="" />
            <h1 class="title">BMW i7</h1>
            <h2 class="desc">Electric</h2>
            <h3 class="price">From EUR 140'500</h3>
          </div>
      </section>
      <!--8 Series-->
    <section id="eighth-series">
        <p class="title-number">8</p>
        <div class="eighth">
          <img class="eight" src="/img/8.png" alt="" />
          <h1 class="title">BMW 8 Coupé</h1>
          <h2 class="desc">Diesel/Petrol</h2>
          <h3 class="price">From EUR 130'800</h3>
        </div>
        <div class="eighthC">
          <img class="eightc" src="/img/8c.png" alt="" />
          <h1 class="title">BMW 8 Cabriolet</h1>
          <h2 class="desc">Diesel/Petrol</h2>
          <h3 class="price">From EUR 143'000</h3>
        </div>
        <div class="eighthG">
          <img class="eightg" src="/img/8g.png" alt="" />
          <h1 class="title">BMW 8 Series Gran Coupé</h1>
          <h2 class="desc">Diesel/Petrol</h2>
          <h3 class="price">From EUR 132'700</h3>
        </div>
        <!--M8-->
        <div class="eighthM">
          <img class="eightm" src="/img/8m.jpg" alt="" />
          <h1 class="title">BMW M8 Coupé</h1>
          <h2 class="desc">Petrol</h2>
          <h3 class="price">From EUR 168'500</h3>
        </div>
        <div class="eighthMC">
          <img class="eightmc" src="/img/8mc.jpg" alt="" />
          <h1 class="title">BMW M8 Cabriolet</h1>
          <h2 class="desc">Petrol</h2>
          <h3 class="price">From EUR 178'600</h3>
        </div>
        <div class="eighthMG">
            <img class="eightmg" src="/img/8mg.jpg" alt="" />
            <h1 class="title">BMW M8 Gran Coupé</h1>
            <h2 class="desc">Petrol</h2>
            <h3 class="price">From EUR 164'700</h3>
          </div>
      </section>
      <!--X Series-->
    <section id="x-series">
        <p class="title-number">X</p>
        <div class="xmth">
          <img class="xm" src="/img/xm.png" alt="" />
          <h1 class="title">BMW XM</h1>
          <h2 class="desc">Plug-in Hybrid</h2>
          <h3 class="price">From EUR 135'800</h3>
        </div>
        <div class="x-seventh">
          <img class="xseven" src="/img/7x.jpg" alt="" />
          <h1 class="title">BMW X7</h1>
          <h2 class="desc">Diesel/Petrol</h2>
          <h3 class="price">From EUR 125'000</h3>
        </div>
        <div class="x-sixth">
            <img class="xsix" src="/img/6x.jpg" alt="" />
            <h1 class="title">BMW X6</h1>
            <h2 class="desc">Diesel/Petrol</h2>
            <h3 class="price">From EUR 102'200</h3>
          </div>
        <div class="x-sixthM">
            <img class="xsixm" src="/img/6xm.jpg" alt="" />
            <h1 class="title">BMW X6M</h1>
            <h2 class="desc">Petrol</h2>
            <h3 class="price">From EUR 140'700</h3>
        </div>
        <div class="x-fifth">
            <img class="xfive" src="/img/5x.jpg" alt="" />
            <h1 class="title">BMW X5</h1>
            <h2 class="desc">Diesel/Petrol</h2>
            <h3 class="price">From EUR 100'100</h3>
        </div>
        <div class="x-fifthM">
            <img class="xfivem" src="/img/5xm.png" alt="" />
            <h1 class="title">BMW X5M</h1>
            <h2 class="desc">Petrol</h2>
            <h3 class="price">From EUR 138'600</h3>
        </div>
        <div class="x-fourth">
            <img class="xfour" src="/img/4x.png" alt="" />
            <h1 class="title">BMW X4</h1>
            <h2 class="desc">Diesel/Petrol</h2>
            <h3 class="price">From EUR 67'530</h3>
        </div>
        <div class="x-fourthM">
            <img class="xfourm" src="/img/4xm.png" alt="" />
            <h1 class="title">BMW X4M</h1>
            <h2 class="desc">Petrol</h2>
            <h3 class="price">From EUR 95'700</h3>
        </div>
        <div class="x-third">
            <img class="xthree" src="/img/3x.jpg" alt="" />
            <h1 class="title">BMW X3</h1>
            <h2 class="desc">Diesel/Petrol</h2>
            <h3 class="price">From EUR 65'000</h3>
        </div>
        <div class="x-second">
            <img class="xtwo" src="/img/2x.png" alt="" />
            <h1 class="title">BMW X2</h1>
            <h2 class="desc">Diesel/Petrol</h2>
            <h3 class="price">From EUR 53'200</h3>
        </div>
        <div class="x-secondM">
            <img class="xtwom" src="/img/2xm.jpg" alt="" />
            <h1 class="title">BMW X2 M35i xDrive</h1>
            <h2 class="desc">Petrol</h2>
            <h3 class="price">From EUR 74'200</h3>
        </div>
        <div class="x-first">
            <img class="xone" src="/img/1x.jpg" alt="" />
            <h1 class="title">BMW X1</h1>
            <h2 class="desc">Diesel/Petrol</h2>
            <h3 class="price">From EUR 48'300</h3>
        </div>
        <div class="x-firstM">
            <img class="xonem" src="/img/1xm.jpg" alt="" />
            <h1 class="title">BMW X1 M35i xDrive</h1>
            <h2 class="desc">Petrol</h2>
            <h3 class="price">From EUR 72'450</h3>
        </div>
    </section>
        <!--XI-->
        <section id="ix-series">
        <p class="title-number">iX</p>
        <div class="ixth">
          <img class="ix" src="/img/iX.png" alt="" />
          <h1 class="title">BMW iX</h1>
          <h2 class="desc">Electric</h2>
          <h3 class="price">From EUR 94'500</h3>
        </div>
        <div class="x-thirdI">
            <img class="xthreei" src="/img/3xi.jpg" alt="" />
            <h1 class="title">BMW iX3</h1>
            <h2 class="desc">Electric</h2>
            <h3 class="price">From EUR 75'600</h3>
        </div>
        <div class="x-secondI">
          <img class="xtwoi" src="/img/2xi.png" alt="" />
          <h1 class="title">BMW iX2</h1>
          <h2 class="desc">Electric</h2>
          <h3 class="price">From EUR 53'200</h3>
        </div>
        <div class="x-firstI">
            <img class="xonei" src="/img/1xi.jpg" alt="" />
            <h1 class="title">BMW iX1</h1>
            <h2 class="desc">Electric</h2>
            <h3 class="price">From EUR 50'400</h3>
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
