<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Search App Meter</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  
  <script src="http://code.jquery.com/jquery-1.11.1.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>

  <style>
    /* Remove the navbar's default margin-bottom and rounded borders */ 
    
    body {
    
    background-image: url('images/woodbg.jpg');
    background-size: cover;
    margin : 0;


    }
    .navbar {
      margin-bottom: 0;
      border-radius: 0;
   }
   
   
     .open .dropdown-toggle {
     color: #fff;
     background-color: #555 !important;
  }
  


  .dropdown-menu li a:hover {
      background-color: red !important;
  }


    
    /* Set height of the grid so .sidenav can be 100% (adjust as needed) */
    .row.content {height: 550px;}
    
    /* Set blue background color and 100% height */
    .sidenav {
      padding-top: 50px;
      background-color: #696969;
      height: 100%;
      overflow: auto;
	  
    }
    
    /* Set black background color, white text and some padding */

    
    
    /* On small screens, set height to 'auto' for sidenav and grid */
    @media screen and (max-width: 767px) {
      .sidenav {
        height: auto;
        padding: 15px;
      }
      .row.content {height:auto;
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
		background-color:#D3D3D3;
		}
                
                .col-main {
                margin: 10px;
                padding: 10px;
				padding-top: 50px;
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
  

footer {
      background-color: #2d2d30;
      color: #f5f5f5;
      padding: 32px;
      position:relative;
      bottom:0;
      width:100%
  }
  footer a {
      color: #f5f5f5;
  }
  footer a:hover {
      color: #777;
      text-decoration: none;
  }  
		
  </style>
</head>
<body id="myPage">
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
    <div class="col-sm-2 sidenav">
	<!-- code for search filters -->
<!-- <div class="container-fluid"> -->
	<!-- <div class="row"> -->
	<!--	<div class="col-xs-6 col-sm-3"> -->
			<div id="accordion" class="panel panel-primary behclick-panel">
				<div style="background-color: black" class="panel-heading">
					<h3 class="panel-title">Search by filters</h3>
				</div>
				<div class="panel-body" >
                                <p align='right' style='padding-top:9px;padding-right:9px;'><button name='Reset' onclick='resetFilters();'>Reset search</button></p>
				<div class="panel-heading panel-head-bg">
						<h4 class="panel-title">

								 Category
							
						</h4>
					</div>
					<div id="collapse1" class="panel-collapse collapse in" style="height:170px;overflow:scroll;">
						<ul class="list-group">
<?php 
$servername = "pdb10.awardspace.net";
$username = "2321375_appmeter";
$password = "appmeter123";
$dbname = "2321375_appmeter";
// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$genresql = "SELECT DISTINCT(mod_genre) FROM `Android`";
$count = 0;

$result = mysqli_query($conn, $genresql);

if (mysqli_num_rows($result) > 0) {
while($row = mysqli_fetch_array($result, MYSQLI_ASSOC)) {
$count += 1;
?>
<li class="list-group-item">
<div class="checkbox">
<label>
<?php print '<input class="check" type="checkbox" name="category" value="' . $row['mod_genre'].'" id="box1_'.$count.'">' . $row['mod_genre'];
?>
</label>
</div>
</li>
<?php
}
}
?>
						</ul>
					</div>
					<div class="panel-heading panel-head-bg" >
						<h4 class="panel-title">

								Price
							
						</h4>
					</div>
					<div id="collapse0" class="panel-collapse collapse in" >
						<ul class="list-group">
							<li class="list-group-item">
								<div class="checkbox">
									<label>
										<input type="checkbox" class="price" id="box2_1" name="pricerange" value="Free">
										Free
									</label>
								</div>
							</li>
							<li class="list-group-item">
								<div class="checkbox" >
									<label>
										<input type="checkbox" class="price" id="box2_2" name="pricerange" value="0-10">
										>0$ - 10$
									</label>
								</div>
							</li>
							<li class="list-group-item">
								<div class="checkbox"  >
									<label>
										<input type="checkbox" class="price" id="box2_3" name="pricerange" value=">10-50">
										>10$ - 50$
									</label>
								</div>
							</li>
							<li class="list-group-item">
								<div class="checkbox"  >
									<label>
										<input type="checkbox" class="price" id="box2_4" name="pricerange" value=">50-100">
										>50 - 100$
									</label>
								</div>
							</li>
							<li class="list-group-item">
								<div class="checkbox"  >
									<label>
										<input type="checkbox" class="price" id="box2_5" name="pricerange" value=">100">
										>100$
									</label>
								</div>
							</li>
						</ul>
					</div>
					<div class="panel-heading panel-head-bg" >
						<h4 class="panel-title">
							
								 Rating
							
						</h4>
					</div>
					<div id="collapse2" class="panel-collapse collapse in" >
						<ul class="list-group">
							<li class="list-group-item">
								<div class="checkbox">
									<label>
										<input type="checkbox" class="rating" id="box3_1" name="rate" value="0">
										0
									</label>
								</div>
							</li>
							<li class="list-group-item">
								<div class="checkbox" >
									<label>
										<input type="checkbox" class="rating" id="box3_2" name="rate" value=">0-2">
										>0 - 2
									</label>
								</div>
							</li>
							<li class="list-group-item">
								<div class="checkbox"  >
									<label>
										<input type="checkbox" class="rating" id="box3_3" name="rate" value=">2-3">
										>2 - 3
									</label>
								</div>
							</li>
							<li class="list-group-item">
								<div class="checkbox"  >
									<label>
										<input type="checkbox" class="rating" id="box3_4" name="rate" value=">3-4">
										>3 - 4
									</label>
								</div>
							</li>
							<li class="list-group-item">
								<div class="checkbox"  >
									<label>
										<input type="checkbox" class="rating" id="box3_5" name="rate" value=">4">
										>4
									</label>
								</div>
							</li>
						</ul>
					</div>

					
				</div>
			</div>
	<!--</div> -->
<!-- </div>  -->
<!-- </div> -->

	
    </div>
    <div class="col-main" style="margin-left: 250px;"> 
<!--        <p style='color: white'><br/><b>Start typing a name in the input field below and then choose the filters on the left:</b></p> -->
	<form> 
        <br>
<label class="panel-head-bg" style="border-radius:10px; padding:10px;" >App name: </label>&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" id='app' name="search" size="50">&nbsp;&nbsp;<input type='button' onclick='' value='Search'/>

	</form>
	<!-- <br/><p style='color: white'>Search Results:<br/><br/> <span id="txtHint"></span></p> -->
               <br/><p style='color: white'><br/><br/> <span id="txtHint"></span></p>
    </div>

    
  </div>
</div>

<footer class="text-center">
  <a class="up-arrow" href="#myPage" data-toggle="tooltip" title="TO TOP">
    <span class="glyphicon glyphicon-chevron-up"></span>
  </a><br><br>
  <p>Made By Team <a href="http://appmeter.atwebpages.com/home.php" data-toggle="tooltip" title="AppMeter">AppMeter</a></p> 
</footer>

<script type="text/javascript">

$(document).ready(function() {
  $(window).keydown(function(event){
    if(event.keyCode == 13) {
      event.preventDefault();
      return false;
    }
  });
});

var genredict = {};
var pricedict = {};
var ratingdict = {};
currentpage = 1;
rowsperpage = 10;
window.onload = init;
function init(){
app.value = '';
//alert(val);


/*if(app.value != ""){
showHint(app.value);
}*/
/*

if (val.length == 0) { 
        document.getElementById("txtHint").innerHTML = "";
        return;
    } else {
        var xmlhttp = new XMLHttpRequest();
        xmlhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
                document.getElementById("txtHint").innerHTML = this.responseText;
            }
        };
        xmlhttp.open("GET", "shal_filter_result.php?search=" + val+"&category="+category+"&price="+price+"&rating="+rating+"&currentpage="+currentpage+"&rowsperpage="+rowsperpage, true);
        xmlhttp.send();
    }
*/


//var id='';
//var name='',val='';
//var found = 0;
for(var j=0; j<document.getElementsByClassName('check').length;j++){
id = 'box1_'+ (j+1);
document.getElementById(id).onclick = showHint;
}

for(var k=0; k<document.getElementsByClassName('price').length;k++){
id = 'box2_'+ (k+1);
document.getElementById(id).onclick = showHint;
}

for(var n=0; n<document.getElementsByClassName('rating').length;n++){
id = 'box3_'+ (n+1);
document.getElementById(id).onclick = showHint;
}


for(var j=0; j<document.getElementsByClassName('check').length;j++){
id = 'box1_'+ (j+1);
document.getElementById(id).checked = false;
}

for(var k=0; k<document.getElementsByClassName('price').length;k++){
id = 'box2_'+ (k+1);
document.getElementById(id).checked = false;
}

for(var n=0; n<document.getElementsByClassName('rating').length;n++){
id = 'box3_'+ (n+1);
document.getElementById(id).checked = false;
}

//document.getElementById('app').onkeyup = showHint;
document.getElementById('app').onchange = showHint;

}


        function toggleChevron(e) {
		$(e.target)
				.prev('.panel-heading')
				.find("i.indicator")
				.toggleClass('fa-caret-down fa-caret-right');
	}
	$('#accordion').on('hidden.bs.collapse', toggleChevron);
	$('#accordion').on('shown.bs.collapse', toggleChevron);

	
function resetFilters(){

app.value = '';
val = '';

for(var j=0; j<document.getElementsByClassName('check').length;j++){
id = 'box1_'+ (j+1);
document.getElementById(id).checked = false;
genredict[id] = '';
}

for(var k=0; k<document.getElementsByClassName('price').length;k++){
id = 'box2_'+ (k+1);
document.getElementById(id).checked = false;
pricedict[id] = '';
}

for(var n=0; n<document.getElementsByClassName('rating').length;n++){
id = 'box3_'+ (n+1);
document.getElementById(id).checked = false;
ratingdict[id] = '';
}


category = '';
for(var key in genredict){
if(category == ''){
category = genredict[key];
}else{
if(genredict[key] != '')
category += ','+genredict[key];
}
}

price = '';
for(var key in pricedict){
if(price == ''){
price = pricedict[key];
}else{
if(pricedict[key] != '')
price += ','+pricedict[key];
}
}

rating = '';
for(var key in ratingdict){
if(rating == ''){
rating = ratingdict[key];
}else{
if(ratingdict[key] != '')
rating += ','+ratingdict[key];
}
}


if (val.length == 0) { 
        document.getElementById("txtHint").innerHTML = "";
        return;
    } else {
        var xmlhttp = new XMLHttpRequest();
        xmlhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
                document.getElementById("txtHint").innerHTML = this.responseText;
            }
        };
        xmlhttp.open("GET", "shal_filter_result.php?search=" + val+"&category="+category+"&price="+price+"&rating="+rating+"&currentpage="+currentpage+"&rowsperpage="+rowsperpage, true);
        xmlhttp.send();
    }
    
    
}

