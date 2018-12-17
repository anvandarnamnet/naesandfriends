<div class="main <?php the_sub_field('bakgrundsfarg'); ?>">
    <div class="main-inner">        
        <section class="experts">
                <h2>Some of our experts</h2>
                <div class="boxes">
                    
                
                
                <?php 

                $repeater = get_sub_field('repeater');

                if($repeater){
                    foreach($repeater as $experts){
                        ?>

                        <div class="expert-box">
                            <div class="yellow">
                                <p class="name"><?php echo $experts['namn'] ?></p>
                                <p class="position"><?php echo $experts['titel'] ?></p>
                            </div>
                            <img src="<?php echo $experts['bild'] ?>" alt="">
                            <p class="description"><?php echo $experts['beskrivning'] ?></p>
                            
                            
                            <?php 

                            $link = get_sub_field('knapp');

                            if( $link ): 
                                $link_url = $link['url'];
                                $link_title = $link['title'];
                                $link_target = $link['target'] ? $link['target'] : 'self';
                                ?>
                            

                                <div class="meet">
                                    <a href="<?php echo esc_url($link_url); ?>" target="<?php echo esc_attr($link_target); ?>"><?php echo esc_html($link_title); ?></a>
                                    <img src="<?php echo site_url('wp-content/themes/Naes/assets/images/right-arrow.png') ?>" alt="">
                                </div> 

                            
                            <?php endif; ?>
                            

                        </div>


                        <?php
                    }
                }
            ?>

            
                   
                </div>
                <div class="button">Show more
                    <img src="<?php echo site_url('wp-content/themes/Naes/assets/images/down-arrow.png') ?>" alt="">
                </div>
        </section>
    </div>
</div>