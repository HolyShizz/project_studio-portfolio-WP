<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package project_studio-portfolio
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>

<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
	<div id="page" class="site">

		<header id="masthead" class="site-header">


			<div id="menu">
				<div class="main_menu">
					<div class="site-branding">
						<?php
							the_custom_logo();
							if ( is_front_page() && is_home() ) :
								?>
						<h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">
								<?php bloginfo( 'name' ); ?></a></h1>
						<?php
							else :
								?>
						<p class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">
								<?php bloginfo( 'name' ); ?></a></p>
						<?php
							endif;
							$project_studio_portfolio_description = get_bloginfo( 'description', 'display' );
							if ( $project_studio_portfolio_description || is_customize_preview() ) :
								?>

						<?php endif; ?>
					</div><!-- .site-branding -->
					<nav id="site-navigation" class="main-navigation">

						<?php
			wp_nav_menu( array(
				'theme_location' => 'menu-1',
				'menu_id'        => 'primary-menu',
			) );
			?>
					</nav><!-- #site-navigation -->
				</div>
			</div>
			<div class=header_content>
				<h2><?php echo ot_get_option('header_text_heading')?></h2>
				<p><?php echo ot_get_option('header_text_paragraph')?></p>
			</div>
			<div class=button-scroll>
				<p><?php echo ot_get_option('header_button')?></p>
			</div>
		</header><!-- #masthead -->

		<div id="content" class="site-content">