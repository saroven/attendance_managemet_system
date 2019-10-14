<?php include 'common/header.php'; ?>


<?php 

	if ($_SESSION['user']['role_id'] == 1) {
		include 'management/nav.php';
	}elseif ($_SESSION['user']['role_id'] == 2) {
		include 'trainer/nav.php';
	}elseif ($_SESSION['user']['role_id'] == 3) {
		include 'student/nav.php';
	}else{
		goToError($base_url);
	}

  $user_condition = array('field_name' => 'id', 'condition' => 'equal', 'field_value' => $_GET['id']);
  $user = selectSingleTableWithOneCondition($conn, 'users', $user_condition);
  if(mysqli_num_rows($user) > 0){
    $user = mysqli_fetch_array($user);
  }else{
    goToError($base_url."/common/403.php");
  }

?>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">

      <?php include "common/message.php"; ?>
      
      <h1>
        Profile
        <small>Edit</small>
      </h1>
    </section>

    <!-- Main content -->
    <section class="content">

      <div class="row">
        <!-- left column -->
        <div class="col-md-12">
          <!-- general form elements -->
          <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Fill the form</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form role="form" method="POST" action="update.php" enctype="multipart/form-data">
              <div class="box-body">
                <input type="hidden" name="id" required="required" value="<?php echo $user['id']; ?>">
                <div class="form-group">
                  <label for="name">Name*</label>
                  <input type="text" name="name" class="form-control" id="name" placeholder="Enter name" required="required" value="<?php echo $user['name']; ?>">
                </div>
                <div class="form-group">
                  <label for="msisdn">Mobile number*</label>
                  <input type="text" name="msisdn" class="form-control" id="msisdn" placeholder="Enter mobile number" required="required" value="<?php echo $user['msisdn']; ?>">
                </div>
                <div class="form-group">
                  <label for="email">Email address*</label>
                  <input type="email" name="email" class="form-control" id="email" placeholder="Enter email" required="required" value="<?php echo $user['email']; ?>">
                </div>
                <div class="form-group">
                  <label for="password">Password </label> <span class="help-block">If you don't wana change password ! leave those field empty</span>
                  <input type="password" name="password" class="form-control" id="password" placeholder="Password">
                </div>
                <div class="form-group">
                  <label for="password">Confirm password*</label>
                  <input type="password" name="confirm_password" class="form-control" id="confirm_password" placeholder="Confirm password">
                </div>

                <div class="form-group">
                  <label for="image">Profile Picture </label> <span class="help-block">If you don't wana change profile picture so leave it empty</span>
                  <input type="file" name="image" id="image">

                  <p class="help-block">Max file size: 2 MB, Format: jpeg, jpg, png</p>
                </div>
              </div>
              <!-- /.box-body -->

              <div class="box-footer">
                <button type="submit" class="btn btn-primary">Update</button>
              </div>
            </form>
          </div>
          <!-- /.box -->

        </div>

    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

  <script type="text/javascript">
    $(function() {
        nav_highlight("dashboard", "dashboard");
    });
  </script>
<?php include 'common/footer.php' ?>