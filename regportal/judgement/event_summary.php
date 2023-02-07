<?php include('../connection.php')?>
<?php
$sql = 'SELECT * FROM events';
$retval = mysqli_query($con,$sql);

?>
<?php include('includes/head.php')?>

<body>
<?php include('includes/navbar.php')?>
  <div class="container">
    <div class="row justify-content-center d-none d-print-block text-center mb-4">
      <div class="text-theme">
        <h5>Shri Ram Murti Smarak College Of Engineering & Technology,Bareilly</h5>
        <h5>Ram Murti Puram, Bareilly - Nainital Rd, Highway, Bhojipura, Uttar Pradesh 243202</h5>
        <h4 class="pt-2"><b>Zest 2021 Registration Details</b></h4>
      </div>
    </div>
    <div class="row rounded mt-4 bg-warning">
      <div class="col-md-12 p-2 text-center">
        <h4>Registration Summary</h4>
      </div>
    </div>
    <div class="row mt-4">
      <div class="col-md-12">
        <table class="table table-bordered table-hover bg-white">
          <thead>
            <tr class="text-center">
              <th scope="col" style="width:33%">Event Name </th>
              <th scope="col" style="width:35%">Total Count</th>
              <!-- <th scope="col" style="width:37%">Action</th> -->
            </tr>
          </thead>
          <tbody>
          <?php
   while ($row = mysqli_fetch_assoc($retval)) {
    ?>
     <tr>
      <td>
        <?php
         echo $row["event_name"]
         ?>
      </td>
      <td>0
      </td>
    </tr>
    <?php
   }
   ?>
            <!-- {% endfor %} -->
          </tbody>
        </table>
      </div>
    </div>
    <div class="row d-print-none">
      <div class="col-md-12 mt-2  text-center">
        <form>
          <input class="btn btn-color serach-btn " type="button" value="Print this page" onClick="window.print()">
        </form>
      </div>
    </div>
  </div>
<!-- footer -->
<?php include('includes/footer.php')?>