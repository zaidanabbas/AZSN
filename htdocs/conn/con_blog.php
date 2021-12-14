<?php
session_start();
include "connection.php";
include "functions.php";
$user_data = check_login($con);
$title = $_POST['title'];
$user_name = $user_data['user_name'];
$message = $_POST['message'];


$query = "INSERT INTO blog (user_name, title, message) values ('$user_name','$title','$message')";

mysqli_query($con, $query);
header("Location: ../blog");
die;

?>