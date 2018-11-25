<?php
// COMANDA CURL PENTRU A MANIPULA BECUREILE//
function changeLEDLevel($LEDLevel) {

$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, "https://v0wwaqqnpa.execute-api.eu-west-1.amazonaws.com/V1/sites/site_exp/devices/16f54737-c30b-4241-b771-9c93d3bff7d2/level");
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_POSTFIELDS, "{ \"level\": {$LEDLevel}}");
curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "PUT");
$headers = array();
$headers[] = "Accept: application/json";
$headers[] = "X-Api-Key: DdyGSdexeO0RUthvqnLI9z4yySVxkG4fe2WX6hd0";
$headers[] = "Content-Type: application/json";
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
curl_exec($ch);

curl_close ($ch);
}

if (isset($_GET['zero'])) {
    changeLEDLevel(0);
  }
  
if (isset($_GET['full'])) {
    changeLEDLevel(100);
}

?>



<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>Dashboard</title>
  <meta content="Dashboard" property="og:title">
  <meta content="width=device-width, initial-scale=1" name="viewport">
  <link href="css/normalize.css" rel="stylesheet" type="text/css">
  <link href="css/bootstrap.css" rel="stylesheet" type="text/css">
  <link href="css/style.css" rel="stylesheet" type="text/css">
  <script src="https://ajax.googleapis.com/ajax/libs/webfont/1.4.7/webfont.js" type="text/javascript"></script>
  <script type="text/javascript">WebFont.load({  google: {    families: ["Varela:400","Bitter:400,700,400italic","Ubuntu:300,300italic,400,400italic,500,500italic,700,700italic"]  }});</script>
  <script type="text/javascript">!function(o,c){var n=c.documentElement,t=" w-mod-";n.className+=t+"js",("ontouchstart"in o||o.DocumentTouch&&c instanceof DocumentTouch)&&(n.className+=t+"touch")}(window,document);</script>
  <link href="https://daks2k3a4ib2z.cloudfront.net/img/favicon.ico" rel="shortcut icon" type="image/x-icon">
  <link href="https://daks2k3a4ib2z.cloudfront.net/img/webclip.png" rel="apple-touch-icon">
