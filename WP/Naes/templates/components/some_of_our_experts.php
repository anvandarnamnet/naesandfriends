<div class="main <?php the_sub_field('bakgrundsfarg'); ?>">
    <div class="main-inner">        
        <section class="experts">
                <h2>Some of our experts</h2>
                <div class="boxes">
                    
                
                
                <?php 

                $repeater = get_sub_field('chosen_experts');

                if($repeater){
                    $count = 0;
                    foreach($repeater as $post){
                        $count++;
                        setup_postdata($post);
                        ?>

                        <div class="expert-box <?php echo $count > 3 ? "show-more" : null; ?>">
                            <div class="yellow">
                                <p class="name"><?php the_title() ?></p>
                                <p class="position"><?php the_field('position') ?></p>
                            </div>
                            <img src="<?php the_field('image') ?>" alt="">
                            <p class="description"><?php the_field('description') ?></p>
                            
                            
                            <?php 

                            $link = get_field('more_link');

                            if( $link ): 
                                $link_url = $link;
                                ?>
                            

                                <div class="meet">
                                    <a href="<?php echo esc_url($link_url); ?>" target="_self"><?php _e('More') ?></a>
                                    <img src="<?php echo site_url('wp-content/themes/Naes/assets/images/right-arrow.png') ?>" alt="">
                                </div> 

                            
                            <?php endif; ?>
                            

                        </div>


                        <?php
                    }
                    wp_reset_postdata();
                }
            ?>

            
                   
                </div>
                <?php if(sizeof($repeater) > 3): ?>
                    <button id="show-more-expertises" class="button">Show more</button>
                <?php endif; ?>
        </section>
    </div>
</div>