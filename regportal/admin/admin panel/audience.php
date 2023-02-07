<?php include('../connection.php')?>
<?php
$sql = 'SELECT * FROM audience';
$retval = mysqli_query($con,$sql);


if(isset($_POST['delete_event']))
{
    $student_id = mysqli_real_escape_string($con, $_POST['delete_event']);

    $query = "DELETE FROM audience WHERE id='$student_id' ";
    $query_run = mysqli_query($con, $query);

    if($query_run)
    {
        $_SESSION['message'] = "Student Deleted Successfully";
        header("Location: audience.php");
        exit(0);
    }
    else
    {
        $_SESSION['message'] = "Student Not Deleted";
        header("Location: index.php");
        exit(0);
    }
}

?>
<?php include('includes/header.php')?>
        <div class="d-flex" id="wrapper">
           <?php include('includes/sidebar.php')?>
            <!-- Page content wrapper-->
            <div id="page-content-wrapper">
            <?php include('includes/navbar.php')?>
                
                <!-- Page content-->
                <div class="container-fluid" id="">
                    <h1 class="mt-4">Audience Registered</h1>
                </div>
                <div>
                <table class="table table-striped">
  <thead>
    <tr>
    <th scope="col">ID</th>
      <th scope="col">EID</th>
      <th scope="col">PID</th>
      <th scope="col">Event Name</th>
      <th scope="col">Event Venue</th>
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
         echo $row["eid"]
         ?>
      </td>
      <td>
        <?php
         echo $row["pid"]
         ?>
      </td>
      <td>
        <?php
         echo $row["reg_event"]
         ?>
      </td>
      <td>
        <?php
         echo $row["venue"]
         ?>
      </td> 
      <td>
      <form action="audience.php" method="POST" class="d-inline">
          <button type="submit" name="delete_event" value="<?=$row['id'];?>" class="btn btn-danger btn-sm">Delete</button>
      </form>
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

      