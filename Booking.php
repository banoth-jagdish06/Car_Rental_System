<?php
session_start();

include("connections.php");
include("functions.php");


if ($_SERVER['REQUEST_METHOD'] == "POST") {
	//something was posted
	$first_name = $_POST['first_name'];
	$email_id = $_POST['email_id'];
    $mobile_number = $_POST['mobile_number'];
    $car_name = $_POST['car_name'];

	if (!empty($first_name) && !empty($email_id) && !empty($mobile_number) && !empty($car_name) && !is_numeric($first_name)) {

		//save to database
		$user_id = random_num(20);
		$query = "insert into cars_bookings (first_name,email_id,mobile_number,car_name) values ('$first_name','$email_id','$mobile_number','$car_name')";

		mysqli_query($con, $query);

		header("Location: form.php");
		die;
	} else {
		echo "Please enter some valid information!";
	}
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <!--  adding of logo to web site -->
    <link rel = "icon" href ="Logo.png" type ="image/x-icon">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Booking</title>
    <style>
        *{
            margin: 2px;
            flex-direction: row;
        }
        body{
            background-color: white;
        }
        .box{
            color:black;
            font-size:25px;
            padding-left: 60%;
            padding-bottom: 2%;
            padding-top: -200%;
            font-family: 'Young Serif', serif; 
           
        }
        .box1{
            padding-left: 70%;
            padding-bottom: 2%;
            padding-top: -200%;
            font-family: 'Young Serif', serif; 
            border-radius:10px;
            
        }
        .circle {
                margin-bottom: 0%;
                margin-left: 50%;
                width: 100px;
                height: 100px;
                background-color: #cbf23e;
                border-radius: 50%; /* Makes it a circle */
                display: flex;
                justify-content: center;
                align-items: center;
                text-align: center;
                font-size: 2rem;
            }

            /* Style for the button inside the circle */
            .circle button {
                background-color: #e74c3c;
                color: rgb(252, 252, 252);
                border: none;
                padding: 10px 20px;
                border-radius: 5px;
                cursor: pointer;
            }
        
        .slideshow{
            background-color: white;
            width :700px;
            height:400px;
        }
        .img{
            width: 100%;
            height: 100%;
            object-fit: cover;
            animation: reveal 20s infinite;
        }
        @keyframes reveal{
            0%{
                opacity: 0.1;
                transform: scale(0.8);
            }
            100%{
                opacity: 1;
                transform: scale(1);
            }
        }
        
    </style>    
</head>
<body>

<!---photos--->
    <div class="slideshow">
      <div class="home">
        <img src="family car01.png" alt="" class="img">
      </div>
      <script>
        let imgEle =document.querySelector('.img')

        imgs=["family car02.png","family car03.png","family car04.png","family car05.png","family car06.png","family car07.png","family car08.png",]
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

    <form method="post">

    <!-- Frist name-->
    <div class="box">
    <label for="first_name" class="fl fontLabel">
      <h5>Frist Name:</h5>
    </label>
    <div class="new iconBox">
      <i class="fa fa-user" aria-hidden="true"></i>
    </div>
    <div class="fr">
      <input type="text" name="first_name"  placeholder="first Name" class="textBox" autofocus="on" required>
    </div>
    <div class="clr"></div>
    </div>
    <br>
    <!-- Last name-->
    <div class="box">
    <label for="last_name" class="fl fontLabel">
      <h5>Last Name:</h5>
    </label>
    <div class="new iconBox">
      <i class="fa fa-user" aria-hidden="true"></i>
    </div>
    <div class="fr">
      <input type="text" name="last_name"  placeholder="Last Name" class="textBox" autofocus="on" required>
    </div>
    <div class="clr"></div>
    </div>
    <br>
    <!-- Email Id-->
    <div class="box">
    <label for="email_id" class="fl fontLabel">
      <h5>Email Id:</h5>
    </label>
    <div class="new iconBox">
      <i class="fa fa-user" aria-hidden="true"></i>
    </div>
    <div class="fr">
      <input type="text" name="email_id"  placeholder="Email Id" class="textBox" autofocus="on" required>
    </div>
    <div class="clr"></div>
    </div>
    <br>
    <!-- mobile number-->
    <div class="box">
    <label for="mobile_number" class="fl fontLabel">
      <h5>Mobile Number:</h5>
    </label>
    <div class="new iconBox">
      <i class="fa fa-user" aria-hidden="true"></i>
    </div>
    <div class="fr">
      <input type="text" name="mobile_number"  placeholder="Mobile Number" class="textBox" autofocus="on" required>
    </div>
    <div class="clr"></div>
    </div>
    <br>
    <!-- Cars Details-->
    <div class="box">
    <label for="car_name" class="fl fontLabel">
      <h5>Car Name:</h5>
    </label>
    <div class="new iconBox">
      <i class="fa fa-user" aria-hidden="true"></i>
    </div>
    <div class="fr">
      <input type="number" name="car_name"  placeholder="Car Name" class="textBox" autofocus="on" required>
    </div>
    <div class="clr"></div>
    </div>
    <br>
    <!--Days-->
    <div class="box">
    <label for="Days" class="fl fontLabel">
      <h5>Days:</h5>
    </label>
    <div class="new iconBox">
      <i class="fa fa-user" aria-hidden="true"></i>
    </div>
    <div class="fr">
    <input type="number" name="Days" placeholder="Days" class="textBox" autofocus="on" required />
    </div>
    <div class="clr"></div>
    </div>
    <br>
    <!--Gender-->
    <div class="box">
        <span class="input-group-text" id="basic-addon2">Gender:</span>
        <input type="radio" name="gender" value="male"> Male
        <input type="radio" name="gender" value="female"> Female
        <input type="radio" name="gender" value="Other"> Other
    </div>
    <!--Submit-->
    <div class="box1">
        <input type="Submit" name="Submit" class="submit" value="Submit">
    </div> 
</form>
<!--Back to home-->
          <div class="circle">
            <a href="index.php" class="choose">Back &#8592 </a>
          </div>

</body>
</html>