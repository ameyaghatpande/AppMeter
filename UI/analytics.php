<?php
session_start();
?>
<?php if(!isset($_SESSION["name"])){ 
print "<script>window.location.href = 'login.php'</script>";
}?>
<html>
<title>App Analytics</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<script src="http://code.jquery.com/jquery-1.11.1.min.js"></script>
<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
<style>
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
  
iframe { width:100%; margin-top:50px; border:0; height:100%; }
</style>
<body>
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
        <li><a href="searchscore.php">SCORE</a></li>
        <li><a href="predict.php">PREDICT</a></li>
        <li><a href="logout.php">LOGOUT</a></li>

        
        <!-- <li><a href="#"><span class="glyphicon glyphicon-search"></span></a></li> -->
      </ul>
    </div>
  </div>
</nav>
<div width="100%" height ="100%">
<iframe background-color="#00234C" src="https://app.powerbi.com/view?r=eyJrIjoiZjI2YTY3MDQtMWY3ZC00Mzc2LWEzNTAtYmU0NzNjYTczODBhIiwidCI6Ijc5OTgxYjAxLTE5NDQtNGRhMC1hYTlhLWZiOWY2M2JkZGI1ZSIsImMiOjZ9"></iframe>
</div>
</body>
</html>