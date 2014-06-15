<?php get_header(); ?>
<section id="content" role="main">
<article id="post-0" class="post not-found">
<header class="header">
<h1 class="entry-title"><?php _e( 'Porte 404', 'blankslate' ); ?></h1>
</header>
<section class="entry-content">
<img src="<?php echo get_stylesheet_directory_uri(); ?>/images/porte404.png" alt="Porte des damnés">
<p><?php _e( 'Il n\'y a rien ici. Tu t\'es perdu dans les limbes de PatCorn et est arrivé à un point culminant que tu ne pourras franchir. Rediriges-toi.', 'blankslate' ); ?></p>
<?php get_search_form(); ?>
</section>
</article>
</section>
<?php get_sidebar(); ?>
<?php get_footer(); ?>