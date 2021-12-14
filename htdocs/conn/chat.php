<?php
session_start();
include "./functions.php";
include "./connection.php";
$user_data = check_login($con);

  if ($user_data['admin']) {
    # code...
    if ($user_data['admin'] == "no") {
      header("Location: ../admin.php");
    }elseif ($user_data['admin'] == "yes") {
      # code...
    }elseif ($user_data['admin'] == "") {
      # code...
      header("Location: ../admin.php");
    }
  }
  if($_SERVER['REQUEST_METHOD'] == "POST")
  {
    //something was posted
    $message = $_POST['message'];
    $user_name = $user_data['user_name'];
    $name = $user_data['name'];
    

    if(!empty($user_name) && !is_numeric($user_name) && !empty($message))
    {

      //save to database
      $user_id = random_num(20);
      $query = "INSERT INTO messages (user_id, name, user_name, message) VALUES ('$user_id','$name','$user_name','$message')";

      mysqli_query($con, $query);

      header("Location: ../chat?message=sent");
      echo "<p>The message is sent. <br>We will get to you a soon as we can.</p>";
      die;
    }else
    {
      echo "<p>Please enter some valid information!</p>";
    }
  }
?>