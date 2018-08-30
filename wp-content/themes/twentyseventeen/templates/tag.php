<?php
/*
 Template Name: Tag
 */
get_header(); 

$s_tag = '';
if(isset($_GET['title']))
$s_tag = $_GET['title'];
$the_query = new WP_Query( 
    array( 
        'post_type' => array('san_pham','tin_tuc'),
        'tag' => $s_tag ) 
    );
?>
<section id="page-title" class="page-title">
    <div class="container">
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-6">
			<h1>Tags</h1>
            </div>
            <!-- .col-md-6 end -->
            <div class="col-xs-12 col-sm-12 col-md-6">
                <ol class="breadcrumb text-right">
                    <li>
                        <a href="index.html">Home</a>
                    </li>
                    <li class="active">Tags</li>
                </ol>
            </div>
            <!-- .col-md-6 end -->
        </div>
        <!-- .row end -->
    </div>
    <!-- .container end -->
</section>
<section id="shopgrid" class="shop shop-grid">
	<div class="container">
		<div class="row">
			<div class="col-xs-12 col-sm-12 col-md-12">
            <?php if ( $the_query->have_posts() ) : 
                echo '<div class="row show-product">';
                while ( $the_query->have_posts() ) : $the_query->the_post(); 
                get_template_part( 'template-parts/post/content', 'excerpt' );
            ?>
            <?php
    			endwhile;
				wp_reset_postdata();
                echo '</div>'; 
            else : 
                echo '<p>Không tìm thấy kết quả nào</p>';
            endif; 
            ?>
            </div>
		</div>
	</div>
</section>
<?php get_footer(); ?>