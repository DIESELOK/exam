<?php
/**
 * The header for our theme.
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package PROJECT
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#main"><?php esc_html_e( 'Skip to content', 'project' ); ?></a>

	<header id="masthead" class="site-header" role="banner">
		<div class="container">
		<div class="site-branding">
			<?php
			if ( is_front_page() && is_home() ) : ?>
				<h1 class="logo"><a href='<?php echo home_url();?>'><img src="<?php echo get_theme_mod('theme_logo');?>" alt=''></a></h1>
			<?php else : ?>

			<?php
			endif;

			$description = get_bloginfo( 'description', 'display' );
			if ( $description || is_customize_preview() ) : ?>
				<span class="contactinfo"><img src="<?php echo get_theme_mod('theme_pict');?>" alt=''><?php echo $description; /* WPCS: xss ok. */ ?></span>
			<?php
			endif; ?>

			<nav id="site-navigation" class="main-navigation" role="navigation">
				<button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false"><?php esc_html_e( 'Primary Menu', 'project' ); ?></button>
				<?php wp_nav_menu( array( 'theme_location' => 'primary', 'menu_id' => 'primary-menu' ) ); ?>

				<?php project_social_menu(); ?>
			</nav><!-- #site-navigation -->

		</div><!-- .site-branding -->
		</div>
	</header><!-- #masthead -->


	<section class="slider">
		<ul class="bxslider">

			<?php
			$args = array( 'post_type' => 'slider' );
			$loop = new WP_Query( $args );
			while ( $loop->have_posts() ) : $loop->the_post();
			?>
			<li>
				<article class="slider-item">
					<?php the_post_thumbnail('banner-thumbnails');?>
					<div class="description-block">
						<span class="welocmedesc">Welcome to</span>
						<h3 class="slider-item-header"><?php the_title();?></h3>
						<p><?php the_content(); ?></p>
						<a class="button-readmore" href="<?php the_permalink(); ?>">Read More</a>
					</div>
				</article>

				<?php endwhile; ?>
			</li>
		</ul>
	</section>
	
	<div id="content" class="site-content">
