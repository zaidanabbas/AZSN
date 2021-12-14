<?php
session_start();
include "./conn/functions.php";
include "./conn/connection.php";
$user_data = check_login($con);
if($_SERVER['REQUEST_METHOD'] == "POST")
  {
    //something was posted
    $user_name = $_GET['uid'];
    $message = $_POST['message'];
    
    $fromuser = $user_data['user_name'];

    

    if(!empty($user_name) && !is_numeric($user_name) && !empty($user_name))
    {

      //save to database
      $user_id = random_num(20);
      $query = "INSERT INTO privat (fromuser, user_name, message) VALUES ('$fromuser','$user_name','$message')";

      mysqli_query($con, $query);

      header("Location: sitemesg?uid=A.Zaidan");
      die;
    }else
    {
      echo "<p>Please enter some valid information!</p>";
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
    <section><?php
        $user = $user_data['user_name'];
        $sql1 = "SELECT * FROM privat WHERE user_name='$user'";
        $result = $con->query($sql1);
        $row1 = $result->fetch_assoc();
        while ($row1 = $result->fetch_assoc()){ 
            echo "<a href='profile?aid=".$row1['fromuser']."'>".$row1['fromuser']."</a>";
            echo "<p>".$row1['message']."</p>";
        }
        ?></p><form method="POST">
                <!-- <input type="text" name="user_name" placeholder="username" required="required" autocomplete="on" ><br> -->
             <textarea type="text" name="message" placeholder="message..." required="required" autocomplete="on" cols="20" rows="5"></textarea><br>
                <br>
                <button type="submit" name="submit" value="Send">Send</button>
                <br>
            </form>
              <br><br>
            
    </section>
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