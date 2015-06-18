<?php
/*
Template Name: App page
*/
?>

<?php get_header(); ?>


<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
<div class="u-gridContainer">
	<div class="u-gridRow gold-text">
		<a class="button-1 u-objRight">Home</a>
	</div>
	<hr class="gold-hr">
	<div class="u-gridRow normalepagina">
		<div class="u-gridCol12">
			<div class="Content Content--app" id="post-<?php the_ID(); ?>">
				<div class="u-gridContainer">
					<h2><?php the_title(); ?></h2>
					<aside class="u-gridCol4">
						<?php get_sidebar() ?>
					</aside>
					<article class="Content-article u-gridCol8" id="post-<?php the_ID(); ?>">
						<?php // the_content(); ?>
						<p>
							Bekijk nu ook het assortiment van Jacobs Rotterdam vanuit de app! De app is beschikbaar in Google Play voor Android apparaten en als webapp voor iOS van Apple telefoons.
							<br/><br/>
							Voor Apple iPhone gebruikers: scan de QR-code of surf naar de website. 

						</p>
						<p>
							<a href="#" class="button">Download de app hier</a>

	<!--
							<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/qr_code.png" />
	-->

							<?php edit_post_link('Edit this entry.', '<p>', '</p>'); ?>
						</p>
					</article>
				</div>
			</div>
		</div>
	</div>
</div>
<?php endwhile; endif; ?>



<?php get_footer(); ?>


