<?php
/**
 * Template part for displaying audio posts
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress
 * @subpackage Twenty_Seventeen
 * @since 1.0
 * @version 1.2
 */

?>
<section id="page-title" class="page-title">
	<div class="container">
		<div class="row">
			<div class="col-xs-12 col-sm-12 col-md-6">
				<h1>Shop Single Product</h1>
			</div>
			<!-- .col-md-6 end -->
			<div class="col-xs-12 col-sm-12 col-md-6">
				<ol class="breadcrumb text-right">
					<li>
						<a href="index.html">Home</a>
					</li>
					<li class="active">shop</li>
				</ol>
			</div>
			<!-- .col-md-6 end -->
		</div>
		<!-- .row end -->
	</div>
	<!-- .container end -->
</section>
<!-- #page-title end -->

<!-- Shop Single right sidebar
============================================= -->
<section id="shopgrid" class="shop shop-single">
	<div class="container shop-content">
		<div class="row">
			<div class="col-xs-12 col-sm-12 col-md-5">
				<div class="prodcut-images">
					<div class="product-img-slider">
						<?php 
						if(get_field('danh_sach_anh_lien_quan'))
						foreach ( get_field('danh_sach_anh_lien_quan') as $name => $value ) { ?>
							<img src="<?php echo $value['anh']['url']?>" alt="<?php echo $value['tieu_de_anh']?>">
						<?php } ?>
					</div>
					<div class="product-img-nav">
						<?php
						if(get_field('danh_sach_anh_lien_quan'))
						 foreach ( get_field('danh_sach_anh_lien_quan') as $name => $value ) { ?>
							<img src="<?php echo $value['anh']['url']?>" alt="<?php echo $value['tieu_de_anh']?>">
						<?php } ?>
					</div>
				</div>
			</div>
			<div class="col-xs-12 col-sm-12 col-md-7">
				<div class="product-title text-center-xs">
					<h3><?php the_title() ?></h3>
				</div>
				<!-- .product-title end -->
				<div class="product-meta mb-30">
					<div class="product-price pull-left pull-none-xs">
						<p><span class="discount"><?php echo get_field('thong_tin_san_pham')[0]['gia_cu'] ?></span><?php echo get_field('thong_tin_san_pham')[0]['gia_moi'] ?></p>
					</div>
					<!-- .product-price end -->
					<div class="product-review text-right text-center-xs">
						<span class="product-rating">
							<!-- <i class="fa fa-star"></i>
							<i class="fa fa-star"></i>
							<i class="fa fa-star"></i>
							<i class="fa fa-star-half-o"></i>
							<i class="fa fa-star-o"></i> -->
						</span>
					</div>
					<!--- .product-review end -->
				</div>
				<!-- .product-img end -->
				
				<div class="product-desc text-center-xs">
					<p class="mb-0"><?php echo get_field('thong_tin_san_pham')[0]['mieu_ta'] ?></p>
				</div>
				<!-- .product-desc end -->
				
				<hr class="mt-30 mb-30">
				<div class="product-details text-center-xs">
					<h5>Những chi tiết khác :</h5>
					<ul class="list-unstyled">
						<li>Sản phẩm : <span>
						<?php 
						foreach(get_the_category($post->ID) as $name => $value ) {
							if($name !== 0) echo ', '.$value->name;
							else
							echo $value->name;
						} ?>
						</span></li>
						<li>Trình trạng : <span><?php echo get_field('thong_tin_san_pham')[0]['trang_thai'] ?></span></li>
						<li>Thương hiệu : <span><?php echo get_field('thong_tin_san_pham')[0]['thuong_hieu'] ?></span></li>
						<li>Đánh giá : <span class="product-rating"><?php echo get_field('thong_tin_san_pham')[0]['danh_gia'] ?></span>
						</li>
						<a class="btn btn-primary bordered" href="<?php echo get_field('thong_tin_san_pham')[0]['lien_ket'] ?>">Mua ngay</a>
					</ul>
				</div>
				<!-- .product-action end -->
				<hr class="mt-30 mb-30">
				<div class="product-share  text-center-xs">
					<h5 class="share-title">Chia sẽ: </h5>
					<div class="social-share" data-initialized="true">
						<a href="#" class="social-share-icon share-facebook icon-facebook"></a>
						<a href="#" class="social-share-icon share-twitter icon-twitter"></a>
						<a href="#" class="social-share-icon share-google-plus icon-google"></a>	
						<a href="#" class="social-share-icon share-linkedin icon-linkedin"></a>
					</div>
				</div>
				<!-- .product-share end -->
			</div>
		</div>
		<!-- .row end -->
		<div class="row">
			<div class="col-xs-12 col-sm-12 col-md-12">
				<div class="product-tabs">
					<!-- Nav tabs -->
					<ul class="nav nav-tabs" role="tablist">
						<li role="presentation" class="active">
							<a href="#description" aria-controls="description" role="tab" data-toggle="tab">Giới thiệu</a>
						</li>
						<li role="presentation">
							<a href="#details" aria-controls="details" role="tab" data-toggle="tab">chi tiết</a>
						</li>
						<!-- <li role="presentation">
							<a href="#reviews" aria-controls="reviews" role="tab" data-toggle="tab">reviews(2)</a>
						</li> -->
					</ul>
					
					<!-- Tab panes -->
					<div class="tab-content">
						<div role="tabpanel" class="tab-pane active" id="description">
						<?php the_content() ?>
						</div>
						<!-- #description end -->
						<div role="tabpanel" class="tab-pane" id="details">
							<h5>Technical Details</h5>
							<table class="table table-striped">
								<tbody>
									<?php foreach(get_field('thong_tin_san_pham')[0]['thong_so_ki_thuat'] as $name => $value )  { ?>
										<tr>
											<td><?php echo $value['ten'] ?></td>
											<td><?php echo $value['so_lieu'] ?></td>
										</tr>
									<?php } ?>
								</tbody>
							</table>
						</div>
					</div>
					<!-- #tab-content end -->
				</div>
				<!-- .product-tabs end -->
			</div>
		</div>
		<!-- .row end -->
		<div class="row">
			<div class="col-xs-12 col-sm-12 col-md-12 mt-30">
				<div class="widget-related-product">
					<div class="widget-title">
						<h4>Sản phẩm liên quan</h4>
					</div>
					<div class="widget-content">
						<div class="row">
							<?php 
								$the_query = new WP_Query( array(
									//  'post_type' => 'tin_tuc',
									'post_type' => 'san_pham',
									'post__not_in' => array($post->ID),
									'posts_per_page' => 4,
								)); 
								if ( $the_query->have_posts() ) : 
									while ( $the_query->have_posts() ) : $the_query->the_post(); 
										echo '<div class="col-xs-12 col-sm-6 col-md-3 product">
											<div class="product-img">
											<img src="'.wp_get_attachment_url(get_post_thumbnail_id($post->ID)).'" alt="'.$post->post_title.'"/>
												<div class="product-hover">
													<div class="product-action">
														<a class="btn btn-primary" href="'.get_field('thong_tin_san_pham', $post->ID)[0]['lien_ket'].'">Mua ngay</a>
														<a class="btn btn-primary" href="'.get_post_permalink($post->ID).'">Xem chi tiết</a>
													</div>
												</div>
											</div>
											<div class="product-bio">
												<div class="prodcut-cat">
													<a href="javascript:void(0)">'.get_field('thong_tin_san_pham', $post->ID)[0]['thuong_hieu'].'</a>
												</div>
												<div class="prodcut-title">
													<h3>
														<a href="'.get_post_permalink($post->ID).'">'.$post->post_title.'</a>
													</h3>
												</div>
												<div class="product-price">
													<span>'.get_field('thong_tin_san_pham', $post->ID)[0]['gia_moi'].'</span>
												</div>
											</div>
										</div>';
									endwhile;
									wp_reset_postdata();
								else : 
									echo '<p>No News</p>';
								endif; 
							?>
							<!-- .product end -->
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- .product-related end -->
	</div>
	<!-- .container end -->
</section>