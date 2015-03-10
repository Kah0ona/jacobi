<?php
/*
Template Name: Product-page
*/
?>

<?php get_header(); ?>
<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
<div class="product-container">
		<div class="bar">
			<h2><?php the_title(); ?></h2>
		</div>
		

	<div class="u-gridContainer">
		

		<div class="u-gridRow product-gallery">
			<?php the_content(); ?>
		</div>

	</div> 

	
</div>
<?php endwhile; endif; ?>
<?php get_footer(); ?>
