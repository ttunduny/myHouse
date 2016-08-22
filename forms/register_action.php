<?php 
	require_once('database.php');
	if(isset($_POST)){
		$fname = $_POST['fname'];
		$lname = $_POST['lname'];
		$username = $_POST['username'];
		$email = $_POST['email'];
		$national_id = $_POST['national_id'];
		$password = $_POST['password'];
		$usertype = $_POST['type'];
		$date_created = date('Y-m-d');
		$salt = '3o0YT$@!';
		$hash_password = sha1($salt.$password);

		$sql = "INSERT INTO `mylisting`.`user` (`id`,`first_name`,`last_name`,`national_id`,`email`,`password`,`date_created`,`last_login`,`usertype`,`activation`,`status`) VALUES (NULL,'$fname','$lname','$national_id','$email','$hash_password','$date_created',NULL,'$usertype',0,0)";

		mysqli_query($conn,$sql) or die(mysqli_error($link));

	}else{
		echo "No data Sent";
	}

?>