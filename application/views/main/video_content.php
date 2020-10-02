<!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1><?php echo ucfirst($title)?></h1>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
        <div class="card">
        <?php if(isset($data) && sizeof($data) > 0){?>
            <div class="card-header">
            <div class="row">
            <?php foreach ($data as $key) { 
              $thumbnail = 'http://10.11.5.71/thumbnail/'.$key->id_thumbnail;
              ?>
              <div class="col-3">
                <div class="card">
                  <div class="card-header">
                    <h3 class="card-title"><?php echo $key->video_title?></h3>
                  </div>
                  <div class="card-body">
                    <img src="<?php echo $thumbnail?>" style="height:25rem;" class="img-thumbnail">
                    <p><?php echo substr($key->description,0,20)?></p>
                  </div>
                  <div class="card-footer">
                    Price : <?php echo "Rp. ".number_format($key->price)?>
                    <a href="<?php echo base_url('video/detail?q=').$key->id_video?>">
                      <button class="btn btn-info float-right btn-sm">
                        <span class="text">
                  View
                </span><span class="icon text-white">
                  <i class="fas fa-chevron-circle-right"></i>
                </span>
                      </button>
                    </a>
                  </div>
                </div>
              </div>
            <?php } ?>
            </div>
          </div>
          <div class="card-footer text-center">
            <a href="">Load More</a>
          </div>
          <?php } else {?>
            <div class="card-body text-center">
             <p>No video found on <?php echo strtolower($title);?>!</p>
          </div>
          <?php } ?>
        </div>
      </div>
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper