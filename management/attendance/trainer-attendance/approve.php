<?php 
	include '../../../common/header.php';

   if(!isset($_GET['approve']) || $_GET['approve'] == ""){
      goToError($base_url."/common/403.php");
    }

    $condition = array('field_name' => 'id', 'condition' => 'equal', 'field_value' => $_GET['approve']);
    $attendance = selectSingleTableWithOneCondition($conn, 'attendances', $condition);
    if(mysqli_num_rows($attendance) > 0){
      $attendance = mysqli_fetch_array($attendance);
    }else{
      goToError($base_url."/common/403.php");
    }

 ?>

 <?php if (isset($_GET['approve'])) {

 	$id = $_GET['approve'];

 	$fields = array('approved');

 	$values = array(1);

 	$condition = array('field_name' => 'id', 'condition' => 'equal', 'field_value' => $id);

 	$result = updateRowWithOneCondition($conn, "attendances", $fields, $values, $condition);


 	if($result == 1){
    $_SESSION['success'] = "Approved Successfully";
    goToError($base_url."/management/attendance/trainer-attendance/pending.php");
  }else{
    $_SESSION['error'] = "Something Went Wrong ! Plese try again";
    goToError($base_url."/management/attendance/trainer-attendance/pending.php");
  }


 }elseif (isset($_GET['reject'])) {
 	$id = $_GET['reject'];

 	$fields = array('approved');

 	$values = array(2);

 	$condition = array('field_name' => 'id', 'condition' => 'equal', 'field_value' => $id);

 	$result = updateRowWithOneCondition($conn, "attendances", $fields, $values, $condition);


 	if($result == 1){
    $_SESSION['success'] = "Rejected Successfully";
    goToError($base_url."/management/attendance/trainer-attendance/pending.php");
  }else{
    $_SESSION['error'] = "Something Went Wrong ! Plese try again";
    goToError($base_url."/management/attendance/trainer-attendance/pending.php");
  }

 }else{
 	$_SESSION['error'] = "You Can't View This Page";
		goToError($base_url);
 } 

 ?>





