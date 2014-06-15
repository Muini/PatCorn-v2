<?php get_header(); ?>
<div id="content">
<?php if ( have_posts() ) : ?>
<h1 class="page-title"><?php printf( __( 'Résultats de la recherche pour : %s', 'blankslate' ), '<span>' . get_search_query()  . '</span>' ); ?></h1>
<?php get_template_part( 'nav', 'above' ); ?>
<?php while ( have_posts() ) : the_post() ?>
<?php if (is_type_page()) continue; ?>
<?php get_template_part( 'entry' ); ?>
<?php endwhile; ?>
<?php wp_simple_pagination(); ?>
<?php else : ?>
<div id="post-0" class="post no-results not-found">
<h2 class="entry-title"><?php _e( 'Rien n\'a été trouvé !', 'blankslate' ) ?></h2>
<div class="entry-content">
<p><?php _e( 'Désolé, rien ne correspond a votre recherche. Essayez d\'autre termes.', 'blankslate' ); ?></p>
<?php get_search_form(); ?>
</div>
</div>
<?php endif; ?>
</div>
<?php get_sidebar(); ?>
<?php get_footer(); ?>