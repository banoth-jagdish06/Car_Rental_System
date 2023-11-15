<?php

$dbhost = "localhost";
$dbuser = "root";
$dbpass = "";
$dbname = "carrental_system";

if (!$con = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname)) {

	die("failed to connect!");
}
?>