function pageNow(value){
//alert(value);
txtHint.innerHTML = "<br><p align='center'><img width=100px height=100px style='margin-top:100px'; src='images/loading_2.png'/></p>";
currentpage = value;

if (val.length == 0) { 
        document.getElementById("txtHint").innerHTML = "";
        return;
    } else {
        var xmlhttp = new XMLHttpRequest();
        xmlhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
                document.getElementById("txtHint").innerHTML = this.responseText;
            }
        };
        xmlhttp.open("GET", "shal_filter_result.php?search=" + val+"&category="+category+"&price="+price+"&rating="+rating+"&currentpage="+currentpage+"&rowsperpage="+rowsperpage, true);
        xmlhttp.send();
    }
}

function rowsperPage(rows){
//alert(rows);

txtHint.innerHTML = "<br><p align='center'><img width=100px height=100px style='margin-top:100px'; src='images/loading_2.png'/></p>";
rowsperpage = rows;

if (val.length == 0) { 
        document.getElementById("txtHint").innerHTML = "";
        return;
    } else {
        var xmlhttp = new XMLHttpRequest();
        xmlhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
                document.getElementById("txtHint").innerHTML = this.responseText;
            }
        };
        xmlhttp.open("GET", "shal_filter_result.php?search=" + val+"&category="+category+"&price="+price+"&rating="+rating+"&currentpage="+currentpage+"&rowsperpage="+rowsperpage, true);
        xmlhttp.send();
    }
    
}

