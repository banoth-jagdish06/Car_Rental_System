<!DOCTYPE html>
<html lang="en">
<head>
     <!--  adding of logo to web site -->
     <link rel = "icon" href ="Logo.png" type ="image/x-icon">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>form</title>
    <style>
        h1{
            text-align: center;
            color: black;
            font-size: 4em;
        }
        h2{
            text-align: center;
            font-size: 2rem;
            color: red;
        }
        .circle {
                margin-bottom: 60%;
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
    </style>
</head>
<body>
    <h1>Submited Successfully..!</h1>
    <h2>Plzss Wait For Confirmation Mail..&#10084;</h2>
    <!--Back to home-->
    <div class="circle">
            <a href="index.php" class="choose">Back &#8592 </a>
          </div>
</body>
</html>