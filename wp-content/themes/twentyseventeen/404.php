<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package WordPress
 * @subpackage Twenty_Seventeen
 * @since 1.0
 * @version 1.0
 */

get_header(); ?>
<section id="page-title" class="page-title">
	<div class="container">
		<div class="row">
			<div class="col-xs-12 col-sm-12 col-md-6">
				<h1>Error Page</h1>
			</div>
			<!-- .col-md-6 end -->
			<div class="col-xs-12 col-sm-12 col-md-6">
				<ol class="breadcrumb text-right">
					<li>
						<a href="index.html">Home</a>
					</li>
					<li class="active">404</li>
				</ol>
			</div>
			<!-- .col-md-6 end -->
		</div>
		<!-- .row end -->
	</div>
	<!-- .container end -->
</section>
<!-- #page-title end -->

<!--404
=============================================-->
<section id="404" class="page-404 text-center">
	<div class="container">
		<div class="row">
			<div class="col-xs-12 col-sm-12 col-md-6 col-md-offset-3">
				<h3>404</h3>
			</div>
			<div class="col-xs-12 col-sm-12 col-md-8 col-md-offset-2">
				<p>Car Shop is a business theme. Perfectly suited for Auto Mechanic, Car Repair Shops, Car Wash, Garages, Automobile Mechanicals, Mechanic Workshops, Auto Painting, Auto Centres.</p>
				<a class="btn btn-primary" href="/">Back To Homepage</a>
			</div>
		</div>
		<!-- .row end -->
	</div>
	<!-- .cotainer end -->
</section>
<?php get_footer();
