<div class="footer-border-top">
</div>
<footer class="Footer">
		<div class="u-gridContainer">

			<div class="u-gridCol2">
				<b>Klantenservice</b>
				<ul>
					<li>Bestellen & levering</li>
					<li>Betalen</li>
					<li>Retourneren</li>
					<li>Andere vragen</li>
				</ul>
			</div>
			<div class="u-gridCol2">
				<b>Adresgegevens</b>
				<ul>
					<li>Jacobi’s Fashion</li>
					<li>Lijnbaan 49 </li>
					<li>3012 EK</li>
					<li>Rotterdam</li>
				</ul>
			</div>
			<div class="u-gridCol2">
				<b>Contact</b>
				<ul>
					<li></li>
					<li></li>
				</ul>
			</div>
			<div class="u-gridCol2 social">
				<b>Volg ons op</b>
				<hr>
				<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/twit.png">
				<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/facebook.png">
				<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/insta.png">
			</div>
			<div class="u-gridCol2">
				<p></p>
			</div>
			<div class="u-gridCol2" style="margin-right:0px;">
				<b>Sitemap</b>
				<?php if ( is_active_sidebar( 'footer-widgets' ) ) : ?>
				<?php dynamic_sidebar( 'footer-widgets' ); ?>
				<?php endif; ?>
			</div>

			
			<div class="Footer-inner u-gridRow">
				
			</div>
			
		</div> 

</footer>

  <!-- Load jquery from google CDN if possible, with fallback to cdnjs -->
  <script src="//ajax.googleapis.com/ajax/libs/jquery/2.1.0/jquery.min.js"></script>
  <script>window.jQuery || document.write('<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.0/jquery.min.js"><\/script>')</script>

  <!-- build:remove:expanded -->
  <script src="<?php echo get_stylesheet_directory_uri(); ?>/js/production.min.js"></script>
  <!-- /build -->
  <!-- build:remove:compressed -->
  <script src="<?php echo get_stylesheet_directory_uri(); ?>/js/landingpage-select.js"></script>
  <script src="<?php echo get_stylesheet_directory_uri(); ?>/js/nav-collapse.js"></script>
  <script src="<?php echo get_stylesheet_directory_uri(); ?>/js/bar.js"></script>
  <script src="<?php echo get_stylesheet_directory_uri(); ?>/js/preload.js"></script>
  <script src="<?php echo get_stylesheet_directory_uri(); ?>/js/nav-dropdown.js"></script>
  <script src="<?php echo get_stylesheet_directory_uri(); ?>/js/prepend-svg.js"></script>
  <script src="<?php echo get_stylesheet_directory_uri(); ?>/js/google-maps.js"></script>
  <script src="<?php echo get_stylesheet_directory_uri(); ?>/js/jquery.bxslider.js"></script>
  <script src="<?php echo get_stylesheet_directory_uri(); ?>/js/jquery.bxslider.start.js"></script>
  <script src="<?php echo get_stylesheet_directory_uri(); ?>/js/thumb-click.js"></script>

  <script src="http://localhost:35729/livereload.js"></script>
  
 
  <!-- /build -->

  <!-- Check if javascript for threaded comments should be loaded -->
  <?php include 'includes/comment-check.php'; ?>

	<!-- Wordpress footer -->
	<?php wp_footer(); ?>
	</body>
</html>
