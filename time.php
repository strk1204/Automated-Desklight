<?php
$on = $_POST['on'];
$off = $_POST['off'];
$at = $_POST['at'];
$ato = $_POST['ato'];
$onoff = $on . $off;
file_put_contents('data/at2.txt', $onoff);
file_put_contents('data/ato.txt', $ato);
file_put_contents('data/at.txt', $at);
header('Location: index.php');