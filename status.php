<?php
$at = file_get_contents('data/at.txt');
$ato = file_get_contents('data/ato.txt');
$lights = file_get_contents('data/light.txt');
$ls = file_get_contents('data/ls.txt');
$mano = file_get_contents('data/man.txt');
#LIGHTS
	if(strpos($lights, '1') !==false)	{
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
	if($at =='1'){
		$at = 'ON';
	}
#AUTOOverride
	if($ato == NULL){
		$ato = 'OFF';
	}
	if($ato == '0'){
		$ato = 'OFF';
	}
	if($ato =='1'){
		$ato = 'ON';
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

        <div id="status" class="col">
            <div class="container centre contain">
                <div class="row">
                    <div class="col s4 white-text center-align">
                        <h4>
                        Light Sensor: <?php echo $ls; ?></h4>
                    </div>
                    <div class="col s4 white-text center-align">
                        <h4>
                        Auto Timer: <?php echo $at; ?></h4>
                    </div>
                    <div class="col s4 white-text center-align">
                        <h4>
                        Manual Override: <?php echo $mano; ?><h4>
                    </div>
                </div>
                <div style="margin-top:100px;">
					            <div class="container centre contain">
                <div class="row">
                    <div class="col s6 white-text center-align">
                        <h4>
                        Light: <?php echo $lights; ?></h4>
                    </div>
                    <div class="col s6 white-text center-align">
                        <h4>
                        Auto Timer Override: <?php echo $ato; ?></h4>
                    </div>
                </div>
                </div>
            </div>
        </div>