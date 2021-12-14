<?php
session_start();

include("connection.php");
include("functions.php");
$user_data = check_login($con);
$user_name = $user_data['user_name'];
$sql = "insert into images (user_name) values ('$user_name')";

if (mysqli_query($con, $sql)) {
    header("Location: ../home");
echo "Record updated successfully";
} else {
echo "Error updating record: " . mysqli_error($con);
}
?>