<style>
   span{
    color:#fff;
  }
  li,a:hover{
    color:#F28B04;
  }
  nav{
    background:#000;
  }

  body{
    background:#000;
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
    .navbar-toggler-icon{
      /* color:#fff; */
      /* background:#fff; */
      border:#fff;
    }
</style>
<nav class="navbar navbar-expand-lg navbar-dark">
  <div class="container">
  <img src="images/tyro.png" width="70px">
          <div class="text-center">
          <span style="color:#F28B04;font-weight:600">Few days Left</span> <br> <span id="demo" style="margin-top:1px;margin-left:17px">35 days</span>  
          </div>
    <button class="navbar-toggler toggler-light " type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 navbar-right">
        <li class="nav-link" style="font-family:'Nosifer';font-color:white;"><a href="index.php">Home</a>            </li>
            <li class="nav-link"><a href="theme.php"     style="font-family:'Nosifer';font-color:white;">Theme</a></li>
            <li class="nav-link"><a href="events.php"   style="font-family:'Nosifer';font-color:white;">Events</a></li>
            <li class="nav-link"><a href="registration.php"  style="font-family:'Nosifer';font-color:white;">Registration</a></li>
            <li class="nav-link"><a href="contact.php"  style="font-family:'Nosifer';font-color:white;">Contacts</a></li>
                <li class="nav-link"><a href="aboutus.php" style="font-family:'Nosifer';font-color:white;">About Us</a></li>
                <a href="https://www.srms.ac.in/"><img src="images/q.png" width="100px"></a>
        
    </div>
  </div>
</nav>

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
  document.getElementById("demo").innerHTML = days + " days " + hours + " hours "
  + minutes + " minutes " + seconds + " seconds ";

  // If the count down is finished, write some text
  if (distance < 0) {
    clearInterval(x);
    document.getElementById("demo").innerHTML = "EXPIRED";
  }
}, 1000);
      </script>