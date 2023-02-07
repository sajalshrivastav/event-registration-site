<?php
include '../connection.php';
session_start();

$update_pid = ['update_pid'];
$sql = 'SELECT * FROM events';
$eve = mysqli_query($con,$sql);
// if(isset($_POST['update_pid'])) {
//   $ins_qry = "INSERT INTO `events` (`pid`) VALUES ('$update_pid') WHERE eid = '$eid'";
//   $result = mysqli_query($con,$ins_qry);
// }






// echo $_SESSION['pid'];
$reg_pid = $_SESSION['pid'];
$reg_event_name = $_POST['reg_event_name'];
$res = mysqli_query($con,"SELECT * FROM events WHERE event_name= '".$reg_event_name."' ");
$ress = mysqli_fetch_assoc($res);
$reg_eid = $ress['eid'];
$reg_event_venue = $ress['event_venue'];
$reg_start_time = $ress['event_start_time'];
$reg_end_time = $ress['event_end_time'];
$event_date = $ress['event_date'];



// print 
// echo "reg_pid : ",$reg_pid,"<br>";
// echo "reg_event_name : ",$reg_event_name ,"<br>";
// echo "reg_event_venue : ",$reg_event_venue,"<br>";
// echo "reg_start_time : ",$reg_start_time,"<br>";
// echo "EID : ",$ress['eid'];

if($_SERVER["REQUEST_METHOD"] == "POST") {
    $qry = "INSERT audience(`eid`,`pid`,`reg_event`,`reg_date`,`venue`,`event_start_time`,`event_end_time`,`event_date`) 
    VALUE ('".$reg_eid."','".$reg_pid."','".$reg_event_name."','". date("Y-m-d") ."','".$reg_event_venue."','".$reg_start_time."','".$reg_end_time."','".$event_date."')";
    $qry_res = mysqli_query($con,$qry);
    
    
}

?>

<?php include('includes/head.php')?>

<body>
<?php include('includes/navbar.php')?>

<form method="POST" >
        <!-- <input type="pid" placeholder="Enter EID"> -->
        <!-- <input type="pid" name="reg_pid" placeholder="Enter PID"> -->
        <select name="reg_event_name">
          <option>SELECT EVENT</option>
        <?php
                $sql = 'SELECT * FROM events';
                $res = mysqli_query($con,$sql);
                ?>
                <?php  while($row = mysqli_fetch_assoc($res))
                {?>
                  <option name="add_event_name">
                    
                  <?php   echo $row['event_name']; ?>
                    <?php
                    }
                    ?>
                </option>
        </select><br>
        <input type="submit">
        <br>
      </form>
      <a href="print_pid_slip.php"><button c  lass="btn" style="font-weight:400" >Print Slip</button></a>



<div class="container">

  <div class="row">
    <?php
    while($events = mysqli_fetch_assoc($eve))
    {?>

<div class="col">
    <div class="card" style="height:auto;width:350px;margin-top:12px; ">
        <!-- <div class="card-header text-center">
          <img src="images/<?php echo $events['event_name']?>.png" class="card-img-top" style="height:100px;width:100px"  alt="registration image">
        </div> -->
        <div class="card-body mb-0">
          <div class="row">
          <div class="col">
          <p><b>Event ID : </b><?php echo $events['eid']?></p>
          <p><b>Event Type :  </b><?php echo $events['event_type']?> Event</p>
          </div>
          <div class="col">
          <img src="images/<?php echo $events['event_name']?>.png" class="card-img-top" style="height:100px;width:100px"  alt="registration image">
          </div>
          </div>
          <h5 class="card-title text-center"><?php echo $events['event_name']?></h5>
          <form action="" method="POST" novalidate class="text-center">
            <input class='d-none' name="event_name" value="MONOACT"/>
            <input class="form-control mx-sm-2 mb-2" type="search" placeholder="Enter PID" name="update_pid" id="update_pid" aria-label="regester_event">
            <button class="btn btn-color serach-btn my-2 my-sm-0" type="submit">Register</button>
          </form>
        </div>
      </div>
    </div>

    <?php
    }
    ?>

  </div>




  <div class="row ">
    <div class=" rounded col-12 my-2 text-center p-2 bg-warning"> 
      <h2>Solo Events</h2>
    </div>
  </div>

  <div class="row">
    <div class="col-12 rounded  text-center mt-4 p-2 bg-warning my-2"> 
      <h2>Team Events</h2>
    </div>
  </div>

</div>
<?php include('includes/footer.php')?>