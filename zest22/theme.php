<?php include('include/head.php')?>
<style>
  .navbar{
    background:#000;
  }
    body {
      margin: 0;
      background:#000;
    }
    a{
      color:#fff;
    }
  /* h1{
    
    font-size:6em;
    font-style:italic;
    text-align: center;
    line-height 1px;;
    font-weight: 400;
    color:#F28B04;
    font-family: 'Nosifer', cursive;
  } */
  h2{
    font-family: 'Fasthand', cursive;
    font-size:2.0em;  
    font-style:italic;
    text-align: center;
    font-weight: 400;
    color:#f2af04;
  }
  h3{
    font-size:4em;  
    font-style:italic;
    text-align: center;
    font-weight: 400;
    color:#f2af04;
  }
  p{
    font-size:2em;  
    font-style:italic;
    font-family: 'Fasthand', cursive;
    text-align: center;
    font-weight: 400;
    color:#f2af04;
  }
  span{
    /* font-size:2em;   */
    font-style:italic;
    text-align: center;
    font-weight: 400;
    color:#fff;
  }
    
    html {
      box-sizing: border-box;
    }
    
    *, *:before, *:after {
      box-sizing: inherit;
    }
    
    .column {
      float: left;
      width: 33.3%;
      margin-bottom: 16px;
      padding: 0 8px;
    }
    
    .card {
      box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
      margin: 8px;
    }
    
    .about-section {
      padding: 50px;
      text-align: center;
      background-color: #474e5d;
      color: white;
    }
    
    .container {
      padding: 0 16px;
    }
    
    .container::after, .row::after {
      content: "";
      clear: both;
      display: table;
    }
    
    .title {
      color: grey;
    }
    
    .button {
      border: none;
      outline: 0;
      display: inline-block;
      padding: 8px;
      color: white;
      background-color: #000;
      text-align: center;
      cursor: pointer;
      width: 100%;
    }

    .d1{
      text-align:left;
    }
    
    .button:hover {
      background-color: #555;
    }
    
    @media screen and (max-width: 650px) {
      .column {
        width: 100%;
        display: block;
      }
    }

    h3 {
      color: white;
      font-family: Trebuchet MS;
      font-weight: bold;
      text-align: center;
    }

    
 
/* media query */
/* Media Query for Mobile Devices */
        @media (max-width: 480px) {
      .brand{
      font-family: 'Nosifer', cursive;
      font-style:italic;
      font-weight: 400;
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
<body>
<?php include('include/navbar.php')?>
	<div class="about-section" style="background: url();background-repeat: no-repeat;background-position: center;background-size: cover;">
  <h1 class="brand">Parivartan</h1>
		<p>"Ek Chakra"</p>
		<p>National Level Cultural Fest.</p>
	  <div style="padding-left:30px;padding-right:30px">
      <!-- <h3 style="text-align:center">About Our Theam</h3> --><br>
      <hr style="margin-left:30%;margin-right:30%">
      <h2 style="text-align:justify" style="color:#F28B04;">
        The Theme is" Parivartan - Ek Yatra " .
        <br>
        It could took audience on a journey through various phases of different" Yuga’s "as mentioned in Hindu mythology.
        
        Yuga in Hinduism is an epoch or era within a four-age cycle. A complete Yuga starts with the Satya Yuga,via Treta Yuga and Dvapara Yuga into a Kali Yuga.
        
        Every ‘Yuga’ can be depicted through song-dance-drama and narration of a main occurrence of that time period. 
        
        The mythological stories of Hirankashyap - Prahlad, Ram Van Vaas, Mahabharata etc. can be depicted beautifully through different sequences and they can be combined in to groups to blend a beautiful evening full of melodious performances.
      </h2>
    </div>
  </div>
	  <?php include('include/footer.php')?>