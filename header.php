<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>" />
	<meta name="viewport" content="width=device-width" />
	<link rel="shortcut icon" href="<?php echo get_stylesheet_directory_uri(); ?>/images/favicon.png" />
	<meta http-equiv="content-type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />
	<title><?php wp_title(' | ', true, 'right'); ?></title>
	<link rel="stylesheet" type="text/css" href="<?php echo get_stylesheet_uri(); ?>" />
	<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
	<div id="loader">
		<img src="<?php echo get_stylesheet_directory_uri(); ?>/images/ajax-loader.gif" alt="Loader"/>
		<h2>Chargement de PatCorn...</h2>
	</div>
	
	<div id="wrapper" class="hfeed">
		<header>
			<div id="branding">
				<a href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php bloginfo( 'name' ) ?>" rel="home">
				<img id="patcorn_logo" src="<?php echo get_stylesheet_directory_uri(); ?>/images/logo_patcorn.svg" alt="Logo de ouf de PatCorn"/>
				<div id="site-title">
					<h1>PatCorn</h1>
					<p id="site-description">Pas de Chat, Pas de Porn</p>
				</div>
				</a>
			</div>
			
			<nav>
				<div id="search">
						<?php get_search_form(); ?>
				</div>
				<ul class="head_social">
					<li><a href="http://twitter.com/patcorn_fr" title="Twitter PatCorn" target="_blank" >t</a></li>
					<li><a href="https://www.facebook.com/patcorn.fr" title="Facebook PatCorn" target="_blank" >f</a></li>
					<!--<li><a href title>Donation bitches</a></li>-->
					<li><a href="http://corentinflach.fr/" title="Portfolio Corentin Flach" target="_blank" >></a></li>
				</ul>
				<?php wp_nav_menu( array( 'theme_location' => 'main-menu' ) ); ?>
			</nav>
		</header>
		
		<div id="container">