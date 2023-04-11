<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package eclatant
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="stylesheet" content="style/css">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#primary"><?php esc_html_e( 'Skip to content', 'eclatant' ); ?></a>

	<header id="masthead" class="site-header">
		<?php the_custom_logo(); ?>
		<div class="site-branding">
			<?php
			if ( is_front_page() && is_home() ) :
				?>
				<h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
				<?php
			else :
				?>
				<p class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></p>
				<?php
			endif;
			$eclatant_description = get_bloginfo( 'description', 'display' );
			if ( $eclatant_description || is_customize_preview() ) :
				?>
				<p class="site-description"><?php echo $eclatant_description; // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?></p>
			<?php endif; ?>
		</div><!-- .site-branding -->

		<nav id="site-navigation" class="main-navigation">
			<input type="checkbox" href="#" class="menu-open" name="menu-open" id="menu-open" onclick="(e) => {e.preventDefault()}"/>
			<label class="menu-open-button" for="menu-open" title="<?php esc_html_e( 'Primary Menu', 'eclatant' ); ?>" tabindex="0" onkeydown="(e) => {console.log(e)}">
				<span class="hamburger hamburger-1"></span>
				<span class="hamburger hamburger-2"></span>
				<span class="hamburger hamburger-3"></span>
			</label>
			<div class="closable-menu">
				<?php
					wp_nav_menu(
						array(
							'theme_location' => 'menu-1',
							'menu_id'        => 'primary-menu',
						)
					);
				?>
				<div class="top-widget-zone">
					<?php dynamic_sidebar( 'top-sidebar' ); ?>
				</div>
			</div>	
		</nav><!-- #site-navigation -->
	</header><!-- #masthead -->
