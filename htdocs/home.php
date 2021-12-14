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
  <div id="ADS">
    <?php 
          $sql = "SELECT * FROM ad ORDER BY id DESC";
          $res = mysqli_query($con,  $sql);
          if (mysqli_num_rows($res) > 0) {
          	while ($images = mysqli_fetch_assoc($res)) {  ?>
            <div class="alb">

              <br>
              <div>
                <p>
                  <button  type="button" class="btn1">Ad</button><br>
                  <img style="position:relative;right:5px;top:5px;width:20px;height:20px;border-radius:100%;" src="uploads/pr/<?=$images['image'];?>" alt="profile photo of <?=$images['username'];?>">
                  <a href="item?ad=<?=$images['user_id'];?>&vid=0&did=0">
                    <?php echo $images['username']; ?>
                  </a>
                  
                </p>

              </div>
                <br>
                  <img style="max-width: 325px;max-height: 325px;"  src="./uploads/ADS/<?=$images['image_url'];?>" alt="photo of <?=$images['username'];?>">
             	    <br>
                <br>
             
              <div>
               <p>
                  <?php echo $images['message']; ?>
              </p>
               
              </div>
            </div>  		
      <?php 
      } 
      }
      else
     {
      echo "<p></p>";
      }
      ?>

      </div>
  <div id="VID">
     
				  <?php 
          $sql = "SELECT * FROM images1 ORDER BY id DESC";
          $res = mysqli_query($con,  $sql);
          if (mysqli_num_rows($res) > 0) {
          	while ($images = mysqli_fetch_assoc($res)) {  ?>
            <div class="alb">

              <br>
              <div>

                <p>

                  <img style="position:relative;right:5px;top:5px;width:20px;height:20px;border-radius:100%;" src="uploads/pr/<?=$images['image'];?>" alt="profile photo of <?=$images['username'];?>">
                  <a href="item?vid=<?=$images['user_id'];?>&did=0&ad=0">
                    <?php echo $images['username']; ?>
                  </a>
                  
                </p>

              </div>
                <br>
                  <video controls style="max-width:325px;max-height:325px;" >
                      <source src="uploads/VID/<?=$images['image_url'];?>" type="video/<?=$images['ext'];?>">
                  </video>
             	    <br>
                <br>
             
              <div>
               <p>
                  <?php echo $images['message']; ?>
              </p>
               
              </div>
            </div>  		
      <?php 
      } 
      }
      else
     {
      echo "<p></p>";
      }
      ?>

      </div>

  <div id="IMG">
     
     <?php 
     $sql = "SELECT * FROM images ORDER BY id DESC";
     $res = mysqli_query($con,  $sql);
     if (mysqli_num_rows($res) > 0) {
       while ($images = mysqli_fetch_assoc($res)) {  ?>
       <div class="alb">
         <br>
         <div>
           <p>
             <img style="position:relative;right:5px;top:5px;width:20px;height:20px;border-radius:100%;" src="uploads/pr/<?=$images['image'];?>" alt="profile photo of <?=$images['username'];?>">
             <a href="item?did=<?=$images['user_id']?>&vid=0&ad=0">
               <?php echo $images['username']; ?>
             </a>
           </p>
         </div>
           <br>
              <img style="max-width: 325px;max-height: 325px;" src="uploads/IMG/<?=$images['image_url']?>">
             <br>
           <br>
        
         <div>
          <p>
             <?php echo $images['message']; ?>
         </p>
          
         </div>
       </div>  		
            <?php 
            } 
            }
            else
            {
            echo "<p>No Items Yet.</p>";
            }
            ?>

       </div>
            
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