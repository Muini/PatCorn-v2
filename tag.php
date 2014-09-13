<?php get_header(); ?>
<section id="content" role="main">
	<header class="header">
		<h1 class="entry-title section_title"><?php _e( 'Réalisateur / Auteur : ', 'blankslate' ); ?><?php single_tag_title(); ?></h1>
	</header>
	<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
		<?php get_template_part( 'entry' ); ?>
	<?php endwhile; endif; ?>
	<?php get_template_part( 'nav', 'below' ); ?>
</section>
<h3 class="section_title">Vidéos aléatoires</h3>
<?php get_sidebar(); ?>
<?php get_footer(); ?>