<?php 
  include "../common/header.php";

  include "nav.php"; 

  $condition_one = array('field_name' => 'trainer_id', 'condition' => 'equal', 'field_value' => $_SESSION['user']['id'] );
  $condition_two = array('field_name' => 'status', 'condition' => 'equal', 'field_value' => '1');

  $batches = selectSingleTableWithTwoCondition($conn, 'batches', $condition_one, $condition_two);

  



?>
<!-- DataTables -->
  <link rel="stylesheet" href="<?php echo $base_url; ?>/assets/bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css">
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <?php include "../common/message.php"; ?>
      <h1 class="">
        Trainer Dashboard
      </h1>
    </section>
      
    
    

    <section class="content">
      <h3>All Course</h3>
      <div class="row">

            
            <?php if (mysqli_num_rows($batches) > 0) { ?>
              <?php while ($batch = mysqli_fetch_array($batches)) { ?>
             <div class="col-lg-3 col-xs-6">
                <!-- small box -->
                <div class="small-box bg-aqua">
                  <div class="inner">
                    <h4><?php echo $batch['title']; ?></h4>

                    <!-- <p>students : </p> -->
                  </div>
                  <div class="icon">
                    <i class="fa fa-mortar-board"></i>
                  </div>
                  <a href="<?php echo $base_url; ?>/trainer/all-students.php?" class="small-box-footer">View Students  <i class="fa fa-arrow-circle-right"></i></a>
                </div>
              </div>
              <!-- ./col -->
            <?php } ?>
            <?php } ?>
          </div>

    <!-- Main content -->
    </section>
    <!-- /.content --> 
  </div>
  <!-- /.content-wrapper -->

   <script src="<?php echo $base_url; ?>/assets/bower_components/datatables.net/js/jquery.dataTables.min.js"></script>
  <script src="<?php echo $base_url; ?>/assets/bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js"></script>

  <script type="text/javascript">
    $(function() {
        nav_highlight("dashboard", "dashboard");
    });
  </script>

<?php include "../common/footer.php"; ?>
