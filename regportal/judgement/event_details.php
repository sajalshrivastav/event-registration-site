<?php include('../connection.php')?>
<?php
$sql = 'SELECT * FROM pid';
$retval = mysqli_query($con,$sql);

?>
<?php include('includes/head.php')?>
<body>
  <?php include('includes/navbar.php')?>
  <div class="container">
  <div class="row rounded mt-4 bg-warning">
    <div class="col-md-12 p-2 text-center">
      <h4>Registered Students</h4>
    </div>
  </div>
  <div class="row mt-4">
    <div class="col-md-12">
      <table class="table table-bordered table-hover bg-white">
        <thead>
          <tr class="text-center">
          <th scope="col" style="width:10%">ID</th>
            <th scope="col" style="width:33%">PID</th>
            <th scope="col" style="width:35%">Participant Name</th>
            <th scope="col" style="width:37%">College Name</th>
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
         echo $row["college"];
         ?>
      </td>
       <?php
   }
   ?>
        </tbody>
      </table>
    </div>
  </div>
  <div class="row d-print-none">
    <div class="col-md-12 mt-2  text-center">
      <form>
        <input class="btn btn-color serach-btn " type="button" value="Print this page" onClick="window.print()">
        <a href="event_wise_registration.php" class="btn btn-color serach-btn ">View Summary</a>
      </form>
    </div>
  </div>
</div>

<!-- footer -->
<?php include('includes/footer.php')?>