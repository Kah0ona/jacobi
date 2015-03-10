<?php get_header(); ?>
<div class="product-container u-cf">
	
	<div class="bar show-for-small">
		<h3><?php the_title(); ?></h3>
	</div>
	<div class="gradient-overlay"></div>
	<div class="product-wrapper">

		<div class="full-width-bar-container">
			<div class="bar left"> 
				<h3><?php the_title(); ?></h3>
			</div>
			<div class="bar black">
				<div class="close-button"><a href="javascript:;">X</a></div>
				
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
			<div class="product-gallery-fade-small">
				<?php if (have_posts()) : ?>
					<?php while (have_posts()) : the_post(); ?>
				<a href="javascript:;">
					<div class="product-thumb">
						<div class="hidden-content"><h5><?php the_meta(merk); ?></h5><?php the_content(); ?>  </div>
						<div class="hidden-content-img">
							<?php the_post_thumbnail(); ?>
						</div>
						<div class="thumb-text"> 
							<a id="post-<?php the_ID(); ?>">
								<a href="javascript:;" 
								   rel="bookmark"
								   class="thumb-title" 
								   title="Permanent Link to <?php the_title_attribute(); ?>">
									<?php the_title(); ?>
								</a>
							</a>
						</div>
					</div>
				</a>
				<?php endwhile; ?>
				<nav class="next-prev">
					<?php previous_posts_link('<div style="float:left;">&laquo;</div>  ') ?>
					<?php next_posts_link('<div style="float:right;">  &raquo;</div>') ?>
					
				</nav>
				<?php else : ?>
			
					<h2><?php _e('Nothing Found', ''); ?></h2>
						
					<?php get_search_form(); ?>
			
				<?php endif;?>
			</div>
		</div>
	</div>	
</div>

<?php get_footer(); ?>
