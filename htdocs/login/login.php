<?php
session_start();
include "../conn/functions.php";
include "../conn/connection.php";
if (isset($_SESSION['user_id'])) {
    header("Location: ../home");
  }
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
    <link rel="stylesheet" href="../assets/style.css">
    <link rel="shortcut icon" href="/img/Capture.png" type="png">
    <title>AZaidan | Login</title>
</head>
<body>
  <div class="container" width="300px" height="100px">
  <nav>
    <h2 style="float: left;position:relative;">AZaidan</h2>
    </nav>
    <main>
    
      <h2 style="position: relative;right: 0px;right: 50px;">Login</h2>

      <form action="../inc/login.inc.php" method="post">
        <input type="text" name="user_name" placeholder="Username..."><br>
        <input type="password" name="password" placeholder="Password..."><br>
        <button type="submit" value="Login">Login</button>


      </form>
      <?php if (isset($_GET['error'])): ?>
		<p><?php echo $_GET['error']; ?></p>
	<?php endif ?>
      <p>Not a member <a style="color: rgb(41, 37, 37);" href="../">Signup</a></p>
    
    </main>
    <section>

    </section>
    <main>
    <footer>
    <?php
    include "../assets/footer.php";
    ?>
    </footer>
  </main>
  </div>
</body>
</html>