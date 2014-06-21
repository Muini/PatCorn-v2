<?php
	//Récuperer tout les champs
	$fields = get_fields();
?>
<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<?php if ( !is_singular() ): ?>
		<a class="article_lien_a" 
			href="<?php the_permalink(); ?>" 
			title="<?php printf( __('Voir %s', 'blankslate'), the_title_attribute('echo=0') ); ?>" 
			rel="bookmark" >
				<?php
				if ( has_post_thumbnail() ) {
					the_post_thumbnail('large');
				}
				//Ajouter ici l'icône du type de contenu (vidéo, article etc...)
				?>
		</a>
	<?php endif; ?>

	<section class="article-content">
		<?php if ( !is_singular() ): ?>
			<?php if(is_sticky()) //Si l'article est mis en avant
				echo '<div class="enAvant"><p>Au Top !</p></div>'; ?>
			<header>
				<h2 class="entry-title">
					<a href="<?php the_permalink(); ?>" 
						title="<?php printf( __('Voir %s', 'blankslate'), the_title_attribute('echo=0') ); ?>" 
						rel="bookmark" >
						<?php the_title(); ?>
					</a>
				</h2>
				<hr />
			</header>
			<!--<section>-->
				<?php 
				get_template_part('entry','content'); 
				//the_field('note');
				?>
			<!--</section>-->
			<footer>
				<?php
				get_template_part( 'entry', 'meta' );
				get_template_part( 'entry-footer' ); 
				?> 
			</footer>
		
		<?php else: ?>
			
		
		<?php endif; ?>

	</section>
</article> 