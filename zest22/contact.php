<?php include('include/head.php')?>
<?php
// Get data from form
$name = $_POST['name'];
$email= $_POST['email'];
$message= $_POST['message'];

$to = "tyro.srms@gmail.com";
$subject = "Enquiry Regarding ZEST";

// The following text will be sent
// Name = user entered name
// Email = user entered email
// Message = user entered message
$txt ="Name = ". $name . "\r\n Email = ". $email . "\r\n Message =" . $message;

$headers = "From: '".$email."'" . "\r\n" ;
if($email != NULL) {
	mail($to, $subject, $txt, $headers);
}

// Redirect to
// header("Location:last.html");
?>

<link rel="stylesheet" href="css\Contact_tyro.css">
<style>
  h1{
    color: #F28B04;
    font-family: 'Nosifer', cursive;
  }
  p{
    color: #F28B04;
    font-size:2rem;
    /* font-family: 'Fasthand', cursive; */
  }
  h2,h4,.fa,.fab,.fas,a{
    color:#fff;
  }
  #last{
width: 100%;
height: auto;
justify-content: center;
}
.full{
width: 80%;
display: inline-block;
margin:2%;
margin-left: 10%;
text-align: center;
background-color: black;
color: white;
border:15px solid orange;
border-radius: 5px;
margin-bottom: 8%;
margin-top: 8%;
}
.full h3{
font-size: 2rem;
display:block;
margin: 2%;
margin-bottom: 0;
}
.lt{
padding: 2%;
margin: 2%;
}
.rt{
padding: 2%;
margin: 2%;
}
.lt textarea{
width: 94%;
margin-left: 2.8%;
}
button{
margin: 2%;
}
.btn-primary{
background-color: black;
border: 2px solid white;
border-radius: 5%;
}
.list-item{
margin-bottom: 2%;
list-style-type: none;
}
.list-item span{
margin-left: 10px;
font-size: 1.4rem;
}
.list-item a{
color: white;
display: inline-block;
}
.list-item a:hover{
text-decoration: underline;
}
.form-control{
background-color: black;
}
	
@media screen and (min-width: 770px){
.full{
	width: 70%;
	margin-left: 15%;
}
.lt textarea{
width: 95%;
margin-left: 2.4%;
}
}
	
@media screen and (min-width: 1100px){
.full{
	width: 65%;
	margin-left: 17%;
	margin-top: 5%;
}
.lt{
	width: 55%;
	display: inline-block;
	float: left;
	margin-right: 0;
}
.rt{
	width: 35%;
	display: inline-block;
	margin-left: 0;
}
.list-item{
margin-bottom: 10%;
}
.contact-list{
	margin-top: 22%;
	padding-right: 8%;
}
.fa-envelope, .gmail{
	display: inline-block;
	width: auto;
}
}

</style>
<body>
<?php include('include/navbar.php')?>
<section id="contact">
       <div class="container">
           <h1 class="text-center text-uppercase">Contact us</h1>
           <p class="text-center" style="margin-top:25px">If you have any types of quries related to Events and Registration , you can contact us from the given details.
                      It's Our pleasure to help you.</p>
           <div class="row" style="margin-top:80px">
             <div class="col-sm-12 col-md-6 col-lg-3 my-5">
               <div class="border-0">
                  <div class="card-body text-center">
                    <i class="fa fa-phone fa-5x mb-3" aria-hidden="true"></i>
                    <h4 class="text-uppercase mb-5">call us</h4>
                    <p><a href="tel:+917037564392">7037564392</a></p>
                  </div>
                </div>
             </div>
             <div class="col-sm-12 col-md-6 col-lg-3 my-5">
                 <div class="border-0">
                  <div class="card-body text-center">
                    <i class="fa fa-map-marker fa-5x mb-3" aria-hidden="true"></i>
                    <h4 class="text-uppercase mb-5">Address</h4>
                   <p>Tyro office ,Above TDP Cell Shri Ram Murti Smarak college of engineering and technology Bareilly</p>
                  </div>
                </div>
             </div>
             <div class="col-sm-12 col-md-6 col-lg-3 my-5">
               <div class="border-0">
                  <div class="card-body text-center">
                <i class="fab fa-whatsapp fa-5x mb-3" aria-hidden="true"></i>
                    <h4 class="text-uppercase mb-5">Whats App</h4>
                    <p><a href="https://api.whatsapp.com/send?phone=+917037564392" target="_blank">Any Query</a></p>
                  </div>
                </div>
            </div>
            <div class="col-sm-12 col-md-6 col-lg-3 my-5">
               <div class="border-0">
                   <div class="card-body text-center">
                  <i class="fas fa-envelope fa-5x mb-3" aria-hidden="true"></i>
                    <h4 class="text-uppercase mb-5">email</h4>
                    <p><a href="mailto:tyro@srmscet.edu">tyro@srmscet.edu</a><br><a href="mailto:tyro.srms@gmail.com">tyro.srms@gmail.com</a></p>
                  </div>
                </div>
            </div>
           </div>
       </div>
    </section>
    <section id="last" class="container" style="color:#fff;font-size:3rem;">
      <!-- heading -->
      <div class="full">
        <h3 class="text-center" style="color:#fff;font-size:3rem;">Drop a Message</h3>
 
        <div class="lt">
 
          <!-- form starting  -->
          <form class="form-horizontal"
                method="post" action="contact.php">
            <div class="form-group">
              <div class="col-sm-12">
                <!-- name  -->
                <input
                  type="text"
                  class="form-control"
                  id="name"
                  placeholder="NAME"
                  name="name"
                  value=""
                />
              </div>
            </div>
 
            <div class="form-group">
              <div class="col-sm-12">
                <!-- email  -->
                <input
                  type="email"
                  class="form-control"
                  id="email"
                  placeholder="EMAIL"
                  name="email"
                  value=""
                />
              </div>
            </div>
 
            <!-- message  -->
            <textarea
              class="form-control"
              rows="10"
              placeholder="MESSAGE"
              name="message">
            </textarea>
 
            <button
              class="btn btn-primary send-button"
              id="submit"
              type="submit"
              value="SEND">
              <i class="fa fa-paper-plane"></i>
              <span class="send-text">SEND</span>
            </button>
          </form>
          <!-- end of form -->
        </div>
 
     
      </div>
    </section>


    <?php include('include/footer.php')?>