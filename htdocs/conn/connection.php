<?php

$dbhost = "DB_HOST";
$dbuser = "DB_USER";
$dbpass = "DB_PASSWORD";
$dbname = "DB_NAME";

if(!$con = mysqli_connect($dbhost,$dbuser,$dbpass,$dbname))
{

	die("failed to connect!");
}
$db = mysqli_connect($dbhost,$dbuser,$dbpass,$dbname);
?>
