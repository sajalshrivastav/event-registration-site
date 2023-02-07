<?php include('../connection.php')?>
<?php



$qry ='SELECT * from pid';
$result = mysqli_query($con,$qry);
$row = mysqli_num_rows($result);

$qry1 ='SELECT * from sign';
$result1 = mysqli_query($con,$qry1);
$row1 = mysqli_fetch_assoc($result1);

?>
  <style>
    body {
          padding-top: 70px;
    }
       
    :root{
        --theme-color: #800;
    }
    .container-fluid{
    /* margin: 10px; */
    }
    .card{
        height: 450px;
        width: 320px;
      margin:10px;
        background: linear-gradient(
            to bottom,
            var(--theme-color) 110px,
            #ffffff 110px
        );
        border-radius: 10px;
        box-shadow: 0 5px 15px rgba(50,50,50,0.1);
        padding: 50px 0;
    }
    .card *{
        font-family: 'Poppins',sans-serif;
        text-align: center;
        letter-spacing: 0.5px;
        font-weight: 600;
    }
    .img{
        display: block;
        width: 100px;
        height: 100px;
        position: relative;
        border-radius: 50%;
        margin: 0 auto;
        box-shadow: 0 0 0 8px #ffffff;
    }
    .card h2{
        color: var(--theme-color);
        font-size: 26px;
        margin: 15px 0 5px 0;
    }
    .card p{
        color: #454545;
        font-weight: 400;
        font-size: 14px;
    }
    .details{
        width: 100%;
        margin-top: 1px;
        display: flex;
        justify-content: space-around;
    }
    .details h2{
        font-weight: 400;
    }
    .details span{
        color: var(--theme-color);
    }
    .buttons{
        width: 100%;
        display: flex;
        justify-content: space-around;
        margin-top: 20px;
    }
    .buttons button{
        width: 130px;
        padding: 8px 0;
        border-radius: 25px;
        border: 3px solid var(--theme-color);
    }
    .buttons button:first-child{
        background-color: var(--theme-color);
        color: #ffffff;
    }
    .buttons button:last-child{
        background-color: transparent;
        color: var(--theme-color);
    }
    .themes{
        background-color: #ffffff;
        box-shadow: 0 5px 15px rgba(50,50,50,0.1);
        padding: 20px;
        margin-top: 40px;
        display: flex;
        justify-content: space-around;
    }
    .themes button{
        height: 25px;
        width: 25px;
        border: 3px solid #dddddd;
        outline: none;
        border-radius: 50%;
        cursor: pointer;
    }
    a{
      text-decoration: none;
      color: #ffffff;
      background-color: ;
    }
    a:hover{
      text-decoration: none;
      color: #ffffff;
      background-color: ;
    }
    .summary{
      color: #000;
    }
    .summary:hover{
      color: #333;
    }
  </style>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="css/bootstrap.css">
  <link rel="stylesheet" href="css/style.css">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css" integrity="sha384-DyZ88mC6Up2uqS4h/KRgHuoeGwBcD4Ng9SiP4dIRy0EXTlnuz47vAwmeGwVChigm" crossorigin="anonymous">
  <title>Parivartan "Ek Chakra"</title>
</head>

<body>
  <script src="../assets/js/jquery.js"></script>
  <script src="../assets/js/popper.js"></script>
  <script src="../assets/js/bootstrap.js"></script>

 
  <?php include('includes/navbar.php')?>
<div class="container">
    <div class="card col">
        <img class="img" src="images/1_avatar-512.webp" alt="profile_img">
        <h2>Register Individual</h2>
        <p style="font-size:20px;font-weight:200;margin-top:10px">Click on below given button to generate PID</p>
        <div class="details">
            <div class="column">
              <h1><?php
                    echo $row
                    ?></h1>
                <span>No. of PID</span>
            </div>
        </div>
        <div class="buttons">
            <button style="background:##ffc107" ><a style="color:#fff" href="admin panel/index.php">Admin Panel</a></button>
            <button ><a class="summary"  href="main.php">Registration</a></button>
            <button ><a class="summary" href="checkid.php">View Summary</a></button>
        </div>
    </div>
</div><?php include('includes/footer.php')?>
