<!DOCTYPE html>
<!--[if lt IE 7]> <html class="no-js lt-ie9 lt-ie8 lt-ie7" <?php language_attributes(); ?>> <![endif]-->
<!--[if IE 7]> <html class="no-js lt-ie9 lt-ie8" <?php language_attributes(); ?>> <![endif]-->
<!--[if IE 8]> <html class="no-js lt-ie9" <?php language_attributes(); ?>> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" <?php language_attributes(); ?>> <!--<![endif]-->
  <head prefix="og: http://ogp.me/ns/website#"><!-- Prefix is used to declare facebook opengraph namespace for websites -->
    <!-- Charset -->
    <meta charset="<?php bloginfo( 'charset' ); ?>" />

    <!-- IE: render in highest mode available -->
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <!-- Title -->
    <title>Jacobi's</title>

    <!-- Mobile devices -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Automate reverse linking (pingbacks) -->
    <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />

    <!-- Favicons -->
    <link rel="shortcut icon" href="<?php echo get_stylesheet_directory_uri(); ?>/img/favicon.ico">
    <link rel="apple-touch-icon-precomposed" href="<?php echo get_stylesheet_directory_uri(); ?>/apple-touch-icon.png">
    <!-- build:remove:compressed -->
    <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/css/production.css">
    <!-- /build -->
    <link href='http://fonts.googleapis.com/css?family=Crimson+Text:400,400italic,600,600italic,700,700italic' rel='stylesheet' type='text/css'>
	<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,600' rel='stylesheet' type='text/css'>
    <!-- build:remove:compressed -->
    <script src="//cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.2/modernizr.min.js"></script>
    <!-- /build -->

    <!-- Wordpress head function -->
    <?php wp_head(); ?>
    <script src="https://maps.googleapis.com/maps/api/js?sensor=false"></script>

  </head>
  <body <?php body_class(); ?> >


<!--<div id="preloader">
    <div id="inTurnFadingTextG">
    <div id="inTurnFadingTextG_1" class="inTurnFadingTextG">
    J</div>
    <div id="inTurnFadingTextG_2" class="inTurnFadingTextG">
    &nbsp;
    </div>
    <div id="inTurnFadingTextG_3" class="inTurnFadingTextG">
    A</div>
    <div id="inTurnFadingTextG_4" class="inTurnFadingTextG">
    &nbsp;
    </div>
    <div id="inTurnFadingTextG_5" class="inTurnFadingTextG">
    C</div>
    <div id="inTurnFadingTextG_6" class="inTurnFadingTextG">
    &nbsp;
    </div>
    <div id="inTurnFadingTextG_7" class="inTurnFadingTextG">
    O</div>
    <div id="inTurnFadingTextG_8" class="inTurnFadingTextG">
    &nbsp;
    </div>
    <div id="inTurnFadingTextG_9" class="inTurnFadingTextG">
    B</div>
    <div id="inTurnFadingTextG_10" class="inTurnFadingTextG">
    &nbsp;
    </div>
    <div id="inTurnFadingTextG_11" class="inTurnFadingTextG">
    I</div>
    <div id="inTurnFadingTextG_12" class="inTurnFadingTextG">
    &nbsp;
    </div>
    <div id="inTurnFadingTextG_13" class="inTurnFadingTextG">
    &nbsp;
    </div>
    <div id="inTurnFadingTextG_14" class="inTurnFadingTextG">
    &#039;
    </div>
    <div id="inTurnFadingTextG_15" class="inTurnFadingTextG">
    &nbsp;
    </div>
    <div id="inTurnFadingTextG_16" class="inTurnFadingTextG">
    S</div>
    </div>
</div>-->

<header class="header">

	<div class="u-gridContainer">
	  <div class="Bot-Nav">
		<div class="Nav-toggle u-cf">
			<a class="Navigation-menuToggle" id="js-navCollapse">
				<svg class="Icon Icon--inline" viewBox="0 0 128 128">
					<use xlink:href="#icon-menu2"></use>
				</svg>
			</a>
		</div>
		<div class="u-gridRow nav-row">
			<div class="u-gridCol3  show-for-large">
			   <a href="/home"> <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/logo.png"></a>
			</div>

			<div class="u-gridCol7 dropdown-menu">
				  <?php include 'includes/navigation.php'; ?>
			</div> 

			<div class="u-gridCol2 show-for-large">
				<div class="top-search">
						<?php do_action('icl_language_selector'); ?>
						<span class="tel">010-XXXXXXX</span>
				</div>
			</div>



		</div>
	  </div>
  </div>
  <div class="header-border-bottom">
  </div>

<!--
			<a href="/home"> <img  class="logo show-for-small" src="<?php echo get_stylesheet_directory_uri(); ?>/img/logo.png"></a>
			<div class="Mob-contact-ico">
				<a class="Button Button--transparent u-textInverted u-noLine telsvg" href="tel:">
					<svg class="Icon Icon--inline" viewBox="0 0 128 128">
						<use xlink:href="#icon-phone"></use>
					</svg>
				</a>

				<a class="Button Button--transparent u-textInverted u-noLine mailsvg" href="mailto:info@lokaalgevonden.nl">
					<svg class="Icon Icon--inline" viewBox="0 0 128 128">
						<use xlink:href="#icon-envelope"></use>
					</svg>
				</a>
			</div> --><!-- header-contact -->


</header>
