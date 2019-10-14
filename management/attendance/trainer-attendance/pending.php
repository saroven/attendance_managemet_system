<?php 
	include '../../../common/header.php';
	include '../../nav.php';

	$attendances = AlltrainersPendingAttendances($conn);
 ?>
<!-- DataTables -->
  <link rel="stylesheet" href="<?php echo $base_url; ?>/assets/bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css">
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
 
    <section class="content">
    	<?php include "../../../common/message.php"; ?>
      <h2>Pending Attendances</h2>
      <div class="row">

      

        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">List</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                  <tr>
                    <th>Student Name</th>
                    <th>Batch Name</th>
                    <th>Date</th>
                    <th>Rating</th>
                    <th>Review</th>
                    <th>Approve</th>
                    <th>Reject</th>
                  </tr>
                </thead>
                <tbody>
                 <?php if(mysqli_num_rows($attendances) > 0){ ?>
                      <?php while($attendance = mysqli_fetch_array($attendances)) { ?>
                          
                        <tr>
                          <td><?php echo $attendance["name"]; ?></td>
                          <td><?php echo $attendance["title"]; ?></td>
                          <td><?php echo $attendance["date"]; ?></td>
                          <td><?php echo $attendance["rating"]; ?></td>
                          <td><?php echo $attendance["review"]; ?></td>
                          <td style="text-align: center;">
                            <a href='approve.php?approve=<?php echo $attendance["id"]; ?>'>
                              <i class="fa fa-check"></i>
                            </a>
                          </td>
                          <td style="text-align: center;">
                            <a href='approve.php?reject=<?php echo $attendance["id"]; ?>'>
                              <i class="fa fa-close"></i>
                            </a>
                          </td>
                        </tr>

                      <?php } ?>
                  <?php } ?>

                </tbody>
                <tfoot>
                  <tr>
                   <th>Student Name</th>
                    <th>Batch Name</th>
                    <th>Date</th>
                    <th>Rating</th>
                    <th>Review</th>
                    <th>Approve</th>
                    <th>Reject</th>
                  </tr>
                </tfoot>
              </table>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
        <!-- /.col -->
         
      </div>
    </section>
  </div>
  <!-- /.content-wrapper -->


  

   <script src="<?php echo $base_url; ?>/assets/bower_components/datatables.net/js/jquery.dataTables.min.js"></script>
  <script src="<?php echo $base_url; ?>/assets/bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js"></script>

  <script type="text/javascript">
    $(function() {
        nav_highlight("attendance", "trainer", "pending");
    });
  </script>
 <?php include '../../../common/footer.php'; ?>