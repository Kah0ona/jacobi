<?php
/*
Template Name: Product-page-3
*/
?>

<?php get_header(); ?>
<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
<div class="product-container">


		<div class="bar">
			<h2><?php the_title(); ?></h2>
		</div>
		<div class="bar fade">
			<h3>Bekijk de nieuwe collectie!</h3>
			<div class="u-gridContainer">
				<div class="u-gridRow product-gallery-fade">
					<?php the_content(); ?>
				</div>
			</div>
		</div>
		<div class="bar" style="height:60px;">
			
		</div>
	

	
</div>
<?php endwhile; endif; ?>
<?php get_footer(); ?>
