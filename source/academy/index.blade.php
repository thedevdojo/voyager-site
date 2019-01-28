@extends('_layouts.master', ['academy' => true])

@section('body')

	@php

		$video_intro = array(
			'number' => '1',
			'title' => 'Introduction',
			'description' => 'In this video series you are going to learn the ins and outs of using Voyager. In this episode we are going to give you an introduction to Voyager. We’ll show you around the admin interface and how it works. Be sure to checkout this introduction video to learn more about Voyager.',
			'video_360' => 'https://player.vimeo.com/external/234215776.sd.mp4?s=2350d708117a91e45824e4e24af62677226b41da&profile_id=164',
			'video_540' => 'https://player.vimeo.com/external/234215776.sd.mp4?s=2350d708117a91e45824e4e24af62677226b41da&profile_id=165',
			'video_720' => 'https://player.vimeo.com/external/234215776.hd.mp4?s=9c71ef2f1f1ee5431fce9461b61d03b0a08750df&profile_id=174',
			'video_1080' => 'https://player.vimeo.com/external/234215776.hd.mp4?s=9c71ef2f1f1ee5431fce9461b61d03b0a08750df&profile_id=175',
			'cover_image' => '/assets/images/academy/01.jpg',
			'thumbnail' => '/assets/images/academy-thumbs/01.jpg',
			'url' => '/academy',
			'time' => '6 mins 56 sec'
		);

		$video_install = array(
			'number' => '2',
			'title' => 'Installation',
			'description' => 'Installing Voyager is super easy, especially with Laravel 5.5 and the new package auto-discovery we can install Voyager within a few commands. Let’s get right into the video and learn how to install this package.',
			'video_360' => 'https://player.vimeo.com/external/234235115.sd.mp4?s=c1976a58d781e5cd1946e26b7e230ba0af50b4ce&profile_id=164',
			'video_540' => 'https://player.vimeo.com/external/234235115.sd.mp4?s=c1976a58d781e5cd1946e26b7e230ba0af50b4ce&profile_id=165',
			'video_720' => 'https://player.vimeo.com/external/234235115.hd.mp4?s=93077cd00e0dde897f84ff1202cacfcacb58890a&profile_id=174',
			'video_1080' => 'https://player.vimeo.com/external/234235115.hd.mp4?s=93077cd00e0dde897f84ff1202cacfcacb58890a&profile_id=175',
			'cover_image' => '/assets/images/academy/02.jpg',
			'thumbnail' => '/assets/images/academy-thumbs/02.jpg',
			'url' => '/academy/installation',
			'time' => '3 mins 0 sec'
		);

		$video_configs = array(
			'number' => '3',
			'title' => 'Configurations',
			'description' => 'Voyager has a ton of configurations for you to make it your own. In this video we’re going to give you a brief overview into the configurations options you can change in Voyager. So, without further ado, let’s learn about Voyager Configurations.',
			'video_360' => 'https://player.vimeo.com/external/234239611.sd.mp4?s=5bf7c33fc67d860899e6174a79bd03b2ece2432c&profile_id=164',
			'video_540' => 'https://player.vimeo.com/external/234239611.sd.mp4?s=5bf7c33fc67d860899e6174a79bd03b2ece2432c&profile_id=165',
			'video_720' => 'https://player.vimeo.com/external/234239611.hd.mp4?s=38e2174970106fbd0451101cf9e63bd250dd0879&profile_id=174',
			'video_1080' => 'https://player.vimeo.com/external/234239611.hd.mp4?s=38e2174970106fbd0451101cf9e63bd250dd0879&profile_id=175',
			'cover_image' => '/assets/images/academy/03.jpg',
			'thumbnail' => '/assets/images/academy-thumbs/03.jpg',
			'url' => '/academy/configurations',
			'time' => '4 mins 54 sec'
		);

		$video_routing = array(
			'number' => '4',
			'title' => 'Routing',
			'description' => 'The routing system in Voyager is pretty simple and pretty straight forward. After you install Voyager you will be able to navigate to your site URL/admin and you will be at the Voyager admin login screen. In this video we will talk about how all the routes are generated and used in the Voyager admin.',
			'video_360' => 'https://player.vimeo.com/external/234250898.sd.mp4?s=17388b8ef21aac08cf5181178d91fa1e1460671e&profile_id=164',
			'video_540' => 'https://player.vimeo.com/external/234250898.sd.mp4?s=17388b8ef21aac08cf5181178d91fa1e1460671e&profile_id=165',
			'video_720' => 'https://player.vimeo.com/external/234250898.hd.mp4?s=4a4db02ef076f66201382b8d89f320ec51af2a79&profile_id=174',
			'video_1080' => 'https://player.vimeo.com/external/234250898.hd.mp4?s=4a4db02ef076f66201382b8d89f320ec51af2a79&profile_id=175',
			'cover_image' => '/assets/images/academy/04.jpg',
			'thumbnail' => '/assets/images/academy-thumbs/04.jpg',
			'url' => '/academy/routing',
			'time' => '2 mins 53 sec'
		);

		$video_media = array(
			'number' => '5',
			'title' => 'The Media Manager',
			'description' => 'Voyager has a full fledged built-in Media Manager where you can add files, edit files, and everything else you would typically be able to do in a Media Manager. This means you can upload files or delete files from your Laravel storage directly in Voyager. Let’s learn how all this works.',
			'video_360' => 'https://player.vimeo.com/external/234320652.sd.mp4?s=af416c3b46aa0b1240c99a07eee62bdd5db7ff49&profile_id=164',
			'video_540' => 'https://player.vimeo.com/external/234320652.sd.mp4?s=af416c3b46aa0b1240c99a07eee62bdd5db7ff49&profile_id=165',
			'video_720' => 'https://player.vimeo.com/external/234320652.hd.mp4?s=4fbb9c75736a6263400661772e78a656fedc5a19&profile_id=174',
			'video_1080' => 'https://player.vimeo.com/external/234320652.hd.mp4?s=4fbb9c75736a6263400661772e78a656fedc5a19&profile_id=175',
			'cover_image' => '/assets/images/academy/05.jpg',
			'url' => '/academy/media-manager',
			'time' => '3 mins 43 sec'
		);

		$video_menu = array(
			'number' => '6',
			'title' => 'The Menu Builder',
			'description' => 'Voyager also has an awesome menu builder where you can build menus for your website. You can create new menu items and drag and drop them into location. After you have created your menu you will easily be able to add your menu to the front-end of your website. In this video I’ll be showing you how this works.',
			'video_360' => 'https://player.vimeo.com/external/234268382.sd.mp4?s=21cac7278f3a20de6f058a5c0e355d0fa4b626ed&profile_id=164',
			'video_540' => 'https://player.vimeo.com/external/234268382.sd.mp4?s=21cac7278f3a20de6f058a5c0e355d0fa4b626ed&profile_id=165',
			'video_720' => 'https://player.vimeo.com/external/234268382.hd.mp4?s=de6d116f176140dc9cfbe7988f926ee61fb71364&profile_id=174',
			'video_1080' => 'https://player.vimeo.com/external/234268382.hd.mp4?s=de6d116f176140dc9cfbe7988f926ee61fb71364&profile_id=175',
			'cover_image' => '/assets/images/academy/06.jpg',
			'url' => '/academy/menu-builder',
			'time' => '5 mins 0 sec'
		);

		$video_database = array(
			'number' => '7',
			'title' => 'The Database Manager',
			'description' => 'Using Voyager we can easily manage tables from our database. We can also add new tables and view the database schema. This is great because we can create new tables or edit them directly from Voyager. Let’s learn more about the Database Manager.',
			'video_360' => 'https://player.vimeo.com/external/234323812.sd.mp4?s=e3fff41b02c48127dfb73930b36b555bc23b86c8&profile_id=164',
			'video_540' => 'https://player.vimeo.com/external/234323812.sd.mp4?s=e3fff41b02c48127dfb73930b36b555bc23b86c8&profile_id=165',
			'video_720' => 'https://player.vimeo.com/external/234323812.hd.mp4?s=5ce14be5586cfd1ccb045482cf26cb2ee07cb206&profile_id=174',
			'video_1080' => 'https://player.vimeo.com/external/234323812.hd.mp4?s=5ce14be5586cfd1ccb045482cf26cb2ee07cb206&profile_id=175',
			'cover_image' => '/assets/images/academy/07.jpg',
			'url' => '/academy/database-manager',
			'time' => '2 mins 5 sec'
		);

		$video_bread = array(
			'number' => '8',
			'title' => 'The BREAD Builder',
			'description' => 'The BREAD builder is where a lot of the magic happens. This is where you can add BREAD or CRUD to any of your database tables and then you will easily have Browse, Read, Edit, Add, and Delete functionality for that table. Let’s jump into it and learn more.',
			'video_360' => 'https://player.vimeo.com/external/234332864.sd.mp4?s=afa2c0ae762669e04dabfe0fa2cdceafae996fa2&profile_id=164',
			'video_540' => 'https://player.vimeo.com/external/234332864.sd.mp4?s=afa2c0ae762669e04dabfe0fa2cdceafae996fa2&profile_id=165',
			'video_720' => 'https://player.vimeo.com/external/234332864.hd.mp4?s=f083a3fbf2a089d2a40b4abde46d5b371869f158&profile_id=174',
			'video_1080' => 'https://player.vimeo.com/external/234332864.hd.mp4?s=f083a3fbf2a089d2a40b4abde46d5b371869f158&profile_id=175',
			'cover_image' => '/assets/images/academy/08.jpg',
			'url' => '/academy/bread-builder',
			'time' => '6 mins 49 sec'
		);

		$video_relationships = array(
			'number' => '9',
			'title' => 'Relationships',
			'description' => 'In this video we’ll learn how the Relationship functionality works in Voyager. The relationships are how you tie 2 tables together. For instance, a Post belongs to a Category and a Category has many posts. Let’s jump in and learn about relationships.',
			'video_360' => 'https://player.vimeo.com/external/234350115.sd.mp4?s=1e65edf01df437af4f9b21025f8c17b0851f6c5a&profile_id=164',
			'video_540' => 'https://player.vimeo.com/external/234350115.sd.mp4?s=1e65edf01df437af4f9b21025f8c17b0851f6c5a&profile_id=165',
			'video_720' => 'https://player.vimeo.com/external/234350115.hd.mp4?s=c81f389f629b6cef0a95b9aa480ab0c8b183f9d6&profile_id=174',
			'video_1080' => 'https://player.vimeo.com/external/234350115.hd.mp4?s=c81f389f629b6cef0a95b9aa480ab0c8b183f9d6&profile_id=175',
			'cover_image' => '/assets/images/academy/09.jpg',
			'url' => '/academy/relationships',
			'time' => '3 mins 53 sec'
		);

		$video_settings = array(
			'number' => '10',
			'title' => 'Settings',
			'description' => 'In Voyager you can add any kind of settings you would like to your site. For instance you might want to have an image upload field for a site logo, a text box for the headline of your site, and any other type of setting you dream of. Let’s dive in and learn how the Voyager Settings work.',
			'video_360' => 'https://player.vimeo.com/external/234374387.sd.mp4?s=058f0b8edd078773b659a9fd75c592b418017b30&profile_id=164',
			'video_540' => 'https://player.vimeo.com/external/234374387.sd.mp4?s=058f0b8edd078773b659a9fd75c592b418017b30&profile_id=165',
			'video_720' => 'https://player.vimeo.com/external/234374387.hd.mp4?s=a4f02c884ac87e4ecdbab8e740975c3a8e39e75b&profile_id=174',
			'video_1080' => 'https://player.vimeo.com/external/234374387.hd.mp4?s=a4f02c884ac87e4ecdbab8e740975c3a8e39e75b&profile_id=175',
			'cover_image' => '/assets/images/academy/10.jpg',
			'url' => '/academy/settings',
			'time' => '3 mins 46 sec'
		);

		$video_compass = array(
			'number' => '11',
			'title' => 'Compass',
			'description' => 'New in Voyager 1.0 you will see a new section under the Tools menu called Compass. This section will provide you with many resources you may need while building your app. In this section you can also run artisan commands and view your application logs. In this video we’ll be learning more about the Compass.',
			'video_360' => 'https://player.vimeo.com/external/234375928.sd.mp4?s=621a4074e45cc2ce096ab5ec7d220c6db124252a&profile_id=164',
			'video_540' => 'https://player.vimeo.com/external/234375928.sd.mp4?s=621a4074e45cc2ce096ab5ec7d220c6db124252a&profile_id=165',
			'video_720' => 'https://player.vimeo.com/external/234375928.hd.mp4?s=1b65beb7fa98793867a0a64320d1bec6ffebbd83&profile_id=174',
			'video_1080' => 'https://player.vimeo.com/external/234375928.hd.mp4?s=1b65beb7fa98793867a0a64320d1bec6ffebbd83&profile_id=175',
			'cover_image' => '/assets/images/academy/11.jpg',
			'url' => '/academy/compass',
			'time' => '2 mins 1 sec'
		);

		$video_roles_permissions = array(
			'number' => '12',
			'title' => 'Roles & Permissions',
			'description' => 'In Voyager you will also have User Roles & Permissions available for you to use. You can choose whether a particular role can Browse, Read, Edit, Add, or Delete any content on your site. Let’s get into the video and learn how roles & permissions work.',
			'video_360' => 'https://player.vimeo.com/external/234372287.sd.mp4?s=27a7c097e1efe045fed8558ad63e9aeb166012fe&profile_id=164',
			'video_540' => 'https://player.vimeo.com/external/234372287.sd.mp4?s=27a7c097e1efe045fed8558ad63e9aeb166012fe&profile_id=165',
			'video_720' => 'https://player.vimeo.com/external/234372287.hd.mp4?s=e4001709e597f3e70253e73f9b775e246eddb605&profile_id=174',
			'video_1080' => 'https://player.vimeo.com/external/234372287.hd.mp4?s=e4001709e597f3e70253e73f9b775e246eddb605&profile_id=175',
			'cover_image' => '/assets/images/academy/12.jpg',
			'url' => '/academy/roles-permissions',
			'time' => '5 mins 14 sec'
		);

		$video_analytics = array(
			'number' => '13',
			'title' => 'Dashboard Analytics',
			'description' => 'In your Voyager dashboard under your widgets you may wish to show Analytics based on your site. You can easily do this by implementing a setting and using the Google Analytics API. In this episode I’ll show you how this works.',
			'video_360' => 'https://player.vimeo.com/external/234388655.sd.mp4?s=759854146007ef92d38b000ca36b0d9bfba47a7c&profile_id=164',
			'video_540' => 'https://player.vimeo.com/external/234388655.sd.mp4?s=759854146007ef92d38b000ca36b0d9bfba47a7c&profile_id=165',
			'video_720' => 'https://player.vimeo.com/external/234388655.hd.mp4?s=ab520c8d7c8c1fef7898a26509c2f895043bd76a&profile_id=174',
			'video_1080' => 'https://player.vimeo.com/external/234388655.hd.mp4?s=ab520c8d7c8c1fef7898a26509c2f895043bd76a&profile_id=175',
			'cover_image' => '/assets/images/academy/13.jpg',
			'url' => '/academy/analytics',
			'time' => '1 min 40 sec'
		);

		$video_bread_options = array(
			'number' => '14',
			'title' => 'Advanced Bread Options',
			'description' => 'When you are using the BREAD builder there are some additional options that you can include to add more functionality to each row. In this video we are going to go over some of those additional options. Let’s jump in and check it out.',
			'video_360' => 'https://player.vimeo.com/external/234392665.sd.mp4?s=f0cbd93cc646d007bf568913bf60f0d8d1028ec9&profile_id=164',
			'video_540' => 'https://player.vimeo.com/external/234392665.sd.mp4?s=f0cbd93cc646d007bf568913bf60f0d8d1028ec9&profile_id=165',
			'video_720' => 'https://player.vimeo.com/external/234392665.hd.mp4?s=f8476afe879804cb9f12ca76dc3c85b73f42be25&profile_id=174',
			'video_1080' => 'https://player.vimeo.com/external/234392665.hd.mp4?s=f8476afe879804cb9f12ca76dc3c85b73f42be25&profile_id=175',
			'cover_image' => '/assets/images/academy/14.jpg',
			'url' => '/academy/bread-options',
			'time' => '2 mins 19 sec'
		);

		$video_widgets = array(
			'number' => '15',
			'title' => 'Dashboard Widgets',
			'description' => 'When you install Voyager you will have 3 widgets on your main dashboard which are Users, Posts, and Pages. You can add as many widgets as you would like to your dashboard. In this video we’ll show you how to customize and add your own widget.',
			'video_360' => 'https://player.vimeo.com/external/234404046.sd.mp4?s=26eadbafe8bf5efa13d0cb24d9d0d47d18e7712c&profile_id=164',
			'video_540' => 'https://player.vimeo.com/external/234404046.sd.mp4?s=26eadbafe8bf5efa13d0cb24d9d0d47d18e7712c&profile_id=165',
			'video_720' => 'https://player.vimeo.com/external/234404046.hd.mp4?s=f611c2cbd725e84a4e0419c3f706ba09b8a24d5f&profile_id=174',
			'video_1080' => 'https://player.vimeo.com/external/234404046.hd.mp4?s=f611c2cbd725e84a4e0419c3f706ba09b8a24d5f&profile_id=175',
			'cover_image' => '/assets/images/academy/15.jpg',
			'url' => '/academy/widgets',
			'time' => '4 mins 26 sec'
		);

		$video_custom_menus = array(
			'number' => '16',
			'title' => 'Creating Your own Menus',
			'description' => 'Using the Menu Builder we can use the default unordered list to stylize our menus or we can even create a custom view to show our menu. In this video you will learn how to create a custom menu view.',
			'video_360' => 'https://player.vimeo.com/external/234402010.sd.mp4?s=fec98a040f483411c4b31cff0f8d6690a4a515fb&profile_id=164',
			'video_540' => 'https://player.vimeo.com/external/234402010.sd.mp4?s=fec98a040f483411c4b31cff0f8d6690a4a515fb&profile_id=165',
			'video_720' => 'https://player.vimeo.com/external/234402010.hd.mp4?s=b50783f71a577c7a5cf5a4f673c41b83d5bfa160&profile_id=174',
			'video_1080' => 'https://player.vimeo.com/external/234402010.hd.mp4?s=b50783f71a577c7a5cf5a4f673c41b83d5bfa160&profile_id=175',
			'cover_image' => '/assets/images/academy/16.jpg',
			'url' => '/academy/custom-menus',
			'time' => '2 mins 53 sec'
		);

		$video_views = array(
			'number' => '17',
			'title' => 'Overriding Views',
			'description' => 'There may be times when you wish to override any of the views in your Voyager admin, in this video you will learn how to override any of your BREAD views to add your own customized views.',
			'video_360' => 'https://player.vimeo.com/external/234418369.sd.mp4?s=fe464779cdda90feead6c08f9166f4cb7b4e1c26&profile_id=164',
			'video_540' => 'https://player.vimeo.com/external/234418369.sd.mp4?s=fe464779cdda90feead6c08f9166f4cb7b4e1c26&profile_id=165',
			'video_720' => 'https://player.vimeo.com/external/234418369.hd.mp4?s=26e463dccbedd45d3e87cfc6996cc7076f5b012f&profile_id=174',
			'video_1080' => 'https://player.vimeo.com/external/234418369.hd.mp4?s=26e463dccbedd45d3e87cfc6996cc7076f5b012f&profile_id=175',
			'cover_image' => '/assets/images/academy/17.jpg',
			'url' => '/academy/views',
			'time' => '2 mins 17 sec'
		);

		$video_thanks = array(
			'number' => '18',
			'title' => 'Thanks',
			'description' => 'Hey guys, I just wanted to say thanks for checking out all the academy videos and if you have any more questions or need help be sure to checkout our slack channel and the documentation. Thanks for using Voyager and I’ll talk to you later.',
			'video_360' => 'https://player.vimeo.com/external/234418955.sd.mp4?s=9b1419b046ed15cc3ee277cc3204d59b0ecef55b&profile_id=164',
			'video_540' => 'https://player.vimeo.com/external/234418955.sd.mp4?s=9b1419b046ed15cc3ee277cc3204d59b0ecef55b&profile_id=165',
			'video_720' => 'https://player.vimeo.com/external/234418955.hd.mp4?s=e855590609c043908627d51c69b3b827bd123f2b&profile_id=174',
			'video_1080' => 'https://player.vimeo.com/external/234418955.hd.mp4?s=e855590609c043908627d51c69b3b827bd123f2b&profile_id=175',
			'cover_image' => '/assets/images/academy/18.jpg',
			'url' => '/academy/thanks',
			'time' => '0 mins 31 sec'
		);


		$videos = array(

			'intro'				=> (object) $video_intro,
			'install'			=> (object) $video_install,
			'configs'			=> (object) $video_configs,
			'routing'			=> (object) $video_routing,
			'media'				=> (object) $video_media,
			'menu'				=> (object) $video_menu,
			'database'  		=> (object) $video_database,
			'bread'				=> (object) $video_bread,
			'relationships' 	=> (object) $video_relationships,
			'settings' 			=> (object) $video_settings,
			'compass' 			=> (object) $video_compass,
			'roles_permissions' => (object) $video_roles_permissions,
			'analytics'			=> (object) $video_analytics,
			'bread_options'		=> (object) $video_bread_options,
			'widgets'			=> (object) $video_widgets,
			'custom_menus'		=> (object) $video_custom_menus,
			'views'				=> (object) $video_views,
			'thanks'			=> (object) $video_thanks

		);

		$video = isset($video_page) ? $videos[$video_page] : $videos['intro'];

	@endphp

	    <div class="content-wrapper oh">

	      <!-- Page Title -->
	      <section class="page-title bottom-divider text-center">
	        <div class="container">

	          <div class="page-title__outer">
	            <div class="page-title__inner">
	              <div class="page-title__holder">
	                <h1 class="page-title__title">Voyager Academy<?php if(isset($video->title)){ echo ' - ' . $video->title; } ?></h1>
	                <p class="page-title__subtitle lead">Welcome to the Voyager Academy. A video tutorial section to teach you all the awesomeness that is Voyager <img src="/assets/images/emoji-graduation.png" class="emoji emoji-24" style="top:-4px;"></p>
	                <img src="/assets/images/academy.png" class="academy">
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
	              	@include('_partials.academy-nav', ['video' => $video])
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
	              	@include('_partials.academy-nav', ['video' => $video])

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

@endsection