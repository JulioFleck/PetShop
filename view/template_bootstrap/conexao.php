<?php
$dbhost = 'localhost';
$dbuser = 'root';
$dbpass = 'target';

$conn = mysqli_connect($dbhost, $dbuser, $dbpass) or die('Error connecting to mysql');

$dbname = 'portal';
mysqli_select_db($dbname);
?>

