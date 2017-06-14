<?php
session_start();
?>
<!DOCTYPE html>
<?php
$servername = "pdb10.awardspace.net";
$username = "2321375_appmeter";
$password = "appmeter123";
$dbname = "2321375_appmeter";
$app=$_REQUEST["appinput"];


?>
<html lang="en">
<head>
  <title>Search App Meter</title>
  <meta http-equiv="content-type" content="text/html; charset=utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  
  <script src="http://code.jquery.com/jquery-1.11.1.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
  <script type="text/javascript" src="https://code.jquery.com/jquery-latest.min.js"></script>
  <script src="jquery.tinycarousel.js"></script>
  <script type="text/javascript">
		$(document).ready(function()
		{
			$('#slider1').tinycarousel();
		});
		


        function defaultImg(){
        
//        this.onerror = null;
        this.src = 'https://upload.wikimedia.org/wikipedia/commons/6/66/Android_robot.pngimages/android.png';
        
        }
</script>

  <style>
    /* Remove the navbar's default margin-bottom and rounded borders */ 
    
    body {
    
    background-image: url('images/woodbg.jpg');
    background-size: cover;
    margin: 0;


    }
    .navbar {
      margin-bottom: 0;
      border-radius: 0;
   }
   
   .h4 {
   color:black;
   }

    
    
    /* Set black background color, white text and some padding */
    footer {
      background-color: #555;
      color: white;
      padding: 15px;
      position: absolute;
      left:0px;
      bottom:0px;
      width: 80%;
    }
    
    /* On small screens, set height to 'auto' for sidenav and grid */
    @media screen and (max-width: 767px) {
        row.content {height:auto;
	  overflow: auto;
	  } 
    }
	
	.row.content {height:auto;
	  overflow: auto;
	  }
	
	
	    	.behclick-panel  .list-group {
    		margin-bottom: 0px;
		}
		.behclick-panel .list-group-item:first-child {
			border-top-left-radius:0px;
			border-top-right-radius:0px;
		}
		.behclick-panel .list-group-item {
			border-right:0px;
			border-left:0px;
		}
		.behclick-panel .list-group-item:last-child{
			border-bottom-right-radius:0px;
			border-bottom-left-radius:0px;
		}
		.behclick-panel .list-group-item {
			padding: 5px;
		}
		.behclick-panel .panel-heading {
			/* 				padding: 10px 15px;
                            border-bottom: 1px solid transparent; */
			border-top-right-radius: 0px;
			border-top-left-radius: 0px;
			border-bottom: 1px solid darkslategrey;
		}
		.behclick-panel .panel-heading:last-child{
			/* border-bottom: 0px; */
		}
		.behclick-panel {
			border-radius: 0px;
			border-right: 0px;
			border-left: 0px;
			border-bottom: 0px;
			box-shadow: 0 0px 0px rgba(0, 0, 0, 0);
		}
		.behclick-panel .radio, .checkbox {
			margin: 0px;
			padding-left: 10px;
		}
		.behclick-panel .panel-title > a, .panel-title > small, .panel-title > .small, .panel-title > small > a, .panel-title > .small > a {
			outline: none;
		}
		.behclick-panel .panel-body > .panel-heading{
			padding:10px 10px;
		}
		.behclick-panel .panel-body {
			padding: 0px;
		}
		 /* unvisited link */
		.behclick-panel a:link {
		    text-decoration:none;
		}

		/* visited link */
		.behclick-panel a:visited {
		    text-decoration:none;
		}

		/* mouse over link */
		.behclick-panel a:hover {
		    text-decoration:none;
		}

		/* selected link */
		.behclick-panel a:active {
		    text-decoration:none;
		}
		

		
		.panel-head-bg {
		background-color:#CCCCFF;
		}
                
                .col-main {
                margin: 10px;
                padding: 10px;
		padding-top: 20px;
                color: white;
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
  table td {
  align : center;
  }
  
  
  /* Tiny Carousel */
#slider1 {
    height: 150px;
    margin: 30px 0 0;
    overflow: hidden;
    position: relative;
    padding: 0 50px 10px;
}

#slider1 .viewport {
    height: 150px;
    overflow: hidden;
    position: relative;
}

