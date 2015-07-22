<?php
/*
Template Name: Contactpage
*/
?>

<?php get_header(); ?>

	<div>
	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
		<article class="Content Content--fullwidth u-gridContainer" id="post-<?php the_ID(); ?>">
			<div class="Content-entry" style="padding-top: 20px">
				<div class="Content-text">

					<div class="u-gridRow">					
						<div class="adress-map u-gridCol8">
							<div id="map_canvas"></div>
						</div>
						<div class="adress u-gridCol4">
							<div class="adress-info">
								<p><strong>Jacobs Rotterdam</strong></p>
								<p>Lijnbaan 49</p>
								<p>3012 EK Rotterdam</p>
								<p>Email: <a href="mailto:info@jacobs-rotterdam.nl" style="color:#d7c490 !important;">info@jacobs-rotterdam.nl</a></p>
								<p>Tel: <a href="tel:0102231442" style="color:#d7c490 !important;">010-2231442</a></p>
							</div>
							<div class="contactform-container">						
								<p class="contact-page-p">
									Heeft u nog vragen? Neem dan hieronder contact met ons op. 
								</p>
								<?php the_content(); ?>
							
								<?php edit_post_link('Edit this entry.', '<p>', '</p>'); ?>
							</div>
		
						</div>					

					</div> <!-- /gridRow -->


				</div> <!-- content-text -->
			</div>
		</article>
	<?php endwhile; endif; ?>
	</div>

<?php get_footer(); ?>

