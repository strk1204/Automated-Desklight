<?php
$ls = file_get_contents('data/ls.txt');
$file = 'data/ls.txt';
#LIGHTSENSOR
	if($ls == '1'){
		$ls = '0';
	}
	else {
		$ls = '1';
	}
file_put_contents($file, $ls);
header('Location: index.php');
?>