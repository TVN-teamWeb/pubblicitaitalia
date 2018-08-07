<?php
/**
 * The template for displaying the header
 *
 * Displays all of the head element and everything up until the "container" div.
 *
 * @package FoundationPress
 * @since FoundationPress 1.0.0
 */

?>
<!doctype html>
<html class="no-js" <?php language_attributes(); ?> >
	<head>
		<link rel="shortcut icon" type="image/png" sizes="32x32" href="<?php echo get_stylesheet_directory_uri(); ?>/dist/assets/images/favicon-32x32.png">
		<link rel="icon" type="image/png" sizes="96x96" href="<?php echo get_stylesheet_directory_uri(); ?>/dist/assets/images/favicon-96x96.png">
		<link rel="icon" type="image/png" sizes="16x16" href="<?php echo get_stylesheet_directory_uri(); ?>/dist/assets/images/favicon-16x16.png">
		<meta charset="<?php bloginfo( 'charset' ); ?>" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />
		<?php wp_head(); ?>
		<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.10/css/all.css" integrity="sha384-+d0P83n9kaQMCwj8F4RJB66tzIwOKmrdb46+porD/OvrJ+37WqIM7UoBtwHO6Nlg" crossorigin="anonymous">

	</head>
	<body <?php body_class(); ?>>

	<?php if ( get_theme_mod( 'wpt_mobile_menu_layout' ) === 'offcanvas' ) : ?>
		<?php get_template_part( 'template-parts/mobile-off-canvas' ); ?>
	<?php endif; ?>
	<div class="leaderboard">
    <!--  LEADERBOARD -->
      <!--/*
        *
        * Revive Adserver Asynchronous JS Tag
        * - Generated with Revive Adserver v3.2.2
        *
        */-->
      <ins data-revive-zoneid="5" data-revive-id="8039791dac617d34028eb91505db3885"></ins>
      <script async src="//advdue.tvnmediagroup.it/www/delivery/asyncjs.php"></script>
  </div>
	<div style="width:100%" data-sticky-container>
	<!--div class="sticky" data-sticky data-margin-top="0"-->
	<div class="sticky" data-sticky data-options="anchor: page; marginTop: 0; stickyOn: small;">
	<header class="site-header" role="banner" >

		<div class="site-title-bar title-bar" <?php foundationpress_title_bar_responsive_toggle(); ?>>

			<div class="title-bar-left">
				<button aria-label="<?php _e( 'Main Menu', 'foundationpress' ); ?>" class="menu-icon" type="button" data-toggle="<?php foundationpress_mobile_menu_id(); ?>"></button>
				<span class="site-mobile-title title-bar-title">
					<a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">
						<img src="/wp-content/uploads/2018/07/PI_Biancox2.png" width="150" alt="">
					</a>
				</span>
			</div>
		</div>

		<div class="top-menu-bar">
			<div class="social">
				<a href="#">
					<i class="fab fa-facebook-square"></i>
				</a>
				<a href="#">
					<i class="fab fa-twitter"></i>
				</a>
			</div>
			<div class="top-menu-r">
				<a href="#">Chi siamo</a>
				<a href="/contatti">Contatti</a>
				<a href="http://abbonamenti.tvnmediagroup.it/" target="_blank">Abbonamenti</a>
			</div>
			<div class="top-menu-l">
				<a href="/today">Il Today</a>
				<a href="/mensile">Il Mensile</a>
				<a href="/grandprix">I GrandPrix </a>
				<a href="/eventi">Partnership </a>
				<a href="/anteprima">Newsletter</a>
			</div>
		</div>
			<div class="bar-bg"></div>
			<nav class="site-navigation top-bar" role="navigation">

					<div class="top-bar-left">
						<div class="site-desktop-title top-bar-title">
							&#160;
							<a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">
							<div class="logobox"></div>
							</a>
						</div>
					</div>
					<div class="top-bar-right">
						<!--div class="bl"></div-->
						<span class="cerca">
							<i class="fas fa-search"></i>

						</span>


						<?php foundationpress_top_bar_r(); ?>
						<?php if ( ! get_theme_mod( 'wpt_mobile_menu_layout' ) || get_theme_mod( 'wpt_mobile_menu_layout' ) === 'topbar' ) : ?>
							<?php get_template_part( 'template-parts/mobile-top-bar' ); ?>
						<?php endif; ?>

					</div>


			</nav>


	</header>

	<div class="search-box">
		<form method="GET" action="/" >
			<div class="input-group">
				<input class="srctxt input-group-field" type="text" name="s" placeholder="Cerca articolo" />
  			<div class="input-group-button">
    			<input type="submit" class="button hollow secondary" value="CERCA">
  			</div>
			</div>
		</form>
	</div>

	</div>
	</div>
