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
    <title> AZaidan | Profile</title>
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
          <?php
          $username = $_GET['aid'];
          $sql2 = "SELECT * FROM users WHERE user_name='$username' ORDER BY id DESC";
          $res = mysqli_query($con,  $sql2);

          if (mysqli_num_rows($res) > 0) {

          	while ($user = mysqli_fetch_assoc($res)) {  ?>
              <div class="alb">
                <img style="position:relative;right:150px;top:65px;width:50px;height:50px;border-radius:100%;" src="uploads/pr/<?=$user['image_url'];?>" alt="Account of <?=$user['user_name'];?>">
                <h2><?php echo $user['user_name']; ?></h2>
                <ul>
                  <li>
                    <a href="./profiles">Check Out Another Profiles</a>
                  </li>
                  <li>
                    <a href="./sitemesg?uid=<?=$user['user_name'];?>">Chat With Eachother</a>
                  </li>
                  <li>
                    <a href="tel:<?=$user['number'];?>">Call <?php echo $user['name']; ?></a>
                </li>
                <li>
                  <a href="mailto:<?=$user['email'];?>">Email <?php echo $user['name']; ?></a>
                </li>
                </ul>
              </div>
              <?php 
      } 
      }
      else
     {
      echo "<h2 style='color: red;'>Account Does not exist</h2>";
      }
      ?>
           
           <div id="ADS">
  <?php 
        
          $ad = $_GET["aid"];
          $sql = "SELECT * FROM ad WHERE username='$ad' ORDER BY id DESC";
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
    <?php } }else {
      echo "<p>ad does not exist.</p>";
    }?>
            
    </main>
<br>
           
            </div>
  <?php 
        
          $vid = $_GET["aid"];
          $sql = "SELECT * FROM images1 WHERE username='$vid' ORDER BY id DESC";
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
      echo "<p>No Videos Yet.</p>";
    }?>
            
    </main>
<br>
           
            </div>
  <div id="IMG">
     
				<?php 

          $did = $_GET["aid"];
          $sql = "SELECT * FROM images WHERE username='$did' ORDER BY id DESC";
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
      echo "<p>No Images Yet.</p>";
    }?>
            
    </main>
<br>
           
            </div>
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