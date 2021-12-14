<?php
session_start();
include "./conn/functions.php";
include "./conn/connection.php";
$user_data = check_login($con);
if ($user_data['adminposts']) {
  # code...
  if ($user_data['adminposts'] == "yes") {
    # code...
  }else {
    # code...
    header("Location: home");
  }
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
    <link rel="stylesheet" href="./assets/style.css">
    <link rel="shortcut icon" href="/img/Capture.png" type="png">
    <title>AZaidan | Uploader</title>
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
  <div>
    <div>
      <h2>
        Image
      </h2>
     <form action="upload.php" method="post" enctype="multipart/form-data">
           <input autofocus style="color: black;" class="button" type="file" name="my_image" value="+"><br>
           <textarea name="message"  cols="20" rows="5" placeholder="message"></textarea><br>
           <input name="price" placeholder="Price"><br>
           <input name="name" placeholder="Name of Seller"><br>
           <input name="number_email" type="text" placeholder="Number"><br>
           <input name="email" type="email" placeholder="Email"><br>
           <input type="submit" type="submit" name="submit" value="Post">    
      </form>
    </div>
      <div>
        <h2>Video</h2>
          <form action="uploadvid.php" method="post" enctype="multipart/form-data">
              <input style="color:black;" autofocus class="button" type="file" name="my_image" value="+"><br>
              <textarea name="message"  cols="20" rows="5" placeholder="message"></textarea><br>
              <input name="price" placeholder="Price"><br>
              <input name="name" placeholder="Name of Seller"><br>
              <input name="number_email" type="text" placeholder="Number"><br>
              <input name="email" type="email" placeholder="Email"><br>
              <input type="submit" type="submit" name="submit" value="Post">    
          </form>
      </div>  
      <div>
        <h2>Ads</h2>
          <form action="uploadads.php" method="post" enctype="multipart/form-data">
              <input style="color:black;" autofocus class="button" type="file" name="my_image" value="+"><br>
              <textarea name="message"  cols="20" rows="5" placeholder="message"></textarea><br>
              <input name="price" placeholder="Price"><br>
              <input name="name" placeholder="Name of Seller"><br>
              <input name="number_email" type="text" placeholder="Number"><br>
              <input name="email" type="email" placeholder="Email"><br>
              <input type="submit" type="submit" name="submit" value="Post">    
          </form>
      </div>  
    </main>
    <section>
<br>
            
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