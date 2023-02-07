
<?php

     session_start();
$showAlert = false; 
$showError = false; 
$exists=false;
$_SESSION['name'] = NULL;
$_SESSION['roll_no'] = NULL;
$_SESSION['phone'] = NULL;
$_SESSION['batch'] =NULL; 
$_SESSION['branch'] = NULL;
$_SESSION['courses'] = NULL;
$_SESSION['gender'] = NULL;
$_SESSION['email'] = NULL;
$_SESSION['college'] = NULL;
if($_SERVER["REQUEST_METHOD"] == "POST") 
{
    // Include file which makes the
    // Database Connection.
    include 'connection.php';
    // $id = $_POST['id'];
    $_SESSION['name'] = $_POST["name"];
    $_SESSION['roll_no'] = $_POST["roll_no"];
    $_SESSION['phone'] = $_POST["phone"];
    $_SESSION['batch'] = $_POST["batch"]; 
    $_SESSION['branch'] = $_POST["branch"]; 
    $_SESSION['courses'] = $_POST["courses"];
    $_SESSION['gender'] = $_POST["gender"];
    $_SESSION['email'] = $_POST["email"];
    $_SESSION['college'] = $_POST["college"];


    $res_roll = mysqli_query($con , "SELECT * FROM pid WHERE roll_no = '".$_SESSION['roll_no']."'");
    $res_email = mysqli_query($con , "SELECT * FROM pid WHERE email = '".$_SESSION['email']."'");
    $res_phone = mysqli_query($con , "SELECT * FROM pid WHERE phone = '".$_SESSION['phone']."'");
    if (mysqli_num_rows($res_roll)>0) {
        echo ' <div class="alert alert-danger  alert-dismissible fade show" role="alert" style="margin:20px;"><strong>User Exist!</strong>
                <button type="button" class="close" data-dismiss="alert" aria-label="Close"> 
                    <span aria-hidden="true">×</span> 
                </button>
            </div> ';
    }
    else {
            if($_SESSION['name'] !='' && $_SESSION['email'] !='' && $_SESSION['phone'] !=''&& $_SESSION['roll_no'] !=''&& $_SESSION['batch'] !=''&& $_SESSION['branch'] !=''&& $_SESSION['courses'] !=''&& $_SESSION['gender'] !=''&& $_SESSION['college'] !='' )
        {
            $sql = "INSERT INTO `pid` ( `name`,`roll_no`,`phone`,`batch`,`branch`,`course`,`gender`,`email`, `college`,`date`,`generated_by`) VALUES ('" . $_SESSION['name']    . "','" . $_SESSION['roll_no']    . "','" . $_SESSION['phone']    . "','" . $_SESSION['batch']    . "','" . $_SESSION['branch']    . "','" . $_SESSION['courses']    . "','" . $_SESSION['gender']    . "','" . $_SESSION['email']    . "','" . $_SESSION['college']    . "','". date("Y-m-d") ."','". $level1['level'] . "')";
            $result = mysqli_query($con, $sql);
            header("Location: get_pid.php");
            $showAlert = true;
            }
        else{
            echo ' <div class="alert alert-danger  alert-dismissible fade show" role="alert" style="margin:20px;"><strong>Kindly Fill all details!</strong>
                <button type="button" class="close" data-dismiss="alert" aria-label="Close"> 
                    <span aria-hidden="true">×</span> 
                </button>
            </div> ';
        }
    }
    
}

    ?>
    <?php
    include 'connection.php';
    $get_f_pid = 'Select * from pid';
    $idres = mysqli_query($con,$get_f_pid);
if (mysqli_num_rows($idres)) {
    while ($row = mysqli_fetch_assoc($idres)) {
        $db_id = $row['id'];
        $user_id = "P2022".$db_id;
        $_SESSION['pid'] = $user_id;
        $update_pid = "UPDATE pid SET pid ='$user_id' WHERE id = '$db_id'";
        $res = mysqli_query($con,$update_pid);
    }
}



    // if(isset($_POST['update_pid'])) {
    //  }
    
    ?>
   <?php
// Get data from form
// $name = $_POST['name'];
// $email= $_POST['email'];
// $message= $_POST['message'];

$to = "tyro.srms@gmail.com";
$subject = "Regarding ZEST 2022 Registration 🥳";
$message = "Dear ".$_SESSION['name']."<br> Thanks For participating in ZEST 2022 , we hope you enjoy the our National level Cultural fest i.e ZEST 2022 (PARIVARTAN 22) <br> Your Details are : <br> PID : ".$_SESSION['pid']."<br> Name : ".$_SESSION['name']."<br> Roll no : ".$_SESSION['roll_no'].""  ;

// The following text will be sent
// Name = user entered name
// Email = user entered email
// Message = user entered message
$txt ="Name = ". $_SESSION['name'] . "\r\n Email = ". $_SESSION['email'] . "\r\n Message =" . $message;

