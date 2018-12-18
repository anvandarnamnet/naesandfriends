<div class="main <?php the_sub_field('bakgrundsfarg'); ?>">
    <div class="main-inner">        
        <section class="experts">
                <h2>Some of our experts</h2>
                <div class="boxes">
                    
                
                
                <?php 

                $repeater = get_sub_field('repeater');

                if($repeater){
                    $count = 0;
                    foreach($repeater as $experts){
                        $count++;
                        ?>

                        <div class="expert-box <?php echo $count > 3 ? "show-more" : null; ?>">
                            <div class="yellow">
                                <p class="name"><?php echo $experts['namn'] ?></p>
                                <p class="position"><?php echo $experts['titel'] ?></p>
                            </div>
                            <img src="<?php echo $experts['bild'] ?>" alt="">
                            <p class="description"><?php echo $experts['beskrivning'] ?></p>
                            
                            
                            <?php 

                            $link = $experts['knapp'];

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
                <?php if(sizeof($repeater) > 3): ?>
                    <button id="show-more-expertises" class="button">Show more</button>
                <?php endif; ?>
        </section>
    </div>
</div>