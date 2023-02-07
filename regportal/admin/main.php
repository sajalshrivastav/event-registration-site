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

$qry3 ='SELECT * from events where event_type="solo"';
$result3 = mysqli_query($con,$qry3);
$row3 = mysqli_num_rows($result3);

$qry5 ='SELECT * from events where event_type="group"';
$result5 = mysqli_query($con,$qry5);
$row5 = mysqli_num_rows($result5);
// echo $row3;

$qry4 ='SELECT * from pid';
$result4 = mysqli_query($con,$qry4);
$row4 = mysqli_num_rows($result4);
// echo $row4;



// echo mysql_result($result, 0);

?>
<?php include('includes/head.php')?>
<style>
  body {
    padding-top: 70px;
  }

  :root {
    --theme-color: #800;
  }

  .container-fluid {
    /* margin: 10px; */
  }

  .card {
    height: 450px;
    width: 320px;
    margin: 10px;
    background: linear-gradient(to bottom,
        var(--theme-color) 110px,
        #ffffff 110px);
    border-radius: 10px;
    box-shadow: 0 5px 15px rgba(50, 50, 50, 0.1);
    padding: 50px 0;
  }

  .card * {
    font-family: 'Poppins', sans-serif;
    text-align: center;
    letter-spacing: 0.5px;
    font-weight: 600;
  }

  .img {
    display: block;
    width: 100px;
    height: 100px;
    position: relative;
    border-radius: 50%;
    margin: 0 auto;
    box-shadow: 0 0 0 8px #ffffff;
  }

  .card h2 {
    color: var(--theme-color);
    font-size: 26px;
    margin: 15px 0 5px 0;
  }

  .card p {
    color: #454545;
    font-weight: 400;
    font-size: 14px;
  }

  .details {
    width: 100%;
    margin-top: 1px;
    display: flex;
    justify-content: space-around;
  }

  .details h2 {
    font-weight: 400;
  }

  .details span {
    color: var(--theme-color);
  }

  .buttons {
    width: 100%;
    display: flex;
    justify-content: space-around;
    margin-top: 20px;
  }

  .buttons button {
    width: 130px;
    padding: 8px 0;
    border-radius: 25px;
    border: 3px solid var(--theme-color);
  }

  .buttons button:first-child {
    background-color: var(--theme-color);
    color: #ffffff;
  }

  .buttons button:last-child {
    background-color: transparent;
    color: var(--theme-color);
  }

  .themes {
    background-color: #ffffff;
    box-shadow: 0 5px 15px rgba(50, 50, 50, 0.1);
    padding: 20px;
    margin-top: 40px;
    display: flex;
    justify-content: space-around;
  }

  .themes button {
    height: 25px;
    width: 25px;
    border: 3px solid #dddddd;
    outline: none;
    border-radius: 50%;
    cursor: pointer;
  }

  a {
    text-decoration: none;
    color: #ffffff;
    background-color: ;
  }

  a:hover {
    text-decoration: none;
    color: #ffffff;
    background-color: ;
  }

  .summary {
    color: #000;
  }

  .summary:hover {
    color: #333;
  }
</style>
</head>

<body>
  <?php include('includes/navbar.php')?>
  <div class="container">
    <div class="col-md-12 bg-warning py-1  rounded text-center mt-5">
      <h2>Register Yourself</h2>
    </div><br>
    <!-- <small id="pid" class="form-text text-muted">Fill the details Carefully.</small> -->
    <div class="container-fluid row">
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
          <button><a href="generate_pid.php">Click Here</a></button>
          <button><a class="summary" href="event_details.php">View Summary</a></button>
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
          <button><a href="generate_tid.php">Click Here</a></button>
          <button><a class="summary" href="t_event_details.php">View Summary</a></button>
        </div>
      </div>
      <div class="card">
        <img class="img" src="images/reistration.png" alt="profile_img">
        <h2>Register for event</h2>
        <p style="font-size:20px;font-weight:200;margin-top:10px">Click on below given button to generate PID</p>
        <div class="details">
          <div class="column">
            <h1><?php
                    echo $row3
                    ?></h1>
            <span>Solo Events Reg.</span>
          </div>
          <div class="column">
            <h1><?php
                    echo $row5
                    ?></h1>
            <span>Group Events Reg.</span>
          </div>
        </div>
        <div class="buttons">
          <button><a href="find_pid.php">Solo Event</a></button>
          <button><a class="summary" href="find_tid.php">Team Event</a></button>
        </div>
      </div>

    </div>
  </div>
  <?php include('includes/footer.php')?>