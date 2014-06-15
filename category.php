<?php get_header(); ?>
<section id="content" role="main">
<header class="header">
<h1 class="entry-title"><?php _e( 'Catégorie   ', 'blankslate' ); ?><strong><?php single_cat_title(); ?></strong></h1>
<?php if ( '' != category_description() ) echo apply_filters('archive_meta', '<div class="archive-meta">' . category_description() . '</div>'); ?>
</header>
<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
<?php get_template_part('entry'); ?>
<?php endwhile; endif; ?>
<?php wp_simple_pagination(); ?>
</section>
<?php get_sidebar(); ?>
<?php get_footer(); ?>