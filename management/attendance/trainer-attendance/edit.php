<?php

  include "../../../common/header.php";
  if (isset($_POST['submit'])) {
    $attendance_id = $_POST['id'];

    $fields = array('approved');

    $values = array($_POST['approved']);

    $condition = array('field_name' => 'id', 'condition' => 'equal', 'field_value' => $attendance_id);

    $result = updateRowWithOneCondition($conn, "attendances", $fields, $values, $condition);


    if($result == 1){
      $_SESSION['success'] = "Approved Successfully";
      goToError($base_url."/management/attendance/trainer-attendance/manage.php");
    }else{
      $_SESSION['error'] = "Something Went Wrong ! Plese try again";
      goToError($base_url."/management/attendance/trainer-attendance/manage.php");
    }
  }


  if(!isset($_GET['id']) || $_GET['id'] == ""){
    goToError($base_url."/common/403.php");
  }

  include "../../nav.php";

  $condition = array('field_name' => 'id', 'condition' => 'equal', 'field_value' => $_GET['id']);
  $attendances = selectSingleTableWithOneCondition($conn, 'attendances', $condition);
  if(mysqli_num_rows($attendances) > 0){
    $attendance = mysqli_fetch_array($attendances);
  }else{
    goToError($base_url."/common/403.php");
  }

?>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">

      <?php include "../../../common/message.php"; ?>
      
      <h1>
        Attendance
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
              <h3 class="box-title">Select One</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form role="form" method="POST" action="update.php">
              <div class="box-body">
                <input type="hidden" name="id" required="required" value="<?php echo $_GET['id']; ?>">
                
                    <div class="form-group">
                      <label for="approved">Approve*</label>
                      <select name="approved" class="form-control" required="required">
                        <option value="">select</option>
                        <option value="1">Yes(approve)</option>
                        <option value="2">No(reject)</option>
                        
                      </select>
                    </div>


              </div>
              <!-- /.box-body -->

              <div class="box-footer">
                <button type="submit" name="submit" class="btn btn-primary">Update</button>
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
        nav_highlight("user", "user-add");
    });
  </script>

<?php include "../../common/footer.php"; ?>
