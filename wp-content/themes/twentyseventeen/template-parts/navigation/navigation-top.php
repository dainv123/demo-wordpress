<?php
/**
 * Displays top navigation
 *
 * @package WordPress
 * @subpackage Twenty_Seventeen
 * @since 1.0
 * @version 1.2
 */

?>
<nav id="primary-menu" class="navbar navbar-fixed-top">
	<div class="container">
		<!-- Brand and toggle get grouped for better mobile display -->
		<div class="navbar-header">
			<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#header-navbar-collapse-1" aria-expanded="false">
				<span class="sr-only">Toggle navigation</span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			</button>
			<a class="logo" href="<?php echo get_home_url(); ?>">
				<img src="<?php echo get_field('logo', 'option')['url'] ?>" alt="<?php echo bloginfo() ?>">
			</a>
		</div>
		<div class="collapse navbar-collapse pull-right" id="header-navbar-collapse-1">
			<?php wp_nav_menu( array(
				'theme_location' => 'top',
				// 'menu' => 'main',
				'container'=> false, 
				'menu_id'=> false, 
				'menu_class'	 => 'nav navbar-nav navbar-left',
				'walker' => new Custom_Menu_Top_Walker()
			)); ?>
			<!-- Mod-->
			<div class="module module-search pull-left">
				<div class="search-icon">
					<i class="fa fa-search"></i>
					<span class="title">search</span>
				</div>
				<div class="search-box">
					<!-- <form class="search-form">
						<div class="input-group">
							<input type="text" class="form-control" placeholder="Type Your Search Words">
							<span class="input-group-btn">
								<button class="btn" type="button">
									<i class="fa fa-search"></i>
								</button>
							</span>
						</div>
					</form> -->
					<?php get_search_form(); ?>
				</div>
			</div>
			<!-- .module-search-->
			<!-- .module-cart -->
			<div class="module module-cart pull-left">
				<div class="cart-icon">
					<i class="fa fa-shopping-cart"></i>
					<span class="title">shop cart</span>
					<span class="cart-label">2</span>
				</div>
				<div class="cart-box">
					<div class="cart-overview">
						<ul class="list-unstyled">
							<li>
								<img class="img-responsive" src="<?php echo get_template_directory_uri(); ?>/assets_tpt/images/shop/thumb/1.jpg" alt="product" />
								<div class="product-meta">
									<h5 class="product-title">Belt Car Engine</h5>
									<p class="product-price">Price: $68.00 </p>
									<p class="product-quantity">Quantity: 2</p>
								</div>
								<a class="cancel" href="#">cancel</a>
							</li>
							<li>
								<img class="img-responsive" src="<?php echo get_template_directory_uri(); ?>/assets_tpt/images/shop/thumb/2.jpg" alt="product" />
								<div class="product-meta">
									<h5 class="product-title">OIL FILTER</h5>
									<p class="product-price">Price: $180.00 </p>
									<p class="product-quantity">Quantity: 1</p>
								</div>
								<a class="cancel" href="#">cancel</a>
							</li>
						</ul>
					</div>
					<div class="cart-total">
						<div class="total-desc">
							<h5>CART SUBTOTAL :</h5>
						</div>
						<div class="total-price">
							<h5>$316.00</h5>
						</div>
					</div>
					<div class="clearfix">
					</div>
					<div class="cart-control">
						<a class="btn btn-primary btn-block" href="#">view cart</a>
						<a class="btn btn-secondary btn-block" href="#">check out</a>
					</div>
				</div>
			</div>
			<!-- .module-cart end -->

		</div>
		<!-- /.navbar-collapse -->
	</div>
	<!-- /.container-fluid -->
</nav>


