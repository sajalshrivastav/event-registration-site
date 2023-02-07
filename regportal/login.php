<?php

include 'connection.php';

if($_SERVER["REQUEST_METHOD"] == "POST") {
  $qry ='SELECT * from sign';
  $result = mysqli_query($con,$qry);
  while($row = mysqli_fetch_assoc($result)) {
      $us = $_POST['username'];
      echo '<script>alert("Welcome ',$us,' Account ',' , Login Successfully")</script>';
      if ($us == $row['username']) {
          echo 'exist  ', $row['username'],'      ',$row['level'];
          if ($row['level'] == 'Admin') {
              echo '<script>alert("Welcome ',$row['level'],' Account ',' , Login Successfully")</script>';
              header("Location: 'admin'");
              exit(); 
              // echo ' Hi ! ',$row['level'],' Account ';
              echo "<br>";
          }
          elseif ($row['level'] == 'user') {
              echo '<script>alert("Welcome ',$row['level'],' Account ',' , Login Successfully")</script>';
              header("Location: client");
              exit(); 
              echo "<br>";
          }
          elseif ($row['level'] == 'Judgement') {
              echo '<script>alert("Welcome ',$row['level'],' Account ',' , Login Successfully")</script>';
              header("Location: judgement");
              exit(); 
              echo "<br>";
          }
          // echo 'exist';
      } else {
          # code..
          echo 'not exist';
          echo "<br>";
      }
  }
  }

?>

<!DOCTYPE html>
<html lang="en">
<style>
  body {
    padding-top: 70px;
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
              <a href="home.html" class="nav-link">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link " href="signup.html">Signup</a>
            </li>
            <li class="nav-item">
              <a class="nav-link " href="login.html">Login</a>
            </li>
            <!-- {% endif %} -->
          </ul>
        </div>
      </nav>
    </div>
  </div>
</div>
<div class="container">
  <div class="row justify-content-center text-dark mt-1">
    <div class="col-md-6 mb-4 text-center">
      <img src="images/q.png" class="rounded mx-auto py-3 d-block" width=35% alt="srmslogo">
      <h3>Login for Zest 2022 Registration Portal</h3>
    </div>
    <div class="col-md-7 mb-4 mt-1">
      <form action="authentication.php" method="POST" class="form-group" novalidate>
        <p class="text-center">Login</p>
          <label for="exampleInputEmail1">UserName</label>
          <input type="email" id ="username" name  = "username" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
          <!-- <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small> -->
      
          <label for="exampleInputPassword1">Password</label>
          <input type = "password" id ="password" name  = "password" class="form-control" id="exampleInputPassword1" placeholder="Password">
        <div class="mt-3">
          <input type =  "submit" onclick="myFunction()" id = "btn" value="Login" class="btn btn-success" >
          <a href="signup.php" class="btn btn-info mx-2">SignUp</a>
        </div>
      </form>
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


