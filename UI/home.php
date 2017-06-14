<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <!-- Theme Made By www.w3schools.com - No Copyright -->
  <title>AppMeter - Home</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet" type="text/css">
  <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <style>
  body {
      font: 400 15px/1.8 Lato, sans-serif;
      color: #777;
  }
  h3, h4 {
      margin: 10px 0 30px 0;
      letter-spacing: 10px;      
      font-size: 20px;
      color: #111;
  }
  .container {
      padding: 80px 120px;
  }
  .person {
      border: 10px solid transparent;
      margin-bottom: 25px;
      width: 80%;
      height: 80%;
      opacity: 0.7;
  }
  .person:hover {
      border-color: #f1f1f1;
  }
  .carousel-inner img {
      <!--- webkit-filter: grayscale(90%); -->
     filter: grayscale(90%); /* make all photos black and white */
      width: 100%; /* Set width to 100% */
      margin: auto;
	  height:auto;
  }
  .carousel-caption h3 {
      color: #fff !important;
  }

  @media (max-width: 600px) {
    .carousel-caption {
      display: none; /* Hide the carousel text when the screen is less than 600 pixels wide */
    }
  }
  .bg-1 {
      background: #2d2d30;
      color: #bdbdbd;
  }
  .bg-1 h3 {color: #fff;}
  .bg-1 p {font-style: italic;}
  .list-group-item:first-child {
      border-top-right-radius: 0;
      border-top-left-radius: 0;
  }
  .list-group-item:last-child {
      border-bottom-right-radius: 0;
      border-bottom-left-radius: 0;
  }
  .thumbnail {
      padding: 0 0 15px 0;
      border: none;
      border-radius: 0;
  }
  .thumbnail p {
      margin-top: 15px;
      color: #555;
  }
  .btn {
      padding: 10px 20px;
      background-color: #333;
      color: #f1f1f1;
      border-radius: 0;
      transition: .2s;
  }
  .btn:hover, .btn:focus {
      border: 1px solid #333;
      background-color: #fff;
      color: #000;
  }
  .modal-header, h4, .close {
      background-color: #333;
      color: #fff !important;
      text-align: center;
      font-size: 30px;
  }
  .modal-header, .modal-body {
      padding: 40px 50px;
  }
  .nav-tabs li a {
      color: #777;
  }
  #googleMap {
      width: 100%;
      height: 400px;
      -webkit-filter: grayscale(100%);
      filter: grayscale(100%);
  }  
  .navbar {
      font-family: Montserrat, sans-serif;
      margin-bottom: 0;
      background-color: #2d2d30;
      border: 0;
      font-size: 11px !important;
      letter-spacing: 4px;
      opacity: 0.9;
  }
  .navbar li a, .navbar .navbar-brand { 
      color: #d5d5d5 !important;
  }
  .navbar-nav li a:hover {
      color: #fff !important;
  }
  .navbar-nav li.active a {
      color: #fff !important;
      background-color: #29292c !important;
  }
  .navbar-default .navbar-toggle {
      border-color: transparent;
  }
  .open .dropdown-toggle {
      color: #fff;
      background-color: #555 !important;
  }
  .dropdown-menu li a {
      color: #000 !important;
  }
  .dropdown-menu li a:hover {
      background-color: red !important;
  }
  footer {
      background-color: #2d2d30;
      color: #f5f5f5;
      padding: 32px;
  }
  footer a {
      color: #f5f5f5;
  }
  footer a:hover {
      color: #777;
      text-decoration: none;
  }  
  .form-control {
      border-radius: 0;
  }
  textarea {
      resize: none;
  }
  h1{text-color:w3-black;}
  
  @media (min-width:1000px){
  .item{
		position: relative;
                height:540px;
  width:100%;}
  }
  
  a:hover{
  color: #fff;
  }
  
  
  span a{
  color:#0086b3;
  }
  
  span a:hover{
  color: #0086b3;
  }
  
  </style>
</head>
<body id="myPage" data-spy="scroll" data-target=".navbar" data-offset="50">

