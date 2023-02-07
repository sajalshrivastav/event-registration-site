<?php include('includes/header.php')?>
<?php
    include 'connection.php';
?>

<body>
<?php include('includes/navbar.php')?>
<div class="d-flex" id="wrapper">
           <?php include('includes/sidebar.php')?>
            <!-- Page content wrapper-->
            <div id="page-content-wrapper">
            <div class="">
  <div class="row justify-content-center">
    <div class="col-md-8 text-center m-5">
      <div class="row justify-content-center text-center mb-4">
        <div class="col-md-9">
          <img src="assets/q.png" class="rounded mx-auto py-3 d-block" width=50% alt="srmslogo">
          <h1>Zest 2022<br> Pid Print Portal</h1>
        </div>
      </div>
    </div>
    <div class="col-md-5 p-2 text-white ">
      <form method="get" action="find_pid_slip.php" class="form-inline" novalidate>
        <label for="pid" class="text-dark m-2">Search PID: </label>
        <!-- <input class="form-control mx-sm-2" type="search" placeholder="Enter PID" name="find_pid" aria-label="find_tid" value='".$details['pid']."'> -->
        <input  class="form-control mx-sm-2" name="pid" placeholder="Search Pid" autocomplete="off">
            <?php
            $qry = 'SELECT * FROM pid';
            $res = mysqli_query($con,$qry);
            $details = mysqli_fetch_assoc($res);
            ?>
        </input>
        <input class="btn btn-warning m-3" value="Search PID" type="submit" >
      </form>
    </div>
   
  </div>
</div>
          </div>
</div>






<?php include('includes/footer.php')?>