<?php
session_start();
?>
<?php if(!isset($_SESSION["name"])){ 
print "<script>window.location.href = 'login.php'</script>";
}?>
<!DOCTYPE html>
<html>
<title>AppMeter - Functions</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/3/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins">
 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<style>
body,h1,h2,h3,h4,h5{font-family: "Poppins", sans-serif}
body {font-size:16px;}
.w3-half img{margin-bottom:-6px;margin-top:16px;opacity:0.8;cursor:pointer}
.w3-half img:hover{opacity:1}

  body {
      font: 20px Montserrat, sans-serif;
      line-height: 1.8;
      color: #f5f6f7;
    background-image: url('images/woodbg.jpg');
  }
  p {font-size: 16px;}
  .margin {margin-bottom: 45px;}
  .bg-1 { 
      background-color: #1abc9c; /* Green */
      color: #ffffff;
  }
  .bg-2 { 
      background-color: #474e5d; /* Dark Blue */
      color: #ffffff;
  }
  .bg-3 { 
      background-color: #ffffff; /* White */
      color: #555555;
  }
  .bg-4 { 
      background-color: #2f2f2f; /* Black Gray */
      color: #fff;
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
  
        .navbar > .dropdown-menu li a:link {
      color: black !important;
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
  
      .navbar {
      margin-bottom: 0;
      border-radius: 0;
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
  
    .padabove {
      padding-top: 70px;
      padding-bottom: 70px;
  }



</style>
<body id="myPage">

<!-- Navbar -->
<nav class="navbar navbar-default navbar-fixed-top navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
      <span class="navbar-brand" style="align:center"> Hello <?php
              if(isset($_SESSION["name"])){
              $user=$_SESSION["name"];
              echo $user; }?>!</span>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav navbar-right">
        <li><a href="/home.php">HOME</a></li>
       
        <li><a href="logout.php">LOGOUT</a></li>
        
        
        <!-- <li><a href="#"><span class="glyphicon glyphicon-search"></span></a></li> -->
      </ul>
    </div>
  </div>
</nav>


<br>
  <!-- The Team -->
  <div class = "padabove">
  <div class="w3-row-padding w3-image">
    <div class="w3-col m4 w3-margin-bottom">
      <div class="w3-light-red">
        <center><img class="" src="/images/n_score.png" alt="John" style="height:200px;width:200px" align="center"></center>
        <div class="w3-container">
         <center> <h3><a href="/searchscore.php">Check Score</a></h3></center>
          <p class="w3-opacity"> Get the score for an app</p>
          <p align="justify"> 
       The Appmeter scoring algorithm considers multiple parameters to give a unified score which ranks an app in a genre and keeps you informed about the top 10 apps in the genre.  
        
        </p>
        </div>
      </div>
    </div>
    <div class="w3-col m4 w3-margin-bottom">
      <div class="w3-light-red">
       <center> <img class="" src="/images/n_predict.png" alt="Jane" style="height:200px;width:200px" align="center"></center>
        <div class="w3-container">
          <center><h3><a href="/predict.php">Predict</a></h3></center>
          <p class="w3-opacity">Expected downloads for your new app</p>
          <p align="justify">
          
     Create the launch strategy for your new app, by using our Predictive alogorithm, which considers different data points to predict the number of downloads for a new app.
          
          
          </p>
        </div>
      </div>
    </div>
    <div class="w3-col m4 w3-margin-bottom">
      <div class="w3-light-red">
       <center> <img class="" src="/images/n_analytics1.png" alt="Mike" style="height:200px;width:200px" align="center"> </center>
        <div class="w3-container">
         <center> <h3><a href="/analytics.php">Analyze</a></h3></center>
          <p class="w3-opacity" align="justify">Analyze the trends in app market so far</p>
          <p align="justify">
          
          The all inclusive app analytics dashboard keeps you updated with highly competitive App market. See how the app ecosystem is currently positioned.
         
          </p>
        
        
        </div>
      </div>
    </div>
  </div>
  </div>

<!-- End page content -->
</div>
<!-- Footer -->
<footer class="text-center">
  <a class="up-arrow" href="#myPage" data-toggle="tooltip" title="TO TOP">
    <span class="glyphicon glyphicon-chevron-up"></span>
  </a><br><br>
  <p>Made By Team <a href="http://appmeter.atwebpages.com/home.php" data-toggle="tooltip" title="AppMeter">AppMeter</a></p> 
</footer>
<script>
// Script to open and close sidebar
function w3_open() {
    document.getElementById("mySidebar").style.display = "block";
    document.getElementById("myOverlay").style.display = "block";
}
 
function w3_close() {
    document.getElementById("mySidebar").style.display = "none";
    document.getElementById("myOverlay").style.display = "none";
}

// Modal Image Gallery
function onClick(element) {
  document.getElementById("img01").src = element.src;
  document.getElementById("modal01").style.display = "block";
  var captionText = document.getElementById("caption");
  captionText.innerHTML = element.alt;
}
</script>

</body>
</html>
