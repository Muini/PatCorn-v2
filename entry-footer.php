<?php global $post; if ( 'post' == $post->post_type ) : ?>
	<div class="entry-footer">
		<?php the_tags( '<span class="tag-links"><span class="entry-footer-prep entry-footer-prep-tag-links">' . __('Par : ', 'blankslate' ) . '</span>', ", ", "</span>\n\t\t\t\t\t\t\n" ); ?>
		<?php if ( is_singular() ) : ?>
			<span class="comments-link"><?php comments_popup_link( __( 'Réagir', 'blankslate' ), __( '1', 'blankslate' ), __( '%', 'blankslate' ) ); ?></span>
		<?php endif; ?>
	</div>
<?php endif; ?>