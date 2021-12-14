
    <title>A.Zaidan | Welcome</title>
<?php
include "./assets/style.php";
?>
</head>
<body>
  <div class="container">
    <nav>
<div style="width: auto;height: auto;">
        <h2 style="position: relative;float:left;bottom: 20px;"><a href="/">AZaidan
        </a></h2>
      </div>
  <div class="dropdown" style="float:right;position: relative;bottom: 10px;">
          <div style="rgb(255, 255, 255);width: 15px;"><button class="dropbtn">☰</button></div>
            
            <div class="dropdown-content" style="right:0px;">
                <p style="color: rgb(41, 37, 37); ">
                  <a href='/home'>Home</a>
                  <a href="/profile?aid=<?=$user_data['user_name'];?>">Profile</a>
                  
                  <?php
                  if ($user_data['adminposts']) {
                    # code...
                    if ($user_data['adminposts'] == "yes") {
                      echo "<a href='/uploader'>Uploader</a>";
                    }else {
                      # code...
                      
                    }
                  }
                  ?>
                  <a href="/contact">Contact</a>
                  <a href="/account">Settings</a>
                  <a href='/logout'>Log Out</a></p>
              </div>
            </div>
            </nav>
            <!-- <div>
        <h2><?php 
      echo $user_data['name'];
        ?></h2>
      </div> -->
