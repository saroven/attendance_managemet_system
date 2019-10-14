<?php 
	include '../../common/header.php';
	include '../nav.php';
           

        $batchs = selectBatchForTrainer($conn, $_SESSION['user']['id']);

            if(mysqli_num_rows($batchs) > 0){

              $all_batchs = "(";

              $i = 1;
              while($batch = mysqli_fetch_array($batchs)) {
                
                if($i == mysqli_num_rows($batchs)){
                  $end = ")";
                }else{
                  $end = ",";
                }

                $all_batchs = $all_batchs.$batch['batch_id'].$end;

                $i++;

              }

            }else{
              $all_batchs = '(0)';
            }

        $all_attendances = allAtttendances($conn, $all_batchs);
           
         ?>

 ?>
<!-- DataTables -->
  <link rel="stylesheet" href="<?php echo $base_url; ?>/assets/bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css">
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
 
    <section class="content">
    	<?php include "../../common/message.php"; ?>
      <h2>All Students Attendances</h2>
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
                    <th>Status</th>
                  </tr>
                </thead>
                <tbody>
                 <?php if(mysqli_num_rows($all_attendances) > 0){ ?>
                      <?php while($attendances = mysqli_fetch_array($all_attendances)) { ?>
                          
                        <tr>
                          <td><?php echo $attendances["name"]; ?></td>
                          <td><?php echo $attendances["title"]; ?></td>
                          <td><?php echo $attendances["date"]; ?></td>
                          <td><?php echo $attendances["rating"]; ?></td>
                          <td><?php echo $attendances["review"]; ?></td>
                          <td><?php if($attendances["approved"] == 0){echo "Pending";}elseif($attendances["approved"] == 1){echo "Approved";}else{echo "Rejected";} ?></td>
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
                    <th>Status</th>
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
        nav_highlight("student_attendance", "student_attendance-view");
    });
  </script>

 <?php include '../../common/footer.php'; ?>