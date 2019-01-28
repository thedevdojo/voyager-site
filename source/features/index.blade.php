@extends('_layouts.master', ['features' => true])

@section('body')
	<div class="content-wrapper oh">

		  <!-- Page Title -->
		  <section class="page-title bottom-divider text-center">
		    <div class="container">

		      <div class="page-title__outer">
		        <div class="page-title__inner">
		          <div class="page-title__holder">
		            <h1 class="page-title__title">Voyager Features</h1>
		            <p class="page-title__subtitle lead">Here are some of the awesome Voyager features you'll enjoy <img src="/assets/images/emoji-victory.png" class="emoji emoji-24"></p>
		          </div>
		        </div>
		      </div>

		    </div>
		  </section> <!-- end page title -->

		  <!-- Features -->
		  <section class="section-wrap pt-70 pb-130 bg-light features">
		    <div class="container">
		      <div class="row row-60 items-grid">

		        <div class="col-md-4 col-xs-6 col-xxs-12">
		          <a href="#_" class="box-shadow">
		            <div class="feature-1__icon-holder feature-1__icon-holder--blue text-center feature-img" style="background-image:url('/assets/images/features-media-manager.png')">

		            </div>
		            <div class="feature-1__base">
		              <h3 class="feature-1__title">Media Manager</h3>
		              <p class="feature-1__paragraph">Voyager has a fully functional media manager which allows you to view/edit/delete files from your storage. All files in your application will be easily accessible and will live in a single place. Compatible with local or s3 file storage.</p>
		            </div>
		          </a>
		        </div> <!-- end col -->

		        <div class="col-md-4 col-xs-6 col-xxs-12">
		          <a href="#_" class="box-shadow">
		            <div class="feature-1__icon-holder feature-1__icon-holder--turquoise text-center feature-img" style="background-image:url('/assets/images/features-menu-builder.png')">
		              <i class="ui-iphone feature-1__icon"></i>
		            </div>
		            <div class="feature-1__base">
		              <h3 class="feature-1__title">Menu Builder</h3>
		              <p class="feature-1__paragraph">You can easily build menus for your site. In fact the menu in the voyager admin is built using the menu builder. You can add/edit/delete menu items from any menu. Then it's so easy to show your menu on the front-end.</p>
		            </div>
		          </a>
		        </div> <!-- end col -->

		        <div class="col-md-4 col-xs-6 col-xxs-12">
		          <a href="#_" class="box-shadow">
		            <div class="feature-1__icon-holder feature-1__icon-holder--orange text-center feature-img" style="background-image:url('/assets/images/features-database-builder.png')">
		              <i class="ui-gauge feature-1__icon"></i>
		            </div>
		            <div class="feature-1__base">
		              <h3 class="feature-1__title">Database Manager</h3>
		              <p class="feature-1__paragraph">That's right! You can actually manipulate your database directly from Voyager. You can add, edit, or delete tables. When creating a new table you can also specify if you would like voyager to create your Model for you. How cool is that.</p>
		            </div>
		          </a>
		        </div> <!-- end col -->

		        <div class="col-md-4 col-xs-6 col-xxs-12">
		          <a href="#_" class="box-shadow">
		            <div class="feature-1__icon-holder feature-1__icon-holder--violet text-center feature-img" style="background-image:url('/assets/images/features-bread-builder.png')">
		              <i class="ui-location-user feature-1__icon"></i>
		            </div>
		            <div class="feature-1__base">
		              <h3 class="feature-1__title">BREAD/CRUD Builder</h3>
		              <p class="feature-1__paragraph">Similar to CRUD, Voyager has a system called BREAD which is Browse, Read, Edit, Add, and Delete. You can easily add any BREAD views and functionality to any table in your database. Have a products table, easily add the Browse Read Edit Add & Delete functionality in seconds!</p>
		            </div>
		          </a>
		        </div> <!-- end col -->

		        <div class="col-md-4 col-xs-6 col-xxs-12">
		          <a href="#_" class="box-shadow">
		            <div class="feature-1__icon-holder feature-1__icon-holder--green text-center feature-img" style="background-image:url('/assets/images/features-settings.png')">
		              <i class="ui-paint-roller feature-1__icon"></i>
		            </div>
		            <div class="feature-1__base">
		              <h3 class="feature-1__title">Settings</h3>
		              <p class="feature-1__paragraph">Using the Voyager settings you can easily create any number of settings to be used for your site. This can be anything from site logos, colors, or any other setting you can dream of. Settings can be text inputs, image uploads, dropdowns, and many other input types.</p>
		            </div>
		          </a>
		        </div> <!-- end col -->

		        <div class="col-md-4 col-xs-6 col-xxs-12">
		          <a href="#_" class="box-shadow">
		            <div class="feature-1__icon-holder feature-1__icon-holder--pink text-center feature-img" style="background-image:url('/assets/images/features-compass.png')">
		              <i class="ui-book feature-1__icon"></i>
		            </div>
		            <div class="feature-1__base">
		              <h3 class="feature-1__title">Compass</h3>
		              <p class="feature-1__paragraph">The new compass section will help you with Voyager resources. This section also has a tab where you can execute Laravel commands and another tab to view your application log files! Yep, you can view your log files directly in Voyager! Only one word to describe how cool that is. Kickass <img src="/assets/images/emoji-rocker.png" class="emoji emoji-16"></p>
		            </div>
		          </a>
		        </div> <!-- end col -->


		      </div>
		    </div>
		    <div class="btn-container">
		      <a class="btn btn--lg btn--color rounded btn-action" href="/docs">View all features in the Documentation</a>
		    </div>
		  </section> <!-- end features-section -->


		</div> <!-- end content wrapper -->
	</main> <!-- end main wrapper -->
@endsection