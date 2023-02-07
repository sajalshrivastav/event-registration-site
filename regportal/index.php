<?php include 'assets/includes/head.php'?>
<?php include 'assets/includes/navbar.php'?>

<?php
include 'connection.php';
if($_SERVER["REQUEST_METHOD"] == "POST") {
    $qry ='SELECT * from sign';
    $result = mysqli_query($con,$qry);
    while($row = mysqli_fetch_assoc($result)) {
      $_SESSION['level_main'] =$row['level'];
        $us = $_POST['username'];
        // echo $us;
        if ($us == $row['username']) {
            echo 'exist  ', $row['username'],'      ',$row['level'];
            if ($row['level'] == 'Admin') {
                echo '<script>alert("Welcome ',$row['level'],' Account ',' , Login Successfully")</script>';
                header("Location: admin");
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
            elseif ($row['level'] == 'subadmin') {
              echo '<script>alert("Welcome ',$row['level'],' Account ',' , Login Successfully")</script>';
              header("Location: subadmin");
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
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<div class="container">
  <div class="row justify-content-center text-dark mt-1">
    <div class="col-md-6 mb-4 text-center">
      <img src="assets/images/q.png" class="rounded mx-auto py-3 d-block" width=35% alt="srmslogo">
      <h3>Login for Zest 2022 Registration Portal</h3>
    </div>
    <div class="col-md-7 mb-4 mt-1">
      <form action="" method="POST" class="form-group" novalidate>
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
<!-- <form method="POST">
    <input type="username" placeholder="username" name="username">
    <input type="submit" value="GO">

</form> -->
<?php include 'assets/includes/footer.php'?>