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
    <meta name="description" content="Are you looking for a jewerly repository? Take a look at our Website.">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./assets/style.css">
    <link rel="shortcut icon" href="/img/Capture.png" type="png">
    
    <title> AZaidan | Settings</title>
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
    
    <main>
<div>
    
</div>
<div>
<h2 style="position:relative;right: 45px;">Settings</h2>
</div>
<div>
<p><a href="details">Change Profile Settings</a></p>
</div>
<div>
    <h2>Delete account</h2>
    <form action="conn/delete.php">
<button type="submit" >Delete account</button></form>
</div>
    </section>
    <main>
    <footer>
    <?php
    include "./assets/footer.php";
    ?>
    </footer>
  </main>
  </div>
</body>
</html>