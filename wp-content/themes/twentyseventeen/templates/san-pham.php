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
                        <?php
                            $search = array($_SERVER['QUERY_STRING'], '?');
                            $replace = array('', '');
                            $currentUrl = str_replace($search,$replace, $_SERVER['REQUEST_URI']);
                            // var_dump($_GET);
                            // echo $_GET['order']
                        ?>
                            <i class="fa fa-angle-down"></i>
                            <select onchange="window.location = $(this).val();">
                                <option value="<?= $currentUrl; ?>">Sắp xếp</option>
                                <option value="<?= $currentUrl; ?>?orderby=title&order=asc">Tiêu đề A - Z</option>
                                <option value="<?= $currentUrl; ?>?orderby=title&order=desc">Tiêu đề Z - A</option>
                            </select>
                        </div>
                        <!-- .product-options end -->
                    </div>
                    <!-- .col-md-12 end -->
                </div>
                <?php pagination_san_pham(); ?>
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