<nav class="navbar navbar-default navbar-fixed-top">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
      <span class="navbar-brand" style="align:center">
      <?php  if(isset($_SESSION["name"])){
          $user=$_SESSION["name"];
          echo 'Hello ' .$user.'! </span>'; 
         } else {        
         echo "AppMeter</span>";
       }?>
      
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav navbar-right">
        <li><a href="/home.php">HOME</a></li>
        <?php if(!isset($_SESSION['name'])){ ?>
        <li class="dropdown">
          <a class="dropdown-toggle" data-toggle="dropdown" href="#">LOGIN/REGISTER
          <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="/login.php">LOGIN</a></li>
            <li><a href="/register.php">REGISTER</a></li>
          </ul>
        </li>
        <?php } ?>
	<li><a href="#whatwedo">WHAT WE DO</a></li>
        <li><a href="#pricing">PRICING</a></li>
        <li><a href="#team">ABOUT US</a></li>
        <li><a href="#contact">CONTACT</a></li>
        <?php if(isset($_SESSION['name'])){ ?>
         <li><a href="logout.php">LOGOUT</a></li>
         <?php } ?>
        
        
       
      </ul>
    </div>
  </div>
</nav>

<div id="myCarousel" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
      <li data-target="#myCarousel" data-slide-to="2"></li>
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner" role="listbox">
      <div class="item active">
        <img class="img-responsive" src="/images/bg3.jpg" alt="New York" >
        <div class="carousel-caption w3-display-bottom w3-panel w3-black">
          <h1><b><a href="/searchscore.php"> Check Score</a></b></h1>
          <p>
          Search App easily and View it's Score and other app details!!
          </p>
        </div>      
      </div>

      <div class="item">
        <img class="img-responsive" src="/images/c1.jpg" alt="Chicago" >
        <div class="carousel-caption w3-display-bottom w3-panel w3-black">
        <?php if(!isset($_SESSION["name"])){ ?>
          <h1><b><a href="/login.php">Predict</a></b></h1>
         <?php } else {?>
          <h1><b><a href="/predict.php">Predict</a></b></h1>
          <?php } ?>
          
          <p>Launching a new App? Our Downloads predictor will help you!</p>
        </div>      
      </div>
    
      <div class="item">
        <img class="img-responsive" src="/images/bg.jpg" alt="Los Angeles" >
        <div class="carousel-caption w3-display-bottom w3-panel w3-black">
        <?php if(!isset($_SESSION["name"])){ ?>
          <h1><b><a href="/login.php">Analyze</a></b></h1>
         <?php } else {?>
          <h1><b><a href="/analytics.php">Analyze</a></b></h1>
          <?php } ?>
          <p>Play with our interactive App-Analytics Dashboard to get insights!</p>
        </div>      
      </div>
    </div>

    <!-- Left and right controls -->
    <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
</div>

<!-- Container (The Band Section) -->
<div id="whatwedo" class="container text-center">
  <h3>WHAT WE DO</h3>
  <p><em>Mobile App Analytics? We have got everything for you!</em></p>
  <p align="justify">
  

  
  </p>
  <br>
  <div class="row">
    <div class="col-sm-4">
      <p class="text-center"><strong>CHECK SCORE</strong></p><br>
      
        <img src="/images/score1.png" class="img-circle person w3-opacity-none" alt="Score" width="255" height="255">
      
      <p align="justify"><b>AppMeter Score</b> - Our algorithm gives you a comprehensive score for a mobile application which will judge 
  the performance/acceptance of the mobile application in the app market. Also see how that application ranks in it's genre!
  </p>
    </div>
    
    <div class="col-sm-4">
      <p class="text-center"><strong>PREDICT</strong></p><br>
      
        <img src="/images/predict1.jpg" class="img-circle person" alt="Predict" width="255" height="255">
      
      <p align="justify"><b>Predictive Analytics</b> - Are you planning to launch a new mobile app? 
  Our download predictor will help you estimate future downloads! 
  You just give in details of your app and that's it! 
  Our algorithm will give you your download prediction for your new app!</p>
    </div>
    
    <div class="col-sm-4">
      <p class="text-center"><strong>ANALYZE</strong></p><br>
      
        <img src="/images/analyze1.png" class="img-circle person" alt="Analyze" width="255" height="255">
     
      
       <p align="justify"> <b>App Analytics</b> - Curious about the current app market scenario? What genre has most downloads? 
  How many apps are rated 4+? What's the genre-wise rating-wise Average AppMeter Score? 
  Try our all-inclusive 'App Analytics' dashboard!</p>
    </div>
  </div>
