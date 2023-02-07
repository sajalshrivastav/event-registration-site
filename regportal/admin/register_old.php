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
echo "reg_pid : ",$reg_pid,"<br>";
echo "reg_event_name : ",$reg_event_name ,"<br>";
echo "reg_event_venue : ",$reg_event_venue,"<br>";
echo "reg_start_time : ",$reg_start_time,"<br>";
echo "EID : ",$ress['eid'];

if($_SERVER["REQUEST_METHOD"] == "POST") {
    $qry = "INSERT audience(`eid`,`pid`,`reg_event`,`reg_date`,`venue`,`event_start_time`,`event_end_time`,`event_date`) 
    VALUE ('".$reg_eid."','".$reg_pid."','".$reg_event_name."','". date("Y-m-d") ."','".$reg_event_venue."','".$reg_start_time."','".$reg_end_time."','".$event_date."')";
    $qry_res = mysqli_query($con,$qry);
    
    
}

?>

<?php include('includes/head.php')?>



<body>
<?php include('includes/navbar.php')?>

<h1><?php echo "Your PID : ", $reg_pid ?></h1>

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
                  $selected_event_name = $row['event_name'];
                  ?>
                    <?php
                    }
                    ?>
                </option>
        </select><br>
        <input type="submit">
        <br>
      </form>

      <div class="card m-5 p-3">
        <div class="col-">
          <h4><?php echo "reg_pid : ",$reg_pid,"<br>"; ?></h4>
          <h4><?php echo "reg_event_name : ",$reg_event_name ,"<br>"; ?></h4>
          <h4><?php echo "reg_event_venue : ",$reg_event_venue,"<br>"; ?></h4>
          <h4><?php echo "reg_start_time : ",$reg_start_time,"<br>"; ?></h4>
          <h4><?php echo "EID : ",$ress['eid']; ?></h4>          
        </div>
        <div class="col-4">
          <img src="images/<?php$_POST['reg_event_name'] ?>.png">
        </div>
        
      </div>


      <a href="print_pid_slip.php"><button class="btn"  lass="btn" style="font-weight:400" >Print Slip</button></a>

<?php include('includes/footer.php')?>