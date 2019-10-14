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

?>

 <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
    	<?php include 'common/message.php'; ?>
      <h1>

        View Profile
      </h1>
    </section>

    <!-- Main content -->
    <section class="content">

      <div class="row">
	        <div class="col-md-12">

	          <!-- Profile Image -->
	          <div class="box box-primary">
	            <div class="box-body box-profile">
	              <img class="profile-user-img img-responsive img-circle" style="border-radius: 0%;" src="<?php echo $_SESSION['user']['image']; ?>" alt="User profile picture">

	              <h3 class="profile-username text-center"><?php echo $_SESSION['user']['name']; ?></h3>

	              <p class="text-muted text-center"><?php echo $_SESSION['user']['title']; ?></p>

	              <ul class="list-group list-group-unbordered">
	                <li class="list-group-item">
	                  <b>Name :</b> <a class="pull-right"><?php echo $_SESSION['user']['name']; ?></a>
	                </li>
	                <li class="list-group-item">
	                  <b>Email :</b> <a class="pull-right"><?php echo $_SESSION['user']['email']; ?></a>
	                </li>
	                <li class="list-group-item">
	                  <b>Mobile :</b> <a class="pull-right"><?php echo $_SESSION['user']['msisdn']; ?></a>
	                </li>
	              </ul>

	              <a href="edit-profile.php?id=<?php echo $_SESSION['user']['id']; ?>" class="btn btn-primary btn-block"><b>Edit Profile</b></a>
	            </div>
	            <!-- /.box-body -->
	          </div>
	          <!-- /.box -->
	        </div>
	        <!-- /.col -->
	    </div>
	    <!-- /.row -->
	        
      </div>
      <!-- /.Content Wrapper -->
   </section>

<?php include 'common/footer.php'; ?>