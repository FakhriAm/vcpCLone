<!--Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1>Video Detail</h1>
        </div>
      </div>
    </div><!-- /.container-fluid -->
  </section>

  <!-- Main content -->
  <section class="content">
    <div class="container-fluid">
      <div class="card">
        <div class="card-header">
          <div class="card-title">
            Video Information
          </div>
        </div>
        <div class="card-body">
          <div class="col-sm-12">
            <video id="my-player" class="video-js" controls preload="auto" poster="<?php echo $thumbnail ?>" data-setup='{}'>
              <source src="<?php echo $hls ?>" type="application/x-mpegURL">
              </source>
            </video>
          </div>
          </br>
          <div class="row">
            <div class="col-2">
              <h3><?php echo $data->video_title ?></h3>
            </div>

          </div>
          <div class="row">
            <div class="col-2">
              <span>CNN Indonesia</span>
            </div>
          </div>
          <div class="row">
            <div class="col-2">
              <span>Almer P.S</span>
              <hr />
            </div>
            <div class="col-10">
              <a href="<?php echo base_url('video/downloadVideo?link=' . $link) ?>">
                <button class="btn btn-primary float-right btn-icon-split">
                  <span class="icon text-white">
                    <i class="fas fa-download"></i>
                  </span>
                  <span class="text">
                    Download
                  </span>
                </button>
              </a></div>
          </div>

          <p><?php echo $data->description ?></p>
          <hr />


        </div>
      </div>
  </section>
  <!-- /.content -->
</div>
<!-- /.content-wrapper-->
<script type="text/javascript">
  var options = {};

  var player = videojs('my-player', options, function onPlayerReady() {
    videojs.log('Your player is ready!');

    // In this context, `this` is the player that was created by Video.js.
    this.play();

    // How about an event listener?
    this.on('ended', function() {
      videojs.log('Awww...over so soon?!');
    });
  });
</script>