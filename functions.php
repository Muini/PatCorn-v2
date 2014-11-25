<?php
/*
*	Use latest jQuery release
*/
if( !is_admin() ){
	wp_deregister_script('jquery');
	wp_register_script('jquery', ("http://code.jquery.com/jquery-latest.min.js"), false, '');
	wp_enqueue_script('jquery');
}
/*
* Custom Loop
*/
function custom_loop( $query ) {
    if ( $query->is_home() && $query->is_main_query() ) {
        $query->set( 'post_type', array( 'post', 'articles', 'fiche-id' ) );
//        $query->set('orderby', 'rand' );
    }
}
add_action( 'pre_get_posts', 'custom_loop' );

function revcon_change_post_label() {
    global $menu;
    global $submenu;
    $menu[5][0] = 'Vidéos';
    $submenu['edit.php'][5][0] = 'Vidéos';
    $submenu['edit.php'][10][0] = 'Ajouter une Vidéo';
    $submenu['edit.php'][16][0] = 'Vidéos Tags';
    echo '';
}
function revcon_change_post_object() {
    global $wp_post_types;
    $labels = &$wp_post_types['post']->labels;
    $labels->name = 'Vidéos';
    $labels->singular_name = 'Vidéo';
    $labels->add_new = 'Ajouter une vidéo';
    $labels->add_new_item = 'Ajouter une vidéo';
    $labels->edit_item = 'Modifier une vidéo';
    $labels->new_item = 'Vidéo';
    $labels->view_item = 'Voir la vidéo';
    $labels->search_items = 'Rechercher une vidéo';
    $labels->not_found = 'Aucune vidéos trouvées';
    $labels->not_found_in_trash = 'Aucune vidéos trouvées dans la corbeille';
    $labels->all_items = 'Toutes les vidéos';
    $labels->menu_name = 'Vidéos';
    $labels->name_admin_bar = 'Vidéos';
}
//Editeur visuel du contenu
//add_filter('user_can_richedit' , create_function('' , 'return true;') , 50);

add_action( 'admin_menu', 'revcon_change_post_label' );
add_action( 'init', 'revcon_change_post_object' );

function is_type_page() { // Check if the current post is a page
	global $post;

	if ($post->post_type == 'page') {
		return true;
	} else {
		return false;
	}
}

//Disques
function disqus_count($disqus_shortname) {
    wp_enqueue_script('disqus_count','http://'.$disqus_shortname.'.disqus.com/count.js');
    echo '<a href="'. get_permalink() .'#disqus_thread"></a>';
}
function my_function_admin_bar(){
    return false;
}
add_filter( 'show_admin_bar' , 'my_function_admin_bar');

add_action('save_post', 'save_draft_video_thumbnail', 100, 1);

function save_draft_video_thumbnail($post_id) {
	$postdata = get_postdata($post_id);
	if ($postdata['post_status'] == 'draft') {
		get_video_thumbnail( $post_id );
	}
}
add_action('init','random_post');
function random_post() {
       global $wp;
       $wp->add_query_var('random');
       add_rewrite_rule('random/?$', 'index.php?random=1', 'top');
}

add_action('template_redirect','random_template');
function random_template() {
       if (get_query_var('random') == 1) {
               $posts = get_posts('post_type=post&orderby=rand&numberposts=1');
               foreach($posts as $post) {
                       $link = get_permalink($post);
               }
               wp_redirect($link,307);
               exit;
       }
}
?>
