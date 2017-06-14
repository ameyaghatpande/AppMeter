<?php
session_start();
?>
<?php if(!isset($_SESSION["name"])){ 
print "<script>window.location.href = 'login.php'</script>";
}?>
<!DOCTYPE html>
<html>
<title>Prediction of Downloads</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet" type="text/css">
 
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<script src="Chart.js"></script>
<style>
body,h1,h2,h3,h4,h5,h6 {font-family: Montserrat, sans-serif;}
body, html {
    height: 100%;
    color: #777;
    line-height: 1.8;
    background-image: url('images/woodbg.jpg');
    background-size: cover;
    margin: 0;


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
    background-image: url('bg6.jpg');
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
        align:right;
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
  
     
input[type=text], select {
    text-align: left;
   /* display: inline-block;*/
    margin: 10px;
    width: 55%;
    padding: 14px 20px;
    border: 1px solid #ccc;
    border-radius: 4px;
    box-sizing: border-box;
    color:black;
    
}

input[type=button] {
    width: 25%;
    background-color: #008CBA;
    color: white;
    padding: 14px 20px;
   margin-top:30px;
   margin-bottom:30px;
   margin-left:10px;
    box-sizing: border-box;
    border: none;
    border-radius: 4px;
    cursor: pointer;
    
}

input[type=button]:hover {
    background-color: #45a049;
}

label {
font-family: Montserrat, sans-serif;
letter-spacing: 1px;
}

#myChart,#myChart2 {
    width: 100% !important;
    height:550px !important;
    letter-spacing: 1px; 
}

.colform { 
display:inline-block;
margin-top:40px;
float:left;
width:100%;
font-size: 12px !important;
color:white;
}

.left{
    width:40%;
   
    display:inline-block;
   
}

.right{
width: 40%;
float: right;
display:inline-block;
}

.space{
width:10%;
float:left;
height:580px;
}

