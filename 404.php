<?php get_header(); ?>
<section id="content" role="main">
    <header class="header">
        <h1 class="entry-title section_title"><?php _e( 'Porte 404', 'blankslate' ); ?></h1>
    </header>
    <section class="entry-content no-results not-found page_404">
<!--            <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/porte404.png" alt="Porte des damnés">-->
        <span class="icon-wondering"></span>
        <p><?php _e( 'Il n\'y a rien ici. Tu t\'es perdu dans les limbes de PatCorn et est arrivé à un point culminant que tu ne pourras franchir. Rediriges-toi.', 'blankslate' ); ?></p>
        <?php get_search_form(); ?>
    </section>
</section>
<h3 class="section_title">Vidéos aléatoires</h3>
<?php get_sidebar(); ?>
<?php get_footer(); ?>