

<!DOCTYPE html>
<html>
<head>

  <meta charset="utf-8">
  <title>Single user</title>
  <meta content="Single user" property="og:title">
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
  <div class="section-3">
    <div class="div-block-11"><a href="index.html"><img src="images/left-arrow.png" width="85" alt=""></a></div>
    <div class="_1"><img src="images/logo.svg" width="300" alt="" class="image"></div>
    <div class="div-block-5"><img src="images/001-cold.png" width="60" alt="">
      <h1 class="heading-3">Temperature</h1>
      <div class="text-block"><span id="temp"></span>°C</div>
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
  <div class="section-4">
    <div class="div-block-6">
      <h1 class="heading-5">I will create a new VAISALA sauna ID</h1>
      <div class="div-block-13">
        <div class="form-block-2 w-form">
          <form id="email-form" name="email-form" data-name="Email Form" class="form-4"><label for="name" class="field-label-2">Age</label><input type="text" id="name" name="name" data-name="Name" maxlength="256" class="text-field-2 w-input"><label for="name-2" class="field-label-2">Any known disease</label>
            <div class="checkbox-field w-checkbox"><input type="checkbox" id="checkbox" name="checkbox" data-name="Checkbox" class="checkbox w-checkbox-input"><label for="checkbox" class="checkbox-label w-form-label">Asthma</label></div>
            <div class="checkbox-field w-checkbox"><input type="checkbox" id="checkbox-4" name="checkbox-4" data-name="Checkbox 4" class="checkbox w-checkbox-input"><label for="checkbox-4" class="checkbox-label w-form-label">Rhinitis</label></div>
            <div class="checkbox-field w-checkbox"><input type="checkbox" id="checkbox-3" name="checkbox-3" data-name="Checkbox 3" class="checkbox w-checkbox-input"><label for="checkbox-3" class="checkbox-label w-form-label">General respiratory difficulties</label></div>
            <div class="checkbox-field w-checkbox"><input type="checkbox" id="checkbox-2" name="checkbox-2" data-name="Checkbox 2" class="checkbox w-checkbox-input"><label for="checkbox-2" class="checkbox-label w-form-label">Seasonal allergies</label></div><a href="#" class="button-5 w-button">Click here to take a picture</a><a href="dashboard.php"><input type="button" value="Submit" data-wait="Please wait..." class="submit-button-2 w-button"></a></form>
          <div class="w-form-done">
            <div>Thank you! Your submission has been received!</div>
          </div>
          <div class="w-form-fail">
            <div>Oops! Something went wrong while submitting the form.</div>
          </div>
        </div>
      </div>
    </div>
    <div class="div-block-7">
      <h1 class="heading-5">I will be using my own VAISALA sauna ID</h1>
      <div class="div-block-10"><a href="#" class="button-2 w-button">Tap here for face recognition</a></div>
      <h1 class="heading-6">or</h1>
      <div class="form-block-3 w-form">
        <form id="email-form-2" name="email-form-2" data-name="Email Form 2" class="form-2"><label for="name-3" class="field-label-2">Enter your unique ID</label><input type="text" id="name-2" name="name-2" data-name="Name 2" maxlength="256" class="text-field-2 w-input"><a href="dashboard.php"><input type="button" value="Submit" data-wait="Please wait..." class="submit-button-2 w-button"></a></form>
        <div class="w-form-done">
          <div>Thank you! Your submission has been received!</div>
        </div>
        <div class="w-form-fail">
          <div>Oops! Something went wrong while submitting the form.</div>
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
