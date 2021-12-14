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
  <div>
     
				  <?php 
          $sql = "SELECT * FROM users ORDER BY id DESC";
          $res = mysqli_query($con,  $sql);
          if (mysqli_num_rows($res) > 0) {
          	while ($images = mysqli_fetch_assoc($res)) {  ?>
             <div class="alb">
              <br>
              <div><p><img style="position:relative;right:5px;top:5px;width:20px;height:20px;border-radius:100%;" src="uploads/pr/<?=$images['image_url'];?>" alt="profile photo of <?=$images['user_name'];?>"><a href="profile?aid=<?=$images['user_name']?>"><?php echo $images['user_name']; ?></a></p></div>
              
               
            </div>  		
    <?php } }else {
      echo "<p>No Items Yet.</p>";}?>
            
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