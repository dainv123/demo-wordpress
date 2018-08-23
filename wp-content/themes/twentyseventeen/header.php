<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage Twenty_Seventeen
 * @since 1.0
 * @version 1.0
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js no-svg">
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">
<link href="<?php echo get_template_directory_uri(); ?>/assets_tpt/images/favicon/favicon.ico" rel="icon">
<link href='http://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i%7CRaleway:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i%7CUbuntu:300,300i,400,400i,500,500i,700,700i'
	rel='stylesheet' type='text/css'>
<link href="<?php echo get_template_directory_uri(); ?>/assets_tpt/css/external.css" rel="stylesheet">
<link href="<?php echo get_template_directory_uri(); ?>/assets_tpt/css/bootstrap.min.css" rel="stylesheet">
<link href="<?php echo get_template_directory_uri(); ?>/assets_tpt/css/style.css" rel="stylesheet">
<link href="<?php echo get_template_directory_uri(); ?>/assets_tpt/css/custom.css" rel="stylesheet">
<title>Autoshop | E-commerce Html5 Template</title>

</head>

<body <?php body_class(); ?>>
<div  id="wrapper" class="wrapper clearfix">
	<header id="navbar-spy" class="header header-1">
		<?php get_template_part( 'template-parts/header/header'); ?>
		<?php if ( has_nav_menu( 'top' ) ) : ?>
			<div class="navigation-top">
				<div class="wrap">
					<?php get_template_part( 'template-parts/navigation/navigation', 'top' ); ?>
				</div>
			</div>
		<?php endif; ?>
	</header>
