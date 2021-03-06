<?php get_header(); ?>
<section id="content-page" role="main">
	<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
		<article id="post-<?php the_ID(); ?>" <?php //post_class(); ?>>
			<header class="header">
				<h1 class="entry-title"><?php the_title(); ?></h1> <?php edit_post_link(); ?>
				<hr />
			</header>
			<section class="entry-content">
				<?php if ( has_post_thumbnail() ) { the_post_thumbnail(); } ?>
				<?php the_content(); ?>
				<div class="entry-links"><?php wp_link_pages(); ?></div>
			</section>
		</article>
		<?php if ( ! post_password_required() ) comments_template( '', true ); ?>
	<?php endwhile; endif; ?>
</section>
<!-- <h3 class="section_title">Vidéos aléatoires</h3> -->
<?php //get_sidebar(); ?>
<?php get_footer(); ?>