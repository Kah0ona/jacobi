<?php
/*
Template Name: Ladningspagina
*/
?>

<?php get_header(); ?>
<div class="slider-overlay-box">
	<div class="slider-overlay">
		<div class="u-gridContainer dshow-for-large">
			<div class="u-gridCol2 product-thumb-home">
				<a href="/kleding_categorieen/jackets/">
					<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/jacket.png">
					<div class="thumb-text">Jacket</div>
				</a> 
			</div>
			<div class="u-gridCol2 product-thumb-home">
				<a href="/kleding_categorieen/sweaters/">
					<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/sweat.png">
					<div class="thumb-text">Sweater</div>
				</a>
			</div>
			<div class="u-gridCol2 product-thumb-home">
				<a href="/kleding_categorieen/jeans/">
					<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/ass.png">
					<div class="thumb-text">Jeans</div>
				</a>
			</div>
			<div class="u-gridCol2 product-thumb-home">
				<a href="/kleding_categorieen/schoenen/">
					<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/shoe.png">
					<div class="thumb-text">Shoes</div>
				</a>
			</div>
		</div>
	</div>
<!--	<div class="Slider">

		<?php

			$args = array(
				'post_type' => 'slides',
				'posts_per_page'=>999
			);
			$slides = new WP_Query( $args );
			$num = count($slides);
			$counter = 0;
			if( $slides->have_posts() ) {
				while( $slides->have_posts() ) {
					$slides->the_post();
					$counter++;
					?>
					<?php $image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'single-post-thumbnail' );
						  $image_url = $image[0];
					?>
					<div class="slide" style="">
						<div class="slider-box">
							<h1><?php the_title(); ?></h1>
							<a href="#"><?php the_content(); ?></a>
						</div>
						<img src="<?php echo $image_url; ?>" />
					</div>
					<?php
				}
			}
		?>
	</div> -->
<!--	<div class="footer-border-top show-for-small">
		</div>
	<div class="background-gradient">
		<div class="u-gridContainer show-for-small">
			
			<div class="u-gridRow">
				<div class="u-gridCol3">
					<a href="#">
						<div class="product-thumb-home">
							<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/jacket.png">
							<div class="thumb-text">Jacket</div>
						</div>
					</a>
				</div>
				<div class="u-gridCol3">
					<a href="#">
						<div class="product-thumb-home">
							<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/sweat.png">
							<div class="thumb-text">Sweater</div>
						</div>
					</a>
				</div>
				<div class="u-gridCol3">
					<a href="#">
						<div class="product-thumb-home">
							<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/ass.png">
							<div class="thumb-text">Jeans</div>
						</div>
					</a>
				</div>
				<div class="u-gridCol3">
					<a href="#">
						<div class="product-thumb-home">
							<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/shoe.png">
							<div class="thumb-text">Shoes</div>
						</div>
					</a>
				</div>

			</div>

		</div>
	</div>-->
</div>
<div class="footer-border-top">
</div>
<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
<div class="u-gridContainer">
	<div class="u-gridRow gold-text">
		<h1 class="edit-h1"><?php the_title(); ?></h1>
		<a class="button-1 u-objRight">Home</a>
	</div>
	<hr class="gold-hr">
	<div class="u-gridRow landingspagina">
		<?php the_content(); ?>
	</div>
</div>
<?php endwhile; endif; ?>
<?php get_footer(); ?>
 

