<?php get_header(); ?>
<blockquote id="description_site"><strong>PatCorn</strong> référence les <strong>vidéos du net de qualité</strong> spécialement pour <strong>vous</strong> !</blockquote>
<section id="content">
	<header>
		<h3 class="section_title">Posts récents</h3>
	</header>
	<?php 
		//query_posts( array( 'post_type' => array( 'post', 'articles', 'fiche-id' ) ) );
		global $wp_query;
		$wp_query->set('post_type', array( 'post', 'articles', 'fiche-id' ) );
	?>
	<?php while ( have_posts() ) : the_post() ?>
	<?php get_template_part( 'entry' ); ?>
	<?php comments_template(); ?>
	<?php endwhile; ?>
	<?php wp_simple_pagination(); ?>
</section>
<h3 class="section_title">Vidéos aléatoires</h3>
<?php get_sidebar(); ?>
<?php get_footer(); ?>