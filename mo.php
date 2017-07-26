<?php
$mo = file_get_contents('data/man.txt');
$file = 'data/man.txt';
#MO
	if($mo == '1'){
		$mo = '0';
	}
	else {
		$mo = '1';
	}
file_put_contents($file, $mo);
header('Location: index.php');
?>