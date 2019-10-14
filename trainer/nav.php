<!-- Left side column. contains the sidebar -->
  <aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- Sidebar user panel -->
      <div class="user-panel">
        <div class="pull-left image">
          <img src="<?php echo $_SESSION['user']['image'] ?>" class="img-circle" alt="User Image">
        </div>
        <div class="pull-left info">
          <p><?php echo $_SESSION['user']['name']; ?></p>
          <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
        </div>
      </div>
      
<!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu" data-widget="tree">
        <li class="header">MAIN NAVIGATION</li>
         <li class="nav" id="dashboard"><a href="<?php echo $base_url; ?>/trainer/home.php"><i class="fa fa-dashboard"></i> <span>Dashboard</span></a></li>
        <li class="nav treeview" id="attendance">
          <a href="#">
            <i class="fa fa-mortar-board"></i> <span>My Attendance</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li class="nav" id="attendance-add"><a href="<?php echo $base_url; ?>/trainer/attendance/add.php"><i class="fa fa-plus-square-o"></i> Add</a></li>
            <li class="nav" id="attendance-manage"><a href="<?php echo $base_url; ?>/trainer/attendance/read.php"><i class="fa fa-square"></i> View</a></li>
          </ul>
        </li>
        <li class="nav treeview" id="student_attendance">
          <a href="#">
            <i class="fa fa-mortar-board"></i> <span>Student Attendance</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li class="nav" id="student_attendance-pending"><a href="<?php echo $base_url; ?>/trainer/student_attendance/pending.php"><i class="fa fa-plus-square-o"></i> Pending List</a></li>
            <li class="nav" id="student_attendance-view"><a href="<?php echo $base_url; ?>/trainer/student_attendance/view.php"><i class="fa fa-square"></i>View All</a></li>
          </ul>
        </li>
      </ul>
    </section>
    <!-- /.sidebar -->
  </aside>