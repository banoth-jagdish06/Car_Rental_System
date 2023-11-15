<!DOCTYPE html>
<html>
<head>
<!--  adding of logo to web site -->
<link rel = "icon" href ="Logo.png" type ="image/x-icon">
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>services</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel='stylesheet' type='text/css' media='screen' href='main.css'>
    <script src='main.js'></script>
    <style>
        *{
            margin: 2px;
            flex-direction: row;
        }
        body{
            background-color: white;
        }
        .container1{
            text-align: center;
            background-color:white;
            width: 550px;
            height: 600px;
            position: relative;
            justify-items: center;
            padding: 10px;
            margin-top:4%;
            flex-direction: column;
            margin-left: 10%;
            position: relative;

        }
        .container2{
            text-align: center;
            background-color:white;
            width: 550px;
            height: 630px;
            position: relative;
            display: flex;
            justify-items: center;
            padding: 10px;
            margin-top:0%;
            flex-direction: column;
            margin-left:55%; 
            
        }
        .container3{
            text-align: center;
            background-color:white;
            width: 550px;
            height: 600px;
            position: relative;
            display: flex;
            justify-items: center;
            padding: 10px;
            margin-top:%;
            flex-direction: column;
            margin-left: 10%;
            position: relative;
        }
        p{
            padding-top: 50px;
            text-align: center;
            font-size: 2rem;
            font-family: 'Alfa Slab one',cursive;
            color: red;
        }
        h1{
            color: black;
            font-family:'Alfa Slab one',cursive;
            font-size: 2rem;
        }
        .image1{
            margin-left:100%;
            margin-top: -80%;  
        }
        .image2{
            margin-left: -240%;
            margin-top: -115%;
        }
        .image3{
            margin-left: -240%;
            margin-bottom: -550%;
        }
        .image4{
            margin-left:120%;
            margin-top: -80%;  
        }
        .box{
            font-size: 2rem;
            background-color: black;
            border-radius: 8%;
            width: 300px;
            height: 80px;  
            text-align: center; 
            margin-left: 50%; 
            color: white;
        }
        .circle {
                   
                    margin-left: 75%;
                    margin-top: -7%;
                    width: 100px;
                    height: 100px;
                    background-color: yellow;
                    border-radius: 50%; /* Makes it a circle */
                    display: flex;
                    justify-content: center;
                    align-items: center;
                    text-align: center;
                    font-size: 2rem;
                }

/* Style for the button inside the circle */
                .circle button {
                    color: white;
                    border: none;
                    padding: 10px 20px;
                    border-radius: 5px;
                    cursor: pointer;
                }
                    </style>
</head>

<body>
<!-- container1-->
    <div class ="container1">
        <h1> <u>Car subscription vs buying</u> </h1>
        <p><b>*Zero down payment & road tax<br> <br>
         *No long term commitment <br><br>
          *No loan process, no cibil check <br><br> 
          *Doorstep pick & drop
          <br><br> *for maintenance & service</b></p>
        <div class="image1">
          <img src="Thor.png" alt = "" height="450" width="700">
        </div>  


    </div>

<!-- container2-->
<div class ="container2">
        <h1><u> Insurance and maintenance includes</u></h1>
        <p>*Car insurance provides financial protection in the event of accidents, theft, or damage to your vehicle, helping you cover repair or replacement costs.
            <br><br>
            *Health insurance is essential for individuals, offering coverage for medical expenses, doctor visits, and hospital stays, ensuring access to quality healthcare.
        </p>
        <div class="image2">
          <img src="car insurance.png" alt = "" height="200" width="260">
        </div>
        <div class="image3">
          <img src="human incurance.png" alt = "" height="400" width="370">
        </div>
</div>
<!-- container3-->
<div class ="container3">
        <h1><u>Routine service and maintenance </u></h1>
        <p>*Oil top-up or replacement<br> *Filter replacement  <br>  *Tyre  rotation</p>
        <br>
        <h1><u>Normal wear and tear</u></h1>
        <p>*Suspension partst<br> *Manufacturer warranty<br>  *Brake parts <br>*Clutch parts</p>

        <div class="image4">
          <img src=" maintenance.png" alt = "" height="400" width="370">
        </div>
    </div>

<!--button-->
   <div class="box">
    <center> Customer Care No : 1800 510 360 </center>
  </div>
<!--button1-->
          <div class="circle">
            <a href="index.php" class="choose">Back &#8592 </a>
          </div>
    
          
    
</body>
</html>