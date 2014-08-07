<?php global $authordata; ?>
<div class="entry-meta">
<?php if ( is_singular() || get_post_type()=='articles' ) : ?>
<span class="author vcard"><a class="url fn n" href="<?php echo get_author_posts_url(get_the_author_meta('ID')); ?>" title="<?php printf( __( 'Voir tous les posts de %s', 'blankslate' ), $authordata->display_name ); ?>"><?php the_author(); ?></a></span>
<?php endif;?>
<span class="cat-links"><?php echo get_the_category_list(' '); ?></span>
<span class="entry-date"><abbr class="published" title="<?php the_time('Y-m-d\TH:i:sO') ?>"><?php the_time( get_option( 'date_format' ) ); ?></abbr></span>
<?php if ( is_singular() ) : ?>
<?php edit_post_link( __( 'Editer', 'blankslate' ), "<span class=\"edit-link\">", "</span>\n\t\t\t\t\t" ) ?>
<?php endif;?>
</div>