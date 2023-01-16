<?php  

$sname = "DB_HOST";
$uname = "DB_USER";
$password = "DB_PASSWORD";

$db_name = "DB_NAME";

$con = mysqli_connect($sname, $uname, $password, $db_name);

if (!$con) {
	echo "Connection failed!";
	exit();
}  
