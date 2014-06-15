<div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<?php 
	if ( has_post_thumbnail() && !is_singular() ) {
		the_post_thumbnail();
	} 
	?>
	<div class="article-content">
		<?php if ( !is_singular() ): ?>
			<a class="article_lien_a" href="<?php the_permalink(); ?>" title="<?php printf( __('Voir %s', 'blankslate'), the_title_attribute('echo=0') ); ?>" rel="bookmark"><p></p></a>
		<?php endif; ?>
		<?php get_template_part( 'entry', 'meta' ); ?>
		
		<?php if ( !is_singular() ) {echo '<div class="entry-bas">';} ?>
			<?php if ( is_singular() ) {echo '<h1 class="entry-title">';} else {echo '<h2 class="entry-title">';} ?><a href="<?php the_permalink(); ?>" title="<?php printf( __('Voir %s', 'blankslate'), the_title_attribute('echo=0') ); ?>" rel="bookmark"><?php the_title(); ?></a><?php if ( is_singular() ) {echo '</h1>';} else {echo '</h2>';} ?>
			<?php 
			/*
			if(is_archive() || is_search()){
			get_template_part('entry','summary');
			} else {
			get_template_part('entry','content');
			}
			*/
			if(is_singular()){
				get_template_part('entry','content');
			}else{
				if(is_sticky())
					echo '<div class="enAvant"><p>Au Top !</p></div>';
			}
			if ( is_single() ) {
			//get_template_part( 'entry-footer', 'single' ); 
			} else {
			get_template_part( 'entry-footer' ); 
			}
			?>
		<?php if ( !is_singular() ) {echo '</div>';} ?>
	</div>
</div> 