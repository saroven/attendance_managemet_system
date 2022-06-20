<?php
	session_start();
	include "global_config.php";
	include "mysql_connect.php";

	if(isset($_POST['email']) && isset($_POST['password'])){

		$sql = "SELECT 
				users.id, users.name, users.msisdn, users.email, users.image, users.role_id, roles.title
				FROM users
				JOIN roles ON users.role_id = roles.id
				WHERE users.email = '".$_POST['email']."'
				AND users.password = '".md5($_POST['password'])."'
				AND users.status = 1";
		$result = mysqli_query($conn, $sql);

		if($result){
			if(mysqli_num_rows($result) > 0){

				$user = mysqli_fetch_array($result);

				$_SESSION['user'] = $user;

				 //this function will navigate user to their dashboard
                navigateUser();

			}else{
				$_SESSION['error'] = "Email or Password incorrect";
				goToError($base_url);
			}

		}else{
			$_SESSION['error'] = "Please try again later";
			goToError($base_url);
		}

	}else{
		$_SESSION['error'] = "Please enter email & password";
		goToError($base_url);
	}