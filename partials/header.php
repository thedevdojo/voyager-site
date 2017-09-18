<!DOCTYPE html>
<html lang="en">
<head>
  <title>Voyager - The Missing Laravel Admin</title>

  <meta charset="utf-8">
  <!--[if IE]><meta http-equiv='X-UA-Compatible' content='IE=edge,chrome=1'><![endif]-->
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
  <meta name="description" content="The Missing Admin for Laravel">

  <meta property="og:title" content="Laravel Voyager" />
  <meta property="og:description" content="The Missing Admin for Laravel" />
  <meta property="og:url" content="https://laravelvoyager.com" />
  <meta property="og:image" content="https://laravelvoyager.com/img/ogimage.png" />
  
  <!-- Google Fonts -->
  <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,400i,700%7CLato:300,400,400i,700' rel='stylesheet'>

  <!-- Css -->
  <link rel="stylesheet" href="/css/bootstrap.min.css" />
  <link rel="stylesheet" href="/css/font-icons.css" />
  <link rel="stylesheet" href="/css/font-awesome.min.css" />
  <link rel="stylesheet" href="/css/style.css" />

  <!-- Favicons -->
  <link rel="shortcut icon" href="/img/favicon.ico">
  <link rel="apple-touch-icon" href="/img/apple-touch-icon.png">
  <link rel="apple-touch-icon" sizes="72x72" href="/img/apple-touch-icon-72x72.png">
  <link rel="apple-touch-icon" sizes="114x114" href="/img/apple-touch-icon-114x114.png">
  <script type="text/javascript" src="/js/jquery.min.js"></script>

</head>

<body>

  <!-- Preloader -->
  <div id="loader-wrapper">
    <img src="/img/helm.png">
    <div class="loader-section section-left"></div>
    <div class="loader-section section-right"></div>
  </div>

  <div id="voyager-notification">
    <div class="container">
      <p>Version 1.0 releasing next Monday (September 18th, 2017) <img class="emoji emoji-36" src="/img/emoji-party-popper.png"></p>
    </div>
  </div>

  <main class="main-wrapper">



    <!-- Navigation -->
    <header class="nav <?php if(isset($home) && $home): ?>nav--transparent<?php endif; ?>">

      <div class="nav__holder <?php if(!isset($home)): ?>nav__border<?php endif; ?>" id="sticky-nav">
        <div class="container">
          <div class="flex-parent">

            <div class="nav__header clearfix">
              <!-- Logo -->
              <div class="logo-wrap">
                <a href="/" class="logo__link">
                  <img class="logo logo--dark" src="/img/logo_dark.png" alt="logo">
                  <?php if(isset($home) && $home): ?>
                    <img class="logo logo--light" src="/img/logo_light.png" alt="logo">
                  <?php endif; ?>
                </a>
              </div>

              <button type="button" class="nav__icon-toggle" id="nav__icon-toggle" data-toggle="collapse" data-target="#navbar-collapse">
                <span class="sr-only">Toggle navigation</span>
                <span class="nav__icon-toggle-bar"></span>
                <span class="nav__icon-toggle-bar"></span>
                <span class="nav__icon-toggle-bar"></span>
              </button>
            </div> <!-- end nav-header -->

            <nav id="navbar-collapse" class="nav__wrap collapse navbar-collapse">              
              <ul class="nav__menu nav__menu--inline">

                <li <?php if(isset($home) && $home): ?>class="active"<?php endif; ?>>
                  <a href="/">Home</a>
                </li>
                <li <?php if(isset($features) && $features): ?>class="active"<?php endif; ?>>
                  <a href="/features/">Features</a>
                </li>
                <li <?php if(isset($academy) && $academy): ?>class="active"<?php endif; ?>>
                  <a href="/academy/">Academy</a>
                </li>
                <li class="nav__dropdown">
                  <a href="/#_">Resources</a>
                  <i class="voyager-angle-down nav__dropdown-trigger"></i>
                  <ul class="nav__dropdown-menu dropdown-menu-animated">
                    <li><a href="https://larapack.io" target="_blank">Voyager Hooks</a></li>
                    <li><a href="https://voyager-cheatsheet.ulties.com/" target="_blank">Voyager Cheatsheet</a></li>
                  </ul>
                </li>
                <li>
                  <a href="/docs" target="_blank">Documentation</a>
                </li>        

              </ul> <!-- end menu -->

              <div class="nav__btn-holder">
                <a href="https://github.com/the-control-group/voyager" target="_blank" class="btn btn--sm btn--color rounded"><span><i class="voyager-github-icon" style="margin-right:5px;"></i> View on Github</span></a>
              </div>
            </nav> <!-- end nav-wrap -->         
        
          </div> <!-- end flex-parent -->
        </div> <!-- end container -->

      </div>
    </header> <!-- end navigation -->