#slider1 .buttons {
    background: #C01313;
    border-radius: 35px;
    display: block;
    position: absolute;
    top: 50%;
    left: 0;
    width: 35px;
    height: 35px;
    color: #fff;
    font-weight: bold;
    text-align: center;
    line-height: 35px;
    text-decoration: none;
    font-size: 22px;
}

#slider1 .next {
    right: 0;
    left: auto;
    top: 50%;
}

#slider1 .buttons:hover {
    color: #C01313;
    background: #fff;
}

#slider1 .disable {
    visibility: hidden;
}

#slider1 .overview {
    list-style: none;
    position: absolute;
    padding: 0;
    margin: 0;
    width: 130px;
    left: 0;
    top: 0;
}

#slider1 .overview li {
    float: left;
    margin: 0 20px 0 0;
    padding-right: 150px;
    height: 120px;

    width: 130px;
 }
 
 .overview img {
 height: 120px;
 width: 130px;
 }
		
  </style>
</head>
<body>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css">


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
        <?php 
        if(!isset($_SESSION["name"])){?>
        <li class="dropdown">
          <a class="dropdown-toggle" data-toggle="dropdown" href="#">LOGIN/REGISTER
          <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="/login.php">LOGIN</a></li>
            <li><a href="/register.php">REGISTER</a></li>
          </ul>
        </li>
        <?php } else{ ?>
        <li><a href="predict.php">PREDICT</a></li>
        <li><a href="analytics.php">ANALYZE</a></li>
        <li><a href="logout.php">LOGOUT</a></li>
        <?php }?>
        
        <!-- <li><a href="#"><span class="glyphicon glyphicon-search"></span></a></li> -->
      </ul>
    </div>
  </div>
</nav>

  
<div class="container-fluid">    
  <div class="row content">
          <div class="col-main">
	
<?php


//print "<h1> Here's the score for ".$app."</h1>";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
mysqli_query($conn, 'SET CHARACTER SET utf8');
//mysqli_set_charset('utf8');
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}


$sql = "SELECT app_name,icon_url,all_rating,downloads,mod_genre, release_date,Score, price, file_size, all_rating_count,app_description,rank FROM Android where bundle_id = '$app'";
$result = mysqli_query($conn, $sql);


while($row = mysqli_fetch_array($result, MYSQLI_ASSOC)) {

$icon_url = $row['icon_url'];
$app_name = $row['app_name'];
$price = $row['price'];
$downloads= $row['downloads'];
$filesize= $row['file_size'];
$score= $row['Score'];
$score = round($score,2);
$rating= $row['all_rating'];
$numraters= $row['all_rating_count'];
$releasedate= $row['release_date'];
$genre= $row['mod_genre'];
$app_description= $row['app_description'];
$rank= $row['rank'];


}


$genresql = "SELECT count(*) as count FROM Android where mod_genre = '$genre'";
$totalresult = mysqli_query($conn, $genresql);
while($row = mysqli_fetch_array($totalresult, MYSQLI_ASSOC)) {
$totalapps = $row['count'];
}

$space = "   ";
$linksql = "SELECT icon_url,app_name,bundle_id,Score FROM Android where mod_genre = '$genre' ORDER BY rank ASC LIMIT 10";
$topappsresult = mysqli_query($conn, $linksql);
if (mysqli_num_rows($topappsresult) > 0) {
 while($singlerow = mysqli_fetch_array($topappsresult, MYSQLI_ASSOC)) {
         $rows[] = $singlerow;
 }
 }
/*

 print '<br>'.$linksql;

for($i =0; $i< count($rows); $i = $i+1){
 print $rows[$i]['rank'].'<br>';
 
 }
 
 */




?>

<button style="margin-top:40px;background-color: white; color: black;border-radius:20px;" onclick="window.location.href='searchscore.php'"><< Go back to Search</button>

<table align='center'>
<tr>
<td align='left' style="padding-right:30px;"><img style="width:80px;height:80px" src='<?= $icon_url?>' onerror="this.onerror=null;this.src='images/android.png';" alt='<?= $app_name?>'></td>
<td><h4 style='border-radius:10px; padding:10px;background-color: white;color:black;'> <?= $app_name?> </h4></td>
</tr>
</table>


