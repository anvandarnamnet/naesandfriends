<?php
get_header();
if( have_rows('flexible') ):
     // loop through the rows of data
     $_SESSION['component_count'] = 0;
    while ( have_rows('flexible') ) : the_row();
        $layout = get_row_layout();
        ?>
        <div class="<?= $layout ?> component" id="component_<?= $_SESSION['component_count'] ?>">
          <div class="anchor" id="<?= $layout ?>"></div>
          <div class="anchor" id="c-<?= $_SESSION['component_count'] ?>"></div>
        <?= get_component("templates/components/$layout"); ?>
      </div>
      <?php
      $_SESSION['component_count'] = $_SESSION['component_count'] + 1;
      
    endwhile;

else :

  $_SESSION['error'][] = 'No flexible layouts found';



endif;

get_footer();
?>