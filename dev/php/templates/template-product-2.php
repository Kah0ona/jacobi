<?php
/*
Template Name: Product-page-2
*/
?>

<?php get_header(); ?>
<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
<div class="product-container u-cf bestel">
	<div class="gradient-overlay">

	</div>
		<div class="product-wrapper">
			<div class="full-width-bar-container wrap-for-content">
				<div class="bar left"> 
					<h3><?php the_title(); ?></h3>
				</div>
				<div class="bar black">
					<div class="bar-text for-content">
						<?php the_content(); ?>
					<div class="bar-image">
						<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/henkie.jpg">
					</div>
					</div>

				</div>

			</div>
		</div>

	
</div>
<?php endwhile; endif; ?>
<?php get_footer(); ?>
