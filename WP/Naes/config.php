<?php
//Only edit here if you know what you are doing
define('PROD_URL', 'naesandfriends.se');

define('PHP_VERSION', phpversion());

$cur_url = $_SERVER[HTTP_HOST];
if(constant('PROD_URL') != $cur_url){
  //Site is dev
  define('THEME_ENV_DEV', true);
  define('DEBUG_THEME', true);
}else{
  //Site is prod
  define('THEME_ENV_DEV', false);
  define('DEBUG_THEME', false);
}

if(constant('PHP_VERSION') >= 7){
  //PHP 7.0+ required to use array in define(), if your server has a lower php version, some things
  //needs to be rebuilt.
  define('HIDE_ADMIN_PAGES', array(
    'edit-comments.php',
  ));
  //Hide admin pages from the user
  define('THEME_LANGUAGES', array(
    'sv',
  ));
  //Define theme languages, uppercase-codes for WPML, lowercase fo polylang
  define('REGISTER_NAVS', array(
    'top',
    'footer',
  ));
  //Register navs in acf
}


$rest_controller = new NAES_REST_Controller();
$rest_controller->hook_rest_server();

function contact_messages($messages){
  $messages['mail_to'] = "noah@getqte.se";
  return $messages;
}
add_filter("qterest_contact_messages", "contact_messages");


function my_acf_google_map_api( $api ){
	
	$api['key'] = 'AIzaSyBxTYEufX3g-GybCqAWq04EPDTSgarzHT8';
	
	return $api;
	
}

add_filter('acf/fields/google_map/api', 'my_acf_google_map_api');
 ?>
