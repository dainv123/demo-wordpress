<?php
/**
 * Displays header media
 *
 * @package WordPress
 * @subpackage Twenty_Seventeen
 * @since 1.0
 * @version 1.0
 */

?>
<div class="top-bar">
	<div class="container">
		<div class="row">
			<div class="col-xs-12 col-sm-6 col-md-5">
				<ul class="list-inline top-contact">
					<li>
						<span>Phone :</span> <?php the_field('so_dien_thoai_ban', 'option'); ?></li>
					<li>
						<span>Email :</span> <?php the_field('email', 'option'); ?></li>
				</ul>
			</div>
			<div class="col-xs-12 col-sm-6 col-md-7">
				<ul class="list-inline pull-right top-links">
					<li>
						<a href="/admin">Login</a>
					</li>
					<li class="dropdown">
						<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">T.Việt
							<i class="fa fa-angle-down"></i>
						</a>
						<ul class="dropdown-menu">
							<li>
								<a href="#">T.Việt</a>
							</li>
							<li>
								<a href="#">English</a>
							</li>
						</ul>
					</li>
				</ul>
			</div>
		</div>
		<!-- .row end -->
	</div>
	<!-- .container end -->
</div>
<!-- .top-bar end -->
