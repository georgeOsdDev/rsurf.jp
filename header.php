<?php
/**
 * The Header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="main">
 *
 * @package WordPress
 * @subpackage Twenty_Twelve
 * @since Twenty Twelve 1.0
 */
?><!DOCTYPE html>
<!--[if IE 7]>
<html class="ie ie7" <?php language_attributes(); ?>>
<![endif]-->
<!--[if IE 8]>
<html class="ie ie8" <?php language_attributes(); ?>>
<![endif]-->
<!--[if !(IE 7) | !(IE 8)  ]><!-->
<html <?php language_attributes(); ?>>
<!--<![endif]-->
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>" />
<meta name="viewport" content="width=device-width" />
<title><?php wp_title( '|', true, 'right' ); ?></title>
<link rel="profile" href="http://gmpg.org/xfn/11" />
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
<link href='http://fonts.googleapis.com/css?family=Amatic+SC:400,700' rel='stylesheet' type='text/css'>
<?php // Loads HTML5 JavaScript file to add support for HTML5 elements in older IE versions. ?>
<!--[if lt IE 9]>
<script src="<?php echo get_template_directory_uri(); ?>/js/html5.js" type="text/javascript"></script>
<![endif]-->
<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="hfeed site">
	<header id="masthead" class="site-header" role="banner">
		<!--hgroup>
			<?php if ( is_home() || is_front_page() ) { ?>
				<h1 class="site-title"><?php bloginfo( 'name' ); ?></h1>
			<?php } else { ?>
				<h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
			<?php } ?>
			<?php if ( get_bloginfo( 'description' ) != '' ) { ?>
				<h2 class="site-description"><?php bloginfo( 'description' ); ?></h2>
			<?php } ?>
		</hgroup-->

 		<?php $header_image = get_header_image();
		if ( ! empty( $header_image ) ) : ?>
			<?php if ( is_home() || is_front_page() ) { ?>
				<img src="<?php echo esc_url( $header_image ); ?>" class="header-image" width="<?php echo get_custom_header()->width; ?>" height="<?php echo get_custom_header()->height; ?>" alt="" />
			<?php } else { ?>
				<a href="<?php echo esc_url( home_url( '/' ) ); ?>"><img src="<?php echo esc_url( $header_image ); ?>" class="header-image" width="<?php echo get_custom_header()->width; ?>" height="<?php echo get_custom_header()->height; ?>" alt="" /></a>
			<?php } ?>
		<?php endif; ?>

		<a href="/" title=""><img src="/wp-content/themes/rsurf/image/logo.png" alt="rsurf" height=120></a>
		<nav id="site-navigation" class="main-navigation" role="navigation">
			<h3 class="menu-toggle"><?php _e( 'Menu', 'twentytwelve' ); ?></h3>
			<a class="assistive-text" href="#content" title="<?php esc_attr_e( 'Skip to content', 'twentytwelve' ); ?>"><?php _e( 'Skip to content', 'twentytwelve' ); ?></a>
			<?php //wp_nav_menu( array( 'theme_location' => 'primary', 'menu_class' => 'nav-menu' ) ); ?>
<div class="menu-default-container">
	<ul id="menu-default" class="nav-menu">
		<li id="menu-news" class="menu-item menu-item-type-taxonomy menu-item-object-category">
			<a href="/category/news/">
				NEWS
				<!-- <img class="logoimg" src="/wp-content/themes/rsurf/image/navbar/news.png" alt="rsurf"> -->
			</a>
		</li>
		<li id="menu-blog" class="menu-item menu-item-type-taxonomy menu-item-object-category">
			<a href="/category/blog/">
				DAI'S BLOG
				<!-- <img class="logoimg" src="/wp-content/themes/rsurf/image/navbar/blog.png" alt="rsurf"> -->
			</a>
		</li>
		<li id="menu-shop" class="menu-item menu-item-type-taxonomy menu-item-object-category">
			<a href="/shop/">
				SHOP
				<!-- <img class="logoimg" src="/wp-content/themes/rsurf/image/navbar/shop.png" alt="rsurf"> -->
			</a>
		</li>
	</ul>
</div>

		</nav><!-- #site-navigation -->

	</header><!-- #masthead -->

	<div id="main" class="wrapper">