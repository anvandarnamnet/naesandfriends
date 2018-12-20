<?php
//Theme hooks and actions

function theme_init(){
  do_action('theme_init');
  return;
}
add_action('init', 'theme_init');

 ?>
