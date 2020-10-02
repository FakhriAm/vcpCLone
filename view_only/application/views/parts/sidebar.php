<!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="#" class="brand-link elevation-4">
      <img src="https://cdn.cnnindonesia.com/cnnid/images/logo.png?v=9.1.5"
           alt="CNN Indonesia"
           class="brand-image img-circle elevation-3">
      <span class="brand-text font-weight-lighter">Video Content Provider</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user (optional) -->
      <!-- <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="assets/AdminLTE/dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block">Alexander Pierce</a>
        </div>
      </div> -->

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item">
            <a href="<?php echo base_url('welcome/index')?>" class="nav-link">
              <i class="nav-icon fas fa-home"></i>
              <p>
                Home
              </p>
            </a>
          </li>
          <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-copy"></i>
              <p>
                Kategori
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="<?php echo base_url('welcome/national')?>" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>National</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?php echo base_url('welcome/international')?>" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>International</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?php echo base_url('welcome/news')?>" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>News</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?php echo base_url('welcome/economy')?>" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Economy</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?php echo base_url('welcome/sport')?>" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Sport</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?php echo base_url('welcome/entertaintment')?>" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Entertaintment</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-table"></i>
              <p>
                Kelas Video
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="<?php echo base_url('welcome/reguler')?>" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Reguler</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?php echo base_url('welcome/silver')?>" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Silver</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?php echo base_url('welcome/gold')?>" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Gold</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?php echo base_url('welcome/platinum')?>" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Platinum</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-header">USER MENU</li>
          <li class="nav-item">
            <a href="" class="nav-link">
              <i class="nav-icon far fa-credit-card"></i>
              <p>
                Top Up
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="" class="nav-link">
              <i class="nav-icon fas fa-tasks"></i>
              <p>
                Log Download
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-file"></i>
              <p>Special Request</p>
            </a>
          </li>
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>