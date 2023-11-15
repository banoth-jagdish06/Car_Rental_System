<?php
session_start();

include("connections.php");
include("functions.php");

$user_data = check_login($con);

?>

<!DOCTYPE html>
<!--  adding of logo to web site -->
<link rel = "icon" href ="Logo.png" type ="image/x-icon">
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>dashboard</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <link href="indexstylesheet.css" rel="stylesheet">
</head>

<body>
  <div class ="logo">
  <img src="whitelogo2.png" alt="Italian Trulli" width="200" height="200">
  </div>
  <section class ="header">

    <nav class="navbar navbar-expand-lg navabar-light">

      <div class="container - fluid">

        <a class="navbar-brand" href ="" >
          <i> our.cars</i>
        </a>

        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
<!-- navbar tools -->
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav me-auto mb-2 mb-lg-0">

            <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="index.php"><b> Home</b> </a>
            </li>
            <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="cars.php"><b> Cars</b> </a>
            </li>
            <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="services.php"><b>Services </b> </a>
            </li>
            <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="Reviews.php"><b>Reviews </b> </a>
            </li>
            <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="#"><b> Contact Us</b> </a>
            </li>
            
            <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="About.php"><b>About-W/D </b> </a>
            </li>

          </ul>
          <a href="Booking.php" class ="Book"> Book Ride</a>
        </div>
      </div>
    </nav>
    <!--photos -->
      <div class="slideshow">
        <div class="home">
          <img src="family car01.png" alt="" class="img">
        </div>
        <script>
          let imgEle =document.querySelector('.img')

          imgs=["family car02.png","family car03.png","family car04.png","family car05.png","family car06.png","family car07.png","family car08.png"]
          let i = 0;
          setInterval(
            ()=>{
                  imgEle.src=imgs[i];
                  i++
                  if(i==imgs.length){
                    i = 0
                  }
            },1000
          )
        </script>
      </div>

    <div class ="animation">
      <a href="cars.php" class="choose"> Choose Your Car </a>
    </div>
    <!-- circle -->
    <div class="circle red"></div>
    <div class="circle green"></div>
    <div class="circle blue"></div>

    














  </section>

</body>




