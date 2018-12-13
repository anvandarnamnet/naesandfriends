<section id="section-5">
            <div class="main">
                <div class="main-inner">
            <div class="continue"><h2><?php the_sub_field('titel'); ?></h2></div>
            <div class="three-images">


            <?php 

                $repeater = get_sub_field('repeater');

                if($repeater){
                    foreach($repeater as $expertise){
                        ?>
                        
                        <div class="three-photos">
                            <div class="image-container" style="background-image: url(<?php echo $expertise['bild'] ?>);"></div>
                            <div class="text-under-image">
                                <p class="tui-subject"><?php echo $expertise['posttype'] ?></p>
                                <p class="tui-head"><?php echo $expertise['titel'] ?></p>
                                <p class="tui-bread"><?php echo $expertise['text'] ?></p>    
                            </div>
                    </div>


                        <?php
                    }
                }
                
            
            
            ?>




                   
                  

                    
                   
            </div>
</div>
</div>
    </section>