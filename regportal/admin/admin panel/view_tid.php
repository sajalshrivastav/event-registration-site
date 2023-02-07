<?php include('../connection.php')?>
<?php
$sql = 'SELECT * FROM tid';
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
                    <h1 class="mt-4">View TID<a class="btn btn-warning m-3" href="edit_tid.php">Add tid</a></h1>
                    
                </div>
                <div>
                <table class="table table-striped">
  <thead>
    <tr>
      <th scope="col">SL No.</th>
      <th scope="col">TID</th>
      <th scope="col">College Name</th>
      <th scope="col">Total Members</th>
      <th scope="col">Date</th>
    </tr>
  </thead>
  <tbody>
   <?php
   while ($row = mysqli_fetch_assoc($retval)) {
    ?>
     <tr>
      <td>
        <?php
         echo $row["id"]
         ?>
      </td>
      <td>
        <?php
         echo $row["TID"]
         ?>
      </td>
      <td>
        <?php
         echo $row["College Name"]
         ?>
      </td>
      <td>
        <?php
         echo $row["Total Members"]
         ?>
      </td>
      <td>
        <?php
         echo $row["date"];
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

      