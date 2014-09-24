<?php
	//Récuperer tout les champs
	//$fields = get_fields();
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
				?>
		</a>
		<?php
		$post_type = get_post_type();
		switch ($post_type) {
			case 'post':
				//echo '<img class="type_icon" src="" alt="Type vidéo" />';
				echo '<span class="type_icon icon-film"></span>';
				break;
			case 'articles':
				echo '<span class="type_icon icon-quill"></span>';
				break;
			case 'fiche-id':
				echo '<span class="type_icon icon-user4"></span>';
				break;			
			default:
				// Do nothing, unknown post type
				break;
		}
		?>
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
					<?php edit_post_link( __( 'Editer', 'blankslate' ), "<span class=\"meta-sep\"> </span>\n\t\t\t\t\t\t<span class=\"edit-link\">", "</span>\n\t\t\t\t\t\n" ); ?>
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
				get_template_part( 'entry-footer' ); 
				get_template_part( 'entry', 'meta' );
				?> 
			</footer>
		
		<?php endif; ?>

	</section>
</article> 