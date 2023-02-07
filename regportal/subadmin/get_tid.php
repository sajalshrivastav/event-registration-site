<?php include('includes/head.php')?>
<?php

session_start();
include'connection.php';
?>

<body>
    <?php include('includes/navbar.php')?>

    <div class="text-center">
    <img src="images/completed.gif" alt="Computer man" style="width:448px;height:308px;">
    <h4>Thanks Team For Registration</h4>
    <h4>Your Tid is :</h4>
    <h1><?php 
    echo $_SESSION['tid'] , " and " ,$_SESSION['college_tid'] 
    ?></h1>
    <span>*Kindly Note It Carefully!.</span>
    <!-- <br><span>PID's : </span> -->
    <br><br>
    <a href="generate_tid.php"><button class="btn" style="font-weight:400" >Create New Tid</button></a>
    <a href="print_tid_slip.php"><button class="btn" style="font-weight:400" >Print Slip</button></a>
    <a href="register_event_team.php"><button class="btn" style="font-weight:400" >Add Event</button></a>
    <!-- <a href="add_pid_to_tid.php"><button class="btn" style="font-weight:400" >Add PIDs</button></a> -->
</div>

</body>

<?php include('includes/footer.php')?>