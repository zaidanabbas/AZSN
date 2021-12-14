<?php 
session_start();

include("connection.php");
include("functions.php");

$user_data = check_login($con);
$id = $_SESSION['user_id'];
$sql = "DELETE from users WHERE user_id='$id';";

if (mysqli_query($con, $sql)) {
    session_destroy();
    header("Location: /");

} else {
echo "Error Deleting Account: " . mysqli_error($con);
}
?>