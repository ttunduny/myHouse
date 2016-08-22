<?php 
	require_once('database.php');
	session_start();	
	if(isset($_POST)){
		$email = $_POST['email'];		
		$password = $_POST['password'];		
		$salt = '3o0YT$@!';
		$hash_password = sha1($salt.$password);

		$sql = "SELECT * FROM `mylisting`.`user` WHERE email ='$email' and password='$hash_password' and status = '0' LIMIT 0,1";

		$current_time = date('Y-m-d');
		

		$result = $conn->query($sql);
		if ($result->num_rows > 0) {    		
    		// output data of each row
    		while($row = $result->fetch_assoc()) {
    			echo "true";
    			$user_id = $row['id'];
        		$_SESSION['user_id'] = $row['id'];
        		$_SESSION['fname'] = $row['first_name'];
        		$_SESSION['lname'] = $row['last_name'];
        		$_SESSION['national_id'] = $row['national_id'];
        		$_SESSION['email'] = $row['email'];
        		$_SESSION['date_created'] = $row['date_created'];
        		$_SESSION['usertype'] = $row['usertype'];

        		$sql_login = "UPDATE `mylisting`.`user` set last_login = '$current_time' WHERE id ='$user_id' and password='$hash_password'";
        		mysqli_query($conn,$sql) or die(mysqli_error($link));
        		return true;
    		}    		
		} else {    	
			return false;
		}
		$conn->close();



	}else{
		return false;
	}

?>