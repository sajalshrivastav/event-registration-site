<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
	<link href="https://fonts.googleapis.com/css?family=Nosifer" rel="stylesheet">
    <title>Document</title>
    <style>
        /* Set height to 100% for body and html to enable the background image to cover the whole page: */
body, html {
  height: 100%;
  width:100%;
  background-color: black;
}

.bgimg {
  /* Background image */
  background: url(../images/bglines.svg); 
  /* Full-screen */
  height: 100%;
  /* Center the background image */
  background-position: center;
  /* Scale and zoom in the image */
  background-size: cover;
  /* Add position: relative to enable absolutely positioned elements inside the image (place text) */
  position: relative;
  /* Add a white text color to all elements inside the .bgimg container */
  color: white;
  /* Add a font */
  font-family: "Courier New", Courier, monospace;
  /* Set the font-size to 25 pixels */
  font-size: 25px;
}

/* Position text in the top-left corner */
.topleft {
  position: absolute;
  top: 0;
  left: 16px;
}

/* Position text in the bottom-left corner */
.bottomleft {
  position: absolute;
  bottom: 0;
  left: 16px;
}

/* Position text in the middle */
.middle {
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
  text-align: center;
}

/* Style the <hr> element */
hr {
  margin: auto;
  width: 40%;
}
    </style>
</head>
<body>
    <div class="bgimg">
        <div class="topleft">
            <p span style="color:#800; font-weight: 900;">SRMS College of Engineering & Technology,<br>Bareilly</p>
        </div>
        <div class="middle">
            <h1>ZEST 2022</h1>
            <h1 style="font-family: 'Nosifer', cursive;font-style:italic;text-align: center;font-weight: 400;color:#F28B04;font-size: 3rem;">Parivartan<br>
            <span style="font-family: 'Nosifer', cursive;font-style:italic;text-align: center;font-weight: 400;color:#F28B04;font-size: 2rem;">"Ek Chakra" !</span></h1>
            <h1>COMING SOON</h1>
          <hr>
          <p id="demo">35 days</p>
        </div>
        <div style="text-align:right;">
          <p>Organised By <a style="color:#800000; font-weight: 900;" href="home.php" >Tyro Club</a></p>

        </div>
      </div>
      <script>
        // Set the date we're counting down to
var countDownDate = new Date("Nov 18, 2022 15:37:25").getTime();

// Update the count down every 1 second
var x = setInterval(function() {

  // Get todays date and time
  var now = new Date().getTime();

  // Find the distance between now an the count down date
  var distance = countDownDate - now;

  // Time calculations for days, hours, minutes and seconds
  var days = Math.floor(distance / (1000 * 60 * 60 * 24));
  var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
  var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
  var seconds = Math.floor((distance % (1000 * 60)) / 1000);

  // Display the result in an element with id="demo"
  document.getElementById("demo").innerHTML = days + "days<br>" + hours + "hours "
  + minutes + "minutes " + seconds + "seconds ";

  // If the count down is finished, write some text
  if (distance < 0) {
    clearInterval(x);
    document.getElementById("demo").innerHTML = "EXPIRED";
  }
}, 1000);
      </script>
</body>
</html>