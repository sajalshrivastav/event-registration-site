<?php include('../connection.php')?>
<?php
$sql = 'SELECT * FROM sign';
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
                    <h1 class="mt-4">Main Users</h1>
                    <p>Main User are:
                        <b>Admin</b> <a class="btn btn-warning m-3" href="signup.php">Add Admin</a>
                        <b>Users</b> <a class="btn btn-warning m-3">Add Users</a>
                        <b>Judegement</b> <a class="btn btn-warning m-3">Add Judegement</a>
                    </p>

                    <div>
                <table class="table table-striped">
  <thead>
    <tr>
      <th scope="col">SL No.</th>
      <th scope="col">Name</th>
      <th scope="col">Username</th>
      <th scope="col">Password</th>
      <th scope="col">level</th>
      <th scope="col">Action</th>
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
         echo $row["name"]
         ?>
      </td>
      <td>
        <?php
         echo $row["username"]
         ?>
      </td>
      <td>
        <?php
         echo $row["password"]
         ?>
      </td>
      <td>
        <?php
         echo $row["level"];
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
        </div>
        <?php include('includes/footer.php')?>

       