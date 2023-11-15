<?php

session_start();

include("connections.php");
include("functions.php");


if ($_SERVER['REQUEST_METHOD'] == "POST") {
	//something was posted
	$user_name = $_POST['user_name'];
	$password = $_POST['password'];

	if (!empty($user_name) && !empty($password) && !is_numeric($user_name)) {

		//read from database
		$query = "select * from cars where user_name = '$user_name' limit 1";
		$result = mysqli_query($con, $query);

		if ($result) {
			if ($result && mysqli_num_rows($result) > 0) {

				$user_data = mysqli_fetch_assoc($result);

				if ($user_data['password'] === $password) {

					$_SESSION['user_id'] = $user_data['user_id'];
					header("Location: index.php");
					die;
				}
			}
		}

		echo "<center><b>wrong username or password!</b></center>";
	} else {
		echo "<center><b>wrong username or password!</b></center>";
	}
}

?>

<!DOCTYPE html>
<html>

<head>
  <title>Login</title>
<!--  adding of logo to web site -->
<link rel = "icon" href ="Logo.png" type ="image/x-icon">
  
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <link rel="stylesheet"  href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,400;1,100&display=swap" rel="stylesheet">
    <script src='main.js'></script>
  <style>   
   .box1{
            color:white;
            font-size: 20px;
            font-weight: 50px;
            border-radius:20px;
            padding:rem;
            padding-left:1000px;
            padding-right:200px;
            font-family: 'Young Serif', serif;
        }
        .box2{
            color:white;
            font-size: 20px;
            font-weight: 50px;
            border-radius:20px;
            padding:rem;
            padding-left:1000px;
            padding-right:200px;
            font-family: 'Young Serif', serif;
        }
        .box3{
            color:white;
            font-size: 20px;
            font-weight: 50px;
            border-radius:20px;
            padding-left: 200px;
            padding-left:1000px;
            padding-right:200px;
            font-family: 'Young Serif', serif;
        }
        h1{
        text-align: center;
        color: yellow;
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
            padding-left:900px;
            padding-right:200px;
            font-family: 'Young Serif', serif; 
    }
    h4{    
            color: white;
            text-align: center;
            padding-left:1000px;
            padding-right:100px;
            padding-top: 45px;
            font-variant:normal;
            font-family: 'Young Serif', serif;
        }
    body{
        background-color: black;
        background-image: url(blackground.png);
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
  
   
<!-- login boxs -->
<!-- name -->
<div id="box">

<form method="post">
    <div>
        <h2><center>Login</center></h2>
    </div>

    <div class="box1">
        <label for="user_name" class="fl fontLabel">
            <h5>User Name:</h5>
        </label>

        <div class="new iconBox">
            <i class="fa fa-user" aria-hidden="true"></i>
        </div>

        <div class="fr">
            <input type="text" name="user_name" placeholder="User Name" class="textBox" autofocus="on" required>
        </div>

        <div class="clr"></div>
    </div>
       <br>

<!-- password -->
       <div class = "box2">
            <label for = "password "class="f1 fontLabel">
                <h5> Password:</h5>
            </label>
            <div class ="new iconBox">
                <i class=" fa fa-user" aria-hidden="true"></i>
            </div>
            <div class = "fr">
                <input type = "text" name = "password" placeholder="Password" class ="textbox">
            </div>
            <div class ="clr"></div>
       </div>
       <br>
       <br>
<!-- submit button -->
       <div class ="box3">
        <input type ="submit" name = "Submit" class="submit"value="SUBMIT">
       </div> 
       <h4>Still Not Registered? <a href="register.php">Sign Up Here</a></h4>
      
</body>

</html>