$headers = "From: '".$_SESSION['email']."'" . "\r\n" ;
if($_SESSION['email'] != NULL) {
	mail($to, $subject, $txt, $headers);
}

// Redirect to
// header("Location:last.html");
?>
   
   <?php include('includes/head.php')?>
<body>
<?php include('includes/navbar.php')?>
    <?php
        
        if($showAlert) {
        
            echo ' <div class="alert alert-success 
                alert-dismissible fade show" role="alert">
        
                <strong>Success!</strong> Your PID is 
                now created <span style="color:#800;font-weight:700"></span>. 
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
<!-- {% block content %} -->
<div class="container-fluid">
  <div class="row justify-content-center">
    <div class="col-md-7 bg-warning py-1 my-4 rounded text-center">
      <h2>PID Generation Form</h2>
    </div><br>
    <!-- <small id="pid" class="form-text text-muted">Fill the details Carefully.</small> -->
    <div class="col-md-7 p-0 text-white ">
      <form action="check.php" method="POST" enctype="multipart/form-data" class="form-group" novalidate>
          <!-- form pid -->
          <div class="row">
            <div class="col-6">
              <div class="mt-3">
                <label for="name">Name<span style="color:#800">*</span></label>
                <input type="Fname" class="form-control" name = "name" id="name" placeholder="Enter First Name" autocomplete="off" required>
              </div>
            </div>
            <div class="col-6">
              <div class="mt-3">
                <label for="roll_no">Roll No<span style="color:#800">*</span></label>
                <input type="number" class="form-control" name = "roll_no" id="roll_no"  placeholder="Enter Roll Number" autocomplete="off" required>
             
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-6">
              <div class="mt-3">
              <label for="number">Phone No<span style="color:#800">*</span></label>
              <input type="tel" pattern="[0-9]{3}-[0-9]{2}-[0-9]{3}" class="form-control" name = "phone" id="phone"  placeholder="Enter Phone Number" autocomplete="off" required>
              <!-- <small style="color:rgb(28, 227, 14);font-weight: bolder;font-size:20px;" class="">Verify</small>
              <div class="input-group mb-3">
                <input type="text" class="form-control" placeholder="Recipient's username" aria-label="Recipient's username" aria-describedby="basic-addon2">
                <span class="input-group-text" id="basic-addon2">OTP Verify</span>
              </div> -->
            </div>
            </div>
            <div class="col-6">
              <div class="form-group mt-3">
                <label for="batch">Batch<span style="color:#800">*</span></label>
                <select class="form-control" name = "batch" id="batch">
                  <option>Select</option>
                  <option>2019</option>
                  <option>2020</option>
                  <option>2021</option>
                  <option>2022</option>
                </select>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-6">
              <div class="form-group mt-3">
                <label for="branch">Branch<span style="color:#800">*</span></label>
                <select class="form-control" name="branch" id="branch">
                  <option>Select</option>
                  <option>Electrical and Electronics Engineering</option>
                  <option>Electronics and Communication Engineering</option>
                  <option>Mechanical Engineering</option>
                  <option>Computer Science and Engineering</option>
                  <option>Information Technology</option>
                  <option>Bachelor of Pharmacy</option>
                  <option>Master of Business Administration</option>
                  <option>Masters in Computer Application</option>
                  <option>Nursing</option>
                  <option>BALLB</option>
                  <option>MBBS</option>
                  <option>other</option>
                </select>
              </div>
            </div>
            <div class="col-6">
              <div class="form-group mt-3">
                <label for="courses">Courses<span style="color:#800">*</span></label>
                <select class="form-control" id="courses" name="courses">
                  <option>Select</option>
                  <option>BTech</option>
                  <option>B.Pharm</option>
                  <option>MCA</option>
                  <option>MBA</option>
                  <option>MBBS</option>
                  <option>other</option>
                </select>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-6">
              <div class="form-group mt-3">
                <label for="gender">Gender<span style="color:#800">*</span></label>
                <select class="form-control" id="gender" name="gender" >
                  <option>Select</option>
                  <option>Male</option>
                  <option>Female</option>
                  <option>other</option>
                </select>
              </div>
            </div>
            <div class="col-6">
              <div class="mt-3">
                <label for="email">Email address<span style="color:#800">*</span></label>
                <input type="email" class="form-control" id="email" name="email" aria-describedby="emailHelp" placeholder="Enter email" autocomplete="off" required>
                <!-- <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small> -->
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-12">
              <div class="col-">
                <div class="form-group mt-3">
                  <label for="college">College Name<span style="color:#800">*</span></label>
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
                </div>
              </div>
            </div>
            <div class="col-6">

            </div>
          </div>
        <div class="mt-3 pid-btn text-center">
          <input type="submit" id="submit" value="Generate PID" class="btn btn-color" name="update_pid" >
          <a href="home.html" class="btn btn-color mx-2">Cancel</a>
        </div>
      </form>
    </div>
  </div>
</div>
</div>

<!-- footer -->
<?php include('includes/footer.php')?>