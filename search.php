<?php get_header(); ?>
<section id="content">
	<?php if ( have_posts() ) : ?>
		<header>
			<h1 class="page-title section_title"><?php printf( __( 'Résultats de la recherche pour : %s', 'blankslate' ), '<span>' . get_search_query()  . '</span>' ); ?></h1>
		</header>
		<?php get_template_part( 'nav', 'above' ); ?>
		<?php while ( have_posts() ) : the_post() ?>
			<?php if (is_type_page()) continue; ?>
			<?php get_template_part( 'entry' ); ?>
		<?php endwhile; ?>
		<?php wp_simple_pagination(); ?>
	<?php else : ?>
		<header>
			<h1 class="page-title section_title"><?php printf( __( 'Résultats de la recherche pour : %s', 'blankslate' ), '<span>' . get_search_query()  . '</span>' ); ?></h1>
		</header>
		<div id="post-0" class="post no-results not-found">
		<span class="icon-wondering"></span>
		<h2 class="entry-title"><?php _e( 'Rien n\'a été trouvé !', 'blankslate' ) ?></h2>
		<div class="entry-content">
		<p><?php _e( 'Désolé, rien ne correspond a votre recherche. Essayez d\'autres termes.', 'blankslate' ); ?></p>
		<?php get_search_form(); ?>
		</div>
		</div>
	<?php endif; ?>
</section>
<h3 class="section_title">Vidéos aléatoires</h3>
<?php get_sidebar(); ?>
<?php get_footer(); ?>