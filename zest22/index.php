<?php include('include/head.php')?>
<style>
    .header {
      background-color: #000;
    }

    body {
      background-color: #000;
      color: #fff;
      /* height: 500vh; */
    }
    a{
      color:#fff;
    }

    .navbar-brand {
      font-family: 'Nosifer', cursive;
      font-size: 4em;
      font-style: italic;
      text-align: center;
      font-weight: 400;
      color: #F28B04;
      /* background-color:#000; */
    }

    .footer {
      z-index: 1;
      --footer-background: #F28B04;
      /* display: grid; */
      position: relative;
      align-content: center;
      bottom: 0px;
      /* grid-area: footer; */
      min-height: 25rem;
    }

    .footer .bubbles {
      position: absolute;
      top: 0;
      left: 0;
      right: 0;
      height: 1rem;
      background: var(--footer-background);
      filter: url("#blob");
    }

    .footer .bubbles .bubble {
      position: absolute;
      left: var(--position, 50%);
      background: var(--footer-background);
      border-radius: 100%;
      -webkit-animation: bubble-size var(--time, 4s) ease-in infinite var(--delay, 0s), bubble-move var(--time, 4s) ease-in infinite var(--delay, 0s);
      animation: bubble-size var(--time, 4s) ease-in infinite var(--delay, 0s), bubble-move var(--time, 4s) ease-in infinite var(--delay, 0s);
      transform: translate(-50%, 100%);
    }

    .footer .content {
      z-index: 2;
      display: grid;
      grid-template-columns: 1fr auto;
      grid-gap: 4rem;
      padding: 2rem;
      background: var(--footer-background);
    }

    .footer .content a,
    body .footer .content p {
      color: #F5F7FA;
      text-decoration: none;
    }

    .footer .content b {
      color: white;
    }

    .footer .content p {
      margin: 0;
      font-size: 0.75rem;
    }

    .footer .content>div {
      display: flex;
      flex-direction: column;
      justify-content: center;
    }

    .footer .content>div>div {
      margin: 0.25rem 0;
    }

    .footer .content>div>div>* {
      margin-right: 0.5rem;
    }

    .footer .content>div .image {
      align-self: center;
      width: 4rem;
      height: 4rem;
      margin: 0.25rem 0;
      background-size: cover;
      background-position: center;
    }

    @-webkit-keyframes bubble-size {

      0%,
      75% {
        width: var(--size, 4rem);
        height: var(--size, 4rem);
      }

      100% {
        width: 0rem;
        height: 0rem;
      }
    }

    @keyframes bubble-size {

      0%,
      75% {
        width: var(--size, 4rem);
        height: var(--size, 4rem);
      }

      100% {
        width: 0rem;
        height: 0rem;
      }
    }

    @-webkit-keyframes bubble-move {
      0% {
        bottom: -4rem;
      }

      100% {
        bottom: var(--distance, 10rem);
      }
    }

    @keyframes bubble-move {
      0% {
        bottom: -4rem;
      }

      100% {
        bottom: var(--distance, 10rem);
      }
    }

    /* header text */
    * {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
    }

    .slider {
      font-family: 'Nosifer', cursive;
      display: flex;
      flex-direction: column;
      justify-content: center;
      align-items: center;
      height: 100vh;
      position: relative;
      background-color: #1e1f26;
      text-align: center;
      padding: 0 2em;
    }


    .slider h1 {
      font-family: 'Nosifer', cursive;
      /* font-size: vw; */
      margin: 0;
      padding-bottom: 0.5rem;
      letter-spacing: 0.5rem;
      color: #F28B04;
      transition: all 0.3s ease;
      z-index: 3;
    }

    h1:hover {
      transform: translate3d(0, -10px, 22px);
      color: #ff0266;
    }

    .slider h2 {
      font-size: 2vw;
      letter-spacing: 0.3rem;
      font-family: 'Nosifer', cursive;
      font-weight: 300;
      color: #faebd7;
      z-index: 4;
    }

    h3.span {
      font-size: 2vw;
      letter-spacing: 0.7em;
      font-family: 'Nosifer', cursive;
      font-weight: 300;
      color: #faebd7;
      z-index: 4;
    }

    span:hover {

      color: #ff0266;
      font-weight: 500;
      font-size: 2.2vw;
    }

    a {
      text-decoration: none;
    }

    .nav-container {
      display: flex;
      flex-direction: row;
      position: absolute;
      bottom: 0;
      width: 100%;
      height: 75px;
      box-shadow: 20px 20px 50px rgba(0, 0, 0, 0.5);
      background: #1e1f26;
      z-index: 10;
      transition: all 0.3s cubic-bezier(0.19, 1, 0.22, 1);
    }

    .nav-container--top-first {
      position: fixed;
      top: 75px;
      transition: all 0.3s cubic-bezier(0.19, 1, 0.22, 1);
    }

    .nav-container--top-second {
      position: fixed;
      top: 0;
    }

    .nav-tab {
      display: flex;
      justify-content: center;
      align-items: center;
      flex: 1;
      color: #F28B04;
      transition: all 0.5s ease;
      -webkit-transition: all 0.5s ease;
      -moz-transition: all 0.5s ease;
      -ms-transition: all 0.5s ease;
      -o-transition: all 0.5s ease;
    }

    .nav-tab:hover {
      color: #F28B04;
      background: white;
      transition: all 0.5s ease;
    }

    .nav-tab-slider {
      position: absolute;
      bottom: 0;
      width: 0;
      height: 2px;
      background: #F28B04;
      ;
      transition: left 0.3s ease;
    }

    .background {
      position: absolute;
      height: 90vh;
      top: 0;
      bottom: 0;
      left: 0;
      right: 0;
      z-index: auto;
    }

    @media (min-width: 800px) {

      .nav h1,
      .slider h1 {
        font-size: 3vw;
      }

      .nav h2,
      .slider h2 {
        font-size: 2.2vw;
      }

      .nav-tab {
        font-size: 2.2vw;
      }
    }

    @media screen only (min-width: 360px) {

      .nav h1,
      .slider h1 {
        font-size: 8vw;
      }

      .nav h2,
      .slider h2 {
        font-size: 2vw;
        letter-spacing: 0.2vw;
      }

      .nav-tab {
        font-size: 2vw;
      }
    }

    .background {
      position: absolute;
      height: 100vh;
      top: 0;
      bottom: 0;
      left: 0;
      right: 0;
      z-index: 0;
    }

    .loader span {
      color: #faebd7;
      text-shadow: 0 0 0 #faebd7;
      -webkit-animation: loading 1s ease-in-out infinite alternate;
    }

    @-webkit-keyframes loading {
      to {
        text-shadow: 20px 0 70px #ff0266;
        color: #ff0266;
      }
    }

    .loader span:nth-child(2) {
      -webkit-animation-delay: 0.1s;
    }

    .loader span:nth-child(3) {
      -webkit-animation-delay: 0.2s;
    }

    .loader span:nth-child(4) {
      -webkit-animation-delay: 0.3s;
    }

    .loader span:nth-child(5) {
      -webkit-animation-delay: 0.4s;
    }

    .loader span:nth-child(6) {
      -webkit-animation-delay: 0.5s;
    }

    .loader span:nth-child(7) {
      -webkit-animation-delay: 0.6s;
    }

    .loader span:nth-child(8) {
      -webkit-animation-delay: 0.7s;
    }

    .loader span:nth-child(9) {
      -webkit-animation-delay: 0.8s;
    }

    .loader span:nth-child(10) {
      -webkit-animation-delay: 0.9s;
    }

    .loader span:nth-child(11) {
      -webkit-animation-delay: 1s;
    }

    .loader span:nth-child(12) {
      -webkit-animation-delay: 1.1s;
    }

    .loader span:nth-child(13) {
      -webkit-animation-delay: 1.2s;
    }

    .loader span:nth-child(14) {
      -webkit-animation-delay: 1.3s;
    }

    .loader span:nth-child(15) {
      -webkit-animation-delay: 1.4s;
    }

    .loader span:nth-child(16) {
      -webkit-animation-delay: 1.5s;
    }

    .loader span:nth-child(17) {
      -webkit-animation-delay: 1.6s;
    }

    .loader span:nth-child(18) {
      -webkit-animation-delay: 1.7s;
    }

    .loader span:nth-child(19) {
      -webkit-animation-delay: 1.8s;
    }

    .loader span:nth-child(20) {
      -webkit-animation-delay: 1.9s;
    }

    .loader span:nth-child(21) {
      -webkit-animation-delay: 2s;
    }

    .loader span:nth-child(22) {
      -webkit-animation-delay: 2.1s;
    }

    /* end header text */
    /* video background */
    #background-video {
      height: 100vh;
      width: 100%;
      opacity: 10%;
      padding: 15px;
      padding-top: 35px;
      background-repeat: no-repeat;
      object-fit: cover;
      position: fixed;
      left: 0;
      right: 0;
      top: 0;
      bottom: 0;
      z-index: -1;
    }

    /* page content */
    
    h3 {
      color: white;
      font-family: Trebuchet MS;
      font-weight: bold;
      text-align: center;
    }

    .brand{
      font-family: 'Nosifer', cursive;
      font-style:italic;
      font-weight: 400;
      color:#F28B04;
      font-size: 10rem;
        } 
