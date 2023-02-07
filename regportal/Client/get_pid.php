<?php include('includes/head.php')?>
<?php

session_start();
include'connection.php';
?>


<!-- model popup start -->

<style>
body {font-family: Arial, Helvetica, sans-serif;}

/* The Modal (background) */
.modal {
  display: none; /* Hidden by default */
  position: fixed; /* Stay in place */
  z-index: 1; /* Sit on top */
  padding-top: 100px; /* Location of the box */
  left: 0;
  top: 0;
  width: 100%; /* Full width */
  height: 100%; /* Full height */
  overflow: auto; /* Enable scroll if needed */
  background-color: rgb(0,0,0); /* Fallback color */
  background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
}

/* Modal Content */
.modal-content {
  background-color: #fefefe;
  margin: auto;
  padding: 20px;
  border: 1px solid #888;
  width: 40%;
}

/* The Close Button */
.close {
  color: #aaaaaa;
  float: right;
  font-size: 28px;
  font-weight: bold;
}

.close:hover,
.close:focus {
  color: #000;
  text-decoration: none;
  cursor: pointer;
}
</style>

<!-- model popup close -->

<body>
    <?php include('includes/navbar.php')?>



<!-- The Modal -->
<div id="myModal" class="modal">

  <!-- Modal content -->
  <div class="modal-content">
    <span class="close">&times;</span>
    <h1> Phone Number</h1>
    <p>Phone : <?php echo $_SESSION['phone'] ?><button class="btn m-3" id="verify_phone">Verify</button></p>
  </div>

</div>

<!-- The Modal email -->
<div id="myemail" class="modal">

  <!-- Modal content -->
  <div class="modal-content">
    <span class="close">&times;</span>
    <h1> Email Address</h1>
    <p>Email : <?php echo $_SESSION['email'] ?><button class="btn m-3" id="verify_email">Verify</button></p>
  </div>

</div>




    <div class="text-center">
    <img src="images/completed.gif" alt="Computer man" style="width:448px;height:308px;">
    <h4>Thanks <?php 
    echo $_SESSION['name']
    ?> For Registration</h4>
    <h4>Your Pid is :</h4>
    <h1><?php 
    echo $_SESSION['pid']
    ?></h1>
    <span>*Kindly Note It Carefully! <br>PID is Sended on Your Phone through SMS at <b id="myBtn"><?php echo $_SESSION['phone'] ?></b> & Email at <b id="myBtn_email"><?php echo $_SESSION['email']?></b>.</span>
    <br><br>
    <a href="generate_pid.php"><button class="btn" style="font-weight:400" >Create New Pid</button></a>
    <!-- <a href="print_pid_slip.php"><button class="btn" style="font-weight:400" >Print Slip</button></a> -->
    <a href="register_event.php"><button class="btn" style="font-weight:400" >Add events</button></a>
</div>
<script>
// Get the modal
var modal = document.getElementById("myModal");

// Get the button that opens the modal
var btn = document.getElementById("myBtn");

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close")[0];

// When the user clicks the button, open the modal 
btn.onclick = function() {
  modal.style.display = "block";
}

// When the user clicks on <span> (x), close the modal
span.onclick = function() {
  modal.style.display = "none";
}

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
  if (event.target == modal) {
    modal.style.display = "none";
  }
}
</script>
<script>
// Get the modal
var email = document.getElementById("myemail");

// Get the button that opens the modal
var btn = document.getElementById("myBtn_email");

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close")[0];

// When the user clicks the button, open the modal 
btn.onclick = function() {
  email.style.display = "block";
}

// When the user clicks on <span> (x), close the modal
span.onclick = function() {
  email.style.display = "none";
}

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
  if (event.target == email) {
    email.style.display = "none";
  }
}
</script>
<?php include('includes/footer.php')?>