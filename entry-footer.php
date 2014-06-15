<?php global $post; if ( 'post' == $post->post_type ) : ?>
<div class="entry-footer">
<?php the_tags( '<span class="tag-links"><span class="entry-footer-prep entry-footer-prep-tag-links">' . __('Par ', 'blankslate' ) . '</span>', ", ", "</span>\n\t\t\t\t\t\t<span class=\"meta-sep\"> | </span>\n" ); ?>
<span class="comments-link"><?php comments_popup_link( __( 'Réagir', 'blankslate' ), __( '1', 'blankslate' ), __( '%', 'blankslate' ) ); ?></span>
<?php edit_post_link( __( 'Editer', 'blankslate' ), "<span class=\"meta-sep\"> </span>\n\t\t\t\t\t\t<span class=\"edit-link\">", "</span>\n\t\t\t\t\t\n" ); ?>
</div>
<?php endif; ?>