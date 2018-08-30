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
	<div class="widget widget-recent-products">
		<div class="widget-title">
			<h5>Sản phẩm mới</h5>
		</div>
		<div class="widget-content">
			<!-- Product #1 -->
			<?php 
				$the_query = new WP_Query( array(
					//  'post_type' => 'tin_tuc',
					'post_type' => 'san_pham',
					'post__not_in' => array($post->ID),
					'posts_per_page' => 3,
				)); 
					if ( $the_query->have_posts() ) : 
					while ( $the_query->have_posts() ) : $the_query->the_post(); 
			?>
			<div class="product">
				<img src="<?php echo wp_get_attachment_url(get_post_thumbnail_id($post->ID)) ?>" alt="<?php echo $post->post_title ?>" />
				<div class="product-desc">
					<div class="product-title">
						<a href="<?php echo get_post_permalink($post->ID) ?>"><?php echo $post->post_title ?></a>
					</div>
					<div class="product-meta">
						<span class="color-theme"><?php echo get_field('thong_tin_san_pham', $post->ID)[0]['gia_moi'] ?></span>
					</div>
				</div>
			</div>
			<?php
				endwhile;
					wp_reset_postdata();
				else : 
					echo '<p>Không tìm thấy sản phẩm nào</p>';
				endif; 
			?>
		</div>
		<!-- .widget-content end -->
	</div>
	<div class="widget widget-recent-products">
		<div class="widget-title">
			<h5>Sản phẩm bán chạy</h5>
		</div>
		<div class="widget-content">
		<?php 
			$args = array(
				'post_type' => 'san_pham',
				'tag' => 'ban-chay',
				'posts_per_page' => 3,
				'orderby' => 'id',
				'order' => 'ASC'
			);

			$the_query = new WP_Query( $args );
			if ( $the_query->have_posts() ) {
				echo '<ul>';
				while ( $the_query->have_posts() ) {
					$the_query->the_post();
					echo '<div class="product">
					<img src="'.wp_get_attachment_url(get_post_thumbnail_id($post->ID)).'" alt="'.$post->post_title.'"/>
						<div class="product-desc">
							<div class="product-title">
							<a href="'.get_post_permalink($post->ID).'">'.$post->post_title.'</a>
							</div>
							<div class="product-meta">
								<span class="color-theme">'.get_field('thong_tin_san_pham', $post->ID)[0]['gia_moi'].'</span>
							</div>
						</div>
					</div>';
				}
				echo '</ul>';
			} else {
				echo '<p>Không tìm thấy sản phẩm nào</p>';
			}
			wp_reset_postdata();
		?>
		</div>
		<!-- .widget-content end -->
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
	<!-- .widget-tags end -->
</div>