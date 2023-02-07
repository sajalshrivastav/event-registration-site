<?php include('includes/head.php')?>
<?php
session_start();

?>

<body>
<?php include('includes/navbar.php')?>
    <!-- <div class="container">
      <div class="row justify-content-center d-print-none">
        <div class="col-md-5 p-4 text-dark ">          
          <form action="" method="POST" class="form-inline" novalidate>
            <label for="pid"><b>Add PID</b></label>
            <input class="form-control mx-sm-2 " type="search" placeholder="Enter PID" name="pid" aria-label="Add Pid">
            <button class="btn btn-color my-2 serach-btn my-sm-0" type="submit">Add PID</button>
          </form>
        </div>
      </div> -->

      <div class="container mt-3 bg-white">
        <div class="row justify-content-center text-center mb-4">
          <div class="col-md-9 ">
            <img src="images/q.png" class="rounded mx-auto py-3 d-block" width=35% alt="srmslogo">
          </div>
          <div class="text-theme">
            <h5>SHRI RAM MURTI SMARAK COLLEGE OF ENGINEERNING & TECHNOLOGY,BAREILLY</h5>
            <h5>Ram Murti Puram, Bareilly - Nainital Rd, Highway, Bhojipura, Uttar Pradesh 243202</h5>
            <h2><b>Parivartan "Ek Chakra"</b></h2>
            <h4 class="pt-1">Zest 2022 Registration Details</h4>
          </div>
        </div>
        <div class="row">
          <div class="col-md-12">
            <table class="table table-hover table-bordered bg-white ">
              <tbody>
                <tr>
                  <th class="align-middle py-2" width=10% scope="row">TID</th>
                  <td class="align-left py-2" width=30%><?php echo $_SESSION['tid']?> </td>
                </tr>
                <tr>
                  <th class="align-middle py-2" width=10% scope="row">College Name</th>
                  <td class="align-left py-2" width=30%><?php echo $_SESSION['college_tid']?></td>
                </tr>
                <tr>
                  <th class="align-middle py-2" width=10% scope="row">Generated by</th>
                  <td class="align-left py-2" width=30%><?php echo $level1['level']; ?></td>
                </tr>
                
                <tr>
                <th class="align-middle py-2" width=20% scope="row">Registration Date</th>
            <td class="align-left py-2">  <?php echo "". date("Y-m-d") .""; ?></td>
                
                  </td>
                </tr>
              </tbody>
            </table>
          </div>
          <div class="col-md-12">
            <table class="table table-hover table-bordered bg-white">
              <thead>
                <tr class="text-center">
                  <th scope="col" style="width:50%">Registered Event</th>
                </tr>
              </thead>
            </table>  
          </div>
          <!-- {% if tid_obj.tid_event.all%} -->
          <div class="col-md-12">
            <table class="table table-bordered table-hover bg-white">
              <thead>
                <tr>
                <th scope="col" style="width:15%">PID in <?php echo $_SESSION['tid'];?> </th>
                <th scope="col" style="width:25%">Event Name </th>
                <th scope="col" style="width:25%">Event Venue </th>
                <th scope="col" style="width:25%">Event Date and Time </th>
                </tr>
              </thead>
              <tbody>
              <!-- {% for event in tid_obj.tid_event.all%} -->
              <?php
            $res1 = mysqli_query($con,"SELECT * FROM audience WHERE tid= '".$_SESSION['tid']."' ");
            while ($ress1 = mysqli_fetch_assoc($res1)) 
            {
              if($ress1['eid']>0){
            ?>
        <tr>
          <td><?php echo $ress1['pid']?></td>
          <td><?php echo $ress1['reg_event']?></td>
          <td><?php echo $ress1['venue']?></td>
          <td><?php echo $ress1['event_start_time']?></td>
          <td>
            <?php
              }
            }
            ?>
              <!-- {% endfor %} -->
              </tbody>
            </table>
          </div>
          <!-- {% endif %} -->
          <div class="col-md-6">
          </div>
        </div>
      </div>
    </div>
    <div class="container">
      <div class="row d-print-none">
        <div class="col-md-12 mt-2  text-center">
          <form>
            <input class="btn btn-color serach-btn " type="button" value="Print this page" onClick="window.print()">
            <a href="register_event.html" class="btn btn-color serach-btn mx-2">Register for Event</a>
          </form>
        </div>
      </div>
    </div>
    <?php include('includes/footer.php')?>