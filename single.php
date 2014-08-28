<?php get_header(); ?>
<article id="content-single">
	<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
		<header>
			<div class="single-title">
				<h1 class="entry-title">
					<?php the_title(); ?>
				</h1>
				<hr />
			</div>
			<?php if(is_sticky()) //Si l'article est mis en avant
				echo '<div class="enAvant-single"><p>Au Top !</p></div>'; ?>
			<?php edit_post_link( __( 'Editer', 'blankslate' ), "<span class=\"edit-link\">", "</span>\n\t\t\t\t\t" ) ?>
			<span class="entry-date"><abbr class="published" title="<?php the_time('Y-m-d\TH:i:sO') ?>"><?php the_time( get_option( 'date_format' ) ); ?></abbr></span>
		</header>
		<?php get_template_part('entry','content'); ?>
		<aside>
			<?php 
			if ( has_post_thumbnail() ) {
				the_post_thumbnail('large');
			}
			?>
			<span class="cat-links"><?php echo get_the_category_list(' '); ?></span>

			<div class="equipe">
			<?php
			$fields = get_fields();
			if( $fields )
			{
				//echo '<h3>Informations</h3>';
				echo '<div id="infos_bloc">';
				foreach( $fields as $field_name => $value )
				{
					if($value && $field_name)
					{
						// get_field_object( $field_name, $post_id, $options )
						// - $value has already been loaded for us, no point to load it again in the get_field_object function
						$field = get_field_object($field_name, false, array('load_value' => false));
						
						if($field_name=='photo'){
							echo '<div class="id_photo"><img src="'.$value.'" alt="Photo"/></div>';
						}else if($field_name=='video'
								||$field_name=='liaison'
								||$field_name=='nom_de_la_serie'
								||$field_name=='les_episodes'
								||$field_name=='saison_1'
								||$field_name=='saison_2'
								||$field_name=='saison_3'
								||$field_name=='saison_4'
								||$field_name=='saison_5'
								||$field_name=='saison_6'
								){
							echo '<h5>'.$field['label'].'</h5>';
							echo '<ul>';
						/*	for($i=0;$i<sizeof($value);$i++){
								echo '<li><a href="'.$value[$i].'" target="_blank">'.$value[$i].'</a></li>';
							}*/
							foreach ( $value as $post ) :
								setup_postdata( $post ); ?> 
								<li class="fiche_id_video">
									<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
									<?php the_post_thumbnail('thumbnail'); ?>
									<p><?php the_title(); ?></p></a>
								</li>
							<?php
							endforeach; 
							wp_reset_postdata();
							echo '</ul>';
						}else if($field_name=='source'){
							echo '<div class="equipe_encas">';
							echo '<h5>'.$field['label'].'</h5>';
							echo '<p><a href="'.$value.'" target="_blank">Lien vers la source</a></p>';
							echo '</div>';
						}else{
							echo '<div class="equipe_encas">';		
							echo '<span class="icon-user"></span><h5>'.$field['label'].'</h5>';
							echo '<p>'.$value.'</p>';
							echo '</div>';
						}
					}
				}
				echo '</div>';
			}
			?>
			</div>
		</aside>
		<footer>
			<ul class="article_similaire dpe-flexible-posts">
			  <?php /* do_action(
			    'related_posts_by_category',
			    array(
			      'orderby' => 'RAND',
			      'order' => 'DESC',
			      'limit' => 6,
			      'echo' => true,
			      'before' => '<li>',
			      'inside' => '<h4>',
			      'outside' => '</h4>',
			      'after' => '</li>',
			      'rel' => 'nofollow',
			      'type' => 'post',
			      'image' => array(50, 50),
			      'message' => 'Aucun post similaire.'
			    )
			  ) */?>
			</ul>
			<?php get_template_part( 'nav', 'below-single' ); ?>
			<?php comments_template('', true); ?>
		</footer>
	<?php endwhile; endif; ?>
</article>
<?php get_footer(); ?>