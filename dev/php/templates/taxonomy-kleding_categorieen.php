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
<div class="wishlistform" >
	<div class="close">&times;</div>
	<div class="contactform-container">	
		<?php echo do_shortcode('[gravityform id="2" name="Wenslijst" title="false" description="false" ajax="true"]'); ?>
		<i>* Na het ontvangen van uw interesse, zullen wij u contacten per email.</i>
	</div>
</div>

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
					<h3>Onze collectie</h3>
					<p>
						Bekijk onze collectie hiernaast, laat je wensen achter via de wenslijsten wij zullen u contacteren. 					
					</p>
				</div>
				<div class="bar-text2 brandslist">
					<!-- auto populated by script -->
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
					 $merk   = get_field('merk'); 
					 ?>
					<div data-merk="<?php echo $merk; ?>" class="product-thumb product-<?php echo strtolower(str_replace(' ','_', $merk)); ?>">
						<a href="javascript:;" class="product-thumb-grid">
							<div class="hidden-content">
								<div class="image-row">
									<a href="#"><img data-large="<?php echo $image1['sizes']['large']; ?>" src="<?php echo $image1['sizes']['medium']; ?>" alt="<?php echo $image1['alt']; ?>"/></a>
									<a href="#"><img data-large="<?php echo $image2['sizes']['large']; ?>" src="<?php echo $image2['sizes']['medium']; ?>" alt="<?php echo $image2['alt']; ?>"/></a>
									<a href="#"><img data-large="<?php echo $image3['sizes']['large']; ?>" src="<?php echo $image3['sizes']['medium']; ?>" alt="<?php echo $image3['alt']; ?>"/></a>
									<a href="#"><img data-large="<?php echo $image4['sizes']['large']; ?>" src="<?php echo $image4['sizes']['medium']; ?>" alt="<?php echo $image4['alt']; ?>"/></a>
								</div>
								<h5><?php echo $merk ?></h5>
								<?php the_content(); ?>  
							</div>
							<div class="hidden-content-img">
								<img data-large="<?php echo $image1['sizes']['large']; ?>" src="<?php echo $image1['sizes']['medium']; ?>" alt="<?php echo $image1['alt']; ?>"/>
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
						</a>
					</div>
				<?php endwhile; ?>
				<?php else : ?>
			
						
			
				<?php endif;?>
			</div>
			<nav class="next-prev">
				<?php previous_posts_link('<div style="float:left;">&laquo;</div>  ') ?>
				<?php next_posts_link('<div style="float:right;">  &raquo;</div>') ?>
				
			</nav>
		</div>
	</div>	
</div>

<?php get_footer(); ?>
