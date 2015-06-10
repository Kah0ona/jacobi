<?php get_header(); ?>



<?php 
// no default values. using these as examples
$taxonomies = array( 
    'kleding_categorieen'
);

$args = array(
    'orderby'           => 'name', 
    'order'             => 'ASC',
    'hide_empty'        => false, 
    'exclude'           => array(), 
    'exclude_tree'      => array(), 
    'include'           => array(),
    'number'            => '', 
    'fields'            => 'all', 
    'slug'              => '',
    'parent'            => '',
    'hierarchical'      => true, 
    'child_of'          => 0,
    'childless'         => false,
    'get'               => '', 
    'name__like'        => '',
    'description__like' => '',
    'pad_counts'        => false, 
    'offset'            => '', 
    'search'            => '', 
    'cache_domain'      => 'core'
); 

$terms = get_terms($taxonomies, $args);
$urls = explode('/',$_SERVER['REDIRECT_URL']);
//print_r($urls);
$termName = $urls[2];
$termToUse = null;
for($i = 0; $i < count($terms); $i++) {
	if($terms[$i]->slug == $termName) {
		$termToUse = $terms[$i];
	}
}
$background = get_field('background_image', $termToUse);
?>

<style>
.product-container{
	background-image: url('<?php echo $background['url']; ?>');
}
</style>


<div class="product-container u-cf" >
	
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

					
					<?php
					 $image1 = get_field('foto_1'); 
					 $image2 = get_field('foto_2'); 
					 $image3 = get_field('foto_3'); 
					 $image4 = get_field('foto_4'); 
					 $merk = get_field('merk'); 
					 ?>
				<a href="javascript:;">
					<div class="product-thumb">
						<div class="hidden-content">
							<div class="image-row">
								<a href="#"><img src="<?php echo $image1['sizes']['medium']; ?>" alt="<?php echo $image1['alt']; ?>"/></a>
					       		<a href="#"><img src="<?php echo $image2['sizes']['medium']; ?>" alt="<?php echo $image2['alt']; ?>"/></a>
					       		<a href="#"><img src="<?php echo $image3['sizes']['medium']; ?>" alt="<?php echo $image3['alt']; ?>"/></a>
					       		<a href="#"><img src="<?php echo $image4['sizes']['medium']; ?>" alt="<?php echo $image4['alt']; ?>"/></a>
					       	</div>
							<h5><?php echo $merk ?></h5>
							<?php the_content(); ?>  
						</div>
						<div class="hidden-content-img">
						    <img src="<?php echo $image1['sizes']['medium']; ?>" alt="<?php echo $image1['alt']; ?>"/>
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
			
						
			
				<?php endif;?>
			</div>
		</div>
	</div>	
</div>

<?php get_footer(); ?>
