<?php
/*
Template Name: Product-page-2
*/
?>

<?php get_header(); ?>
<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
<div class="product-container u-cf">
	<div class="gradient-overlay">

	</div>
		<div class="product-wrapper">
			<div class="full-width-bar-container" style="width:31%;">
				<div class="bar left"> 
					<h3><?php the_title(); ?></h3>
				</div>
				<div class="bar black">
					<div class="bar-text">
					<h3>Kwaliteit Jeans</h3>
					<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi ac suscipit magna, in luctus mauris. 
						Proin rutrum, erat sit amet suscipit consectetur, est ex tempus tellus, quis bibendum lorem nibh id arcu.
					 	Nulla tristique metus in magna lobortis, ac congue elit porta. Pellentesque dictum nibh eget erat maximus, eget porttitor 
					</p>
					<h4>Garantie</h4>
					<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi ac suscipit magna, in luctus mauris. 
						Proin rutrum, erat sit amet suscipit consectetur, est ex tempus tellus, quis bibendum lorem nibh id arcu.
					 	Nulla tristique metus in magna lobortis, ac congue elit porta. Pellentesque dictum nibh eget erat maximus, eget porttitor 
					</p>
					<h4>Garantie</h4>
					<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi ac suscipit magna, in luctus mauris. 
						Proin rutrum, erat sit amet suscipit consectetur, est ex tempus tellus, quis bibendum lorem nibh id arcu.
					 	
					</p>
				</div>
				</div>
			</div>
			<div class="full-width-gallery-container" >
				<div class="product-gallery-fade">
				<?php the_content(); ?>
				</div>
			</div>
		</div>

	
</div>
<?php endwhile; endif; ?>
<?php get_footer(); ?>