</div>

<!-- Container (TOUR Section) -->
<div id="pricing" class="bg-1">
  <div class="container">
      

   <div class="container-fluid">
  <div class="text-center">
    <h3>PRICING</h3>
    
  </div>
   
</div>
      
   <div class="w3-row-padding">
    <div class="w3-half w3-margin-bottom">
      <ul class="w3-ul w3-light-grey w3-center">
        <li class="w3-light-blue w3-xlarge w3-padding-32">Basic</li>
        <li class="w3-padding-16">Score Check Included</li>
        <li class="w3-padding-16">Predictions Not Included</li>
        <li class="w3-padding-16">App Analytics Not Included</li>
        <li class="w3-padding-16">No Support</li>
       
        <li class="w3-padding-16">
          <h2>$ 0</h2>
          <span class="w3-opacity">Per User Per Year</span>
        </li>
      </ul>
    </div>
        
    <div class="w3-half">
      <ul class="w3-ul w3-light-grey w3-center">
        <li class="w3-blue w3-xlarge w3-padding-32">Pro</li>
        <li class="w3-padding-16">Score Check Included</li>
        <li class="w3-padding-16">Predictions Included</li>
        <li class="w3-padding-16">App Analytics Included</li>
        <li class="w3-padding-16">Full Support</li>
        <li class="w3-padding-16">
          <h2>$ 499</h2>
          <span class="w3-opacity">Per User Per Year</span>
        </li>  
       </ul>
      </div>
     </div> 
      
          
      </div>
  </div>
  
  
  
  <!-- Modal -->
  <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">Ã—</button>
          <h4><span class="glyphicon glyphicon-lock"></span> Tickets</h4>
        </div>
        <div class="modal-body">
          <form role="form">
            <div class="form-group">
              <label for="psw"><span class="glyphicon glyphicon-shopping-cart"></span> Tickets, $23 per person</label>
              <input type="number" class="form-control" id="psw" placeholder="How many?">
            </div>
            <div class="form-group">
              <label for="usrname"><span class="glyphicon glyphicon-user"></span> Send To</label>
              <input type="text" class="form-control" id="usrname" placeholder="Enter email">
            </div>
              <button type="submit" class="btn btn-block">Pay 
                <span class="glyphicon glyphicon-ok"></span>
              </button>
          </form>
        </div>
        <div class="modal-footer">
          <button type="submit" class="btn btn-danger btn-default pull-left" data-dismiss="modal">
            <span class="glyphicon glyphicon-remove"></span> Cancel
          </button>
          <p>Need <a href="#">help?</a></p>
        </div>
      </div>
    </div>
  </div>
</div>

