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
				<h1><?php echo get_post_type_object('tin_tuc')->label ?></h1>
			</div>
			<!-- .col-md-6 end -->
			<div class="col-xs-12 col-sm-12 col-md-6">
				<ol class="breadcrumb text-right">
					<!-- <li>
						<a href="index.html">Home</a>
					</li>
					<li class="active">blog</li> -->
				</ol>
			</div>
			<!-- .col-md-6 end -->
		</div>
		<!-- .row end -->
	</div>
</section>
<section id="blog" class="blog blog-single">
	<div class="container">
		<div class="row">
			<div class="col-xs-12 col-sm-12 col-md-9">
				<div class="entry">
					<div class="entry-img">
						<a href="#">
						<img src="<?php echo wp_get_attachment_url( get_post_thumbnail_id($post->ID) );?>" alt="<?php the_title(); ?>">
						</a>
					</div>
					<!-- .entry-img end -->
					<div class="entry-content">
						<div class="entry-format">
							<i class="fa fa-image"></i>
						</div>
						<div class="entry-title">
							<h3>
								<a href="javascript:void(0)"><?php the_title() ?></a>
							</h3>
						</div>
						<!-- .entry-title end -->
						<ul class="entry-meta list-inline clearfix">
							<li class="entry-date">On: <span><?php echo $post->post_date ?></span></li>
							<li class="entry-author">By:
								<a href="#"><?php echo get_the_author($post->id); ?></a>
							</li>
							<li class="entry-num-comments">Comments:
								<a href="#"><?php echo $post->comment_count ?></a>
							</li>
							<li class="entry-views">View : <?php setPostViews(get_the_ID()); echo getPostViews(get_the_ID()); ?></li>
						</ul>
						<!-- .entry-meta end -->
						<div class="entry-snippet">
							<?php the_content() ?>
						</div>
						<!-- .entry-snippet end -->
						<!-- .entry-content end -->
						<div class="entry-tags">
							<div class="widget widget-tags">
								<h6>tags</h6>
								<?php 
									$tags = wp_get_post_tags($post->ID);
									foreach ( $tags as $tag ) {
										$tag_link = get_tag_link( $tag->term_id );
										echo "<a href='{$tag_link}'>{$tag->name}</a>";
									}
								?>
							</div>
							<!-- .widget-tags end -->
						</div>
						<!-- .entry-tags end -->
						<div class="entry-share">
							<div class="share-title pull-left pull-none-xs">
								<h6>share this article: </h6>
							</div>
							<div class="share-links text-right">
								<div class="social-share" data-initialized="true">
									<a href="#" class="social-share-icon share-facebook icon-facebook"></a>
									<a href="#" class="social-share-icon share-twitter icon-twitter"></a>
									<a href="#" class="social-share-icon share-google-plus icon-google"></a>	
									<a href="#" class="social-share-icon share-linkedin icon-linkedin"></a>
								</div>
							</div>
						</div>
						<!-- .entry-share end -->
					</div>
					<!-- .entry-content end -->
				</div>
				<!-- .entry end -->
				<div class="entry-author-box">
					<div class="entry-author-img">
						<img src="<?php echo esc_url( get_avatar_url( $post->post_author ) ); ?>" alt="<?php  the_author_meta( 'nickname', $post->post_author ) ?>">
					</div>
					<!-- .entry-author-img end -->
					<div class="entry-author-bio">
						<h6><?php  the_author_meta( 'nickname', $post->post_author ) ?></h6>
						<p><?php  the_author_meta( 'description', $post->post_author ) ?></p>
					</div>
					<!-- .entry-author-img end -->
				</div>
			</div>
			<div class="col-xs-12 col-sm-12 col-md-3 sidebar">
				<div class="widget widget-categories">
					<div class="widget-title">
						<h5>Chuyên mục sản phẩm</h5>
					</div>
					<div class="widget-content">
						<ul class="list-unstyled">
							<?php  
								$args = array(
									'hide_empty' => false,
									'parent' => false,
								);

								$terms = get_terms( 'category', $args);
								// var_dump($terms);
								foreach ( $terms as $term ) {
									echo '<li>
										<a href="#"><i class="fa fa-angle-double-right"></i>'.$term->name.'</a>
									</li>';
								}
							?>
						</ul>
					</div>
				</div>
				<div class="widget widget-recent">
					<div class="widget-title">
						<h5>Tin tức mới nhất</h5>
					</div>
					<div class="widget-content">
					<?php 
						$the_query = new WP_Query( array(
							//  'post_type' => 'tin_tuc',
							'post_type' => 'tin_tuc',
							'post__not_in' => array($post->ID),
							'posts_per_page' => 3,
						)); 
						 if ( $the_query->have_posts() ) : 
							while ( $the_query->have_posts() ) : $the_query->the_post(); 
								echo '<div class="entry">
									<img src="'.wp_get_attachment_url(get_post_thumbnail_id($post->ID)).'" alt="'.$post->post_title.'"/>
									<div class="entry-desc">
										<div class="entry-title">
											<a href="'.get_post_permalink($post->ID).'">'.$post->post_title.'</a>
										</div>
										<div class="entry-meta">
											<div>on: <span>'.$post->post_date.'</span></div>
											<div>by:
												<a href="javascript:void(0)"> '.get_the_author($post->id).'</a>
											</div>
										</div>
									</div>
								</div>';
							endwhile;
							wp_reset_postdata();
						else : 
							echo '<p>Không tìm thấy bài viết nào</p>';
						endif; 
					?>
					</div>
				</div>
				<div class="widget widget-tags">
					<div class="widget-title">
						<h5>tag clouds</h5>
					</div>
					<div class="widget-content">
						<?php 
							$tags = get_tags();
							foreach ( $tags as $tag ) {
								$tag_link = get_tag_link( $tag->term_id );
								echo "<a href='/tag/?title={$tag->name}'>{$tag->name}</a>";
							}
						?>
					</div>
				</div>
				<div class="widget widget-flickr">
					<div class="widget-title">
						<h5>Ảnh liên quan</h5>
					</div>
					<div class="widget-content">
						<div id="flickr-feed">
							<?php 
							if(get_field('danh_sach_anh_lien_quan'))
							foreach ( get_field('danh_sach_anh_lien_quan') as $name => $value ) { ?>
								<a class="flickr-item" href="<?php echo $value['anh']['url']?>" title="<?php echo $value['tieu_de_anh']?>"><img src="<?php echo $value['anh']['url']?>" alt="<?php echo $value['tieu_de_anh']?>"></a>
							<?php } ?>
						</div>
						<!-- <a class="flickr-more" href="#">View Stream On Flickr</a> -->
					</div>
				</div>
			</div>
		</div>
	</div>
</section>