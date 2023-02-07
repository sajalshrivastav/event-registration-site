<?php include('connection.php')?>
<?php

$qry ='SELECT * from pid';
$result = mysqli_query($con,$qry);
$row = mysqli_num_rows($result);
// echo $row;


$qry2 ='SELECT * from tid';
$result2 = mysqli_query($con,$qry2);
$row2 = mysqli_num_rows($result2);
// echo $row2;

$qry3 ='SELECT sln from events';
$result3 = mysqli_query($con,$qry3);
$row3 = mysqli_num_rows($result3);
// echo $row3;
$qry4 ='SELECT * from events where event_type="solo"';
$result4 = mysqli_query($con,$qry4);
$row4 = mysqli_num_rows($result4);

$qry5 ='SELECT * from events where event_type="group"';
$result5 = mysqli_query($con,$qry5);
$row5 = mysqli_num_rows($result5);

$qry6 ='SELECT * from audience';
$result6 = mysqli_query($con,$qry6);
$row6 = mysqli_num_rows($result6);



// echo mysql_result($result, 0);

?>
<style>
    .card{
        height:150px;
        color:#ffd;
        padding:2%;
    }
</style>
<?php include('includes/header.php')?>
        <div class="d-flex" id="wrapper">
           <?php include('includes/sidebar.php')?>
            <!-- Page content wrapper-->
            <div id="page-content-wrapper">
            <?php include('includes/navbar.php')?>
                
                <!-- Page content-->
                <div class="container-fluid" id="">
                    <h1 class="mt-4">Dashboard</h1>
                    <p class="p-1">Main Panel to operate.</p>
                </div>
                <div class="row m-3">
                    <div class=" card col text-center bg-danger m-2">
                    <h1><?php
                    echo $row
                    ?></h1>    
                    <h4>No. of PID Generated</h4>
                    </div>
                    <div class=" card col text-center bg-warning m-2">
                    <h1><?php
                    echo $row2
                    ?></h1>  
                    <h4>No. of TID Generated</h4>
                    </div>
                    
                    <div class=" card col text-center m-2 bg-danger">
                    <h1><?php
                    echo $row6
                    ?></h1>   
                    <h4>No. of Registration</h4>
                    </div>
                </div>
                <div class="row m-3">
                <div class=" card col text-center m-2 bg-info">
                    <h1><?php
                    echo $row3
                    ?></h1>  
                    <h4>Total Events</h4>
                    </div>    
                <div class=" card col text-center bg-info m-2">
                    <h1><?php
                    echo $row4
                    ?></h1>    
                    <h4>Total Solo Event</h4>
                    </div>
                    <div class=" card col text-center bg-warning m-2">
                    <h1><?php
                    echo $row5
                    ?></h1>  
                    <h4>Total Team Event</h4>
                    </div>
                </div>
            </div>
        </div>
        <?php include('includes/footer.php')?>
       