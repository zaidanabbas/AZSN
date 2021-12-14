<?php 
session_start();

include("../conn/connection.php");
include("../conn/functions.php");


  if($_SERVER['REQUEST_METHOD'] == "POST")
  {
    //something was posted
    $email = $_POST['email'];
    $user_name = $_POST['user_name'];
    $password = $_POST['password'];
    $name = $_POST['name'];
    $num = $_POST['number'];
    

    if(!empty($user_name) && !empty($password) && !is_numeric($user_name))
    {

      //save to database
      $user_id = random_num(2);
      $query = "insert into users (user_id, name, user_name, email, number, password) values ('$user_id','$name','$user_name','$email','$num','$password')";
      
      mysqli_query($con, $query);
      header("Location: ../login/login.php");
      die;
    }else
    {
      echo "<p>Please enter some valid information!</p>";
      header("Location: ../index");
    }
  }
  ?>