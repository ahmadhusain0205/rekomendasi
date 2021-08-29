  <!-- Page Wrapper -->
  <div id="wrapper">

    <!-- Sidebar -->
    <ul class="navbar-nav bg-gradient-warning sidebar sidebar-dark accordion" id="accordionSidebar">

      <!-- Sidebar - Brand -->
      <a class="sidebar-brand d-flex align-items-center justify-content-center" href="<?= base_url('Admin')?>">
        <div class="sidebar-brand-text mx-3"><img src="<?= base_url('assets/');?>img/brand.png" width="30"> Kuliner Magelang</div>
      </a>

      <!-- Divider -->
      <hr class="sidebar-divider my-0">

      <!-- Nav Item - Dashboard -->
      <?php 
      if(($this->uri->segment(1) == 'Admin') && ($this->uri->segment(2) == '')){
        echo '
        <li class="nav-item active">
          <a class="nav-link" href="';
          echo base_url('Admin');
          echo '">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Dashboard</span>
          </a>
        </li>
        ';
      } else {
        echo '
        <li class="nav-item">
          <a class="nav-link" href="';
          echo base_url('Admin');
          echo '">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Dashboard</span>
          </a>
        </li>
        ';}
        ?>

      <!-- Divider -->
      <hr class="sidebar-divider">

      <!-- Heading -->
      <div class="sidebar-heading">
        Users
      </div>

      <!-- Nav Item - Pages Collapse Menu -->
      <?php
      if(($this->uri->segment(2) == 'Admin') OR ($this->uri->segment(2) == 'User')){
        echo '<li class="nav-item active">';
      } else {
        echo '<li class="nav-item">';
      }
      ?>
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
          <i class="fas fa-fw fa-users"></i>
          <span>Manager</span>
        </a>
        <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <a class="collapse-item" href="<?= base_url('Admin/Admin');?>">Administrator</a>
            <a class="collapse-item" href="<?= base_url('Admin/User');?>">User</a>
          </div>
        </div>
      </li>

      <!-- Divider -->
      <hr class="sidebar-divider">

      <!-- Heading -->
      <div class="sidebar-heading">
        Culinary
      </div>

      <!-- Nav Item - Charts -->
      <?php
      if($this->uri->segment(2) == 'Culinary'){
        echo '<li class="nav-item active">';
      } else {
        echo '<li class="nav-item">';
      }
      ?>
        <a class="nav-link" href="<?= base_url('Admin/Culinary');?>">
          <i class="fas fa-fw fa-chart-area"></i>
          <span>Culinary's</span></a>
      </li>

      <!-- Divider -->
      <hr class="sidebar-divider d-none d-md-block">

      <!-- Sidebar Toggler (Sidebar) -->
      <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
      </div>

    </ul>
    <!-- End of Sidebar -->