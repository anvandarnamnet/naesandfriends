<div class="main">
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
                            <div class="meet">
                                <a href=""><?php echo $experts['knapptext'] ?></a>
                                <img src="<?php echo site_url('wp-content/themes/Naes/assets/images/right-arrow.png') ?>" alt="">
                            </div> 
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