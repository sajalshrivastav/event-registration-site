<?php include('includes/head.php')?>
<?php
    include 'connection.php';
?>

<body>
  <?php include('includes/navbar.php')?>
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-md-8 text-center m-5">
        <div class="row justify-content-center text-center mb-4">
          <div class="col-md-9">
            <img src="images/q.png" class="rounded mx-auto py-3 d-block" width=50% alt="srmslogo">
            <h1>Zest 2022<br> Tid Print Portal</h1>
          </div>
        </div>
      </div>
      <div class="col-md-5 p-2 text-white ">
        <form method="get" action="find_tid_slip.php" class="form-inline" novalidate>
          <label for="tid" class="text-dark m-2">Search TID: </label>
          <!-- <input class="form-control mx-sm-2" type="search" placeholder="Enter PID" name="find_pid" aria-label="find_tid" value='".$details['pid']."'> -->
          <input class="form-control mx-sm-2" name="TID" placeholder="Search tid">
          <?php
            $qry = 'SELECT * FROM tid';
            $res = mysqli_query($con,$qry);
            $details = mysqli_fetch_assoc($res);
            ?>
          </input>
          <input class="btn btn-color m-" value="Search TID" type="submit">
        </form>
      </div>

    </div>
  </div>





  <?php include('includes/footer.php')?>