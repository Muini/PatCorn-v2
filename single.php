<?php get_header(); ?>
<article id="content">
<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
<?php
$fields = get_fields();
if( $fields )
{
	/*
	foreach( $fields as $field_name => $value )
	{
		if($value && $field_name)
		{
			// get_field_object( $field_name, $post_id, $options )
			// - $value has already been loaded for us, no point to load it again in the get_field_object function
			$field = get_field_object($field_name, false, array('load_value' => false));
			
			if($field_name=='photo'){
				echo '<div class="id_photo"><img src="'.$value.'" alt="Photo"/></div>';
			}else if($field_name=='video'||$field_name=='liaison'||$field_name=='nom_de_la_serie'||$field_name=='les_episodes'){
				echo '<h5>'.$field['label'].'</h5>';
				echo '<ul>';
			/*	for($i=0;$i<sizeof($value);$i++){
					echo '<li><a href="'.$value[$i].'" target="_blank">'.$value[$i].'</a></li>';
				}*/
				/*
				foreach ( $value as $post ) :
					setup_postdata( $post ); ?> 
					<li class="fiche_id_video">
						<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
						<?php the_post_thumbnail('thumbnail'); ?>
						<?php the_title(); ?></a>
					</li>
				<?php
				endforeach; 
				wp_reset_postdata();
				echo '</ul>';
			}else if($field_name=='source'){
				echo '<h5>'.$field['label'].'</h5>';
				echo '<p><a href="'.$value.'" target="_blank">Lien vers la source</a></p>';
			}else{
				echo '<h5>'.$field['label'].'</h5>';
				echo '<p>'.$value.'</p>';
			}
		}
	}*/
}
?>
<?php get_template_part( 'entry' ); ?>

<div class="equipe">
<?php
if( $fields )
{
	echo '<h3>Informations</h3>';
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
				echo '<h5>'.$field['label'].'</h5>';
				echo '<p>'.$value.'</p>';
				echo '</div>';
			}
		}
	}
	echo '</div>';
}
?>
</div>
<h3>Articles Similaires</h3>
<?php //display_related_posts_via_categories() ?>
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
<?php endwhile; endif; ?>
</article>
<?php get_sidebar(); ?>
<?php get_footer(); ?>