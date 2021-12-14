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
    <title> AZaidan | Item</title>
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
        <p><a href="/" style="position:relative;top:50px;right:50px;">Back</a></p>
    </div>
    <main>
    <?php if (isset($_GET['error'])): ?>
		<p><?php echo $_GET['error']; ?></p>
	<?php endif ?>
  <br><br>
  <?php if (isset($_GET['login'])): ?>
		<p><?php echo $_GET['login']; ?></p>
	<?php endif ?>
<div id="ADS">
  <?php 
        
          $ad = $_GET["ad"];
          $sql = "SELECT * FROM ad WHERE user_id='$ad' ORDER BY id DESC";
          $res = mysqli_query($con,  $sql);

          if (mysqli_num_rows($res) > 0) {

          	while ($images = mysqli_fetch_assoc($res)) {  ?>

             <div class="alb">
              <br>
              <div>
                <p style="font-weight: 10px;">
                  <button  type="button" class="btn1">Ad</button><br>
                  <img style="position:relative;right:5px;top:5px;width:20px;height:20px;border-radius:100%;" src="uploads/pr/<?=$images['image'];?>" alt="profile photo of <?=$images['username'];?>">
                  <a href="profile?aid=<?=$images['username']?>"><?php echo $images['username']; ?></a>
                </p>
              </div>
                <br>
                <img style="max-width: 325px;max-height: 325px;"  src="./uploads/ADS/<?=$images['image_url'];?>" alt="photo of <?=$images['username'];?>">
                  <br>
                <br>
             </div>
             <div>
               <p>
                 <?php echo $images['message']; ?><br>
                </p>
               <p>
                <?php echo "<a href='profile?aid=".$images['username']."'>".$images['name']."</a>" ?>
               </p>
               <p>
                 <a href="tel:<?=$images['number_email'];?>">Call <?php echo $images['name']; ?></a>
               </p>
               <p>
                <a href="mailto:<?=$images['email'];?>">Email <?php echo $images['name']; ?></a>
               </p>
               
               
            </div>  		
    <?php } }else {
      echo "<p>ad does not exist.</p>";
    }?>
            
    </main>
<br>
           
            </div>
  <div id="VID">
     
				<?php 
        
          $vid = $_GET["vid"];
          $sql = "SELECT * FROM images1 WHERE user_id='$vid' ORDER BY id DESC";
          $res = mysqli_query($con,  $sql);

          if (mysqli_num_rows($res) > 0) {

          	while ($images = mysqli_fetch_assoc($res)) {  ?>

             <div class="alb">
              <br>
              <div>
                <p style="font-weight: 10px;">
                  <img style="position:relative;right:5px;top:5px;width:20px;height:20px;border-radius:100%;" src="uploads/pr/<?=$images['image'];?>" alt="profile photo of <?=$images['username'];?>">
                  <a href="profile?aid=<?=$images['username']?>"><?php echo $images['username']; ?></a>
                </p>
              </div>
                <br>
                <video controls style="max-width:325px;max-height:325px;" >
                 <source src="uploads/VID/<?=$images['image_url'];?>" type="video/<?=$images['ext'];?>">
                  </video>
                  <br>
                <br>
             </div>
             <div>
               <p>
                 <?php echo $images['message']; ?><br>
                </p>
               <p>
                <?php echo "<a href='profile?aid=".$images['username']."'>".$images['name']."</a>" ?>
               </p>
               <p>
                 <a href="tel:<?=$images['number_email'];?>">Call <?php echo $images['name']; ?></a>
               </p>
               <p>
                <a href="mailto:<?=$images['email'];?>">Email <?php echo $images['name']; ?></a>
               </p>
               
               
            </div>  		
    <?php } }else {
      echo "<p>video does not exist.</p>";
    }?>
            
    </main>
<br>
           
            </div>
  <div id="IMG">
     
				<?php 

          $did = $_GET["did"];
          $sql = "SELECT * FROM images WHERE user_id='$did' ORDER BY id DESC";
          $res = mysqli_query($con,  $sql);

          if (mysqli_num_rows($res) > 0) {

          	while ($images = mysqli_fetch_assoc($res)) {  ?>

             <div class="alb">
              <br>
              <div>
                <p style="font-weight: 10px;">
                  <img style="position:relative;right:5px;top:5px;width:20px;height:20px;border-radius:100%;" src="uploads/pr/<?=$images['image'];?>" alt="profile photo of <?=$images['username'];?>">
                  <a href="profile?aid=<?=$images['username']?>"><?php echo $images['username']; ?></a>
                </p>
              </div>
                <br>
             	    <img style="max-width: 325px;max-height: 325px;" src="uploads/IMG/<?=$images['image_url']?>">
                  <br>
                <br>
             </div>
             <div>
               <p>
                 
                 <?php echo $images['message']; ?><br>Price: <?php echo $images['price']; ?></p>
               <p>
                <?php echo "<a href='profile?aid=".$images['username']."'>".$images['name']."</a>" ?>
               </p>
               <p>
                 <a href="tel:<?=$images['number_email'];?>">Call <?php echo $images['name']; ?></a>
               </p>
               <p>
                <a href="mailto:<?=$images['email'];?>">Email <?php echo $images['name']; ?></a>
               </p>
               
               
            </div>  		
    <?php } }else {
      echo "<p>Item does not exist.</p>";
    }?>
            
    </main>
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