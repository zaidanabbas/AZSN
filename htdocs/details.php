<!-- this code is written by Abbas Zaidan on Tuesday 2 November 2021 -->
<?php
session_start();
include "./conn/functions.php";
include "./conn/connection.php";
$user_data = check_login($con);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="keywords" content="Html, Css, Js,and Php">
    <meta name="author" content="Abbas Zaidan">
    <meta name="description" content="Are you looking for a jewerly repository? take a look at our Website.">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./assets/style.css">
    <link rel="shortcut icon" href="/img/Capture.png" type="png">
    <title>AZaidan | Details</title>
<?php
include "./assets/style.php";
?>
</head>
<body>
  <div class="container">
    <nav>
      <?php
      include "./assets/home_nav.php";
      ?>
      <div>
      <img src="uploads/pr/<?=$user_data['image_url']?>" alt="Your profile photo" style="border-radius: 100%;height:100px;width:100px;">
      </div>
    <form action="uploadacc.php" method="post" enctype="multipart/form-data">
           <input class="button" type="file" name="my_image"><br>
           
           
           
           
           <input name="name" placeholder="Name" value="<?=$user_data['name']?>"><br>
           <input name="user_name" placeholder="Username" value="<?=$user_data['user_name']?>"><br>
           <input name="email" placeholder="Email" value="<?=$user_data['email']?>"><br>
           <input name="password" type="password" placeholder="Password" value="<?=$user_data['password']?>"><br>
           <input type="submit" name="submit" value="Post">    
    </form>
    

    
    <footer>
    <?php
    include "./assets/footer.php";
    ?>
    </footer>
  
  </div>
</body>
</html>