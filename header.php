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

<?php do_action('sydney_before_site'); //Hooked: sydney_preloader() ?>

<div id="page" class="hfeed site">
	<a class="skip-link screen-reader-text" href="#content"><?php _e( 'Skip to content', 'sydney' ); ?></a>

	<?php do_action('sydney_before_header'); //Hooked: sydney_header_clone() ?>

	<header id="masthead" class="site-header" role="banner">
		<div class="header-wrap">
            <div class="container">
                <div class="row">
				<div class="col-md-2 col-sm-12 col-xs-12 s-logo">
		        <?php if ( get_theme_mod('site_logo') ) : ?>
					<a href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php bloginfo('name'); ?>"><img class="site-logo" src="<?php echo esc_url(get_theme_mod('site_logo')); ?>" alt="<?php bloginfo('name'); ?>" /></a>
		        <?php else : ?>
					<h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
					<h2 class="site-description"><?php bloginfo( 'description' ); ?></h2>	        
		        <?php endif; ?>
				</div>
				<div class="col-md-10 col-sm-12 col-xs-12">
					<!-- test -->
					<style>
						@media only screen and (max-width: 1024px){
						.page-id-51 .btn-menu {
							height: 30px;
    						display: inline-grid;
						}
						.page-id-51 .btn-menu::after {
							position: absolute;
							top: 120%;
    						left: 120%;
  							display: block;
  							content: '';
  							width: 50px;
    						height: 50px;
  							margin: -45px 0 0 -45px;
  							border-radius: 50%;
							border: 2px solid #FF5D8F;
							background: #fff;
							transition: all .75s;
							z-index: -1;
						}
						.page-id-51 .btn-menu span {
							display: inline-block;
    						transition: all .4s;
    						box-sizing: border-box;
    						left: 0;
    						width: 100%;
    						height: 2px;
    						background-color: #FF5D8F;
    						border-radius: 4px;
						}
						.page-id-51 .btn-menu span:nth-of-type(1) {
  							top: 0;
						}
						.page-id-51 .btn-menu span:nth-of-type(2) {
							/* left: 60%;
  							opacity: 0;
  							animation: active-menu-bar02 .8s forwards; */
						}
						@keyframes active-menu-bar02 {
  							100% {
    							height: 0;
  							}
						}
						.page-id-51 .btn-menu span:nth-of-type(3) {
  							bottom: 0;
						}
						.page-id-51 .btn-menu:before {
    						content: "";
						}
						.page-id-51 .btn-menu.active span:nth-of-type(1) {
  							transform: translateY(9px) rotate(-45deg);
						}
						.page-id-51 .btn-menu.active span:nth-of-type(2) {
  							opacity: 0;
						}
						.page-id-51 .btn-menu.active span:nth-of-type(3) {
  							transform: translateY(-8px) rotate(45deg);
						}
						.page-id-51 .btn-menu.active::after {
  animation: circle .4s .25s forwards;
}
@keyframes circle {
  0% {
    border-color: transparent;
    transform: rotate(0);
  }
  25% {
    border-color: transparent #FF5D8F transparent transparent;
  }
  50% {
    border-color: transparent #FF5D8F #FF5D8F transparent;
  }
  75% {
    border-color: transparent #FF5D8F #FF5D8F #FF5D8F;
  }
  100% {
    border-color: #FF5D8F;
    transform: rotate(-680deg);
  }
}
}
					</style>
					<div class="btn-menu">
					<span></span>
					<span></span>
					<span></span>
				</div>
					<nav id="mainnav" class="mainnav" role="navigation">
						<?php wp_nav_menu( array( 'theme_location' => 'primary', 'fallback_cb' => 'sydney_menu_fallback' ) ); ?>
					</nav><!-- #site-navigation -->
					<!-- test -->
				</div>
				</div>
			</div>
		</div>
	</header><!-- #masthead -->

	<?php do_action('sydney_after_header'); ?>

	<div class="sydney-hero-area">
		<?php sydney_slider_template(); ?>
		<div class="header-image">
			<?php sydney_header_overlay(); ?>
			<img class="header-inner" src="<?php header_image(); ?>" width="<?php echo esc_attr( get_custom_header()->width ); ?>" alt="<?php bloginfo('name'); ?>" title="<?php bloginfo('name'); ?>">
		</div>
		<?php sydney_header_video(); ?>

		<?php do_action('sydney_inside_hero'); ?>
	</div>

	<?php do_action('sydney_after_hero'); ?>

	<div id="content" class="page-wrap">
		<div class="container content-wrapper">
			<div class="row">	