<!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="<?php echo base_url('video')?>" class="brand-link elevation-4">
      <img src="<?php echo base_url('assets/img/trans.png')?>"
           alt="CNN Indonesia"
           class="brand-image img-circle elevation-3">
      <span class="brand-text font-weight-lighter">Video Provider</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-copy"></i>
              <p>
                Kategori
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <?php foreach($video_category as $key){
                $content = strtolower($key->content);
                $link = 'video/category/'.$content;?>
                <li class="nav-item">
                <a href="<?php echo base_url($link)?>" class="nav-link">
                <i class="fas fa-caret-right"></i>
                  <p><?php echo ucfirst($content); ?></p>
                </a>
              </li>
              <?php } ?>
            </ul>
          </li>
          <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-table"></i>
              <p>
                Tipe Video
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <?php foreach($video_type as $key){
                $content = strtolower($key->content);
                $link = 'video/type/'.$content;?>
              <li class="nav-item">
                <a href="<?php echo base_url($link)?>" class="nav-link">
                <i class="fas fa-caret-right"></i>
                  <p><?php echo ucfirst($content);?></p>
                </a>
              </li>
              <?php } ?>
            </ul>
          </li>
          <li class="nav-header">USER MENU</li>
          <li class="nav-item">
            <a href="#" class="nav-link">
              <!-- <i class="nav-icon far fa-credit-card"></i> -->
              <i class="nav-icon fas fa-chevron-circle-up"></i>
              <p>
                Latest Video
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="" class="nav-link">
              <!-- <i class="nav-icon far cloud-upload"></i> -->
              <i class="nav-icon fas fa-star-half-alt"></i>
              <p>
                Popular Video
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="" class="nav-link">
              <!-- <i class="nav-icon far fa-credit-card"></i> -->
              <i class="nav-icon fas fa-box-open"></i>
              <p>
                Package
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="" class="nav-link">
              <i class="nav-icon fas fa-book-open"></i>
              <!-- <i class=" far fa-credit-card"></i> -->
              <p>
                B - Roll
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="" class="nav-link">
              <!-- <i class="nav-icon far fa-credit-card"></i> -->
              <i class="nav-icon fas fa-layer-group"></i>
              <p>
                Establish
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="" class="nav-link">
              <!-- <i class=" fas fa-tasks"></i> -->
              <i class="nav-icon fas fa-dolly-flatbed"></i>
              <p>
                Log Download
              </p>
            </a>
          </li>
          <!-- <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-file"></i>
              <p>Special Request</p>
            </a>
          </li> -->
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>