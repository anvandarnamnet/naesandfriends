<?php
function required_functions(){
  $functions = array('wp_nav', 'get_component');
  $f_errors = array();
  foreach($functions as $function){
    if(!function_exists($function)){
      $f_errors[] = $function;
    }
  }

  if(!empty($f_errors)){
    $output_text = 'The following functions are missing or not imported correctly: </br>';
    foreach($f_errors as $error){
      $output_text = $output_text . '<b>' . $error . '()</b></br>';
    }
    $login_url = wp_login_url();
    $output_text = $output_text . '</br><a href="'. $login_url . '">Login</a>';

    wp_die($output_text);
  }
  return;
}
function debug_config(){
  foreach(constant('THEME_LANGUAGES') as $lang){
    if(!empty(constant('THEME_LANGUAGES')) && strlen($lang) == 0){
      wp_die("A language is not set up correctly in config.php");
    }
  }
  foreach(constant('REGISTER_NAVS') as $nav){
    if(!empty(constant('REGISTER_NAVS')) && strlen($nav) == 0){
      wp_die("A NAV is not set up correctly in config.php");
    }
  }

}
function error_init(){
  session_start();
  $_SESSION['error'] = array();
  /*
  if(constant('PHP_VERSION') <= 7.0){
    $phpver = constant('PHP_VERSION');
    wp_die("This theme requires a php-version of atleast 7.0. You are currently running php $phpver");
  }*/
  $debug = constant('DEBUG_THEME');
  if($debug){
    //Check for required functions, useful to have on if white-screening.
    required_functions();
  }
  return;
}
add_action('init', 'error_init', 1);
function error_return(){ ob_start();

  $debug = constant('DEBUG_THEME');
  if($debug && !empty($_SESSION['error'])) :
   ?>
  <error class="theme_error"></br>
  <?php
  foreach($_SESSION['error'] as $theme_error){
     echo '<b>' . $theme_error . '</b></br>';

  }
  $_SESSION['error'] = array();
   ?>
  </error>
  <?php
  $return = ob_get_clean();
  echo $return;
  endif;
  return;
}
add_action('wp_footer', 'error_return');
 ?>
