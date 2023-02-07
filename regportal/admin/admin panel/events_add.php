<?php
    
$showAlert = false; 
$showError = false; 
$exists=false;
    
if($_SERVER["REQUEST_METHOD"] == "POST") {
      
    // Include file which makes the
    // Database Connection.
    include '../connection.php';   
    
    $event_id = $_POST["event_id"];
    $event_name = $_POST["event_name"];
    $event_start_time = $_POST["event_start_time"];
    $event_end_time = $_POST["event_end_time"];
    $event_date = $_POST["event_date"];
    $event_type = $_POST["event_type"];
    
    // This sql query is use to check if
    // the username is already present 
    // or not in our Database 
    $sql = "INSERT INTO `events` ( `eid`,`event_name`,`event_start_time`, `event_end_time`, `event_date`, `event_type`) VALUES ('$event_id','$event_name','$event_start_time', '$event_end_time', '$event_date', '$event_type')";
    
    $result = mysqli_query($con, $sql);
    
}//end if   
    
?>
<?php include('includes/header.php')?>
        <div class="d-flex" id="wrapper">
           <?php include('includes/sidebar.php')?>
            <!-- Page content wrapper-->
            <div id="page-content-wrapper">
            <?php include('includes/navbar.php')?>
                
                <!-- Page content-->
                <div class="container-fluid" id="">
                    <h1 class="mt-4">Add Events Details</h1>
                    
                </div>
                <div class="container">
  <div class="row justify-content-center text-dark mt-3 pd-3">
    <div class="col-md-7 text-center">
      <h2>Event Portal</h2>
    </div>
    <div class="col-md-7">
      <form action="" method="POST" novalidate>
      <div class="mt-3">
          <label for="event_id">Event Id</label>
          <input type="number" id="event_id" name = "event_id" class="form-control" placeholder="Enter Event id" autocomplete="off">
        </div>
        <div class="mt-3">
          <label for="event_name">Event Name</label>
          <input type="name"  id ="event_name" name  = "event_name"  class="form-control" aria-describedby="emailHelp" placeholder="Enter Event Names" autocomplete="off">
          <!-- <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small> -->
        </div>
        <div class="mt-3">
          <label for="event_start_time">Event start timming</label>
          <input type="time"  id ="event_start_time" name  = "event_start_time"  class="form-control" aria-describedby="emailHelp" placeholder="Enter starting Time" autocomplete="off">
          <small id="event_start_time" class="form-text text-muted">Enter time in hh:mm formate.</small>
        </div>
        <div class="mt-3">
          <label for="event_end_time">Event end timming</label>
          <input type="time"  id ="event_end_time" name  = "event_end_time"  class="form-control" aria-describedby="emailHelp" placeholder="Enter end Time" autocomplete="off">
          <small id="event_end_time" class="form-text text-muted">Enter time in hh:mm formate.</small>
        </div>
        <div class="form-group mt-3">
          <label for="event_date">Event date</label>
          <select class="form-control" id="event_date" name="event_date">
            <option>Select Event Date</option>
            <option>2022-11-18</option>
            <option>2022-11-19</option>
            <!-- <option>Judgement</option> -->
          </select>
        </div>
        <div class="form-group mt-3">
          <label for="event_type">Event Type</label>
          <select class="form-control" id="event_type" name="event_type">
            <option>Select Event Type</option>
            <option>Solo</option>
            <option>Group</option>
            <!-- <option>Judgement</option> -->
          </select>
        </div>
       
        
        <div class="mt-3">
          <input type="submit" value="Update Event" class="btn btn-success" name="register_btn">
          <a href="events.php" class="btn btn-info mx-1">View events Details</a>
        </div>
      </form>
    </div>
  </div>
</div>
            </div>
        </div>
        <?php include('includes/footer.php')?>

       