.param{
text-align: left;
}
.errorMsg{
display:none; 
color:cyan;
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
<body id="myPage">

<nav class="navbar navbar-default navbar-fixed-top">
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
        <li><a href="/searchscore.php">SCORE</a></li>
        <li><a href="/analytics.php">ANALYZE</a></li>
        <li><a href="/logout.php">LOGOUT</a></li>
        
       
      </ul>
    </div>
  </div>
</nav>



<!-- First Parallax Image with Logo Text -->

        
<div class="bgimg-1 w3-display-container" id="home">
  <div style="white-space:nowrap;">
    <div class="w3-center w3-padding-large w3-text-black w3-large w3-wide">
	<br><br>
        <h1 class="w3-text-white"> PREDICT-COMPARE </h1>
        

<form class="colform">
  
    <label for="genre">Genre</label><br>
  
    <select name="genre" placeholder="Enter the Genre of the App">
       <option value="1">Social Networking</option>
          <option value="2">Entertainment</option>
          <option value="3">Games</option>
          <option value="4">Education</option>
          <option value="5">Health &amp; Fitness</option>
          <option value="6">Books &amp; Reference</option>
          <option value="7">Productivity</option>
          <option value="8">Utilities</option>
          <option value="9">Business</option>
          <option value="10">News</option>
          <option value="11">Travel</option>
          <option value="12">Medical</option>
          <option value="13">Music</option>
          <option value="14">Sports</option>
          <option value="15">Finance</option>
          <option value="16">Navigation</option>
          <option value="17">Weather</option>
          <option value="18">Lifestyle</option>
          <option value="19">Photo &amp; Video</option>
          <option value="20">Shopping</option>
          
    </select>
    
    <br>
    <div class="param">
    
 <div class="space">
 </div>
    <div class="left">
    
   <label for="price" >Price</label><br>
    <input type="text" id="price" name="price" placeholder="Price in $" required>
    <label for="error" id="priceerror" class="errorMsg">* Required/Invalid Input</label>
 <br>
 
    <label for="size">Size</label><br> 
    <input type="text" id="size" name="size" placeholder="File Size in Mb" required>
    <label for="error" id="sizeerror" class="errorMsg">* Required/Invalid Input</label>    
<br>

<label for="avgr">Average Rating</label><br>
    <input type="text" id="avgr" name="avgr" placeholder="Average rating out of 5" required>
    <label for="error" id="avgrerror" class="errorMsg">* Required/Invalid Input</label>
<br>

     <label for="age">Age</label><br>
    <input type="text" id="age" name="age" placeholder="Days since the release of the App" required>
    <label for="error" id="ageerror" class="errorMsg">* Required/Invalid Input</label>
  
 <br>
 

 <input type="button" id="b1" value="Predict" onclick="fido(this.form)">
 <input type="button" id='clearleft' value="Reset" onclick="resetFields(this.id,this.form);"><br>
 
 <label for="downloads">Predicted Downloads</label><br>
    <input type="text" id="downloads" name="downloads" placeholder="Predicted No. of Downloads" readonly>
<br>
 
 <br><label id="median" for="median"></label><br>  
 
 </div>
 <div class="right">
 
   <label for="price2">Price</label><br>
    <input type="text" id="price2" name="price2" placeholder="Price in $" required>
    <label for="error" id="priceerror2" class="errorMsg">* Required/Invalid Input</label>
 
 <br>
 
    <label for="size2">Size</label><br>
    <input type="text" id="size2" name="size2" placeholder="File Size in Mb" required>
    <label for="error" id="sizeerror2" class="errorMsg">* Required/Invalid Input</label>
<br>
  
<label for="avgr2">Average Rating</label><br>
    <input type="text" id="avgr2" name="avgr2" placeholder="Average rating out of 5" required>
    <label for="error" id="avgrerror2" class="errorMsg">* Required/Invalid Input</label>
    <br>

     <label for="age2">Age</label><br>
    <input type="text" id="age2" name="age2" placeholder="Days since the release of the App" required>
    <label for="error" id="ageerror2" class="errorMsg">* Required/Invalid Input</label>
   
  
<br>
 
        
       <input type="button" id="b2" value="Predict" onclick="fido2(this.form)" style="align:left;">
       <input type="button" id='clearright' value="Reset" onclick="resetFields(this.id,this.form);" >
       <br>
	
        <label for="downloads2">Predicted Downloads</label><br>
    <input type="text" id="downloads2" name="downloads2" placeholder="Predicted No. of Downloads" readonly>
    <br>
<br>
<br>
<br>    
    </div>
    </div>
  </form>
  


<div class="row">
<div class="col-sm-6">
<canvas id="myChart" height="100" width="100"></canvas>
</div>
<div class="col-sm-6">
<canvas id="myChart2" height="100" width="100"></canvas>
</div>
</div> 
</div>
<div>
</div>
    
 
<footer class="text-center">
  <a class="up-arrow" href="#myPage" data-toggle="tooltip" title="TO TOP">
    <span class="glyphicon glyphicon-chevron-up"></span>
  </a><br><br>
  <p>Made By Team <a href="http://appmeter.atwebpages.com/home.php" data-toggle="tooltip" title="AppMeter">AppMeter</a></p> 
</footer>
 
<script>
 Chart.defaults.global.defaultFontSize=15;
 Chart.defaults.global.defaultFontColor="#03cbef";

function resetFields(id,form){

if(id=='clearleft'){
//alert('left');
document.getElementById('price').value = '';
document.getElementById('size').value = '';
document.getElementById('avgr').value = '';
document.getElementById('age').value = '';
document.getElementById('downloads').value = '';
document.getElementById("priceerror").style.display= "none";
document.getElementById("ageerror").style.display= "none";
document.getElementById("sizeerror").style.display= "none";
document.getElementById("avgrerror").style.display= "none";
document.getElementById("median").style.display= "none";

var ctx = document.getElementById("myChart").getContext("2d");
var chart1=new Chart(ctx);
chart1.destroy();
ctx.clearRect(0, 0, canvas.width, canvas.height);
//fido(form);
}else if(id=='clearright'){
//alert('right');
document.getElementById('price2').value = '';
document.getElementById('size2').value = '';
document.getElementById('avgr2').value = '';
document.getElementById('age2').value = '';
document.getElementById('downloads2').value = '';
document.getElementById("priceerror2").style.display= "none";
document.getElementById("ageerror2").style.display= "none";
document.getElementById("sizeerror2").style.display= "none";
document.getElementById("avgrerror2").style.display= "none";

var ctx2 = document.getElementById("myChart2").getContext("2d");
var chart2=new Chart(ctx2);
chart2.destroy();
ctx2.clearRect(0, 0, canvas.width, canvas.height);
}

}

function fido(form){

var fs = form.size.value;
var p = form.price.value;
var avgr = form.avgr.value;
var gen = form.genre.value; 
var a=form.age.value;
var g=0;

var pflag=1;
var fsflag=1;
var aflag=1;
var rflag=1;


var decimal= /^[-+]?[0-9]+\.[0-9]+$/; 
var ex = /^[0-9]+\.?[0-9]*$/;
var numregex=/^[0-9]+$/;
document.getElementById("median").style.display= "inline";

if(gen==1)
{
g=-0.593;//Social Networking
document.getElementById("median").innerHTML= "Median Range of Downloads for the Free Apps: 1000-5000<br>Median Range of Downloads for the Paid Apps: 100-500";
}
else if(gen==2)
{g=-0.0207;//Entertainment
document.getElementById("median").innerHTML= "Median Range of Downloads for the Free Apps: 1000-5000<br>Median Range of Downloads for the Paid Apps: 50-100";
}
else if(gen==3)
{
g=0.095;//Games
document.getElementById("median").innerHTML= "Median Range of Downloads for the Free Apps: 1000-5000<br>Median Range of Downloads for the Paid Apps: 100-500";
}
else if(gen==4)
{
g=-0.134;//Education
document.getElementById("median").innerHTML= "Median Range of Downloads for the Free Apps: 1000-5000<br>Median Range of Downloads for the Paid Apps: 50-100";
}
else if(gen==5)
{
g=-0.0481;//Health &amp; Fitness
document.getElementById("median").innerHTML= "Median Range of Downloads for the Free Apps: 1000-5000<br>Median Range of Downloads for the Paid Apps: 100-500";
}
else if(gen==6)
{
g=0;//Books &amp; Reference
document.getElementById("median").innerHTML= "Median Range of Downloads for the Free Apps: 1000-5000<br>Median Range of Downloads for the Paid Apps: 50-100";
}
else if(gen==7)
{
g=-0.402;//Productivity
document.getElementById("median").innerHTML= "Median Downloads for the Free Apps: 1000-5000<br>Median Downloads for the Paid Apps: 100-500";
}
else if(gen==8)
{
g=-0.230;//utilities
document.getElementById("median").innerHTML= "Median Downloads for the Free Apps: 1000-5000<br>Median Downloads for the Paid Apps: 100-500";
}
else if(gen==9)
{
g=-1.312;//Business
document.getElementById("median").innerHTML= "Median Downloads for the Free Apps: 100-500<br>Median Downloads for the Paid Apps: 100-500";
}
else if(gen==10)
{
g=-0.580;//News
document.getElementById("median").innerHTML= "Median Downloads for the Free Apps: 2000-5000<br>Median Downloads for the Paid Apps: 50-100";
}
else if(gen==11)
{
g=-0.648;//Travel
document.getElementById("median").innerHTML= "Median Downloads for the Free Apps: 1000-5000<br>Median Downloads for the Paid Apps: 50-100";
}
else if(gen==12)
{
g=-0.207;//Medical
document.getElementById("median").innerHTML= "Median Downloads for the Free Apps: 1000-5000<br>Median Downloads for the Paid Apps: 100-500";
}
else if(gen==13)
{
g=-0.403;//Music
document.getElementById("median").innerHTML= "Median Downloads for the Free Apps: 1000-5000<br>Median Downloads for the Paid Apps: 100-500";
}
else if(gen==14)
{
g=-0.462;//Sports
document.getElementById("median").innerHTML= "Median Downloads for the Free Apps: 1000-5000<br>Median Downloads for the Paid Apps: 50-100";
}
else if(gen==15)
{
g=-0.609;//Finance
document.getElementById("median").innerHTML= "Median Downloads for the Free Apps: 1000-5000<br>Median Downloads for the Paid Apps: 50-100";
}
else if(gen==16)
{
g=-0.598;//Navigation
document.getElementById("median").innerHTML= "Median Downloads for the Free Apps: 1000-5000<br>Median Downloads for the Paid Apps: 100-500";
}
else if(gen==17)
{
g=0.057;//Weather
document.getElementById("median").innerHTML= "Median Downloads for the Free Apps: 1000-5000<br>Median Downloads for the Paid Apps: 100-500";
}
else if(gen==18)
{
g=-0.270;//Lifestyle
document.getElementById("median").innerHTML= "Median Downloads for the Free Apps: 1000-5000<br>Median Downloads for the Paid Apps: 50-100";
}
else if(gen==19)
{
g=0.198;//Photo &amp; Video
document.getElementById("median").innerHTML= "Median Downloads for the Free Apps: 1000-5000<br>Median Downloads for the Paid Apps: 100-500";
}
else
{
g=-0.883;//Shopping
document.getElementById("median").innerHTML= "Median Downloads for the Free Apps: 500-1000<br>Median Downloads for the Paid Apps: 100-500";
}
          

if(p.length<1 || (!p.match(ex)) || p<0 )
{ 
document.getElementById("priceerror").style.display= "inline";
form.price.value='';
pflag=0;
}
else
{
document.getElementById("priceerror").style.display= "none";
pflag=1;
}

if(fs.length<1 || (!fs.match(ex)) || fs<0)
{ 
document.getElementById("sizeerror").style.display= "inline";
form.size.value='';
fsflag=0;
}
else
{
document.getElementById("sizeerror").style.display= "none";
fsflag=1;
}

if(avgr.length<1 || (!avgr.match(ex)) || avgr<0 || avgr >5)
{ 
document.getElementById("avgrerror").style.display= "inline";
form.avgr.value='';
rflag=0;
}
else
{
document.getElementById("avgrerror").style.display= "none";
rflag=1;
}

if(a.length<1 || (!a.match(numregex)) || a<0)
{ 
document.getElementById("ageerror").style.display= "inline";
form.age.value='';
aflag=0;
}
else
{
document.getElementById("ageerror").style.display= "none";
aflag=1;
}


if(pflag==1 && fsflag==1 && rflag==1 && aflag==1)
{

var ctx = document.getElementById("myChart").getContext("2d");
ctx.beginPath();

        if(p==0)
        {
        p=0.001;
        var d_p=0;
        }
        else if(p >0 && p<=0.99)
        {
        var d_p=-3.453;
        }
        else if(p>0.99 && p<=1.49)
        {
        var d_p=-3.403;
        }
        else if(p >1.49 && p<=2.82)
        {
        var d_p=-3.005;
        }
        else 
        {
        var d_p=-2.905;
        }


        form.downloads.value =parseInt(10.28 * Math.exp(0.0044 * fs) * Math.exp(-0.011 * p) * Math.exp(avgr * -0.206) * Math.pow(a,1.033) * Math.exp(g) * Math.exp(d_p));


        d1 =parseInt(10.28 * Math.exp(0.0044 * fs) * Math.exp(-0.011 * p) * Math.exp(avgr * -0.206) * Math.pow(90,1.033) * Math.exp(g) * Math.exp(d_p));
        d2 =parseInt(10.28 * Math.exp(0.0044 * fs) * Math.exp(-0.011 * p) * Math.exp(avgr * -0.206) * Math.pow(180,1.033) * Math.exp(g) * Math.exp(d_p));
        d3 =parseInt(10.28 * Math.exp(0.0044 * fs) * Math.exp(-0.011 * p) * Math.exp(avgr * -0.206) * Math.pow(360,1.033) * Math.exp(g) * Math.exp(d_p));
        d4 =parseInt(10.28 * Math.exp(0.0044 * fs) * Math.exp(-0.011 * p) * Math.exp(avgr * -0.206) * Math.pow(540,1.033) * Math.exp(g) * Math.exp(d_p));
        d5 =parseInt(10.28 * Math.exp(0.0044 * fs) * Math.exp(-0.011 * p) * Math.exp(avgr * -0.206) * Math.pow(720,1.033) * Math.exp(g) * Math.exp(d_p));
        d6 =parseInt(10.28 * Math.exp(0.0044 * fs) * Math.exp(-0.011 * p) * Math.exp(avgr * -0.206) * Math.pow(900,1.033) * Math.exp(g) * Math.exp(d_p));
        d7 =parseInt(10.28 * Math.exp(0.0044 * fs) * Math.exp(-0.011 * p) * Math.exp(avgr * -0.206) * Math.pow(1080,1.033) * Math.exp(g) * Math.exp(d_p));
        d8 =parseInt(10.28 * Math.exp(0.0044 * fs) * Math.exp(-0.011 * p) * Math.exp(avgr * -0.206) * Math.pow(1260,1.033) * Math.exp(g) * Math.exp(d_p));
        d9 =parseInt(10.28 * Math.exp(0.0044 * fs) * Math.exp(-0.011 * p) * Math.exp(avgr * -0.206) * Math.pow(1440,1.033) * Math.exp(g) * Math.exp(d_p));

        
        var data = {
            labels: ["0","180","360","540","720","900","1080","1260","1440"],
            datasets: [
                {
                    label: "Downloads for App1",
                    fill: false,
                    lineTension: 0.1,
                    backgroundColor: "rgba(75,192,192,0.4)",
                    borderColor: "rgba(75,192,192,1)",
                    borderCapStyle: 'butt',
                    borderDash: [],
                    borderDashOffset: 0.0,
                    borderJoinStyle: 'miter',
                    pointBorderColor: "rgba(75,192,192,1)",
                    pointBackgroundColor: "#fff",
                    pointBorderWidth: 5,
                    pointHoverRadius: 5,
                    pointHoverBackgroundColor: "rgba(75,192,192,1)",
                    pointHoverBorderColor: "rgba(220,220,220,1)",
                    pointHoverBorderWidth: 2,
                    pointRadius: 1,
                    pointHitRadius: 10,
                    data: [d1,d2,d3,d4,d5,d6,d7,d8,d9],
                    spanGaps: false
                }
            ]
        };
        
        myLineChart = new Chart(ctx, {
            type: 'line',
            data: data,
             options: {
              scales: {
            xAxes: [{
              scaleLabel: {
              display:true,
                labelString: 'Days since the release of the App'
              }
            }
            ],
            yAxes: [{
              scaleLabel: {
              display:true,
                labelString:'Predicted Downloads'
              }
            }
            ]
          }
         }
        });
   }
   
  else 
  {
  form.downloads.value='';
  
  }
 }

function fido2(form) 
{

var fs2 = form.size2.value;
var p2 = form.price2.value;
var avgr2 = form.avgr2.value;
var a2=form.age2.value;
var gen = form.genre.value;
var g=0;

var p2flag=1;
var fs2flag=1;
var a2flag=1;
var r2flag=1;

var decimal=  /^[-+]?[0-9]+\.[0-9]+$/; 
var ex = /^[0-9]+\.?[0-9]*$/;
var numregex=/^[0-9]+$/;


if(gen==1)
{
g=-0.593;//Social Networking
}
else if(gen==2)
{
g=-0.0207;//Entertainment
}
else if(gen==3)
{
g=0.095;//Games
}
else if(gen==4)
{
g=-0.134;//Education
}
else if(gen==5)
{
g=-0.0481;//Health &amp; Fitness
}
else if(gen==6)
{
g=0;//Books &amp; Reference
}
else if(gen==7)
{
g=-0.402;//Productivity
}
else if(gen==8)
{
g=-0.230;//utilities
}
else if(gen==9)
{
g=-1.312;//Business
}
else if(gen==10)
{
g=-0.580;//News
}
else if(gen==11)
{
g=-0.648;//Travel
}
else if(gen==12)
{
g=-0.207;//Medical
}
else if(gen==13)
{
g=-0.403;//Music
}
else if(gen==14)
{
g=-0.462;//Sports
}
else if(gen==15)
{
g=-0.609;//Finance
}
else if(gen==16)
{
g=-0.598;//Navigation
}
else if(gen==17)
{
g=0.057;//Weather
}
else if(gen==18)
{
g=-0.270;//Lifestyle
}
else if(gen==19)
{
g=0.198;//Photo &amp; Video
}
else
{
g=-0.883;//Shopping
}


if(p2.length<1 || (!p2.match(ex)) || p2<0 )
{ 
        document.getElementById("priceerror2").style.display= "inline";
        form.price2.value='';
        p2flag=0;
}
else
{
        document.getElementById("priceerror2").style.display= "none";
        p2flag=1;
}

if(fs2.length<1 || (!fs2.match(ex)) || fs2<0)
{ 
        document.getElementById("sizeerror2").style.display= "inline";
        form.size2.value='';
        fs2flag=0;
}
else
{
        document.getElementById("sizeerror2").style.display= "none";
        fs2flag=1;
}

if(avgr2.length<1 || (!avgr2.match(ex)) || avgr2<0 || avgr2 >5)
{ 
        document.getElementById("avgrerror2").style.display= "inline";
        form.avgr2.value='';
        r2flag=0;
}
else
{
        document.getElementById("avgrerror2").style.display= "none";
        r2flag=1;
}

if(a2.length<1 || (!a2.match(numregex)) || a2<0)
{ 
        document.getElementById("ageerror2").style.display= "inline";
        form.age2.value='';
        a2flag=0;
}
else
{
        document.getElementById("ageerror2").style.display= "none";
        a2flag=1;
}


if(p2flag==1 && fs2flag==1 && r2flag==1 && a2flag==1)

{

var ctx2 = document.getElementById("myChart2").getContext("2d");
ctx2.beginPath();
ctx2.width = 50;
ctx2.height = 50;

if(p2==0)
{
p2=0.001;
var d_p2=0;
}
else if(p2 >0 && p2<=0.99)
{
var d_p2=-3.453;
}
else if(p2>0.99 && p2<=1.49)
{
var d_p2=-3.403;
}
else if(p2 >1.49 && p2<=2.82)
{
var d_p2=-3.005;
}
else 
{
var d_p2=-2.905;
}

form.downloads2.value =parseInt(10.28 * Math.exp(0.0044 * fs2) * Math.exp(-0.011 * p2) * Math.exp(avgr2 * -0.206) * Math.pow(a2,1.033) * Math.exp(g) * Math.exp(d_p2));

f1 =parseInt(10.28 * Math.exp(0.0044 * fs2) * Math.exp(-0.011 * p2) * Math.exp(avgr2 * -0.206) * Math.pow(90,1.033) * Math.exp(g) * Math.exp(d_p2));
f2 =parseInt(10.28 * Math.exp(0.0044 * fs2) * Math.exp(-0.011 * p2) * Math.exp(avgr2 * -0.206) * Math.pow(180,1.033) * Math.exp(g) * Math.exp(d_p2));
f3 =parseInt(10.28 * Math.exp(0.0044 * fs2) * Math.exp(-0.011 * p2) * Math.exp(avgr2 * -0.206) * Math.pow(360,1.033) * Math.exp(g) * Math.exp(d_p2));
f4 =parseInt(10.28 * Math.exp(0.0044 * fs2) * Math.exp(-0.011 * p2) * Math.exp(avgr2 * -0.206) * Math.pow(540,1.033) * Math.exp(g) * Math.exp(d_p2));
f5 =parseInt(10.28 * Math.exp(0.0044 * fs2) * Math.exp(-0.011 * p2) * Math.exp(avgr2 * -0.206) * Math.pow(720,1.033) * Math.exp(g) * Math.exp(d_p2));
f6 =parseInt(10.28 * Math.exp(0.0044 * fs2) * Math.exp(-0.011 * p2) * Math.exp(avgr2 * -0.206) * Math.pow(900,1.033) * Math.exp(g) * Math.exp(d_p2));
f7 =parseInt(10.28 * Math.exp(0.0044 * fs2) * Math.exp(-0.011 * p2) * Math.exp(avgr2 * -0.206) * Math.pow(1080,1.033) * Math.exp(g) * Math.exp(d_p2));
f8 =parseInt(10.28 * Math.exp(0.0044 * fs2) * Math.exp(-0.011 * p2) * Math.exp(avgr2 * -0.206) * Math.pow(1260,1.033) * Math.exp(g) * Math.exp(d_p2));
f9 =parseInt(10.28 * Math.exp(0.0044 * fs2) * Math.exp(-0.011 * p2) * Math.exp(avgr2 * -0.206) * Math.pow(1440,1.033) * Math.exp(g) * Math.exp(d_p2));

Chart.defaults.global.defaultFontSize=15;
Chart.defaults.global.defaultFontColor="#03cbef";

var data2 = {
    labels: ["0","180","360","540","720","900","1080","1260","1440"],
    datasets: [
        {
            label: "Downloads for App2",
            fill: false,
            lineTension: 0.1,
            backgroundColor: "rgba(255,255,255,0.3)",
            borderColor: "rgba(255,255,255,0.3)",
            borderCapStyle: 'butt',
            borderDash: [],
            borderDashOffset: 0.0,
            borderJoinStyle: 'miter',
            pointBorderColor: "rgba(255,255,255,0.3)",
            pointBackgroundColor: "#fff",
            pointBorderWidth: 5,
            pointHoverRadius: 5,
            pointHoverBackgroundColor: "rgba(255,255,255,1)",
            pointHoverBorderColor: "rgba(220,220,220,1)",
            pointHoverBorderWidth: 2,
            pointRadius: 1,
            pointHitRadius: 10,
            data: [f1,f2,f3,f4,f5,f6,f7,f8,f9],
            spanGaps: false
        }
    ]
};

var myLineChart2 = new Chart(ctx2, {
    type: 'line',
    data: data2,
     options: {
          scales: {
    xAxes: [{
      scaleLabel: {
      display:true,
        labelString: 'Days since the release of the App'
      }
    }],
    yAxes: [{
      scaleLabel: {
      display:true,
        labelString:'Predicted Downloads'
      }
    }
    ]
  }
        
 }
    
});
}

else
  {
  form.downloads2.value='';
  
  }
}

</script>

</body>
</html>
