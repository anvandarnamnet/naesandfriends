<?php
//Navigation helper functions
function wp_nav($args){ ob_start();
  $id = $args['nav_id'];
  $lang = $args['lang'];
  if(strlen($lang) == 0){
    $_SESSION['error'][] = "Language argument missing in Nav: $id";
    return;
  }
  foreach(constant('THEME_LANGUAGES') as $languague){
    if($languague == $lang){
      $lang_correct = true;
    }
  }
  if(!$lang_correct){
    $_SESSION['error'][] = "Invalid language $lang in Nav: $id";
    return;
  }
  foreach(constant('REGISTER_NAVS') as $called_nav){
    if($called_nav == $id){
      $nav_correct = true;
    }
  }
  if(!$nav_correct){
    $_SESSION['error'][] = "Nav $id does not exist";
    return;
  }
  $actual_link = (isset($_SERVER['HTTPS']) ? "https" : "http") . "://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
  if( have_rows('nav_' . $id, "navs-$lang") ):
       ?>
       <nav class="wp_nav nav_<?= $id ?> <?= $args['wrapper_class'] ?>" id="<?= $args['id_tag'] ?>">
       <ul class="nav">
         <?php
      while ( have_rows('nav_' . $id, "navs-$lang") ) : the_row();
          $current = false;
          $nav_group = get_sub_field('nav_group');
          if($actual_link == $nav_group['href']['url']){
            $current = true;
          }
          if(strlen($nav_group['href']['title']) == 0){
            $nav_url = $nav_group['href']['url'];
            $_SESSION['error'][] = "Nav item with url $nav_url returned no title in Nav: $id";
          }
          ?>

          <li class="nav_item <?php if($current){ echo 'nav_item_current'; } ?>">
            <a onclick="<?= $args['onclick'] ?>" target="<?= $nav_group['href']['target']; ?>" href="<?= $nav_group['href']['url']; ?>"><?= $nav_group['href']['title']; ?></a>
          <?php

          if( have_rows('nav_sub')) :
            ?>
            <ul class="sub_nav">
            <?php
            while(have_rows('nav_sub')) : the_row();


              $sub_nav_group = get_sub_field('sub_nav_group');
              $current = false;
              if($actual_link == $sub_nav_group['href']['url']){
                $current = true;
              }
              if(strlen($sub_nav_group['href']['title']) == 0){
                $nav_url = $sub_nav_group['href']['url'];
                $_SESSION['error'][] = "Sub nav item with url $nav_url returned no title in Nav: $id";
              }
              ?>
                <li class="sub_nav_item <?php if($current){ echo 'sub_nav_item_current'; } ?>">
                  <a onclick="<?= $args['onclick'] ?>" target="<?= $sub_nav_group['href']['target']; ?>" href="<?= $sub_nav_group['href']['url']; ?>"><?= $sub_nav_group['href']['title']; ?></a>
                </li>
              <?php

            endwhile;
            ?>
          </ul>
            <?php
          endif;
          ?>
        </li>
          <?php
      endwhile;
      ?>
    </ul>
  </nav>
      <?php
  else :
    $_SESSION['error'][] = "No nav with ID: $id found";

  endif;
  return ob_get_clean();
}

 ?>
