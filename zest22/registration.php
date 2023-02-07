<?php include('include/head.php')?>
    <style>
        
/*======================
    404 page
=======================*/

body{
    background:#000;
    color:#fff;
    /* text-align:center; */
}
a{
      color:#fff;
    }
span{

}
.page_404{ 
    padding:40px 0; 
    font-family: 'Arvo', serif;
}

.page_404  img{ width:100%;}

.four_zero_four_bg{
 
 background-image: url();
 background-repeat:no-repeat;
    height: 400px;
    background-position: center;
 }
 
 
 .four_zero_four_bg h1{
 font-size:80px;
 }
 
  .four_zero_four_bg h3{
			 font-size:80px;
			 }
			 
			 .link_404{			 
	color: #fff!important;
    padding: 10px 20px;
    background: #39ac31;
    margin: 10px 0;
    display: inline-block;}
	.contant_box_404{ margin-top:-50px;}
    </style>
</head>
<body>
<?php include('include/navbar.php')?>
    <section class="page_404">
        <div class="container">
            <div class="row">	
            <div class="col-sm-12 ">
            <div class="col-sm-10 col-sm-offset-1  text-center">
            <div class="four_zero_four_bg">
                <!-- <h1 class="text-center ">404</h1> -->
                <img src="images/404.png" alt="">
            
            <h3>
            Look like you're waiting for Registration
            </h3>
            <p>Registration Will be available from 5 Novemeber 2022 !</p>
            <!-- <h1 id="demo1">35 days</h1> -->
            <a href="events.php" class="link_404">View Events</a>
        </div>
            </div>
            </div>
            </div>
        </div>
    </section>
    <?php include('include/footer.php')?>