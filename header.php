<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
	<link rel="shortcut icon" href="<?php echo get_stylesheet_directory_uri(); ?>/images/favicon.png" />
	<meta http-equiv="content-type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />
	<title><?php wp_title(' | ', true, 'right'); ?></title>
	<link rel="stylesheet" type="text/css" href="<?php echo get_stylesheet_uri(); ?>" />
	<link rel="stylesheet" type="text/css" href="<?php echo get_stylesheet_directory_uri(); ?>/ico/style.css ?>" />
	<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
	<div id="loader">
		<img src="<?php echo get_stylesheet_directory_uri(); ?>/images/ajax-loader.gif" alt="Loader"/>
		<p>Chargement de PatCorn...</p>
	</div>
	
	<div id="wrapper" class="hfeed">
		<header>
			<div id="branding">
				<a href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php bloginfo( 'name' ) ?>" rel="home">
				<div id="site-title">
					<svg id="logo_patcorn" version="1.1" baseProfile="tiny" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px"
						 y="0px" width="54px" height="34px" viewBox="0 0 54 34" xml:space="preserve">
						<g id="Rounded_Rectangle_1_1_">
							<g id="Rounded_Rectangle_1">
								<path fill="#729ADD" d="M48,0H6C2.687,0,0,2.687,0,6v22c0,3.313,2.687,6,6,6h42c3.313,0,6-2.687,6-6V6C54,2.687,51.313,0,48,0z"/>
							</g>
						</g>
						<g id="Rounded_Rectangle_2_1_">
							<g id="Rounded_Rectangle_2">
								<path fill-rule="evenodd" fill="#FFFFFF" d="M24,6h-4c-0.829,0-1,0.14-1,0.913v19.174C19,26.86,19.171,27,20,27h4
									c0.829,0,1-0.14,1-0.913V6.913C25,6.14,24.829,6,24,6z M34,6h-4c-0.828,0-1,0.14-1,0.913v19.174C29,26.86,29.172,27,30,27h4
									c0.828,0,1-0.14,1-0.913V6.913C35,6.14,34.828,6,34,6z"/>
							</g>
						</g>
					</svg>
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
					<li><a id="btn_twitter" href="http://twitter.com/patcorn_fr" title="Twitter PatCorn" target="_blank" ></a></li>
					<li><a id="btn_fb" href="https://www.facebook.com/patcorn.fr" title="Facebook PatCorn" target="_blank" ></a></li>
					<!--<li><a href title>Donation bitches</a></li>-->
					<li><a id="btn_folio" href="http://corentinflach.fr/" title="Portfolio Corentin Flach" target="_blank" ></a></li>
				</ul>
				<?php wp_nav_menu( array( 'theme_location' => 'main-menu' ) ); ?>
			</nav>
		</header>
		
		<div id="container">