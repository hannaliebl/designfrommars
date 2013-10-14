<?php
/**
 * @package WordPress
 * @subpackage html5_blank
 */
?>
<!doctype html>
<html <?php language_attributes(); ?> class="no-js">
	<head>
		<meta charset="<?php bloginfo('charset'); ?>">
		<title><?php wp_title(''); ?><?php if(wp_title('', false)) { echo ' :'; } ?> <?php bloginfo('name'); ?></title>
		
		<!-- dns prefetch -->
		<link href="//www.google-analytics.com" rel="dns-prefetch">
		
		<!-- meta -->
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
		<meta name="viewport" content="width=device-width,initial-scale=1.0">
		<meta name="description" content="<?php bloginfo('description'); ?>">
		
		<!-- icons -->
		<link href="<?php echo get_template_directory_uri(); ?>/img/icons/favicon.ico" rel="shortcut icon">
		<link href="<?php echo get_template_directory_uri(); ?>/img/icons/touch.png" rel="apple-touch-icon-precomposed">
			
		<!-- css + javascript -->
        <script type="text/javascript" src="//use.typekit.net/uey6aee.js"></script>
<script type="text/javascript">try{Typekit.load();}catch(e){}</script>
		
		
		<?php wp_head(); ?>
<link href="<?php echo get_template_directory_uri(); ?>/css/screen.css" rel="stylesheet">
	</head>

	<body>
        <section id="cart">
            <div class="container center-text">
                <nav id="quick_links" role="navigation">
                <?php quickshop_nav(); ?>
                <ul>
                </nav>
                <?php dynamic_sidebar( 'product-search-widget' ); ?>
                <nav id="cart_nav">
                <?php wp_nav_menu( array( 'theme_location' => 'cart-menu' ) ); ?>

                </nav>
            </div>
        </section>
        <header id="store_header" class="main">
            <div class="container">
                <article id="header_description" class="center-text">
                    <img src="./img/main_logo_mobile.png" />
                    <h1>Design From Mars</h1>
                    <h2>Shop</h2>
                </article>
            </div>
            </header>
            <nav id="main">
                <div class="container mobile-menu-container center-text">
                    <a href="#" class="toggle">MENU<span class="icon-arrow-down" aria-hidden="true"></span></a>
                    <?php html5blank_nav(); ?>
                </div>
            </nav>
	