function showHint() {

txtHint.innerHTML = "<br><p align='center'><img width=100px height=100px style='margin-top:100px'; src='images/loading_2.png'/></p>";


val = '';
//var name='',val='';

var found = 0;
if(this.name == "search"){
if(this.value.length > 2){
val = this.value;
//name = "search";
}
}else if(this.name == "category"){

if(this.checked){
	genredict[this.id] = this.value.replace('&','and'); //alert('setting to '+this.value); 
}
else if(!this.checked){ 
	genredict[this.id] = ''; 
}
val = app.value;
}else if(this.name == "pricerange"){

if(this.checked){
	pricedict[this.id] = this.value; //alert('setting to '+this.value); 
}
else if(!this.checked){ 
	pricedict[this.id] = ''; 
}
val = app.value;
}else if(this.name == "rate"){

if(this.checked){
	ratingdict[this.id] = this.value; //alert('setting to '+this.value); 
}
else if(!this.checked){ 
	ratingdict[this.id] = ''; 
}
val = app.value;
}

category = '';
for(var key in genredict){
if(category == ''){
category = genredict[key];
}else{
if(genredict[key] != '')
category += ','+genredict[key];
}
}

price = '';
for(var key in pricedict){
if(price == ''){
price = pricedict[key];
}else{
if(pricedict[key] != '')
price += ','+pricedict[key];
}
}

rating = '';
for(var key in ratingdict){
if(rating == ''){
rating = ratingdict[key];
}else{
if(ratingdict[key] != '')
rating += ','+ratingdict[key];
}
}






    if (val.length == 0) { 
        document.getElementById("txtHint").innerHTML = "";
        return;
    } else {
        var xmlhttp = new XMLHttpRequest();
        xmlhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
                document.getElementById("txtHint").innerHTML = this.responseText;
            }
        };
        xmlhttp.open("GET", "shal_filter_result.php?search=" + val+"&category="+category+"&price="+price+"&rating="+rating+"&currentpage="+currentpage+"&rowsperpage="+rowsperpage, true);
        xmlhttp.send();
    }
}


</script>

</body>

</html>