<table align='center'>
<tr>
<td align='center'>
<img src='images/n_download.png' width=80px height=80px title='Downloads'>
<h4 align='center'><?= $downloads ?></h4>
</td>
<td style='padding-left:30px;padding-right:30px'><h1 align='center'></h1></td>
<td align='center'>
<img src='images/n_rating.png' width=80px height=80px title='Rating'>
<h4 align='center'><?= $rating ?></h4>
</td>
</tr>
<tr>
<td align='center'>
<img src='images/N_raters.png' width=80px height=80px title='Number of Raters'>
<h4 align='center'><?= $numraters ?></h4>
</td>
<td style='padding-left:250px;padding-right:250px'>

<?php 

if($score <= 4){
?>
<p align='center'>
<h3 align='center'>Score: <?= $score ?>/10</h3>
<img src="images/pointerred.png" width = "210px" height="120px" style='text-align:center' alt="Red zone"/>
<h3 align='center'>Rank: <?= $rank ?>/<?= $totalapps ?></h3></p>
<!-- <h1 align='center'>Score: <?= $score ?></h1> -->
<?php
} else if($score >4 & $score <=7){
?>
<p align='center'>
<h3 align='center'>Score: <?= $score ?>/10</h3>
<img src="images/yellowpointer.png" width = "210px" height="120px" style='text-align:center' alt="Yellow zone"/>
<h3 align='center'>Rank: <?= $rank ?>/<?= $totalapps ?></h3></p>
<!-- <h1 align='center'>Score: <?= $score ?></h1> -->
<?php
} else if($score > 7){
?>
<p align='center'>
<h3 align='center'>Score: <?= $score ?>/10</h3>
<img src="images/pointergreen.png" width = "210px" height="120px" style='text-align:center' alt="Green zone"/>
<h3 align='center'>Rank: <?= $rank ?>/<?= $totalapps ?></h3></p>
<!-- <h1 align='center'>Score: <?= $score ?></h1> -->
<?php } ?>

</td>
<td align='center'>
<img src='images/n_genre.png' width=80px height=80px title='Genre'>
<h4 align='center'><?= $genre ?></h4>
</td>
</tr>
<tr>
<td>
<img src='images/N_price.png' width=80px height=80px title='Price'>
<h4 align='center'><?= $price ?></h4>
</td>
<td style='padding-left:80px;padding-right:80px'><h1 align='center'></h1></td>
<td align='center'>
<img src='images/n_calendar.png' width=80px height=80px title='Release date'>
<h4 align='center'><?= $releasedate ?></h4>
</td>
</tr>
</table>


<br>

<div style='padding:30px;border-radius:30px;border:1px solid white;width:1000px;margin: 0 auto;'>
<h4 align='center'>App Description</h4>
<p align='left'><?= utf8_encode($app_description)?></p>
</div>
<?php 
$default = "this.onerror=null;this.src='android.png';";
$event = 'onerror="'.$default.'"';

?>

<div style='margin-top:100px;margin-bottom:100px;' >
<h3 align = 'center'> Check out the top ten apps in this genre! </h3>
<div id="slider1">
		<a class="buttons prev" href="#">&#60;</a>
		<div class="viewport">
			<ul class="overview">
                       <?php for($i =0; $i< count($rows); $i = $i+1){ 
//print "<li><a href='score.php?appinput=".$rows[$i]['bundle_id']."'><img src='".$rows[$i]['icon_url'] ."'" . $event." title='".($i+1).". ".$rows[$i]['app_name'] ."' /></a><h4 align='center'>&nbsp;&nbsp;&nbsp;&nbsp;Score:".round($rows[$i]['Score'],2)."</h4></li>";?>
				
<li><a href='score.php?appinput=<?= $rows[$i]['bundle_id'] ?>'><img src='<?= $rows[$i]['icon_url'] ?>' title='<?= ($i+1)?>. <?= $rows[$i]['app_name'] ?>'  onerror="this.onerror=null;this.src='images/android.png';" /></a><h4 align='center'>&nbsp;&nbsp;&nbsp;&nbsp;Score:<?= round($rows[$i]['Score'],2) ?></h4></li>";
                                
                        <?php  } ?>

			</ul>
		</div>
		<a class="buttons next" href="#">&#62;</a>
	</div>

</div>


</div>
</div>
</div>



</body>

</html>

