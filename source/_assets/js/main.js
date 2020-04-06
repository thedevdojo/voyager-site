window.jQuery = window.$ = require('jquery');
var bootstrap = require('bootstrap-sass/assets/javascripts/bootstrap.min.js');

require('./plugins.js');

require('magnific-popup');

require('./scripts.js');

window.videojs = require('video.js/dist/video.min.js');

// Functionality for Academy page
if(document.getElementById('voyager_academy')){
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