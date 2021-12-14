<?php

$dbhost = "localhost";
$dbuser = "root";
$dbpass = "";
$dbname = "a.zaidan";

if(!$con = mysqli_connect($dbhost,$dbuser,$dbpass,$dbname))
{

	die("failed to connect!");
}
$db = mysqli_connect($dbhost,$dbuser,$dbpass,$dbname);
?>
