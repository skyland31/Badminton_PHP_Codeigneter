  <!-- Left side column. contains the logo and sidebar -->
  <aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- Sidebar user panel -->
      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu" data-widget="tree">
        <li class="header">MAIN NAVIGATION</li>
        <li>
          <a href="<?php echo base_url('staff/competition/index') ?>">
            <i class="fa fa-dashboard"></i> <span>หน้าแรก</span>
          </a>
        </li>
        <li class="active treeview">
          <a href="#">
            <i class="glyphicon glyphicon-flag"></i> <span>รายการการแข่งขัน</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li class="active"><a href="<?php echo base_url('staff/competition/createCompetition'); ?>"><i class="fa fa-circle-o"></i>สร้างรายการการแข่งขัน</a></li>
          </ul>
        </li>
      </ul>
    </section>
    <!-- /.sidebar -->
  </aside>