<?php
// Initialize the session
session_start();
 
// Check if the user is logged in, if not then redirect him to login page
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: login.php");
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Wheat Recycling | Post Harvest Management</title>

    <link href="https://fonts.googleapis.com/css2?family=Mukta:wght@300;400&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Crimson+Pro:wght@300&display=swap" rel="stylesheet">

    <style>
        *{
        padding: 0;
        margin: 0;
        }
        .navbar{
            /* border: 3px solid red; */
            position: absolute;
            width: 99.95%;
            height: 6vh;
            background-color: black;
            align-items: center;
            justify-content: space-between;
            display: flex;
        }
        .logo{
            width: 130px;
            border-radius: 10px;
            position: absolute;
            top: 8%;
            left: 10%;
        }
        .navbar ul{
            /* border: 3px solid gray; */
            margin-left: 75%;
        }
        .navbar ul li{
            /* border: 3px solid darkgreen; */
            border-radius: 10px;
            margin: 2px 2px;
            list-style: none;
            display: inline-block;
            padding-left: 30px;
            padding-right: 30px;
            font-size: 28px;
            text-decoration: none;
        }
        .navbar ul li a{
            text-decoration: none;
            color: white;
            font-size: 23px;
        }
        .navbar ul li:hover{
            background-color: rgba(100, 148, 237, 0.658);
        }
        .navbar ul li a:hover, .navbar li a::after{
            width: 100%;
            text-decoration: underline;
            transition: 0.5s;
        }
        .midden{
        /* border: 2px solid red; */
        background-color: rgba(0, 0, 0, 0.863);
        position: absolute;
        top:6%;
        display: flex;
        width: 99.94%;
        height: 15vh;
        }
        .vl1 {
            border-left: 2px solid green;
            top: 6%;
            height: 90px;
            position: absolute;
            left: 20%;
        }
        .title{
            position: absolute;
            left: 22%;
            top: 18%;
            font-family: sans-serif;
        }
        .title h1{
            font-size: 43px;
            color: green;
        }
        .title h2{
            color: rgba(255, 255, 255, 0.877);
        }
        .data{
        border: 2px solid black;
        background-color: black;
        color: white;
        font-size: 23px;
        padding-top: 0.4%;
        position: absolute;
        width: 99.75%;
        height: 5vh;
        display: flex;
        top: 100%;
        }
        .data1{
        border: 2px solid black;
        background-color: black;
        color: white;
        font-size: 23px;
        padding-top: 0.4%;
        position: absolute;
        width: 89.70%;
        height: 7vh;
        display: flex;
        top: 145%;
        padding-left: 10%;
        }
        .data2{
        /* border: 2px solid red; */
        background-color: rgba(0, 0, 0, 0.753);
        color: white;
        font-size: 23px;
        padding-top: 0.4%;
        position: absolute;
        width: 80%;
        height: 140vh;
        display: flex;
        top: 204%;
        padding: 3% 10%;
        font-family: 'Mukta', sans-serif;
        font-weight: normal;
        }
        .text{
        border: 1px solid white;
        color: white;
        font-size: 20px;
        font-weight: lighter;
        position: absolute;
        width: 70%;
        height: 130vh;
        display: inline-block;
        background-color: black;
        padding: 2% 5%;
        }
        .end{
        position: absolute;
        top: 1221%;
        width: 100%;
        height: 25vh;
        background-color: black;
        color: white;
        text-align: center;
        text-decoration: none;
        }
        .text b{
            color: #CB4C78;
            font-size: 27px;
        }
        .b1{
            color: Turquoise;
            font-size: x-large;
        }
        .img12{
            border: 2px solid white;
            /* position: absolute; */
            background-size: 100% 100%;
            /* display: flex; */
            width: 28.5%;
            height: 35vh;
            text-align: center;
            margin: 1% 10%;
            box-shadow: 1px 1px 10px 3px white;
        }


    </style>

</head>
<body>
    <header class="header1">
            <div class="navbar">
                <ul>
                <li><a href="main.php"><b> 🏠 Home</a></li>
                <li><a href="management.php"> Management </b></a></li>
                </ul>
            </div>
    </header>
    <div class="midden">
    <img src="img/amazon-logo.png" class="logo" usemap="#workmap">
        <map name="workmap">
        <area shape="rect" coords="34,44,270,350" alt="Computer" href="https://www.amazon.in">    </map>
    <div class="vl1"></div>
    <div class="title">
        <h1><b>Post Harvest management</b></h1>
        <h2><i>Powered by Amazon</i></h2>
    </div>
    <div class="data">
        <marquee direction="left"> Note : 1. Please go through each step to get complete information about Post Harvest Management &nbsp; 2. More information will comming soon stay connect with us </marquee>
    </div>
    <div class="data1">
        <h2>Wheat Recycling</h2>
    </div>
    <div class="data2">
            <div class="text">
                <p> &emsp; &emsp; The straw leftover from harvested wheat could be turned into bio-based chemicals 
                    that offer high greenhouse gas savings and do not compete with food supplies or damage ecosystems.
                    Researchers are hoping to use the huge amounts of wheat straw currently left to rot on European 
                    farms to develop the building blocks for greener biochemicals.<br>
                    &emsp; &emsp; The wheat stalks left behind after harvesting cannot be eaten by animals so are normally used as 
                    bedding for livestock or left on fields as a way to enrich the soil. But the OPTISOCHEM project, 
                    funded by the EU's Bio-based Industries Joint Undertaking Programme, is hoping to transform this 
                    excess material into something more useful — a gas called bio-isobutene.<br>
                    &emsp; &emsp; It could offer a new carbon-neutral energy source called biofuel — one that sucks carbon out of the 
                    atmosphere as the plants grow and does not release additional emissions when it is burnt, unlike coal, 
                    oil or gas.<br>
                    <br>
                    <b>Green buildings : </b><br>
                    &emsp; &emsp; Additionally, wheat straw waste can be used to support a greener construction industry too.
                    The EU-funded REHAP project is attempting to transform wheat straw waste into new products that can be used to make eco-friendly resins for wood and biochemicals for greener cement.
                    </p><br>
                    <img src="img/wheatd18.jpg" id="slide" class="img12">
                    <img src="img/wheatd17.png" id="slide" class="img12"><br>
                    <br>
                        
                    <br>
                
                <hr>
                <br>
                <b><a style="color: #CB4C78; text-decoration: none;" href="Wheat.php">Check their Harvesting </a></b><br>
                <b><a style="color: #CB4C78; text-decoration: none;" href="Wheat-By.php">Check their Byproducts </a></b>



            </div>
    </div>
    
</body>



<div class="end">
    <br>
    <img style="height:85px;width:100px; border-radius: 10px;" src="img/aws.png" alt="Brillect Tech Solutions Pvt. Ltd.">
    </p>
    <p><a style="color:white; text-decoration: none;" href="https://www.amazon.com/gp/navigation-country/select-country">© 1996-2021, Amazon.com, Inc. or its affiliates </a></p>
    <br>
    <p style="color:rgb(132, 200, 255);font-size:14px; text-decoration:none;">Contact &#8644; <a style="font-size:16px; color:rgb(132, 200, 255);" href="mailto: vishwajeetkadam14@gmail.com">Vishwajeet Kadam</a></p>
</div>
    
    
</html>