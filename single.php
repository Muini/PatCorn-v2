<?php get_header(); ?>
<?php if ( has_category( "serie" ) ): ?>
<article id="content-single" class="une_serie">
<?php else: ?>
<article id="content-single">
<?php endif; ?>
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
		<footer>
			<?php
			function drawEpisodes( $acfname ){
				global $post;
				if( get_field( $acfname ) )
				{
					$field = get_field_object( $acfname );
					if ( has_category( "episode" ) ){
						echo '<section class="episodes">';
						echo '<h4 class="section_title">'.$field[label].'</h4>';
						$value = $field[value];
						foreach ( $value as $post ) :
							setup_postdata( $post ); ?> 
							<div class="episode hentry">
								<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
								<?php the_post_thumbnail('thumbnail'); ?>
								<?php 
									if($acfname == "episode_suivant")
										echo '<span class="icon-play3"></span>'
								?>
								<p><?php the_title(); ?></p></a>
							</div>
						<?php
						endforeach; 
						wp_reset_postdata();
						echo '</section>';
					}else{
						echo '<section class="episodes">';
						echo '<h4 class="section_title">'.$field[label].'</h4>';
						echo '<ul>';
						$value = $field[value];
						foreach ( $value as $post ) :
							setup_postdata( $post ); ?> 
							<li class="episode hentry">
								<a target="_blank" href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
								<?php the_post_thumbnail('thumbnail'); ?>
								<p><?php the_title(); ?></p></a>
							</li>
						<?php
						endforeach; 
						wp_reset_postdata();
						echo '</ul>';
						echo '</section>';
					}
				}
			}
			if ( has_category( "episode" ) ){
				echo '<div id="footer_episode">';
				drawEpisodes('nom_de_la_serie');
				drawEpisodes('episode_suivant');
				echo '</div>';
			}
			drawEpisodes('les_episodes');
			drawEpisodes('saison_1');
			drawEpisodes('saison_2');
			drawEpisodes('saison_3');
			drawEpisodes('saison_4');
			drawEpisodes('saison_5');
			drawEpisodes('saison_6');
			?>
			<?php if ( !has_category( "serie" ) ): ?>
			<h3 class="section_title">Vidéos Similaires</h3>
			<ul class="article_similaire dpe-flexible-posts">
			  <?php do_action(
			    'related_posts_by_category',
			    array(
			      'orderby' => 'RAND',
			      'order' => 'DESC',
			      'limit' => 5,
			      'echo' => true,
			      'before' => '<li class="hentry">',
			      'inside' => '<h4>',
			      'outside' => '</h4>',
			      'after' => '</li>',
			      'rel' => 'nofollow',
			      'type' => 'post',
			      'image' => array(50, 50),
			      'message' => 'Aucun post similaire.',
                  'post_status' => 'publish',
                  'category__not_in' => array(54,55,56,70)
			    )
			  ) ?>
			</ul>
			<?php endif; ?>
			<?php //get_template_part( 'nav', 'below-single' ); ?>
			<?php comments_template('', true); ?>
		</footer>
		<aside>
			<?php 
			if ( has_post_thumbnail() ) {
				the_post_thumbnail('large');
			}
			?>
			
			<?php 
				if( get_field( "duree" ) ): ?>
				    <p class="duree"><?php the_field( "duree" ); ?></p>
				<?php endif;
			?>

			<span class="cat-links"><?php echo get_the_category_list(' '); ?></span>

			<div class="equipe">
			<?php
				function drawSomething( $acfname, $ico )
				{
					if( get_field($acfname) )
					{
						$field = get_field_object( $acfname );
						$label = $field[label];
						$thing = $field[value];
					    $string = "<div class='equipe_encas hentry'>
					    			<span class='$ico'></span>
					    			<h5>$label</h5>
					    			<p class='search_author'>$thing</p>
					    			</div>
					    ";
					    echo $string;
					}
				}
				//Crew
				drawSomething( "crew", "icon-user2" );
				//Super Crew
				drawSomething( "super_crew", "icon-users2" );
				//Mega Crew
				drawSomething( "mega_crew", "icon-home" );
				//Giga Crew
				drawSomething( "giga_crew", "icon-office" );
				//Idée Originale
				drawSomething( "idee_originale", "icon-feed" );
				//Auteur
				drawSomething( "auteur", "icon-bubble" );
				//Scénario
				drawSomething( "scenario", "icon-pen" );
				//Réalisateur
				drawSomething( "realisateur", "icon-bullhorn" );
				//Acteur
				drawSomething( "acteur", "icon-users" );
				//Musique
				drawSomething( "musique", "icon-music" );
				//Chef Opérateur
				drawSomething( "chef_operateur", "icon-user" );
				//Prise de Vue
				drawSomething( "prise_de_vue", "icon-camera2" );
				//Animateur
				drawSomething( "animation", "icon-user" );
				//Monteur
				drawSomething( "monteur", "icon-screen" );
				//Compositing
				drawSomething( "compositing", "icon-user" );
				//Prise Son
				drawSomething( "prise_son", "icon-headphones" );
				//Sound Design
				drawSomething( "sound_design", "icon-user" );
				//Costume(s)
				drawSomething( "costume(s)", "icon-scissors" );
				//Superviseur
				drawSomething( "superviseur", "icon-user4" );
				//Avec
				drawSomething( "avec", "icon-tag" );
				//Producteurs
				drawSomething( "producteur", "icon-coin" );
				//Le saviez-vous ?
				drawSomething( "le_saviez-vous", "icon-info" );
			?>
			</div>
		</aside>
	<?php endwhile; endif; ?>
</article>
<?php get_footer(); ?>