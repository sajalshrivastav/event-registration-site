<?php include('../connection.php')?>
<?php
// $entered_eid = $_POST['eid'];
$entered_event_name = $_POST['event_name'];
$sql = 'SELECT * FROM audience WHERE reg_event ="'.$entered_event_name.'"';
$retval = mysqli_query($con,$sql);


// $rws = mysqli_query($con,"SELECT * FROM audience WHERE eid ='".$entered_eid."' ");
// $sq = mysqli_fetch_assoc($rws);
// echo $sq['pid'];

?>
<?php include('includes/header.php')?>
<div class="d-flex" id="wrapper">
  <?php include('includes/sidebar.php')?>
  <!-- Page content wrapper-->
  <div id="page-content-wrapper">
    <?php include('includes/navbar.php')?>

    <!-- Page content-->
    <div class="container-fluid" id="">
      <h1 class="mt-4">Event Wise Registration </h1>
      <form method="POST">
        <!-- <input type="eid" name="eid" placeholder="Enter Eid"> -->
        <select name="event_name" class="form-control w-50">
          <option>Select Event List</option>
        <?php
                $sql = 'SELECT * FROM events';
                $res = mysqli_query($con,$sql);
            ?>
            <?php  while($row = mysqli_fetch_assoc($res))
                {
            ?>
                <option name="add_event_name">
                    <?php   echo $row['event_name']; ?>
                    <?php
                    }
                    ?>
                </option>
        </select>
        <br>
        <input type="submit" class="btn btn-warning w-25">
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