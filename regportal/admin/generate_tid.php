<?php
    
$showAlert = false; 
$showError = false; 
$exists=false;
session_start();
  if($_SERVER["REQUEST_METHOD"] == "POST") {
      
    // Include file which makes the
    // Database Connection.
    include 'connection.php';
    $_SESSION['college_tid'] = $_POST["college"];
    // echo $_SESSION['college_tid'];

    if($_SESSION['college_tid']!=''){
      //  initial variable
        // Inserting college name in tid db 
        $sql = "INSERT INTO `tid` (`college`,`generated_by`,`date`) VALUES ('" . $_SESSION['college_tid']    . "','". $_SESSION['level'] . "','". date("Y-m-d") ."')";
        $result = mysqli_query($con, $sql) or die(mysql_error());

        header("Location: get_tid.php");

    }
    else{
      $showError = true; 
    }

    // generating TID
    $get_f_tid = 'Select * from tid';
    $idres = mysqli_query($con,$get_f_tid);
    
    if (mysqli_num_rows($idres)) {
        while ($row = mysqli_fetch_assoc($idres)) {
            $db_id = $row['id'];
            $user_id = "T2022".$db_id;
            $_SESSION['tid'] = $user_id;
            $update_pid = "UPDATE tid SET tid ='$user_id' WHERE id = '$db_id'";
            $res = mysqli_query($con,$update_pid);
            
            
          }
        }
      }
      // echo $_SESSION['tid'];
?>
<!-- main HTML code -->
<?php include('includes/head.php')?>
<body>
<?php include('includes/navbar.php')?>
<div class="container">
  <div class="row justify-content-center">
    <div class="col-md-8 text-center">
      <div class="row justify-content-center text-center mb-4">
        <div class="col-md-9">
          <img src="images/q.png" class="rounded mx-auto py-3 d-block" width=50% alt="srmslogo">
        </div>
      </div>
    </div>
   
    <div class="col-md-8 p-5 text-white ">
      <form action="generate_tid.php" method="POST" enctype="multipart/form-data" class="form-group" novalidate>
        <div class="">
          <label for="college">College Name</label>
          <select class="form-control" id="college" name="college">
          <option>Select</option>
                    <option>SRMS CET</option>
                    <option>SRMS CETR</option>
                    <option>SRMS IMS</option>
                    <option>SRMS Unnao</option>
                    <option>SRMS Law</option>
                    <option>SRMS Nursing</option>
                    <option>other</option>
            
          </select>
          <small id="emailHelp" class="form-text text-muted">Select the College Name.</small>
        </div>
        <div class="mt-3 pid-btn">
          <input type="submit" value="Generate TID" class="btn btn-color">
          <a href="home.html" class="btn btn-color mx-2">Cancel</a>
        </div>
      </form>
    </div>
  </div>
</div>
<?php include('includes/footer.php')?>