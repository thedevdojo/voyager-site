window.jQuery = window.$ = require('jquery');
var bootstrap = require('bootstrap-sass/assets/javascripts/bootstrap.min.js');

require('./plugins.js');

require('magnific-popup');

require('./scripts.js');

window.videojs = require('video.js/dist/video.min.js');
require('./videojs-resolution-switcher.js');
// Functionality for Academy page
if (document.getElementById('voyager_academy')) {
	player = videojs('voyager_academy', {
  		fluid: true
  	});
  	player.videoJsResolutionSwitcher({ default: '720' });
  	var resChange = false;
  	var curTime = 0;

  	player.on('ready', function(){
  		player.play();
  	});

  	$('document').ready(function(){
  		var topPos = document.getElementById('vidli_1').offsetTop;
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
}