<?php include('include/head.php')?>
<?php
include 'connection.php';
$sql = 'Select * FROM team';
$result = mysqli_query($con,$sql);
?>
<style>
  h1{
    color:#fff;
    text-align:center;
  }


    /* fade in */
    div {
      animation: fadeIn 1s;
      -webkit-animation: fadeIn 1s;
      -moz-animation: fadeIn 1s;
      -o-animation: fadeIn 1s;
      -ms-animation: fadeIn 1s;
    }

    @keyframes fadeIn {
      0% { opacity: 0; }
      100% { opacity: 1; }
    }

    @-moz-keyframes fadeIn {
      0% { opacity: 0; }
      100% { opacity: 1; }
    }

    @-webkit-keyframes fadeIn {
      0% { opacity: 0; }
      100% { opacity: 1; }
    }

    @-o-keyframes fadeIn {
      0% { opacity: 0; }
      100% { opacity: 1; }
    }

    @-ms-keyframes fadeIn {
      0% { opacity: 0; }
      100% { opacity: 1; }
    }
        *::after,
    *,
    *::before {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
    }
    a{
      color:#fff;
    }
    body{
      
      background-color: #000;
    }

    .body {
      display: flex;
      justify-content: center;
      align-items: center;
      flex-wrap: wrap;
      gap: 50px;
      padding: 50px;
      min-height: 100vh;
      font-family: sans-serif;
      color: #efe;
      font-weight: 600;
    }
    span{
      color:#fff;
    }

    .card {
      background: #09220c;
      width: 300px;
      display: flex;
      flex-direction: column;
      align-items: center;
      gap: 20px;
      position: relative;
      padding: 20px;
      box-shadow: 2px 2px 2px 2px;
    }

    .card::after {
      content: "";
      position: absolute;
      border: 20px solid;
      color: #343;
      border-color: currentColor currentColor transparent transparent;
      right: 0;
      top: 0;
    }

    /* active state */

    .card.active p {
      height: auto;
    }

    .card.active .p-background {
      background: none;
    }

    .card.active h2,
    .card.active a,
    .card.active img {
      background-color: #008616;
    }

    .card.active::after {
      color: #008616;
    }

    .img {
      width: 110px;
      height: 110px;
      border-radius: 50px;
      margin-top: -40px;
      background: #343;
      align-self: start;
      margin-bottom: 70px;
      object-fit: cover;
    }

    h2 {
      text-transform: capitalize;
      background: #343;
      border-radius: 30px;
      padding: 0.5em 1em;
      white-space: nowrap;
      position: absolute;
      top: 100px;
      left: -25px;
    }

    h2::after {
      position: absolute;
      content: "";
      width: 25px;
      height: 50px;
      border: 10px;
      border-radius: 35px 0 0 35px;
      background: inherit;
      left: 0px;
      top: 52px;
      filter: brightness(80%);
    }

    h2::before {
      position: absolute;
      content: "";
      width: 25px;
      height: 48px;
      background: inherit;
      left: 0;
      top: 29px;
      z-index: -1;
    }

    p {
      height: 150px;
      overflow: hidden;
      transition: 500ms;
      color:#fff;
      position: relative;
    }

    .p-background {
      position: absolute;
      transition: 500ms;
      background: linear-gradient(transparent 50%, #09220c);
      inset: 0;
    }

    /* a {
      padding: 0.5em 1em;
      background: #343;
      text-decoration: none;
      text-transform: uppercase;
      font-weight: bold;
      border-radius: 5px;
      -webkit-user-select: none;
      -moz-user-select: none;
      -ms-user-select: none;
      user-select: none;
    } */
/* 
    a:is(:hover, :active, :visited) {
      color: #efe;
    } */
</style>
</head>
<body>
<?php include('include/navbar.php')?>
  <h1 style="text-decoration:underline">Organizing Team Heads</h1>
  <div class="body">
      <!-- solo Event -->

  
<?php

while($row = mysqli_fetch_assoc($result)){
  ?>
  <div  class="card">
    <img class="img" src="images/team/<?php echo $row['name']?>.jpg" alt="<?php echo $row['name']?>">
    <h2><?php echo $row['name']?></h2>
    <h1><?php echo $row['post']."<br>"?></h1>
    <span>Tyro Club</span>
  </div>
  <?php
}
?>
  </div>

</body>

    <script>
      const readMoreBtns = document.querySelectorAll(".btn");
      

    </script>
        <?php include('include/footer.php')?>