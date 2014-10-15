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
		<footer>
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
			      'message' => 'Aucun post similaire.'
			    )
			  ) ?>
			</ul>
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
				function drawSomething( $thing, $label, $ico )
				{
				    $string = "<div class='equipe_encas hentry'>
				    			<span class='$ico'></span>
				    			<h5>$label</h5>
				    			<p class='search_author'>$thing</p>
				    			</div>
				    ";
				    return $string;
				}
				//Crew
				if( get_field('crew') )
					echo drawSomething( get_field_object('crew')[value], get_field_object('crew')[label], "icon-user2" );
				//Super Crew
				if( get_field('super_crew') )
					echo drawSomething( get_field_object('super_crew')[value], get_field_object('super_crew')[label], "icon-users2" );
				//Mega Crew
				if( get_field('mega_crew') )
					echo drawSomething( get_field_object('mega_crew')[value], get_field_object('mega_crew')[label], "icon-home" );
				//Giga Crew
				if( get_field('giga_crew') )
					echo drawSomething( get_field_object('giga_crew')[value], get_field_object('giga_crew')[label], "icon-office" );
				//Idée Originale
				if( get_field('idee_originale') )
					echo drawSomething( get_field_object('idee_originale')[value], get_field_object('idee_originale')[label], "icon-feed" );
				//Auteur
				if( get_field('auteur') )
					echo drawSomething( get_field_object('auteur')[value], get_field_object('auteur')[label], "icon-bubble" );
				//Scénario
				if( get_field('scenario') )
					echo drawSomething( get_field_object('scenario')[value], get_field_object('scenario')[label], "icon-pen" );
				//Réalisateur
				if( get_field('realisateur') )
					echo drawSomething( get_field_object('realisateur')[value], get_field_object('realisateur')[label], "icon-bullhorn" );
				//Acteur
				if( get_field('acteur') )
					echo drawSomething( get_field_object('acteur')[value], get_field_object('acteur')[label], "icon-users" );
				//Musique
				if( get_field('musique') )
					echo drawSomething( get_field_object('musique')[value], get_field_object('musique')[label], "icon-music" );
				//Chef Opérateur
				if( get_field('chef_operateur') )
					echo drawSomething( get_field_object('chef_operateur')[value], get_field_object('chef_operateur')[label], "icon-user" );
				//Prise de Vue
				if( get_field('prise_de_vue') )
					echo drawSomething( get_field_object('prise_de_vue')[value], get_field_object('prise_de_vue')[label], "icon-camera2" );
				//Animateur
				if( get_field('animation') )
					echo drawSomething( get_field_object('animation')[value], get_field_object('animation')[label], "icon-user" );
				//Monteur
				if( get_field('monteur') )
					echo drawSomething( get_field_object('monteur')[value], get_field_object('monteur')[label], "icon-screen" );
				//Compositing
				if( get_field('compositing') )
					echo drawSomething( get_field_object('compositing')[value], get_field_object('compositing')[label], "icon-user" );
				//Prise Son
				if( get_field('prise_son') )
					echo drawSomething( get_field_object('prise_son')[value], get_field_object('prise_son')[label], "icon-headphones" );
				//Sound Design
				if( get_field('sound_design') )
					echo drawSomething( get_field_object('sound_design')[value], get_field_object('sound_design')[label], "icon-user" );
				//Costume(s)
				if( get_field('costume(s)') )
					echo drawSomething( get_field_object('costume(s)')[value], get_field_object('costume(s)')[label], "icon-scissors" );
				//Superviseur
				if( get_field('superviseur') )
					echo drawSomething( get_field_object('superviseur')[value], get_field_object('superviseur')[label], "icon-user4" );
				//Avec
				if( get_field('avec') )
					echo drawSomething( get_field_object('avec')[value], get_field_object('avec')[label], "icon-tag" );
				//Producteurs
				if( get_field('producteur') )
					echo drawSomething( get_field_object('producteur')[value], get_field_object('producteur')[label], "icon-coin" );
				//Le saviez-vous ?
				if( get_field('le_saviez-vous') )
					echo drawSomething( get_field_object('le_saviez-vous')[value], get_field_object('le_saviez-vous')[label], "icon-info" );
			?>
			</div>
		</aside>
	<?php endwhile; endif; ?>
</article>
<?php get_footer(); ?>