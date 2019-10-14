<?php

include '../../../common/header.php';

if (isset($_POST['submit'])) {
    $attendance_id = $_POST['id'];

    $fields = array('approved');

    $values = array($_POST['approved']);

    $condition = array('field_name' => 'id', 'condition' => 'equal', 'field_value' => $attendance_id);

    $result = updateRowWithOneCondition($conn, "attendances", $fields, $values, $condition);


    if($result == 1){
      $_SESSION['success'] = "attandance edited successfully";
      goToError($base_url."/management/attendance/student-attendance/manage.php");
    }else{
      $_SESSION['error'] = "Something Went Wrong ! Plese try again";
      goToError($base_url."/management/attendance/student-attendance/manage.php");
    }
  }