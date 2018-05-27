<?php
//Language functions
function lang_initiate(){
  if(defined('ICL_LANGUAGE_CODE')){
    $_SESSION['lang'] = constant('ICL_LANGUAGE_CODE');
  }elseif(function_exists('pll_current_language')){
    $_SESSION['lang'] = pll_current_language();
  }else{
    $languages = constant('THEME_LANGUAGES');
    $_SESSION['lang'] = $languages[0];
  }
  return;
}
add_action('init', 'lang_initiate');
function current_language(){
  if(strlen($_SESSION['lang']) == 0){
    $_SESSION['error'][] = "Language seems to be missing";
    return;
  }
  return $_SESSION['lang'];
}
function get_option_field($fieldname){
  $lang = current_language();
  $return = get_field($fieldname, 'option-'.  $lang);
  return $return;
}
 ?>
