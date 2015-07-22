<?php
/*
Template Name: Product-page-app
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
						<a href="#" class="button"><img style="width:40%; margin-left:25px;" src="<?php echo get_stylesheet_directory_uri(); ?>/img/play.png"></a>
					<div class="bar-image">
						<img style="width:50%; float:left;" src="<?php echo get_stylesheet_directory_uri(); ?>/img/qr-code.png">
						<img style="width:50%; float:left; margin-top:-75px;" src="<?php echo get_stylesheet_directory_uri(); ?>/img/screenshot.png">
					</div>
					</div>

				</div>

			</div>
		</div> 

	
</div>
<?php endwhile; endif; ?>
<?php get_footer(); ?>
