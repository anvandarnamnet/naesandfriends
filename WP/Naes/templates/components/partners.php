<div class="main <?php the_sub_field('bakgrundsfarg'); ?>">
    <div class="main-inner">

        <section id="partners">
            <h2>Our partners</h2>
            <div id="partners-container" class="partners-container">



                 <?php 

                    $repeater = get_sub_field('repeater');

                    $count = 0;

                    if($repeater){
                        foreach($repeater as $partner){
                            $count++;
                ?>

                    <div class="single-partner <?php echo $count > 3 ? 'show-more': null;?>">
                            <div class="image-container">
                                <img src="<?php echo $partner['bild'] ?>" alt="image">
                            </div>
                            <div class="text-under-image">
                                <p class="tui-subject"><?php echo $partner['titel'] ?></p>
                                <p class="tui-bread"><?php echo $partner['text'] ?></p>    
                            </div>
                    </div>
                    
                <?php
                    }
                }

                ?>




            </div>
            <?php if($count > 3): ?>
                <button id="show-more-partners" class="button"><?php _e("Show more", 'naes') ?></button>
            <?php endif; ?>
        </section>
    </div>
</div>