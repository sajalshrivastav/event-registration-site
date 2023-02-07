<?php include('includes/head.php')?>
<link rel="stylesheet" href="css/extracss.css">
<?php
include 'connection.php';
$qry ='SELECT * from pid';
$result = mysqli_query($con,$qry);
$row = mysqli_num_rows($result);

$qry2 ='SELECT * from tid';
$result2 = mysqli_query($con,$qry2);
$row2 = mysqli_num_rows($result2);
// echo $row2;
?>
<body>

  <?php include('includes/navbar.php')?>
<div class="container">
  
  <div class="row justify-content-between mt-5">
    
    
  </div>
  <div class="col-md-12 bg-warning py-1  rounded text-center">
    <h2>Register YourSelf</h2>
  </div><br>
  <!-- <small id="pid" class="form-text text-muted">Fill the details Carefully.</small> -->
  <div class="container row">
    <div class="card col">
        <img class="img" src="images/1_avatar-512.webp" alt="profile_img">
        <h2>Register Individual</h2>
        <p style="font-size:20px;font-weight:200;margin-top:10px">Click on below given button to generate PID</p>
        <div class="details">
            <div class="column">
              <h1><?php
                    echo $row
                    ?></h1>
                <span>No. of PID</span>
            </div>
        </div>
        <div class="buttons">
          <a class="btn" href="generate_pid.php" >Click Here</a>
        </div>
    </div>
    <div class="card col">
        <img class="img" src="images/bootwise-icon-02.jpg" alt="profile_img">
        <h2>Register Team</h2>
        <p style="font-size:20px;font-weight:200;margin-top:10px">Click on below given button to generate TID</p>
        <div class="details">
          <div class="column">
            <h1><?php
                    echo $row2
                    ?></h1>
            <span>No. of TID</span>
          </div>
        </div>
        <div class="buttons">
          <a class="btn" href="generate_tid.php" >Click Here</a>
        </div>
      </div>
      <div class="card">
        <img class="img" src="images/reistration.png" alt="profile_img">
        <h2>Register for event</h2>
        <p style="font-size:20px;font-weight:200;margin-top:10px">Click on below given button to generate PID</p>
        <div class="details">
          <div class="column">
            <h1>0</h1>
            <span>Solo Events Reg.</span>
          </div>
          <div class="column">
            <h1>0</h1>
            <span>Group Events Reg.</span>
          </div>
        </div>
        <div class="buttons">
          <button><a href="event_wise_registration.php">Solo Event</a></button>
          <button><a class="summary" href="event_wise_registration_team.php">Team Event</a></button>
        </div>
      </div>
  
</div>
</div>
<?php include('includes/footer.php')?>