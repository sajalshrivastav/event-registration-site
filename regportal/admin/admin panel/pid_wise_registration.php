<?php include('../connection.php')?>
<?php
$entered_eid = $_POST['pid'];
// $entered_event_name = $_POST['event_name'];
$sql = 'SELECT * FROM audience WHERE pid ="'.$entered_eid.'"';
$retval = mysqli_query($con,$sql);


// $rws = mysqli_query($con,"SELECT * FROM audience WHERE eid ='".$entered_eid."' ");
// $sq = mysqli_fetch_assoc($rws);
// echo $sq['pid'];
if(isset($_POST['delete_event']))
{
    $student_id = mysqli_real_escape_string($con, $_POST['delete_event']);

    $query = "DELETE FROM audience WHERE id='$student_id' ";
    $query_run = mysqli_query($con, $query);

    if($query_run)
    {
        $_SESSION['message'] = "Student Deleted Successfully";
        header("Location: pid_wise_registration.php");
        exit(0);
    }
    else
    {
        $_SESSION['message'] = "Student Not Deleted";
        ?>
        <script>alert("Event Not deleted")</script>
        <?php
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
      <h1 class="mt-4">PID Registration </h1>
      <form method="POST">
        <input type="eid" name="pid" placeholder="Enter Pid">
        <input type="submit" class="btn btn-warning">
      </form>
        

    </div>
    <div>
      <table class="table table-striped">
        <thead>

          <tr>
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
            <form action="pid_wise_registration.php" method="POST" class="d-inline">
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