</head>
<body>
  <div class="div-block-4"></div>
  <div class="section-5">
    <div class="div-block-14"><img src="images/logo.svg" width="250" alt="" class="image-2"></div>
    <div class="div-block-9">
      <h1 class="heading">Sauna <strong>DASHBOARD</strong><br></h1>
    </div>
    <div class="div-block-9">
      <h1 class="heading">Time left in sauna <br><span id="counter-for-timer" class="text-span"><span id="minute"></span>:<span id="secunde"></span></span><br></h1>
    </div>
  </div>
  <div class="section-8">
    <div class="div-block-12">
      <div class="div-block-16">
        <h1 class="heading-8">Your information</h1><img src="images/boy.png" alt="" class="image-4"></div>
      <p class="paragraph">Age: <strong>44<br></strong>Known diseases: <strong>General respiratory difficulties<br></strong></p>
      <h1 class="heading-8"><em class="italic-text">Our recommended sauna experience</em></h1>
      <p class="paragraph">Temperature: <strong>70-100 C<br></strong>Humidity: <strong>above g/m³<br></strong>CO2 concentration: <strong>above 400ppm<br></strong>Oxygen concentration: <strong>above 20%</strong></p>
    </div>
    <div class="div-block-15">
      <h1 class="heading-10">Control sauna environment</h1>
      <h1 class="heading-11">Lights</h1>
      <div class="div-block-18">
	  <a href="dashboard.php?zero=true" class="button-3 w-button" onclick="">Lights OFF</a>
	  <a href="#" class="button-3 w-button">25%</a>
	  <a href="#" class="button-3 w-button">50%</a><a href="#" class="button-3 w-button">75%</a>
	   <a href="dashboard.php?full=true" class="button-3 w-button">FULL brightness</a></div>
      <h1 class="heading-11">Ambient music</h1>
      <div class="div-block-17"><a href="#" class="button-3 w-button">No music</a><a href="#" class="button-3 w-button">Classic</a><a href="#" class="button-3 w-button">Rock</a><a href="#" class="button-3 w-button">Pop</a><a href="#" class="button-3 w-button">Dance</a><a href="#" class="button-3 w-button">Hip hop</a></div>
      <h1 class="heading-11">Music volume</h1>
      <div class="div-block-17"><a href="#" class="button-3 w-button">MUTE</a><a href="#" class="button-3 w-button">25%</a><a href="#" class="button-3 w-button">50%</a><a href="#" class="button-3 w-button">75%</a><a href="#" class="button-3 w-button">MAXIMUM</a></div>
      <h1 class="heading-11">Meditation</h1>
      <div class="div-block-17"><a href="#" class="button-3 w-button">Yes</a><a href="#" class="button-3 w-button">No</a></div>
    </div>
  </div>
  <div class="section-3"></div>
  <div class="section-7">
    <h1 class="heading-9">Curent sauna status</h1>
    <div class="div-block-5"><img src="images/001-cold.png" width="60" alt="">
      <h1 class="heading-3">Temperature</h1>
      <div class="text-block"><span id="temp"></span> °C</div>
    </div>
    <div class="div-block-5"><img src="images/002-humidity.png" width="60" alt="">
      <h1 class="heading-3">Humidity</h1>
      <div class="text-block"><span id="hum"></span>g/m³</div>
    </div>
    <div class="div-block-5"><img src="images/003-co2.png" width="60" alt="">
      <h1 class="heading-3">CO2 concentration</h1>
      <div class="text-block"><span id="co2"></span></div>
    </div>
    <div class="div-block-5"><img src="images/004-oxygen.png" width="60" alt="">
      <h1 class="heading-3">Oxygen concentration</h1>
      <div class="text-block"><span id="o2"></span>%O2</div>
    </div>
    <div class="div-block-4"></div>
  </div>
  <script src="https://code.jquery.com/jquery-3.3.1.min.js" type="text/javascript" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
      <script>
   var getData = function() {

var element = document.getElementById('temp');
	var hum = document.getElementById('hum');
	var co2 = document.getElementById('co2');
	var o2 = document.getElementById('o2');
	fetch('https://apigtw.vaisala.com/hackjunction2018/saunameasurements/latest?SensorID=Ceiling1&limit=1')
	.then(function(response) {
		return response.json()
	}).then(function(data) {
			element.innerHTML = data[0].Measurements.Temperature.value;
			hum.innerHTML = data[0].Measurements["Absolute humidity"].value;

	}).catch(function(error) {
		console.log(error);
	});
	fetch('https://apigtw.vaisala.com/hackjunction2018/saunameasurements/latest?SensorID=Bench1&limit=1')
	.then(function(response) {
		return response.json()
	}).then(function(data) {
			co2.innerHTML = data[0].Measurements["Carbon Dioxide concentration"].value + ' ppm';

	}).catch(function(error) {
		console.log(error);
	});
	fetch('https://apigtw.vaisala.com/hackjunction2018/saunameasurements/latest?SensorID=Bench3&limit=1')
	.then(function(response) {
		return response.json()
	}).then(function(data) {
			o2.innerHTML = data[0].Measurements["Oxygen concentration"].value;

	}).catch(function(error) {
		console.log(error);
	});
	}

getData();
setInterval(getData, 2000);
</script>
<script> 
  
var oraactuala = new Date().getTime();  
var x = setInterval(function() { 
  
var acum = new Date().getTime(); 

var t = oraactuala - acum + 40501000; 

var minute = Math.floor((t % (1000 * 60 * 60)) / (1000 * 60)); 
var secunde = Math.floor((t % (1000 * 60)) / 1000); 

document.getElementById("minute").innerHTML = minute;  
document.getElementById("secunde").innerHTML = secunde;  
if (t < 0) { 
        clearInterval(x); 
        document.getElementById("counter-for-timer").innerHTML = "Time up, please go out of the sauna!"; 

        document.getElementById("minute").innerHTML ='0' ;  
        document.getElementById("secunde").innerHTML = '0'; } 
}, 1000); 
</script> 

</body>
</html>
