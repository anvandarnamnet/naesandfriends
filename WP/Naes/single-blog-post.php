<?php

get_header();

?>
<article class="narrow">
    <div class="main-inner">
        <div class="meta-info">
            <h1 class="head"><?php the_title(); ?></h1>
            <div class="date-and-links">
                <p class="date"><?php echo get_the_date('d-m-Y'); ?></p>
                <div class="three-links">
                        
                <?php
                $categories = wp_get_post_terms($post->ID, "blog-cat");
                if(!empty($categories)):
                ?>
                    <div class="links">
                        
                        <?php
                        foreach($categories as $cat):  ?>
                            <a href="#" ><?php echo $cat->name ?></a>
                        <?php endforeach; ?>
                        
                    </div>
                        
                <?php endif;  ?>

                </div>
            </div>
        </div>
    </div>
    <section class="flexible">
        <?php
        if( have_rows('flexible_posts') ):
            // loop through the rows of data
            $_SESSION['component_count'] = 0;
           while ( have_rows('flexible_posts') ) : the_row();
               $layout = get_row_layout();
               ?>
               <div class="<?= $layout ?> component" id="component_<?= $_SESSION['component_count'] ?>">
                 <div class="anchor" id="<?= $layout ?>"></div>
                 <div class="anchor" id="c-<?= $_SESSION['component_count'] ?>"></div>
               <?= get_component("templates/components/posts/$layout"); ?>
             </div>
             <?php
             $_SESSION['component_count'] = $_SESSION['component_count'] + 1;
             
           endwhile;
       
       else :
       
         $_SESSION['error'][] = 'No flexible layouts found';
       
       
       
       endif;



        ?>
    </section>
</article> 

<?php


get_footer();

?>