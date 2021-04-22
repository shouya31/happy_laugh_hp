<?php
/**
 * The header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package Sydney
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
<link href="<?php echo get_template_directory_uri()?>/css/style.css" rel="stylesheet">
<link href="<?php echo get_template_directory_uri()?>/css/icomoon/style.css" rel="stylesheet">
<link href="https://use.fontawesome.com/releases/v5.6.1/css/all.css" rel="stylesheet">
<script src="<?php echo get_template_directory_uri()?>/js/hamburger-list.js"></script>
<?php if ( ! function_exists( 'has_site_icon' ) || ! has_site_icon() ) : ?>
	<?php if ( get_theme_mod('site_favicon') ) : ?>
		<link rel="shortcut icon" href="<?php echo esc_url(get_theme_mod('site_favicon')); ?>" />
	<?php endif; ?>
<?php endif; ?>

<?php wp_head(); ?>
	
	<!--
 <PageMap>
 <DataObject type="thumbnail">
 <Attribute name="src" value="https://happylaugh.jp/wp-content/uploads/2019/12/スクリーンショット-2019-12-28-13.26.19.png"/>
 <Attribute name="width" value="100"/>
 <Attribute name="height" value="130"/>
 </DataObject>
 </PageMap>
-->
	
</head>

<body <?php body_class(); ?>>
<div class="wrapper">

<?php do_action('sydney_before_site'); //Hooked: sydney_preloader() ?>

<div id="page" class="hfeed site">
	<a class="skip-link screen-reader-text" href="#content"><?php _e( 'Skip to content', 'sydney' ); ?></a>

	<?php do_action('sydney_before_header'); //Hooked: sydney_header_clone() ?>
    <div class="header">

		<nav id="nav">
        <ul class="nav-header-list">
					<?php wp_nav_menu( array( 'theme_location' => 'primary', 'fallback_cb' => 'sydney_menu_fallback' ) ); ?>
        </ul>
    </nav>


    <a href="<?php echo esc_url( home_url( '/' ) ); ?>"><div class="corporate-logo"></div></a>
      <ul class="header-list">
      <?php wp_nav_menu( array( 'theme_location' => 'primary', 'fallback_cb' => 'sydney_menu_fallback' ) ); ?>
      </ul>


		<div id="hamburger">
        <span class="inner_line" id="line1"></span>
        <span class="inner_line" id="line2"></span>
        <span class="inner_line" id="line3"></span>
        <span class="inner_line" id="line4"></span>
    </div>
	</div>
	<?php do_action('sydney_after_header'); ?>


	