@media only screen and (min-width: 425px) and (max-width:430px)  {
        .brand{
          font-size: 5rem;
        }
  }


  /* media query */
/* Media Query for Mobile Devices */
@media (max-width: 480px) {
      .brand{
      font-family: 'Nosifer', cursive;
      font-style:italic;
      font-weight: 400;
      margin-top:200px;
      color:#F28B04;
      font-size: 4rem;
        }
        }
          
        /* Media Query for low resolution  Tablets, Ipads */
        @media (min-width: 481px) and (max-width: 767px) {
          .brand{
      font-family: 'Nosifer', cursive;
      font-style:italic;
      font-weight: 400;
      margin-top:200px;
      color:#F28B04;
      font-size: 4rem;
        }
        }
          
        /* Media Query for Tablets Ipads portrait mode */
        @media (min-width: 768px) and (max-width: 1024px){
          .brand{
      font-family: 'Nosifer', cursive;
      font-style:italic;
      font-weight: 400;
      color:#F28B04;
      font-size: 6rem;
        }
        }
          
        /* Media Query for Laptops and Desktops */
        @media (min-width: 1025px) and (max-width: 1280px){
          .brand{
      font-family: 'Nosifer', cursive;
      font-style:italic;
      font-weight: 400;
      color:#F28B04;
      font-size: 8rem;
        } 
        }
          
        /* Media Query for Large screens */
        @media (min-width: 1281px) {
          .brand{
      font-family: 'Nosifer', cursive;
      font-style:italic;
      font-weight: 400;
      color:#F28B04;
      font-size: 10rem;
        }
        }
</style>
</head>

<body>
  <?php include('include/navbar.php')?>
<video id="background-video" autoplay loop muted>
    <source src="images/Zest 2021-The Annual Cultural Fest.mp4" type="video/mp4"></video>
  <div style="width:100;text-align: center;position: relative;padding:12%;">
    <h1 class="brand" href="index.php" style="">Parivartan</h1>
    <h3 class="span loader" style="font-weight: 900;">"<span class="m">E</span><span
        class="m">K</span><span class="m">
      </span><span class="m"></span><span class="m">C</span><span class="m">H</span><span class="m">A</span><span
        class="m">K</span><span class="m">R</span><span class="m">A</span>"</h3>
  </div>
  <?php include('include/footer.php')?>