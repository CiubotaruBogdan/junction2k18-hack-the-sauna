<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>Multiple users</title>
  <meta content="Multiple users" property="og:title">
  <meta content="width=device-width, initial-scale=1" name="viewport">
  <meta content="Webflow" name="generator">
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
  <div class="section-3">
    <div class="div-block-11"><a href="index.html"><img src="images/left-arrow.png" width="85" alt=""></a></div>
    <div class="_1"><img src="images/logo.svg" width="300" alt="" class="image"></div>
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
  </div>
  <div class="section-9">
    <div class="div-block-20">
      <div class="div-block-22"><img src="images/005-team.png" width="200" alt=""></div>
      <div class="div-block-21">
        <div class="form-block-4 w-form">
          <form id="email-form" name="email-form" data-name="Email Form" class="form-3"><label for="name" class="field-label-4">Age range</label><select id="field" name="field" required="" class="select-field w-select"><option value="">Select your group age range</option><option value="">15-19</option><option value="Second">20-29</option><option value="Third">30-39</option><option value="">40-49</option><option value="Another Choice">50-59</option><option value="Another Choice">60+</option></select><label for="name" class="field-label-4">Anyone suffering from a know disease?</label>
            <div class="checkbox-field-2 w-checkbox"><input type="checkbox" id="checkbox" name="checkbox" data-name="Checkbox" class="checkbox-2 w-checkbox-input"><label for="checkbox" class="checkbox-label-2 w-form-label"><strong>Disease number 1</strong></label></div>
            <div class="checkbox-field-2 w-checkbox"><input type="checkbox" id="checkbox-3" name="checkbox-3" data-name="Checkbox 3" class="checkbox-2 w-checkbox-input"><label for="checkbox-3" class="checkbox-label-2 w-form-label"><strong>Disease number 2</strong></label></div>
            <div class="checkbox-field-2 w-checkbox"><input type="checkbox" id="checkbox-2" name="checkbox-2" data-name="Checkbox 2" class="checkbox-2 w-checkbox-input"><label for="checkbox-2" class="checkbox-label-2 w-form-label"><strong>Disease number 3</strong></label></div><input type="submit" value="Start the sauna session" data-wait="Please wait..." class="submit-button-3 w-button"></form>
          <div class="w-form-done">
            <div>Thank you! Your submission has been received!</div>
          </div>
          <div class="w-form-fail">
            <div>Oops! Something went wrong while submitting the form.</div>
          </div>
        </div>
      </div>
    </div>
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
</body>
</html>