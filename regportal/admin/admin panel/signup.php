<!-- {% load static %} -->
<?php
    
$showAlert = false; 
$showError = false; 
$exists=false;
    
if($_SERVER["REQUEST_METHOD"] == "POST") {
      
    // Include file which makes the
    // Database Connection.
    include '../connection.php';   
    
    $name = $_POST["name"];
    $username = $_POST["username"]; 
    $password = $_POST["password"]; 
    $c_password = $_POST["c_password"];
    $level = $_POST["level"];
            
    
    $sql = "Select * from sign where username='$username'";
    
    $result = mysqli_query($con, $sql);
    
    $num = mysqli_num_rows($result); 
    
    // This sql query is use to check if
    // the username is already present 
    // or not in our Database
    if($num == 0) {
        if(($password == $c_password) && $exists==false) {
            // password hash
            // $hash = password_hash($password,PASSWORD_DEFAULT);
                
            // Password Hashing is used here. 
            $sql = "INSERT INTO `sign` ( `name`,`username`,`password`, `level`) VALUES ('$name','$username','$password','$level')";
    
            $result = mysqli_query($con, $sql);
    
            if ($result) {
                $showAlert = true; 
            }
        } 
        else { 
            $showError = "Passwords do not match"; 
        }      
    }// end if 
    
   if($num>0) 
   {
      $exists="Username not available"; 
   } 
    
}//end if   
    
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
<?php
    
    if($showAlert) {
    
        echo ' <div class="alert alert-success 
            alert-dismissible fade show" role="alert">
    
            <strong>Success!</strong> Your account is 
            now created and you can login. 
            <button type="button" class="close"
                data-dismiss="alert" aria-label="Close"> 
                <span aria-hidden="true">×</span> 
            </button> 
        </div> '; 
    }
    
    if($showError) {
    
        echo ' <div class="alert alert-danger 
            alert-dismissible fade show" role="alert"> 
        <strong>Error!</strong> '. $showError.'
    
       <button type="button" class="close" 
            data-dismiss="alert aria-label="Close">
            <span aria-hidden="true">×</span> 
       </button> 
     </div> '; 
   }
        
    if($exists) {
        echo ' <div class="alert alert-danger 
            alert-dismissible fade show" role="alert">
    
        <strong>Error!</strong> '. $exists.'
        <button type="button" class="close" 
            data-dismiss="alert" aria-label="Close"> 
            <span aria-hidden="true">×</span> 
        </button>
       </div> '; 
     }
   
?>
  <script src="js/jquery.js"></script>
  <script src="js/popper.js"></script>
  <script src="js/bootstrap.js"></script>
<div class="container-fluid nav_bg px-0 fixed-top">  
  <div class="row">
    <div class="col-md-12 py-1">
      <nav class="navbar navbar-expand-lg navbar-dark text-center">
        <a class="navbar-brand" href="index.php">
          <img src="assets/Tyro.png" alt="" width="30" height="30"
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
            <!-- <li class="nav-item">
              <a href="home.html" class="nav-link">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link " href="signup.html">Signup</a>
            </li>
            <li class="nav-item">
              <a class="nav-link " href="login.html">Login</a>
            </li> -->
            <!-- {% endif %} -->
          </ul>
        </div>
      </nav>
    </div>
  </div>
</div>

<div class="container">
  <div class="row justify-content-center text-dark mt-3 pd-3">
    <div class="col-md-7 text-center">
      <h2>Register to Portal</h2>
    </div>
    <div class="col-md-7">
      <form action="" method="POST" novalidate>
      <div class="mt-3">
          <label for="exampleInputPassword1">Name</label>
          <input type="name" id="name" name = "name" class="form-control" placeholder="Enter First Name">
        </div>
        <div class="mt-3">
          <label for="exampleInputEmail1">Email address</label>
          <input type="email"  id ="username" name  = "username"  class="form-control" aria-describedby="emailHelp" placeholder="Enter email">
          <!-- <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small> -->
        </div>
        <!-- <div class="mt-3">
          <label for="exampleInputPassword1">Last Name</label>
          <input type="lname" class="form-control" id="exampleInputPassword1" placeholder="Enter Last Name">
        </div> -->
        <div class="mt-3">
          <label for="exampleInputPassword1">Password</label>
          <input type="password" id ="password" name="password" class="form-control" placeholder="Password">
        </div>
        <div class="mt-3">
          <label for="exampleInputPassword1">Confirm Password</label>
          <input type="password" class="form-control" id ="c_password" name="c_password" placeholder=" Confirm Password">  
        </div>
        <div class="form-group mt-3">
          <label for="level">Level</label>
          <select class="form-control" id="level" name="level">
            <option>Select</option>
            <option>Admin</option>
            <option>user</option>
            <option>Judgement</option>
          </select>
        </div>
        
        <div class="mt-3">
          <input type="submit" value="Sign Up" class="btn btn-success" name="register_btn">
          <a href="index.php" class="btn btn-info mx-1">Login</a>
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