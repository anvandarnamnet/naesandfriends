<section id="section-5" class="<?php the_sub_field('bakgrundsfarg'); ?>">
            <div class="main">
                <div class="main-inner">
            <div class="continue"><h2><?php the_sub_field('titel'); ?></h2></div>
            <div class="three-images">


            <?php 

                $repeater = get_sub_field('repeater');

                if($repeater){
                    foreach($repeater as $expertise){

                        $post_object = get_posts(array(
                            'post_type' => 'blog-post',
                            'posts_per_page' => 1,
                            'oder' => 'DESC',
                            'orderby' => 'date',
                            'tax_query' => array(
                                array(
                                    'taxonomy' => 'blog-cat',
                                    'field' => 'term_id',
                                    'terms' => $expertise['category']
                                )
                            )
                        ))[0];


                        ?>
                        
                        <div class="three-photos">
                            <a href="<?php the_permalink($post_object->ID) ?>">
                            <div class="image-container" style="background-image: url(<?php echo get_field('teaser_image', $post_object->ID) ?>);"></div>
                            <div class="text-under-image">
                                <?php /*<p class="tui-subject"><?php  ?></p> */ ?>
                                <p class="tui-head"><?php echo $post_object->post_title ?></p>
                                <p class="tui-bread"><?php echo get_the_excerpt($post_object->ID) ?></p>    
                            </div>
                            </a>
                    </div>
                    


                        <?php
                    }
                }
                
            
            
            ?>    
            </div>
        </div>
    </div>
</section>