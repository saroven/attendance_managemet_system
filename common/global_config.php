<?php
	
	$base_url = "http://localhost:8000";

	$db_host = "localhost";
	$db_user = "root";
	$db_password = "";
	$db_name = "attendance_db";

	$photo_upload_dir = "uploads/users/photos/";

	function goToError($url){
//		$url = $base_url."/common/403.php";
    	echo "<script> location.href='".$url."'; </script>";
	}

    function navigateUser(){
        switch ($_SESSION['user']['role_id']) {
      case '1':
        # Management
        $url = $base_url."/management/home.php";
        break;

      case '2':
        # Trainer
        $url = $base_url."/trainer/home.php";
        break;

      case '3':
        # Student
        $url = $base_url."/student/home.php";
        break;

      default:
        $url = $base_url;
        break;
    }
    goToError($url);

    }

?>