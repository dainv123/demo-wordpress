<?php
/*
 Template Name: Sản phẩm
 */
?>
<?php get_header(); ?>
<section id="page-title" class="page-title">
    <div class="container">
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-6">
                <h1>shop grid right sidebar</h1>
            </div>
            <!-- .col-md-6 end -->
            <div class="col-xs-12 col-sm-12 col-md-6">
                <ol class="breadcrumb text-right">
                    <li>
                        <a href="index.html">Home</a>
                    </li>
                    <li class="active">grid</li>
                </ol>
            </div>
            <!-- .col-md-6 end -->
        </div>
        <!-- .row end -->
    </div>
    <!-- .container end -->
</section>
<!-- #page-title end -->
<section id="shopgrid" class="shop shop-grid">
    <div class="container">
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-9">
                <div class="row">
                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="product-num pull-left pull-none-xs">
                            <h3>Showing 1 : 16 of
                                <span class="color-theme">245</span> product</h3>
                        </div>
                        <!-- .product-num end -->
                        <div class="product-options pull-right text-right pull-none-xs">
                            <i class="fa fa-angle-down"></i>
                            <select>
                                <option selected="" value="Default">Default Sorting</option>
                                <option value="Larger">Newest Items</option>
                                <option value="Larger">oldest Items</option>
                                <option value="Larger">Hot Items</option>
                                <option value="Small">Highest Price</option>
                                <option value="Medium">Lowest Price</option>
                            </select>
                        </div>
                        <!-- .product-options end -->
                    </div>
                    <!-- .col-md-12 end -->
                </div>
                <?php pagination_ajax() ?>
            </div>
            <!-- .col-md-9 end -->
            <?php get_sidebar(); ?>
            <!-- .col-md-3 end -->
        </div>
        <!-- .row end -->
    </div>
    <!-- .container end -->
</section>
<?php get_footer(); ?>