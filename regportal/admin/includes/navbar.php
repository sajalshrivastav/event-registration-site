<?php include('../connection.php')?>
<?php
// session_start();
$qy1 ='SELECT * from sign';
$rst1 = mysqli_query($con,$qy1);
$level1 = mysqli_fetch_assoc($rst1);
$level = $level1['level'];
$_SESSION['level'] = $level;
?>
<div class="concontainer-fluid nav_bg px-0 fixed-top">  
  <div class="container">
  <div class="row">
    <div class="col-md-12 py-1">
      <nav class="navbar navbar-expand-lg navbar-dark">
        <a class="navbar-brand" href="#">
          <img src="images/tyro.png" alt="" width="70" height="30"
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
              <a href="index.php" class="nav-link">Home</a>
            </li> 
            <li class="nav-item">
              <a href="find_pid.php" class="nav-link">Print PID</a>
            </li> 
            <li class="nav-item">
              <a href="find_tid.php" class="nav-link">Print TID</a>
            </li> 
            
            <li class="nav-item">
              
              <a class="nav-link " href="profile.php" > <img width="30px"src="images/<?php echo $level1['level']; ?>.png"> Welcome <?php echo $level1['level']; ?> </a>
            </li>
            <li class="nav-item">
              <a href="logout.php" class="nav-link">Logout</a>
            </li> 
            <!-- {% endif %} -->
          </ul>
        </div>
      </nav>
    </div>
  </div>
  </div>
</div>