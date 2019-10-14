<?php 
include 'header.php';
	// print_r($_POST);
	if (isset($_POST['submit'])) {

		$oldpass = $_POST['oldpass'];
		$newpass1 = $_POST['newpass1'];
		$newpass2 = $_POST['newpass2'];

		if (empty($oldpass)) {
			$_SESSION['error'] = "Current password field can not be empty";
			goToError($_POST['redirect_url']);
		}else{
			if (empty($newpass1)) {
				$_SESSION['error'] = "new password field can not be empty";
				goToError($_POST['redirect_url']);
			}else{
				if (empty($newpass2)) {
					$_SESSION['error'] = "Confirm new password field can not be empty";
					goToError($_POST['redirect_url']);
				}else{
					if ($newpass1 !== $newpass2) {
						$_SESSION['error'] = "New Password and Confirm password is doesn't matched";
						goToError($_POST['redirect_url']);
					}else{
						$sql = "SELECT * FROM users WHERE id = '".$_SESSION['user']['id']."'
								AND password = '".md5($oldpass)."'
								AND status = 1";
						$result = mysqli_query($conn, $sql);
						if ($result) {
							if (mysqli_num_rows($result) > 0) {

								$condition = array('field_name' => 'id', 'condition' => 'equal', 'field_value' => $_SESSION['user']['id']);
				
								$result = updateRowWithOneCondition($conn, 'users', array('password'), array(md5($newpass1)), $condition);
								if ($result == 0) {
									$_SESSION['error'] = "Failed to update password";
									goToError($_POST['redirect_url']);
								}else{
									$_SESSION['success'] = "Password Change Successfull";
									goToError($_POST['redirect_url']);
								}

							}else{
								$_SESSION['error'] = "Your entred old Password is wrong";
								goToError($_POST['redirect_url']);
							}
						}else{
							$_SESSION['error'] = "Something Went Wrong ! Plese try again";
							goToError($_POST['redirect_url']);
						}
					}
				}
			}
		}

	}else{
		$_SESSION['error'] = "You Can Not Access This Page..";
		goToError($base_url);
	}
 ?>