(function($){

  "use strict";

  $(window).on('load', function() {

    // Preloader
    $('.loader').fadeOut();

    setTimeout(function() {
          $('body').addClass('loaded');
      }, 1000);

    $('.loader-mask').delay(350).fadeOut('slow');

    $(window).trigger("resize");

  });

  if($('.stats').length){

    $.getJSON('https://packagist.org/packages/tcg/voyager.json', function(data){
      var downloads = data.package.downloads.total;
      var stars = data.package.github_stars;
      var forks = data.package.github_forks;

      $('#repo_downloads_count').text(downloads);
      animateValue("repo_downloads_count", 0, downloads, 3000);

      $('#repo_stars').text(stars);
      animateValue("repo_stars", 0, stars, 3000);

      $('#repo_forks').text(forks);
      animateValue("repo_forks", 0, forks, 3000);
    });

  }


  $(window).resize(function(){
    containerFullHeight();
    stickyNavRemove();

  });


  /* Detect Browser Size
  -------------------------------------------------------*/
  var minWidth;
  if (Modernizr.mq('(min-width: 0px)')) {
    // Browsers that support media queries
    minWidth = function (width) {
      return Modernizr.mq('(min-width: ' + width + 'px)');
    };
  }
  else {
    // Fallback for browsers that does not support media queries
    minWidth = function (width) {
      return $(window).width() >= width;
    };
  }

  /* Mobile Detect
  -------------------------------------------------------*/
  if (/Android|iPhone|iPad|iPod|BlackBerry|Windows Phone/i.test(navigator.userAgent || navigator.vendor || window.opera)) {
    $("html").addClass("mobile");
  }
  else {
    $("html").removeClass("mobile");
  }

  /* IE Detect
  -------------------------------------------------------*/
  if(Function('/*@cc_on return document.documentMode===10@*/')()){ $("html").addClass("ie"); }



  /* Sticky Navigation
  -------------------------------------------------------*/
  $(window).scroll(function(){

    scrollToTop();
    var $stickyNav = $('#sticky-nav');


    if ($(window).scrollTop() > 190 & minWidth(992)) {
      $stickyNav.addClass('sticky');
    } else {
      $stickyNav.removeClass('sticky');
    }

    if ($(window).scrollTop() > 200 & minWidth(992)) {
      $stickyNav.addClass('offset');
    } else {
      $stickyNav.removeClass('offset');
    }

    if ($(window).scrollTop() > 500 & minWidth(992)) {
      $stickyNav.addClass('scrolling');
    } else {
      $stickyNav.removeClass('scrolling');
    }

  });


  function stickyNavRemove() {
    if (!minWidth(992)) {
      $('#sticky-nav').removeClass('sticky offset scrolling');
    }
  }


  /* Onepage Nav
  -------------------------------------------------------*/
  $('#onepage-nav').on('click', 'li > a', function() {
    $("#navbar-collapse").collapse('hide');
  });


  // Smooth Scroll Navigation


  /* Mobile Navigation
  -------------------------------------------------------*/
  $('.nav__dropdown-trigger').on('click', function() {
    if ($(this).hasClass("active")) {
      $(this).removeClass("active");
    }
    else {
      $(this).addClass("active");
    }
  });


  if ( $('html').hasClass('mobile') ) {
    $('body').on('click',function() {
      $('.nav__dropdown-menu').addClass('hide-dropdown');
    });

    $('.nav__dropdown').on('click', '> a', function(e) {
      e.preventDefault();
    });

    $('.nav__dropdown').on('click',function(e) {
      e.stopPropagation();
      $('.nav__dropdown-menu').removeClass('hide-dropdown');
    });
  }

  /* Lightbox popup
  -------------------------------------------------------*/
  $('.lightbox-img, .lightbox-video').magnificPopup({
    callbacks: {
      elementParse: function(item) {
      if(item.el.context.className == 'lightbox-video') {
          item.type = 'iframe';
        } else {
          item.type = 'image';
        }
      }
    },
    type: 'image',
    closeBtnInside:false,
    gallery: {
      enabled:true
    },
    image: {
      titleSrc: 'title',
      verticalFit: true
    }
  });

  // Single video lightbox
  $('.single-video-lightbox').magnificPopup({
    type: 'iframe',
    closeBtnInside:false,
    tLoading: 'Loading image #%curr%...'
  });



  /* Full Height Container
  -------------------------------------------------------*/
  function containerFullHeight() {

    var fullHeight = $(".container-full-height");

    if(fullHeight.hasClass('container-full-height--deduct-mobile-nav') & !minWidth(992)) {
      $(fullHeight).height($(window).height() - 60);
    } else {
      $(fullHeight).height($(window).height());
    }
  }


  /* Scroll to Top
  -------------------------------------------------------*/
  function scrollToTop() {
    var scroll = $(window).scrollTop();
    var $backToTop = $("#back-to-top");
    if (scroll >= 50) {
      $backToTop.addClass("show");
    } else {
      $backToTop.removeClass("show");
    }
  }

  $('a[href="#top"]').on('click',function(){
    $('html, body').animate({scrollTop: 0}, 1350, "easeInOutQuint");
    return false;
  });

  function animateValue(id, start, end, duration) {
      // assumes integer values for start and end

      var obj = document.getElementById(id);
      var range = end - start;
      // no timer shorter than 50ms (not really visible any way)
      var minTimer = 50;
      // calc step time to show all interediate values
      var stepTime = Math.abs(Math.floor(duration / range));

      // never go below minTimer
      stepTime = Math.max(stepTime, minTimer);

      // get current time and calculate desired end time
      var startTime = new Date().getTime();
      var endTime = startTime + duration;
      var timer;

      function run() {
          var now = new Date().getTime();
          var remaining = Math.max((endTime - now) / duration, 0);
          var value = Math.round(end - (remaining * range));
          obj.innerHTML = value;
          if (value == end) {
              clearInterval(timer);
          }
      }

      var timer = setInterval(run, stepTime);
      run();
  }



})(jQuery);
