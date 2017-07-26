<?php
$at = file_get_contents('data/at.txt');
$lights = file_get_contents('data/light.txt');
$ls = file_get_contents('data/ls.txt');
$mano = file_get_contents('data/man.txt');
#LIGHTS
	if($lights == '1
'){
		$lights = 'ON';
	}
	else {
		$lights = 'OFF';
	}
#LIGHTSENSOR
	if($ls == '1'){
		$ls = 'ON';
	}
	else {
		$ls = 'OFF';
	}
#MO
	if(strpos($mano, '1') !==false){
		$mano = 'ON';
	}
	else {
		$mano = 'OFF';
	}
#AUTO
	if($at == NULL){
		$at = 'OFF';
	}
	if($at == '0'){
		$at = 'OFF';
	}
#LIGHTSENSOR2
	if($ls == 'ON'){
		$ls2 = 'Turn Off';
	}
	else {
		$ls2 = 'Turn On';
	}
#MO2
	if($mano == 'ON'){
		$man = 'Turn Off';
	}
	else {
		$man = 'Turn On';
	}
#echo '<script type="text/javascript">
#var x = new Date()
#document.write(x)
#</script>';
?>
<!DOCTYPE html>
<html lang="en">
    <head>
	<meta http-equiv="refresh" content="5">
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="">
        <meta name="author" content="">
        <!-- Favicons-->
        <link rel="apple-touch-icon-precomposed" href="images/favicon/apple-touch-icon-152x152.png">
        <meta name="msapplication-TileColor" content="#FFFFFF">
        <meta name="msapplication-TileImage" content="images/favicon/mstile-144x144.png">
        <link rel="icon" href="images/favicon/favicon-32x32.png" sizes="32x32">
        <title>Auto Desklight</title>
        <!link href="gcss/font1.css" rel="stylesheet">
        <!link href="gcss/font2.css" rel="stylesheet">
        <!link href="gcss/micons.css" rel="stylesheet">
        <!-- Materialize core CSS -->
        <link href="materialize/css/materialize.css" rel="stylesheet">
        <link href="style-lib.css" rel="stylesheet">
        <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!--[if lt IE 9]>
            <script src="assets/js/html5shiv.js"></script>
            <script src="assets/js/respond.min.js"></script>
        <![endif]-->
        <link href="style.css" rel="stylesheet">
    </head>
    <body class="blue-grey darken-1">
        <nav>
            <div class="nav-wrapper blue-grey">
                <img src="logo2.png" style="margin: 11px 10px">
                <ul id="nav-mobile" class="right hide-on-med-and-down">
                    <li>
                        <a href="index.html" class="waves-effect hoverable white-text">Controls</a>
                    </li>
                    <li>
                        <a href="help.html" class="waves-effect hoverable white-text">Help</a>
                    </li>
                    <li></li>
                </ul>
            </div>
        </nav>
        <div class="container centre2">
            <h1 class="white-text center-align">Controls</h1>
            <div class="row">
                <div class="col s12">
                    <ul class="tabs white-text blue-grey darken-1">
                        <li class="tab col s3">
                            <a href="#status">Status</a>
                        </li>
                        <li class="tab col s3">
                            <a href="#ls">Light Sensor</a>
                        </li>
                        <li class="tab col s3">
                            <a href="#at">Auto Time</a>
                        </li>
                        <li class="tab col s3">
                            <a href="#mo">Manual Override</a>
                        </li>
                    </ul>
                </div>
            </div>             
        </div>
        <div id="status" class="col">
            <div class="container centre contain">
                <div class="row">
                    <div class="col s4 white-text center-align">
                        <h4>
                        Light Sensor: <?php echo $ls; ?></h4>
                    </div>
                    <div class="col s4 white-text center-align">
                        <h4>
                        Auto Time: <?php echo $at; ?></h4>
                    </div>
                    <div class="col s4 white-text center-align">
                        <h4>
                        Manual Override: <?php echo $mano; ?><h4>
                    </div>
                </div>
                <div style="margin-top:50px;">
                    <div class="white-text center-align">
                        <h4>
                        Light: <?php echo $lights; ?></h4>
                    </div>
                </div>
            </div>
        </div>
        <div id="ls" class="col centre white-text"><a href="ls.php"><?php echo $ls2; ?></a></div>
        <div id="at" class="col centre white-text">Auto on at Set Time</div>
        <div id="mo" class="col centre white-text"><a href="mo.php"><?php echo $man; ?></a></div>
        <!-- Materialize core JavaScript -->
        <!-- Placed at the end of the document so the pages load faster -->
        <script src="assets/js/jquery.min.js"></script>
        <script src="materialize/js/materialize.js"></script>
        <script src="index.js"></script>
    </body>
</html>
