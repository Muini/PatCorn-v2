<?php get_header(); ?>
<article id="article-single">
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
		<section class="article-content">
			<?php the_content(); ?>
		</section>
		<footer>
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
				//Ecrit par
				drawSomething( "ecrit_par", "icon-pen" );
				//Source
				drawSomething( "source", "icon-newspaper" );
			?>
			</div>
		</aside>
	<?php endwhile; endif; ?>
</article>
<?php get_footer(); ?>