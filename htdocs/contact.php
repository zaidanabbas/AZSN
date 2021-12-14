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
    <title> AZaidan | Home</title>
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
    <?php if (isset($_GET['error'])): ?>
		<p><?php echo $_GET['error']; ?></p>
	<?php endif ?>
  <br><br>
  <?php if (isset($_GET['login'])): ?>
		<p><?php echo $_GET['login']; ?></p>
	<?php endif ?>

    <main>
        <div>
          <ul>
            <li>
              <a style="position:relative;right:50px;left:10px;" href="tel:+32470360242">Call Me</a><br>
            </li>
            <li>
              <a style="position:relative;right:;" href="mailto:abbastzaidan08@hotmail.com">Email</a>
            </li>
            <li>
            <a style="position:relative;right:;" href="https://www.instagram.com/zaidanabbass/">Instagram</a><br>
            </li>
            <li>
            <a style="position:relative;right:;" href="/sitemesg?uid=AZaidan">Messaging App</a>
            </li>
          </ul>
            
            
           </div>
    <footer>
    <?php
    include "./assets/footer.php";
    ?>
    </footer>
  </main>
  </div>
</body>
</html>