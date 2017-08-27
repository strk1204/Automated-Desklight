<?php
$time = $_POST['time'];
file_put_contents('data/time.txt', $time);
file_put_contents('data/yes.txt', '1');
header('Location: index.php');

