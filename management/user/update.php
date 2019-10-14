<?php
	include "../../common/header.php";

	if(!isset($_POST['id']) || $_POST['id'] == ""){
	    goToError($base_url."/common/403.php");
	}

	if(isset($_POST['password']) && $_POST['password'] != ""){

		$fields = array('name', 'msisdn', 'email', 'password', 'role_id');
		$values = array($_POST['name'], $_POST['msisdn'], $_POST['email'], md5($_POST['password']), $_POST['role_id']);

	}else{
		
		$fields = array('name', 'msisdn', 'email', 'role_id');
		$values = array($_POST['name'], $_POST['msisdn'], $_POST['email'], $_POST['role_id']);

	}

	$id = $_POST['id'];


	  $user_condition = array('field_name' => 'id', 'condition' => 'equal', 'field_value' => $id);
	  $user = selectSingleTableWithOneCondition($conn, 'users', $user_condition);
	  if(mysqli_num_rows($user) > 0){
	    $user = mysqli_fetch_array($user);
	  }else{
	    goToError($base_url."/common/403.php");
	  }


			if (isset($_FILES['image']['name']) && isset($_FILES['image']['name']) != '') {
				// for deleting existing image
				$currentimage = $user['image'];
				$explodepath = explode('/', $currentimage);
				$imagename = $explodepath[7];

				if ($imagename !== 'no_image.png') {
					$fileurl = '../../'.$photo_upload_dir.$imagename;

					if (file_exists($fileurl)) 
							               {
							                 unlink($fileurl);
							              }
				}
				
				// for uploading profile picture
				$filename = $_FILES['image']['name'];
				$tempfilename = $_FILES['image']['tmp_name'];
				$expfile = explode('.', $filename);
				$filextension = $expfile[1];
				$file_name = time().rand(0000,9999).'.'.$filextension;
				$filepath = '../../'.$photo_upload_dir.$file_name;
				move_uploaded_file($tempfilename, $filepath);

				$image = $base_url.'/'.$photo_upload_dir.$file_name;

			}else{
				// $image = $base_url.'/'.$photo_upload_dir.'no_image.png';
				$image = '';
			}
			$fields[] = 'image';
			$values[] = $image;

	$user_condition = array('field_name' => 'id', 'condition' => 'equal', 'field_value' => $id);
	$user = selectSingleTableWithOneCondition($conn, 'users', $user_condition);
	if(mysqli_num_rows($user) > 0){
	    
		$user_condition = array('field_name' => 'id', 'condition' => 'equal', 'field_value' => $id);
		$result = updateRowWithOneCondition($conn, "users", $fields, $values, $user_condition);

		if($result == 1){
			$_SESSION['success'] = "User updated successfully";
			goToError($base_url."/management/user/manage.php");
		}else{
			$_SESSION['error'] = "Failed to update user";
			goToError($base_url."/management/user/edit.php?id=".$id);
		}

	}else{
	    $_SESSION['error'] = "No user found with this ID";
	    goToError($base_url."/management/user/manage.php");
	}