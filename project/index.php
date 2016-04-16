<?php
/**
 * The main template file.
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package PROJECT
 */

get_header(); ?>

	<section class="about">
		<div class="container">
			<?php
			$args = array( 'post_type' => 'About' );
			$loop = new WP_Query( $args );
			while ( $loop->have_posts() ) : $loop->the_post();
			?>
				<div class="headblock">
					<h3 class="slider-item-header"><?php the_title();?></h3>
					<p class="head-info">
					<?php
					$mykey_values = get_post_custom_values( 'description' );
					foreach ( $mykey_values as $key => $value ) {
						echo $value;
					}
					?>
				</p>
				</div>
					<div class="description-block">
						<?php the_content(); ?>
						<a class="button-readmore" href="<?php the_permalink(); ?>">Read More</a>
					</div>
				<?php endwhile; ?>
		</div>
	</section>

	<section class="services">
		<div class="container">
			<h3 class="services-header">Services</h3>
			<p class="services-info">What we are doing</p>
			<ul class="services-list">
				<?php
				$args = array( 'post_type' => 'services' );
				$loop = new WP_Query( $args );
				while ( $loop->have_posts() ) : $loop->the_post();
				?>
				<li>
					<?php the_post_thumbnail('banner-thumbnails');?>
					<div class="description-block">
						<h3 class="item-header"><?php the_title();?></h3>
						<?php the_content(); ?>
					</div>
					<?php endwhile; ?>
				</li>
			</ul>
			<a class="button-readmore" href="#">View More</a>
		</div>
	</section>

	<section class="clients clear">
		<div class="container">
			<h3 class="clients-header">Services</h3>
			<p class="clients-info">What we are doing</p>
			<ul class="bxsliderclients">

				<?php
				$args = array( 'post_type' => 'clients' );
				$loop = new WP_Query( $args );
				while ( $loop->have_posts() ) : $loop->the_post();
				?>
				<li>
					<article>
						<?php the_content(); ?>
						<div class="description-block">
							<?php the_post_thumbnail('banner-thumbnails');?>
							<h3 class="slider-item-header"><?php the_title();?></h3>
							<p><?php
							$mykey_values = get_post_custom_values( 'position' );
							foreach ( $mykey_values as $key => $value ) {
								echo $value;
							}
							?></p>
						</div>
					</article>
					<?php endwhile; ?>
				</li>
			</ul>
		</div>
	</section>

	<section class="news">
		<div class="container">
			<h3 class="clients-header">News</h3>
			<p class="clients-info">From Our Blog</p>
			<h2>Latest Blog Post</h2>

			<?php
			global $query_string; // параметры базового запроса
			query_posts( $query_string.'posts_per_page=3'); // базовый запрос + свои параметры ?>

			<?php if( have_posts() ){ while( have_posts() ){ the_post(); ?>

				<div <?php post_class(); ?> id="post-<?php the_ID(); ?>">
					<h1><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h1>
					<?php the_content(); ?>
				</div>

			<?php } /* конец while */ ?>

				<?php
			} // конец if
			else
				echo "<h2>Записей нет.</h2>";

wp_reset_query(); // сброс запроса
?>

		</div>
	</section>

	<section class="partners clear">
		<div class="container">
			<h3 class="partners-header">Partners</h3>
			<p class="partners-info">Our Great Partners</p>
			<ul class="bxsliderpartners">

				<?php
				$args = array( 'post_type' => 'partners' );
				$loop = new WP_Query( $args );
				while ( $loop->have_posts() ) : $loop->the_post();
				?>
				<li class="slide-items">

					<?php the_post_thumbnail('banner-thumbnails');?>
					
					<?php endwhile; ?>
				</li>
			</ul>
		</div>
	</section>

<?php

get_footer();