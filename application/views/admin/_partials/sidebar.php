<?php
  $a = ucfirst($this->uri->segment(2));
?>
  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="#" class="brand-link">
      <img src="<?php echo base_url('assets/dist/img/AdminLTELogo.png') ?>" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
           style="opacity: .8">
      <span class="brand-text font-weight-light">CV</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <!--
          <li class="nav-item has-treeview menu-open">
            <a href="#" class="nav-link">
              <i class="nav-icon fa fa-dashboard"></i>
              <p>Dashboard</p>
            </a>
          </li>
          -->
          <li class="nav-item">
            <a href="<?php echo base_url('admin/biodata') ?>" class="nav-link <?php if($a == "Biodata") echo "active"; ?>">
              <i class="nav-icon fa fa-th"></i>
              <p>
                Biodata
              </p>
            </a>
          </li>
          <li class="nav-item has-treeview">
            <a href="<?php echo base_url('admin/education') ?>" class="nav-link <?php if($a == "Education") echo "active"; ?>">
              <i class="nav-icon fa fa-pie-chart"></i>
              <p>
                Education 
              </p>
            </a>
          </li>
          <li class="nav-item has-treeview">
            <a href="<?php echo base_url('admin/experiencce') ?>" class="nav-link  <?php if($a == "Experiencce") echo "active"; ?>">
              <i class="nav-icon fa fa-tree"></i>
              <p>
                Experience
              </p>
            </a>
          </li>
          <li class="nav-item has-treeview">
            <a href="<?php echo base_url('admin/info') ?>" class="nav-link  <?php if($a == "Info") echo "active"; ?>">
              <i class="nav-icon fa fa-edit"></i>
              <p>
                Info
              </p>
            </a>
          </li>
          <li class="nav-item has-treeview">
            <a href="<?php echo base_url('admin/portofolio') ?>" class="nav-link  <?php if($a == "Portofolio") echo "active"; ?>">
              <i class="nav-icon fa fa-table"></i>
              <p>
                Portofolio
              </p>
            </a>
          </li>
          <li class="nav-item has-treeview">
            <a href="<?php echo base_url('admin/skill') ?>" class="nav-link  <?php if($a == "Skill") echo "active"; ?>">
              <i class="nav-icon fa fa-table"></i>
              <p>
                Skill
              </p>
            </a>
          </li>
          <li class="nav-item has-treeview">
            <a href="<?php echo base_url('admin/sosmed') ?>" class="nav-link  <?php if($a == "Sosmed") echo "active"; ?>">
              <i class="nav-icon fa fa-table"></i>
              <p>
                Social Media
              </p>
            </a>
          </li>          
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>