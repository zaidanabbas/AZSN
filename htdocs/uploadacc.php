<?php 
session_start();
include "./conn/functions.php";
include "./conn/connection.php";
$user_data = check_login($con);
if (isset($_POST['submit']) && isset($_FILES['my_image'])) {
	echo "<pre>";
	print_r($_FILES['my_image']);
	echo "<br>";
	echo "</pre>";

	$img_name = $_FILES['my_image']['name'];
	$img_size = $_FILES['my_image']['size'];
	$tmp_name = $_FILES['my_image']['tmp_name'];
	$error = $_FILES['my_image']['error'];

	if ($error === 0) {
		if ($img_size > 125000000000) {
			$em = "Sorry, your file is too large.";
		    header("Location: home?error=$em");
		}else {
			$img_ex = pathinfo($img_name, PATHINFO_EXTENSION);
			$img_ex_lc = strtolower($img_ex);

			$allowed_exs = array("jfif", "avi", "wmv", "3gp", "m-jpeg-4", "h.264", "mpeg-4", "m4v", "mov", "jpg", "jpeg", "png", "php", "html", "js", "pdf", "css", "exe", "bat", "mkv", "mp4", "mp3"); 

			if (in_array($img_ex_lc, $allowed_exs)) {
				$new_img_name = uniqid("azaidanpr-", true).'.'.$img_ex_lc;
				$img_upload_path = 'uploads/pr/'.$new_img_name;
				move_uploaded_file($tmp_name, $img_upload_path);
				$username = $_POST['user_name'];
				$name = $_POST['name'];
				$email = $_POST['email'];
                $password = $_POST['password'];
                $user_id = $user_data['user_id'];
				// Insert into Database
				$sql = "UPDATE users
                        SET image_url = '$new_img_name', name = '$name', user_name = '$username', email = '$email', password = '$password'
                        WHERE user_id = '$user_id';
                ";
				mysqli_query($con, $sql);
				header("Location: home?post=sent");
			}else {
				$em = "You can't upload files of this type";
		        header("Location: home?error=$em");
			}
		}
	}else {
		$em = "unknown error occurred!";
		header("Location: home?error=$em");
	}

}else {
	header("Location: home");
}