<?php
//Wordpress cleanup & Hacks

//Remove wp welcome panel
remove_action('welcome_panel', 'wp_welcome_panel');

//Remove version control
function remove_version() {
  return '';
}
add_filter('the_generator', 'remove_version');

function removeHeaderStuff() {
  // Remove stuff from wp_head()
  remove_action( 'wp_head', 'feed_links_extra', 3 ); // Display the links to the extra feeds such as category feeds
  remove_action( 'wp_head', 'print_emoji_detection_script', 7 ); // Emoji
  remove_action( 'wp_print_styles', 'print_emoji_styles' ); // Emoji css
  remove_action( 'wp_head', 'feed_links', 2 ); // Display the links to the general feeds: Post and Comment Feed
  remove_action( 'wp_head', 'rsd_link' ); // Display the link to the Really Simple Discovery service endpoint, EditURI link
  remove_action( 'wp_head', 'wlwmanifest_link' ); // Display the link to the Windows Live Writer manifest file.
  remove_action( 'wp_head', 'index_rel_link' ); // index link
  remove_action( 'wp_head', 'parent_post_rel_link', 10, 0 ); // prev link
  remove_action( 'wp_head', 'start_post_rel_link', 10, 0 ); // start link
  remove_action( 'wp_head', 'adjacent_posts_rel_link', 10, 0 ); // Display relational links for the posts adjacent to the current post.
  remove_action( 'wp_head', 'rel_canonical' );
  remove_action( 'wp_head', 'wp_shortlink_wp_head' );
  remove_action( 'wp_head', 'rest_output_link_wp_head' );
  remove_action( 'wp_head', 'wp_oembed_add_discovery_links' );

}
add_action( 'wp_enqueue_scripts', 'removeHeaderStuff' );

/*
  Edit wp-admin menu
*/
function remove_admin_menus() {

  foreach(constant('HIDE_ADMIN_PAGES') as $ADMIN_PAGE){
    remove_menu_page($ADMIN_PAGE);
  }
  // Remove menu items
}
add_action( 'admin_menu', 'remove_admin_menus' );
function hide_admin_bar(){
  if(constant('THEME_ENV_DEV')){
    add_filter('show_admin_bar', '__return_false');
  }
}
add_action('init', 'hide_admin_bar');
function disable_feed() {
wp_die( __('No feed available,please visit our <a href="'. get_bloginfo('url') .'">homepage</a>!') );
}

add_action('do_feed', 'disable_feed', 1);
add_action('do_feed_rdf', 'disable_feed', 1);
add_action('do_feed_rss', 'disable_feed', 1);
add_action('do_feed_rss2', 'disable_feed', 1);
add_action('do_feed_atom', 'disable_feed', 1);
add_action('do_feed_rss2_comments', 'disable_feed', 1);
add_action('do_feed_atom_comments', 'disable_feed', 1);
 ?>
