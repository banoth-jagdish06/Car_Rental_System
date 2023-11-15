<?php
session_start();

include("connections.php");
include("functions.php");


if ($_SERVER['REQUEST_METHOD'] == "POST") {
	//something was posted
	$user_name = $_POST['user_name'];
	$password = $_POST['password'];

	if (!empty($user_name) && !empty($password) && !is_numeric($user_name)) {

		//save to database
		$user_id = random_num(20);
		$query = "insert into cars (user_id,user_name,password) values ('$user_id','$user_name','$password')";

		mysqli_query($con, $query);

		header("Location: login.php");
		die;
	} else {
		echo "Please enter some valid information!";
	}
}
?>
<!DOCTYPE html>
<html>
<head>
<link rel = "icon" href ="Logo.png" type ="image/x-icon">
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>register page</title>
<!--  adding of logo to web site -->
<link rel = "icon" href ="Logo.png" type ="image/x-icon">
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel='stylesheet' type='text/css' media='screen' href='main.css'>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <link rel="stylesheet"  href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,400;1,100&display=swap" rel="stylesheet">
    <script src='main.js'></script>
    <style>
        .box1{
            color:black;
            font-size: 20px;
            font-weight: 50px;
            border-radius:20px;
            padding-left:1000px;
            padding-right:200px;
            font-family: 'Young Serif', serif;
        }
        .box2{
            color:black;
            font-size: 20px;
            font-weight: 50px;
            border-radius:20px;
            padding-left:1000px;
            padding-right:200px;
            font-family: 'Young Serif', serif;
        }
        .box3{
            color:black;
            font-size: 20px;
            font-weight: 50px;
            border-radius:20px;
            padding-left: 200px;
            padding-left:1000px;
            padding-right:200px;
            font-family: 'Young Serif', serif;
            font-weight: 40px;
    }
    .box4{
            color:black;
            font-size: 20px;
            font-weight: 50px;
            border-radius:20px;
            padding-left: 200px;
            padding-left:1000px;
            padding-right:200px;
            font-family: 'Young Serif', serif;
    }
    .box5{
            height: 40px;
            margin: 20px;
            width: 160px;
            font-size: 20px;
            font-weight: 50px;
            border-radius:10px;
            padding-left:1080px;
            padding-right:200px;
            font-family: 'Young Serif', serif;  
    }
    
     h1{
        text-align: center;
        color: red;
        font-size: 100px;
        font-family: 'Abril Fatface', cursive;
        font-family: 'Young Serif', serif;
    } 
     h2{ 
            color:white;
            margin-top: 10px;
            font-size: 35px;
            font-weight: 35px;
            border-radius:30px;
            position: relative;
            padding-left:1050px;
            padding-right:200px;
            font-family: 'Young Serif', serif; 
    }
    .h3class{
            margin-left: 150px;
            width: 700px;
            height: 150px;
            background-color: white;
            animation-name: example;
            animation-duration: 10s;
            text-align:center;
            font-size: 30px;
            border-radius: 60px;

            }

            @keyframes example {
            from {background-color: red;}
             to {background-color: yellow;}

     }
    h4{    
            color: black;
            text-align: center;
            padding-left:1000px;
            padding-right:100px;
            padding-top: 10px;
            font-variant:normal;
            font-family: 'Young Serif', serif;
        }
    body{
        background-color: white;
        background-image: url("suzuki-swift.png");
        background-size:cover;
        background-position:0px;
        padding-top: 100px;
    } 
    image{
        align-items: center;
    }
        
    </style>
     <h1 class="animate__animated animate__heartBeat animate_infinite"><b>OUR.CARS</b></h1>
</head>
<body>
<div id="box">

<form method="post">
  <div>
    <h2>Signup</h2>
  </div>
<!--user name -->
  <div class="box1">
    <label for="user_name" class="fl fontLabel">
      <h5>User Name:</h5>
    </label>
    <div class="new iconBox">
      <i class="fa fa-user" aria-hidden="true"></i>
    </div>
    <div class="fr">
      <input type="text" name="user_name"  placeholder="User Name" class="textBox" autofocus="on" required>
    </div>
    <div class="clr"></div>
  </div>
<!---Phone No.------>
  <div class="box2">
    <label for="phone" class="fl fontLabel">
      <h5> Phone No.: </h5>
    </label>
    <div class="fl iconBox"><i class="fa fa-phone-square" aria-hidden="true"></i></div>
    <div class="fr">
      <input type="text" required name="phone_no" maxlength="10" placeholder="Phone No." class="textBox">
    </div>
    <div class="clr"></div>
  </div>

<!---Email ID---->
  <div class="box3">
    <label for="email" class="fl fontLabel">
      <h5>Email ID:</h5>
    </label>
    <div class="fl iconBox"><i class="fa fa-envelope" aria-hidden="true"></i></div>
    <div class="fr">
      <input type="email" required name="email" placeholder="Email Id" class="textBox">
    </div>
    <div class="clr"></div>
  </div>
<!--Password ----->
  <div class="box4">
    <label for="password" class="fl fontLabel">
      <h5>Password:</h5>
    </label>
    <div class="fl iconBox"><i class="fa fa-key" aria-hidden="true"></i></div>
    <div class="fr">
      <input type="Password" required name="password" placeholder="Password" class="textBox">
    </div>
    <div class="clr"></div>
  </div>
  <br>

<!-- submit -->
  <div class="box5">
    <input type="Submit" name="Submit" class="submit" value="Register">
  </div>
  <h4>Already Registered? <a href="login.php">Login Here</a>
  </h4>
</form>

<div class = "h3class">
   <h1>choose your car</h1>
</div>
</body>
</html>

