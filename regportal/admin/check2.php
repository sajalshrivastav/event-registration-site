<?php include('includes/head.php')?>
<?php include('connection.php')?>
<?php
session_start();
if($_SERVER["REQUEST_METHOD"] == "POST") {
    $reg_pid = 'P20223';
    $added_eid = $_POST['eid'];
    $event_added_name = $_POST['event_added_name'];
    $added_reg_date = date("Y-m-d");
    $added_reg_venue = $_POST['venue'];
    $added_event_stime = $_POST['event_start_time'];
    $added_event_etime = $_POST['event_start_time'];
    $added_event_date = $_POST['event_date'];
  # code...
  $qry = "INSERT audience(`eid`,`pid`,`reg_event`,`reg_date`,`venue`,`event_start_time`,`event_end_time`,`event_date`) 
  VALUE ('".$added_eid."','".$reg_pid."','".$event_added_name."','".$added_reg_date."','".$added_reg_venue."','".$added_event_stime."','".$added_event_etime."','".$added_event_date."')";
  $qry_res = mysqli_query($con,$qry);
 }
 $sql = mysqli_query($con,"SELECT * FROM events WHERE  event_type = 'solo' ");
?>

<style>
  body {

    text-align: center;
    /* color: #efe; */
    font-weight: 600;

  }

  section {
    display: flex;
    /* justify-content: center; */
    align-items: center;
    flex-wrap: wrap;
    gap: 50px;
    padding: 55px;
    min-height: 100vh;
    font-family: sans-serif;
  }

  .btn {

    flex-wrap: wrap;
    width: auto;
    margin-top: 2px;
  }

  .btn-del {
    background: #800000;
    color: #fff;
  }

  .card {
    width: 250px;
    height: auto;
    padding: 10px;
    border-radius: 6%;
    text-align: center;
    margin: 20px;
  }

  .img {
    width: 60%;
  }

  h3 {
    font-size: 1.5rem;
  }
</style>

<body>

  <?php include('includes/navbar.php')?>

  <h1>VIEW AND DELETE DATA</h1>
  <div class="col-md-12">
    <table class="table table-bordered table-hover bg-white">
      <thead>
        <tr>  
          <th scope="col" style="width:45%">Event Name </th>
          <th scope="col" style="width:30%">Event Venue </th>
          <th scope="col" style="width:25%">Event Date and Time </th>
          <th scope="col" style="width:25%">Action </th>
        </tr>
      </thead>
      <tbody>

        <?php
            $res1 = mysqli_query($con,"SELECT * FROM audience WHERE pid= 'P20223' ");
            while ($ress1 = mysqli_fetch_assoc($res1)) 
            {
              if($ress1['eid']>0){
            ?>
        <tr>
          <td><?php echo $ress1['reg_event']?></td>
          <td><?php echo $ress1['venue']?></td>
          <td><?php echo $ress1['event_start_time']?></td>
          <td>
            <form action="eve_del.php" method="POST" class="d-inline">
              <button type="submit" name="delete_event" value="<?=$ress1['id'];?>"
                class="btn btn-danger btn-sm">🗑️</button>
            </form>
          </td>
        </tr>
        <?php
              } 
          }
            ?>
        <!-- {% endfor %} -->
      </tbody>
    </table>
  </div>

  <h1>ADD Solo EVENTS<?php?></h1>
  <section>

    <?php
while ($row = mysqli_fetch_assoc($sql)) {
?>
    <!-- <img class="img" src="images/1_avatar-512.webp">  -->
    <form method="POST">
      <div class="card text-center">
        <input type="hidden" name="event_added_name" value="<?php echo $row['event_name'] ?>">
        <input type="hidden" value="<?php echo $row['eid'] ?>" name="eid">
        <input type="hidden" value="<?php echo $row['event_venue'] ?>" name="venue">
        <input type="hidden" value="<?php echo $row['event_start_time'] ?>" name="event_start_time">
        <input type="hidden" value="<?php echo $row['event_end_time'] ?>" name="event_end_time">
        <input type="hidden" value="<?php echo $row['event_date'] ?>" name="event_date">
        <h3><?php echo $row['event_name'] ?></h3>
        <h5><?php echo $row['eid'] ?></h5>
        <h5><?php echo $row['event_type']," Event" ?></h5>
        <input type="submit" class="btn btn-warning" value="ADD" name="add_event">
        <!-- <input type="submit" class="btn btn-del " value="DELETE" name="delete_event"> -->
      </div>
    </form>
    <?php
}
?>
    </div>