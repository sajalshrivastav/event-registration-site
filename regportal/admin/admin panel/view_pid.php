<?php include('../connection.php')?>
<?php
$sql = 'SELECT * FROM pid';
$retval = mysqli_query($con,$sql);



if(isset($_POST['delete_student']))
{
    $student_id = mysqli_real_escape_string($con, $_POST['delete_student']);

    $query = "DELETE FROM pid WHERE pid='$student_id' ";
    $query_run = mysqli_query($con, $query);

    if($query_run)
    {
        $_SESSION['message'] = "Student Deleted Successfully";
        header("Location: view_pid.php");
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
                    <h1 class="mt-4">View PID<a class="btn btn-warning m-3" href=".php">Add pid</a></h1>
                    
                </div>
                
                <div>
                <table class="table table-striped">
  <thead>
    <tr>
      <th scope="col">SL No.</th>
      <th scope="col">PID</th>
      <th scope="col">Name</th>
      <th scope="col">Roll No</th>
      <th scope="col">Study Details</th>
      <th scope="col">Contact Detailss</th>
      <th scope="col">College Name</th>
      <th scope="col">Participation</th>
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
         echo $row["pid"]
         ?>
      </td>
      <td>
        <?php
         echo $row["name"]
         ?>
      </td>
      <td>
        <?php
         echo $row["roll_no"]
         ?>
      </td>
      <td>
        <?php
         echo $row["course"],"|",$row["branch"],"|",$row["batch"]
         ?>
      </td>
      <td>
        <?php
         echo $row["phone"],"|",$row["email"];
         ?>
      </td>
      <td>
        <?php
         echo $row["college"];
         ?>
      </td>
      <td>
      <?php
       $res = mysqli_query($con,"SELECT * FROM audience WHERE pid = '".$row["pid"]."' ");
          while($rew = mysqli_fetch_assoc($res))
          {
                ?>
        <?php echo $rew['reg_event'],","?>
      <?php
      }
      ?>
      </td>
      <td>
      <a href="student-view.php?id=<?= $row['pid']; ?>" class="btn btn-info btn-sm">View</a>
      <a href="student-edit.php?id=<?= $row['pid']; ?>" class="btn btn-success btn-sm">Edit</a>
      <form action="view_pid.php" method="POST" class="d-inline">
          <button type="submit" name="delete_student" value="<?=$row['pid'];?>" class="btn btn-danger btn-sm">Delete</button>
      </form>
        <!-- <button class="btn btn-info">View</button>
        <button class="btn btn-danger">Delete</button>
        <button class="btn btn-warning">Edit</button> -->
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

      