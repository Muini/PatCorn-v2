<?php get_header(); ?>
<blockquote id="description_site"><strong>PatCorn</strong> référence les <strong>vidéos du net de qualité</strong> spécialement pour <strong>vous</strong> !</blockquote>
<div id="content">
	<?php 
		//query_posts( array( 'post_type' => array( 'post', 'articles', 'fiche-id' ) ) );
		global $wp_query;
		$wp_query->set('post_type', array( 'post', 'articles', 'fiche-id' ) );
	?>
	<?php while ( have_posts() ) : the_post() ?>
	<?php get_template_part( 'entry' ); ?>
	<?php comments_template(); ?>
	<?php endwhile; ?>
	<!-- A la place de la sidebar -->
	<div class="videos_aleatoire">
		<ul>
			<?php $posts = get_posts('orderby=rand&numberposts=4'); foreach($posts as $post) { ?>
			<li>
				<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
					<h3><?php the_title(); ?></h3>
					<?php echo get_the_post_thumbnail($post->ID, 'medium'); ?>
				</a>
			</li>
			<?php } ?>
		</ul>
	</div>
	<?php wp_simple_pagination(); ?>
</div>
<?php get_sidebar(); ?>
<?php get_footer(); ?>