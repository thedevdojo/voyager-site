<link href="../css/video-js.min.css" rel="stylesheet" type="text/css">
<link href="../css/videojs-resolution-switcher.css" rel="stylesheet">
<link href="../css/videojs-tube.min.css" rel="stylesheet"/>

  <!-- Include ES5 shim, sham and html5 shiv for ie8 support  -->
  <!-- Exclude this if you don't need ie8 support -->
  <script src="../js/videojs-ie8.min.js"></script>

  <!-- video.js must be in the <head> for older IEs to work. -->
  <script src="../js/video.min.js"></script>

    <div class="content-wrapper oh">

      <!-- Page Title -->
      <section class="page-title bottom-divider text-center">
        <div class="container">

          <div class="page-title__outer">
            <div class="page-title__inner">
              <div class="page-title__holder">
                <h1 class="page-title__title">Voyager Academy<?php if(isset($video->title)){ echo ' - ' . $video->title; } ?></h1>
                <p class="page-title__subtitle lead">Welcome to the Voyager Academy. A video tutorial section to teach you all the awesomeness that is Voyager <img src="/img/emoji-graduation.png" class="emoji emoji-24" style="top:-4px;"></p>
                <img src="/img/academy.png" class="academy">
              </div>              
            </div>
          </div>          
         
        </div>
      </section> <!-- end page title -->

      <!-- Features -->
      <section class="section-wrap pt-0 pb-0 bg-light features academy">
        
        <div class="about-academy-header">
          <div class="container">
            <h2><?php if(isset($video->title)): ?><?php if(isset($video->number)){ echo $video->number . '. '; } ?><?= $video->title; ?><?php endif; ?></h2>
          </div>
        </div>

        <div class="container academy-container">
          <div class="row row-100 items-grid acadey-row">

            <div class="col-md-3 col-lg-3 left-nav-vids no-float hidden-sm hidden-xs" id="vidnav">
              	<?php $include_ids = true; ?>
              	<?php require 'vidnav.php'; ?>
            </div>

            <div id="vidColumn" class="col-md-9 col-lg-9 no-float">




				<video id="voyager_academy" class="video-js vjs-big-play-centered vjs-16-9" controls preload="none" width="960" height="540"
	                poster="<?php if(isset($video->cover_image)){ echo $video->cover_image; } ?>"
	                data-setup="{}">
	              <source src="<?php if(isset($video->video_360)){ echo $video->video_360; } ?>" type='video/mp4' label='360p' res='360' />
	              <source src="<?php if(isset($video->video_540)){ echo $video->video_540; } ?>" type='video/mp4' label='540p' res='540'/>
	              <source src="<?php if(isset($video->video_720)){ echo $video->video_720; } ?>" type='video/mp4' label='720p' res='720'/>
	              <source src="<?php if(isset($video->video_1080)){ echo $video->video_1080; } ?>" type='video/mp4' label='1080p' res='1080'/>
	              <p class="vjs-no-js">To view this video please enable JavaScript, and consider upgrading to a web browser that <a href="http://videojs.com/html5-video-support/" target="_blank">supports HTML5 video</a></p>
	            </video>

	        </div>

	        <div class="col-md-3 col-lg-3 left-nav-vids no-float hidden visible-sm visible-xs">
              
              	<?php $include_ids = false; ?>
              	<?php require 'vidnav.php'; ?>

            </div>

          </div>
        </div>
        
        <div class="about-academy">
          <div class="container">
            <h3><?php if(isset($video->title)): ?><?php if(isset($video->number)){ echo $video->number . '. '; } ?><?= $video->title; ?><?php endif; ?></h3>
            <p><?php if(isset($video->description)): ?><?= $video->description ?><?php endif; ?></p>
          </div>
        </div>

      </section> <!-- end features-section -->


    </div> <!-- end content wrapper -->
  </main> <!-- end main wrapper -->

<script src="../js/videojs-resolution-switcher.js"></script>
<script>
  	player = videojs('voyager_academy', {
  		fluid: true
  	});
  	player.videoJsResolutionSwitcher({ default: '720' });
  	var resChange = false;
  	var curTime = 0;

  	<?php if(isset($video->url) && $video->url != '/academy'): ?>
  	player.on('ready', function(){
  		player.play();
  	});
  	<?php endif; ?>



  	$('document').ready(function(){
  		var topPos = document.getElementById('vidli_<?= $video->number; ?>').offsetTop;
		setTimeout(function(){
			$('#vidnav').scrollTop(topPos);
		}, 1000);
		
	});


	player.on('resolutionchange', function(){
		curTime = player.currentTime();
		player.play();
		resChange = true;
    
  	});

   	player.on('play', function(){
        if(resChange){
        	player.currentTime( curTime );
        	resChange = false;
        }    	
    });

    // ********** SET the video icon nav left to same height **********//
    $('document').ready(function(){
    	if($(window).width() >= 992){
    		$('.left-nav-vids').css('height', $('#vidColumn').height());
    	} else {
    		$('.left-nav-vids').css('height', 'auto');
    	}
    });

    $(window).resize(function(){
    	if($(window).width() >= 992){
    		$('.left-nav-vids').css('height', $('#vidColumn').height());
    	} else {
    		$('.left-nav-vids').css('height', 'auto');
    	}
    });
</script>