<?php include('../connection.php')?>
<?php
$sql = 'SELECT * FROM events';
$retval = mysqli_query($con,$sql);

?>
<?php include('includes/header.php')?>
        <div class="d-flex" id="wrapper">
           <?php include('includes/sidebar.php')?>
            <!-- Page content wrapper-->
            <div id="page-content-wrapper">
            <?php include('includes/navbar.php')?>
                
                <!-- Page content-->
                <div class="container-fluid" id="">
                    <h1 class="mt-4">View Events Details<a class="btn btn-warning m-3" href="events_add.php">Add events</a></h1>
                    
                </div>
                <div>
                <table class="table table-striped">
  <thead>
    <tr>
      <th scope="col">SL No. </th>
      <th scope="col">Event Id</th>
      <th scope="col">Event Name</th>
      <th scope="col">Event Registrations</th>
      <th scope="col">Event Timming</th>
      <th scope="col">Event Date</th>
      <th scope="col">Event Venue</th>
      <th scope="col">Event Type</th>
    </tr>
  </thead>
  <tbody>
   <?php
   while ($row = mysqli_fetch_assoc($retval)) {
    ?>
     <tr>
      <td>
        <?php
         echo $row["sln"]
         ?>
      </td>
      <td>
        <?php
         echo $row["eid"]
         ?>
      </td>
      <td>
        <?php
         echo $row["event_name"]
         ?>
      </td>
      <td>
        <?php
         echo $row["event_reg"]
         ?>
      </td>
      <td>
        <?php
         echo $row["event_start_time"],' To ',$row["event_end_time"] 
         ?>
      </td>
      <td>
        <?php
         echo $row["event_date"]
         ?>
      </td>
      <td>
        <?php
         echo $row["event_venue"]
         ?>
      </td>
      <td>
        <?php
         echo $row["event_type"]
         ?>
      </td>
    </tr>
    <?php
   }
   ?>
    
  </tbody>
</table>                    
                </div>
            </div>
        </div>
          <?php include('includes/footer.php')?>

      