<!-- team pics container -->
<div id="team" class="container text-center">
  <h3>TEAM</h3>
  <p><em>THE BRAINS BEHIND THE MAGIC</em></p>
    <br>
  <br>
  <div class="row">
  <!-- GUIDE -->
  
  <div class="col-sm-4">
      
     
        <img src="/images/yasinceran.jpg" class="img-circle" alt="Random Name" width="200" height="200"><br><br>
      <p class="text-center"><strong>Prof. Yasin Ceran</strong></p>
    </div>
    <div class="col-sm-8"><br>
    <!--  <p class="text-center"><strong>About Prof. Yasin</strong></p><br> -->
     
        <p align="justify">
        Professor Ceran’s research interests include incentive issues in software development and 
        demand estimation using information from online social networks. His teaching interests include 
        telecommunications and business networks, business intelligence, web analytics, data mining, 
        management information systems, data management, and SAS. Professor Yasin's extremely valuable guidance has helped 
        AppMeter initiative immensly!
         <span class="pull-right" ><a href="https://www.linkedin.com/in/yasin-ceran-29b1496a/" target="_blank"><i class="fa fa-linkedin w3-hover-opacity"></i></a>
      </span>
        </p>
   
    </div>
   </div>
  <!-- 1 -->
 <hr>
 <div class="row">
    <div class="col-sm-4">
      <br>
     
        <img src="/images/ameya.jpg" class="img-circle" alt="Random Name" width="200" height="200"><br><br>
         <p class="text-center"><strong>Ameya Ghatpande</strong></p>
    </div>
    <div class="col-sm-8"><br>
     <!-- <p class="text-center"><strong>About Ameya</strong></p><br> -->
      <br>
        <p align="justify">
        Ameya has extensive experience of developing enterprise level software. 
        He is one of the founding members of AppMeter team. He led the project and contributed in 
        designing the machine learning algorithms to develop the trademark AppMeter Score and Ranking system. 
        He has keen interest in big data analytics and cloud computing. He believes in the power of data driven decisions
        and is passionate about the App success prediction algorithm.
        <span class="pull-right" ><a href="https://www.linkedin.com/in/ameya-ghatpande-4bb3a07/" target="_blank"><i class="fa fa-linkedin w3-hover-opacity"></i></a>
      </span>
        </p>
     
    </div>
    
   </div> <!-- div row closed -->
    <!--2-->
    <hr>
    <div class="row">
     <div class="col-sm-4">
      <br>
      
        <img src="/images/amarjit.png" class="img-circle" alt="Random Name" width="200" height="200"><br><br>
      <p class="text-center"><strong>Amarjit Dhal</strong></p>
    </div>
    <div class="col-sm-8"><br><br>
     <!-- <p class="text-center"><strong>About Amarjit</strong></p><br> -->
     <p align="justify">
     
     Amarjit is a software engineer by training and an analyst by passion, 
     after completing his Bachelors in Computer Science Engineering, 
     he has worked for more than 6 years in IT industry in various roles before joining the MSIS course. 
     He has experience working with global clients identifying potential business opportunities and optimizing 
     technical solutions.  He is passionate about how data can be used to create meaningful insights 
     that can be beneficial to a business.
     <span class="pull-right" ><a href="https://www.linkedin.com/in/amarjitdhal/" target="_blank"><i class="fa fa-linkedin w3-hover-opacity"></i></a>
      </span>
     </p>
    </div>
    </div>
    <!-- 3 -->
    <hr>
    <div class="row">
     <div class="col-sm-4">
      <br>
      
        <img src="/images/shalini.jpg" class="img-circle" alt="Random Name" width="200" height="200"><br><br>
      <p class="text-center"><strong>Shalini Gopalakrishnan</strong></p>
    </div>
    <div class="col-sm-8"><br>
      <!-- <p class="text-center"><strong>About Shalini</strong></p><br> -->
      <p align="justify">
      
      
Shalini is a meticulous, proactive and focused individual with 4 years of experience as a software developer. 
During this tenure, she has designed and developed critical web-based applications from inception to launch. 
She aspires to become a data analyst as she is passionate about interpreting data, 
analyzing results using statistical techniques and providing reports using visualization tools. 
She has been working towards her aspiration through MSIS coursework and also by learning the relevant skills on her own.
       <span class="pull-right" ><a href="https://www.linkedin.com/in/shalini-gopalakrishnan-71253931/" target="_blank"><i class="fa fa-linkedin w3-hover-opacity"></i></a>
      </span>
      </p>
    </div>
    </div>
    <hr>
    <!-- 4 -->
    <div class="row">
     <div class="col-sm-4">
      <br>
      
        <img src="/images/chaitrali.jpg" class="img-circle" alt="Random Name" width="200" height="200"><br><br>
      <p class="text-center"><strong>Chaitrali Naik</strong></p>
    </div>
    <div class="col-sm-8"><br>
    <!--  <p class="text-center"><strong>About Chaitrali</strong></p><br> -->
      <p align="justify">
      Chaitrali has previous work experience in software development involving requirements gathering, analysis, 
      design and testing of software systems. Technology and its applications gave a chance to work with tons of data 
      with variety. During her internship, she got the opportunity to study data from diverse views and 
      perceptions which helped the management of the organization in decision making. 
      This required data processing, transformations, storage and visualizations which strengthened her competency
      in the field of analytics.<span class="pull-right" ><a href="https://www.linkedin.com/in/chaitrali-madhav-naik-78152277/" target="_blank"><i class="fa fa-linkedin w3-hover-opacity"></i></a>
      </span>
      </p>
    </div>
    </div>
    <hr>
    <!-- 5 -->
    <div class="row">
     <div class="col-sm-4">
      <br>
      
        <img src="/images/omkar.jpg" class="img-circle" alt="Random Name" width="200" height="200"><br><br>
     <p class="text-center"><strong>Omkar Gokhale</strong></p>
    </div>
    <div class="col-sm-8">
    <br><br>
     <!-- <p class="text-center"><strong>About Omkar</strong></p><br> -->
      <p align="justify">
      
       Omkar is passionate about Business Intelligence and has background in Information Technology. 
       Working in BI domain has given him exposure to work with large data sets and experience with 
       various tools for data manipulation, cleansing and visualizations. 
       Omkar is proficient with data related programming and has good understanding of dimensional data modeling 
       and complete BI life-cycle. Omkar's quick grasp on web development technologies has helped him 
       gain momentum in his career.
       <span class="pull-right" ><a href="https://www.linkedin.com/in/omkargokhale/" target="_blank"><i class="fa fa-linkedin w3-hover-opacity"></i></a>
      </span>
      </p>
    </div>
   </div>
