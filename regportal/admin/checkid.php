<?php include('../connection.php')?>
<?php

$qry ='SELECT * from pid';
$result = mysqli_query($con,$qry);
$row = mysqli_num_rows($result);
// echo $row;


$qry2 ='SELECT * from tid';
$result2 = mysqli_query($con,$qry2);
$row2 = mysqli_num_rows($result2);
// echo $row2;

$qry3 ='SELECT * from events';
$result3 = mysqli_query($con,$qry3);
$row3 = mysqli_num_rows($result3);
// echo $row3;

$qry4 ='SELECT * from pid';
$result4 = mysqli_query($con,$qry4);
$row4 = mysqli_num_rows($result4);
// echo $row4;



// echo mysql_result($result, 0);

?>
<!DOCTYPE html>
<html lang="en">
    <style>
        body {
          padding-top: 70px;
        }
       
    :root{
        --theme-color: #800;
    }
    .container-fluid{
    /* margin: 10px; */
    }
    .card{
        height: 450px;
        width: 320px;
      margin:10px;
        background: linear-gradient(
            to bottom,
            var(--theme-color) 110px,
            #ffffff 110px
        );
        border-radius: 10px;
        box-shadow: 0 5px 15px rgba(50,50,50,0.1);
        padding: 50px 0;
    }
    .card *{
        font-family: 'Poppins',sans-serif;
        text-align: center;
        letter-spacing: 0.5px;
        font-weight: 600;
    }
    .img{
        display: block;
        width: 100px;
        height: 100px;
        position: relative;
        border-radius: 50%;
        margin: 0 auto;
        box-shadow: 0 0 0 8px #ffffff;
    }
    .card h2{
        color: var(--theme-color);
        font-size: 26px;
        margin: 15px 0 5px 0;
    }
    .card p{
        color: #454545;
        font-weight: 400;
        font-size: 14px;
    }
    .details{
        width: 100%;
        margin-top: 1px;
        display: flex;
        justify-content: space-around;
    }
    .details h2{
        font-weight: 400;
    }
    .details span{
        color: var(--theme-color);
    }
    .buttons{
        width: 100%;
        display: flex;
        justify-content: space-around;
        margin-top: 20px;
    }
    .buttons button{
        width: 130px;
        padding: 8px 0;
        border-radius: 25px;
        border: 3px solid var(--theme-color);
    }
    .buttons button:first-child{
        background-color: var(--theme-color);
        color: #ffffff;
    }
    .buttons button:last-child{
        background-color: transparent;
        color: var(--theme-color);
    }
    .themes{
        background-color: #ffffff;
        box-shadow: 0 5px 15px rgba(50,50,50,0.1);
        padding: 20px;
        margin-top: 40px;
        display: flex;
        justify-content: space-around;
    }
    .themes button{
        height: 25px;
        width: 25px;
        border: 3px solid #dddddd;
        outline: none;
        border-radius: 50%;
        cursor: pointer;
    }
    a{
      text-decoration: none;
      color: #ffffff;
      background-color: ;
    }
    a:hover{
      text-decoration: none;
      color: #ffffff;
      background-color: ;
    }
    .summary{
      color: #000;
    }
    .summary:hover{
      color: #333;
    }
      </style>
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="css/bootstrap.css">
  <link rel="stylesheet" href="css/style.css">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css" integrity="sha384-DyZ88mC6Up2uqS4h/KRgHuoeGwBcD4Ng9SiP4dIRy0EXTlnuz47vAwmeGwVChigm" crossorigin="anonymous">
  <title>Parivartan "Ek Chakra"</title>
</head>

<body>
  <script src="js/jquery.js"></script>
  <script src="js/popper.js"></script>
  <script src="js/bootstrap.js"></script>
<div class="container-fluid nav_bg px-0 fixed-top">  
  <div class="row">
    <div class="col-md-12 py-1">
      <nav class="navbar navbar-expand-lg navbar-dark">
        <a class="navbar-brand" href="{% url 'home">
          <img src="images/Tyro.png" alt="" width="30" height="30"
            class="d-inline-block align-text-top">
          <!-- <img src="images/q1.png" alt="" width="80" height="30"
            class="d-inline-block align-text-top"> -->
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
          aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav ml-auto ">
            <li class="nav-item">
              <a href="home.php" class="nav-link">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link " href="signup.php">Signup</a>
            </li>
            <li class="nav-item">
              <a class="nav-link " href="login.php">Login</a>
            </li>
            <!-- {% endif %} -->
          </ul>
        </div>
      </nav>
    </div>
  </div>
</div>
<div class="container">
    <div class="card col">
        <img class="img" src="images/1_avatar-512.webp" alt="profile_img">
        <h2>Register Individual</h2>
        <p style="font-size:20px;font-weight:200;margin-top:10px">Click on below given button to generate PID</p>
        <div class="details">
            <div class="column">
                <h1><?php
                    echo $row2
                    ?></h1>
                  <span>No. of TID</span>
            </div>
            <div class="column">
              <h1><?php
                    echo $row
                    ?></h1>
                <span>No. of PID</span>
            </div>
            <div class="column">
                <h1><?php
                    echo $row+$row2
                    ?></h1>
                  <span>Total Registered Students</span>
              </div>
        </div>
        <div class="buttons">
            <button ><a style="color:#fff" href="t_event_details.php">Check TID</a></button>
            <button ><a class="summary"  href="event_details.php">Check PID</a></button>
            <button ><a class="summary"  href="event_summary.php">Registration</a></button>
            <button ><a class="summary"  href="event_wise_registration.php">Solo Event list</a></button>
            <button ><a class="summary"  href="event_wise_registration_team.php">Team Event list</a></button> 
        </div>
    </div>
</div>
<div class="concontainer-fluid footer-bg-1 mt-5 px-0 d-print-none">
  <div class="container">
    <div class="row justify-content-center text-white text-center">
      <div class="col-md-8 py-4 ">
        <h4>Shri Ram Murti Smarak College of Engineering and Technology</h4>
        <p class = "mb-0">Powered by: Department of Electrical and Electronics Engineering</p>
        <p class = "mb-0">Developed by</p>
        <a class="text-white" href="#">Rishabh Srivastava</a>
        <!-- <a class="text-white" href="https://github.com/nikhil777jais">Nikhil Jaiswal |</a>
        <a class="text-white" href="https://github.com/Nickhil1737">Nikhil Kumar Gangwar |</a>    
        <a class="text-white" href="https://github.com/rajat-chn">Rajat Chauhan</a> -->
      </div>
    </div>
  </div>
</div>
<div class="concontainer-fluid footer-bg-2 px-0 d-print-none">
  <div class="container">
    <div class="row footer-bg-2">
      <div class="col-md-6 text-white pt-2">
        &copy; Zest2K22
      </div>
      <div class="col-md-6">
        <ul class="social float-md-right">
          <li><a class="fab fa-facebook" href=""></a></li>
          <li><a class="fab fa-instagram" href=""></a></li>
          <li><a class="fab fa-whatsapp" href=""></a></li>
        </ul>
      </div>
    </div>
  </div>
</div>
