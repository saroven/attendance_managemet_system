<?php 
  session_start();
  include "global_config.php";
  include "auth_check.php";
  include "mysql_connect.php";
  include "query_builder.php";
?>

<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Attendance System</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.7 -->
  <link rel="stylesheet" href="<?php echo $base_url; ?>/assets/bower_components/bootstrap/dist/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="<?php echo $base_url; ?>/assets/bower_components/font-awesome/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="<?php echo $base_url; ?>/assets/bower_components/Ionicons/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?php echo $base_url; ?>/assets/dist/css/AdminLTE.min.css">
  <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
  <link rel="stylesheet" href="<?php echo $base_url; ?>/assets/dist/css/skins/_all-skins.min.css">
  <!-- bootstrap datepicker -->
  <link rel="stylesheet" href="<?php echo $base_url; ?>/assets/datetime_picker/bootstrap-datetimepicker.css">

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->

  <!-- Google Font -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">

  <!-- jQuery 3 -->
<!--   <script src="/assets/bower_components/jquery/dist/jquery.min.js"></script> -->

<!-- jQuery 2.1.1 for date and time picker -->
  <script src="<?php echo $base_url; ?>/assets/datetime_picker/moment-with-locales.js"></script>
  <script src="<?php echo $base_url; ?>/assets/bower_components/jquery/dist/jquery-2.1.1.min.js"></script>
  <script src="<?php echo $base_url; ?>/assets/datetime_picker/bootstrap-datetimepicker.js"></script>
  
  
</head>
<body class="hold-transition skin-blue sidebar-mini">
<!-- Site wrapper -->
<div class="wrapper">

  <header class="main-header">
    <!-- Logo -->
    <a href="<?php echo $base_url; ?>/index.php" class="logo">
      <!-- mini logo for sidebar mini 50x50 pixels -->
      <span class="logo-mini"><b>A</b>S</span>
      <!-- logo for regular state and mobile devices -->
      <span class="logo-lg"><b>Attendance</b>System</span>
    </a>
    <!-- Header Navbar: style can be found in header.less -->
    <nav class="navbar navbar-static-top">
      <!-- Sidebar toggle button-->
      <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </a>

      <div class="navbar-custom-menu">
        <ul class="nav navbar-nav">
          <!-- User Account: style can be found in dropdown.less -->
          <li class="dropdown user user-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <img src="<?php echo $_SESSION['user']['image'] ?>" class="user-image" alt="User Image">
              <span class="hidden-xs"><?php echo $_SESSION['user']['name']; ?></span>
            </a>
            <ul class="dropdown-menu">
              <!-- User image -->
              <li class="user-header">
                <img src="<?php echo $_SESSION['user']['image']; ?>" class="img-circle" alt="User Image">

                <p>
                  <?php echo $_SESSION['user']['name']; ?>
                  <small><?php echo $_SESSION['user']['title']; ?></small>
                </p>
              </li>
              <!-- <li>
                
              </li> -->
              <li class="user-footer">
                <div class="pull-left">
                  <button type="button" class="btn btn-default btn-flat" data-toggle="modal" data-target="#change-password">
                Change Pwd
              </button>
              <a href="<?php echo $base_url; ?>/profile.php" style="margin-left: 8px;" class="btn btn-default btn-flat">Profile</a>
                </div>
                <div class="pull-right">
                  <a href="<?php echo $base_url.'/logout.php' ?>" class="btn btn-default btn-flat">Sign out</a>
                </div>
              </li>
            </ul>
          </li>
          <!-- Control Sidebar Toggle Button -->
        </ul>
      </div>
    </nav>
    
  </header>

  <div class="modal fade" id="change-password">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title">Fill the form to Change Password</h4>
              </div>
              <div class="modal-body">
                <form action="<?php echo $base_url; ?>/common/update_password.php" method="POST">

                  <input type="hidden" name="redirect_url" value="http://<?php echo $_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI']; ?>">

                  <div class="form-group">
                    <input type="password" class="form-control" name="oldpass" placeholder="Enter Current Password" required="true">
                  </div>
                  <div class="form-group">
                    <input type="password" class="form-control" name="newpass1" placeholder="Enter New Password" required="true">
                  </div>
                  <div class="form-group">
                    <input type="password" class="form-control" name="newpass2" placeholder="Confirm New Password" required="true">
                  </div>
                
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Close</button>
                <input type="submit" class="btn btn-primary"name='submit'>
              </div>
              </form>
            </div>
            <!-- /.modal-content -->
          </div>
          <!-- /.modal-dialog -->
        </div>
        <!-- /.modal -->