</div>



<hr>

<!-- Container (Contact Section) -->
<div id="contact" class="container">
  <h3 class="text-center">CONTACT</h3>
  <p class="text-center"><em>We love our fans!</em></p>

<div class = "padabove">
  <div class="w3-row-padding w3-image">
    <div class="w3-col m4 w3-margin-bottom">
      <div class="w3-light-red" >
        <center><img class="" src="/images/email2.png" alt="Email" style="height:150px;width:150px" align="center"></center>
        <div class="w3-container">
        <!-- <center> <p><b>Email</b></p></center>-->
         <br> <p class="w3-opacity" align="center"> Need Support?</p>
          <p align="center"> 
       
         For any account set-up or technical support, Email us!<br><br>
         <center><i>support@appmeter.com</i></center>
        </p>
        </div>
      </div>
    </div>
    <div class="w3-col m4 w3-margin-bottom">
      <div class="w3-light-red">
       <center> <img class="" src="/images/phone2.png" alt="Call" style="height:150px;width:150px" align="center"></center>
        <div class="w3-container">
         <!-- <center><p><b>Call</b></p></center>-->
         <br> <p class="w3-opacity" align="center">Have Questions? </p>
          <p align="center">
   
          Our Call center executives will answer your questions!<br>
          <br><center><i>+1 669-247-9323</i></center>
          </p>
        </div>
      </div>
    </div>
     <div class="w3-col m4 w3-margin-bottom">
      <div class="w3-light-red">
       <center> <img class="" src="/images/payment2.png" alt="Payment" style="height:150px;width:150px" align="center"></center>
        <div class="w3-container">
         <!-- <center><p><b>Payment</b></p></center>-->
         <br> <p class="w3-opacity" align="center">Loved our product? </p>
          <p align="center">
          
           Contact us regarding payment related matters to<br><br> <center><i>payment@appmeter.com</i></center>
          
          </p>
        </div>
      </div>
    </div>
    
  </div>
  </div>
  
</div>
 
  <div class="tab-content">
   
</div>



<!-- Footer -->
<footer class="text-center">
  <a class="up-arrow" href="#myPage" data-toggle="tooltip" title="TO TOP">
    <span class="glyphicon glyphicon-chevron-up"></span>
  </a><br><br>
  <p>Made By Team <a href="http://appmeter.atwebpages.com/home.php" data-toggle="tooltip" title="AppMeter">AppMeter</a></p> 
</footer>

<script>
$(document).ready(function(){
  // Initialize Tooltip
  $('[data-toggle="tooltip"]').tooltip(); 
  
  // Add smooth scrolling to all links in navbar + footer link
  $(".navbar a, footer a[href='#myPage']").on('click', function(event) {

    // Make sure this.hash has a value before overriding default behavior
    if (this.hash !== "") {

      // Prevent default anchor click behavior
      event.preventDefault();

      // Store hash
      var hash = this.hash;

      // Using jQuery's animate() method to add smooth page scroll
      // The optional number (900) specifies the number of milliseconds it takes to scroll to the specified area
      $('html, body').animate({
        scrollTop: $(hash).offset().top
      }, 900, function(){
   
        // Add hash (#) to URL when done scrolling (default click behavior)
        window.location.hash = hash;
      });
    } // End if
  });
})
</script>

</body>
</html>
