
    <section class="tipsen <?php the_sub_field('bakgrundsfarg'); ?>">
    <div class="main">
        <div class="main-inner">
            <h2><?php the_sub_field('titel'); ?></h2>

            <?php

            $post_objects = get_sub_field('post_object');

            if( $post_objects ): ?>
                <div class="boxes">
                <?php foreach( $post_objects as $post): ?>
                    <?php setup_postdata($post); ?>

                        <a href="<?php the_permalink(); ?>">
                        <div class="box">
                            
                                <div class="image-container">
                                    <img src="<?php the_field('teaser_image'); ?>" alt="">
                                </div>
                                <div class="text-under">
                                    <p class="head"><?php the_title(); ?></p>
                                    <p class="date"><?php echo get_the_date('d-m-Y'); ?></p>

                                   
                                   <?php
                                    $categories = wp_get_post_terms($post->ID, "blog-cat");
                                    if(!empty($categories)):
                                    ?>
                                        <div class="links">
                                            
                                            <?php
                                            foreach($categories as $cat):  ?>
                                                <p href="#" ><?php echo $cat->name ?></p>
                                            <?php endforeach; ?>
                                            
                                        </div>
                                            
                                    <?php endif;  ?>
                                    

                                </div>
                            
                        </div>
                        </a>

                    
                <?php endforeach; ?>
                <div class="boxes">
                <?php wp_reset_postdata();  ?>
            <?php endif; ?>         


        </div>
    </div>  
</section>


 