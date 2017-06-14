<?php session_start();?>
<!DOCTYPE html>
<html>
<title>Login</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet" type="text/css">
 
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
body,h1,h2,h3,h4,h5,h6 {font-family: "Lato", sans-serif;}
body, html {
    height: 100%;
    color: #777;
    line-height: 1.8;
}

.td {
 
 padding: 30px;
}

/* Create a Parallax Effect */
.bgimg-1, .bgimg-2, .bgimg-3 {
    background-attachment: fixed;
    background-position: center;
    background-repeat: no-repeat;
    background-size: cover;
}

/* First image (Logo. Full height) */
.bgimg-1 {
    background-image: url('/images/bg6.jpg');
    min-height: 100%;
}

/* Second image (Portfolio) */
.bgimg-2 {
    background-image: url("/w3images/parallax2.jpg");
    min-height: 400px;
}

/* Third image (Contact) */
.bgimg-3 {
    background-image: url("/w3images/parallax3.jpg");
    min-height: 400px;
}

.w3-wide {letter-spacing: 10px;}
.w3-hover-opacity {cursor: pointer;}

/* Turn off parallax scrolling for tablets and phones */
@media only screen and (max-device-width: 1024px) {
    .bgimg-1, .bgimg-2, .bgimg-3 {
        background-attachment: scroll;
    }
}

#loginform{
	opacity=0.8;
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

</style>
<body id="myPage">

<nav class="navbar navbar-default navbar-fixed-top">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
      <a class="navbar-brand" href="/home.php">AppMeter</a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav navbar-right">
        <li><a href="/home.php">HOME</a></li>
        <li><a href="home.php/#whatwedo">WHAT WE DO</a></li>
        <li><a href="home.php/#pricing">PRICING</a></li>
        <li><a href="home.php/#team">ABOUT US</a></li>
        <li><a href="home.php/#contact">CONTACT</a></li>
        
       
      </ul>
    </div>
  </div>
</nav>



<!-- First Parallax Image with Logo Text -->

        
<div class="bgimg-1 w3-display-container" id="home">
  <div class="w3-display-left" style="white-space:nowrap;">
    <div class="w3-center w3-padding-large w3-text-white w3-large w3-wide">
	<br>
        <h1> </h1>
        
 <div id="loginform">
<br>



<?php if (isset($_SESSION["email"])) { 
  
  
print "<script>window.location.href = 'features.php'</script>";

} else { ?>
  <h1 class="w3-xxlarge"><b>LOGIN</b></h1><br>
 
<h2><?php print $_SESSION["flash"]; }?></h2><br>
  <form id="login" action="logininternal.php" method="post" class="w3-text-black">
          <div id="ip" align="right">
      <span class="w3-text-white">

      Email: </span> <input type="text" name="email"  required/><span class="w3-text-white">* </span><span class="error"><?php echo $nameErr;?> </span><br><br>
      <span class="w3-text-white">Password: </span><input type="password" name="password"  required /><span class="w3-text-white">*</span> <span class="error"><?php echo $passErr;?> </span><br><br>
      </div>
              <input type="submit" value="Log in" align="center" text-color="w3-black"/>
  </form>

<?php 

  if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (empty($_POST["email"])) {
        $nameErr = "Email is required";
    }
    else {
        $name = $_POST["email"];
    }
    
     if (empty($_POST["password"])) {
        $passwordErr = "Password is required";
    }
    else {
        $password = $_POST["password"];
    }
    
} ?>




<br>
     New User? <a href="/register.php" style="text-color:white"> Register here!</a><br><br>
    <!--<br>   <a href="/shal_search_filter.php" style="text-color:white">Continue as a guest!</a>-->

</div>

</div>
</div>
</div>
      
        
        

    


<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBu-916DdpKAjTmJNIgngS6HL_kDIKU0aU&callback=myMap"></script>
<!--
To use this code on your website, get a free API key from Google.
Read more at: https://www.w3schools.com/graphics/google_maps_basic.asp
-->

</body>
</html>
