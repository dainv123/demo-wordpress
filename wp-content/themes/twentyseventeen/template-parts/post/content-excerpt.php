<?php
/**
 * Template part for displaying posts with excerpts
 *
 * Used in Search Results and for Recent Posts in Front Page panels.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress
 * @subpackage Twenty_Seventeen
 * @since 1.0
 * @version 1.2
 */

?>
<div class="col-xs-12 col-sm-6 col-md-3 product">
	<div class="product-img">
		<img src="<?php echo wp_get_attachment_url(get_post_thumbnail_id($post->ID)) ?>" alt="<?php the_title() ?>"/>
		<div class="product-hover">
			<div class="product-action">
			<?php if($post->post_type === 'san_pham'){ ?>
			<a class="btn btn-primary" href="<?php echo get_field('thong_tin_san_pham', $post->ID)[0]['lien_ket'] ?>">Mua ngay</a>
			<?php } ?>
			<a class="btn btn-primary" href="<?php echo get_post_permalink($post->ID) ?>">Xem chi tiết</a>
			</div>
		</div>
	</div>
	<!-- .product-img end -->
	<div class="product-bio">
		<div class="prodcut-cat">
			<a href="javascript:void(0)"><?php echo get_field('thong_tin_san_pham', $post->ID)[0]['thuong_hieu'] ?></a>
		</div>
		<!-- .product-cat end -->
		<div class="prodcut-title">
			<h3>
				<a href="<?php echo get_post_permalink($post->ID) ?>"><?php the_title() ?></a>
			</h3>
		</div>
		<!-- .product-title end -->
		<div class="product-price">
			<span><?php echo get_field('thong_tin_san_pham', $post->ID)[0]['gia_moi'] ?></span>
		</div>
		<!-- .product-price end -->

	</div>
	<!-- .product-bio end -->
</div>