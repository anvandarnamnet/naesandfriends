
    <section class="tipsen <?php the_sub_field('bakgrundsfarg'); ?>">
    <div class="main">
        <div class="main-inner">
            <h2><?php the_sub_field('titel'); ?></h2>
            <div class="boxes">

                <?php 

                $repeater = get_sub_field('repeater');

                if($repeater){
                    foreach($repeater as $tips){
                        ?>
                        


                        <div class="box">
                            <div class="image-container">
                                    <img src="<?php echo $tips['bild'] ?>" alt="">
                            </div>
                            <div class="text-under">
                                <p class="head"><?php echo $tips['titel'] ?></p>
                                <p class="date">2018-01-02</p>
                                <div class="links">
                                    <a href="#" >Coach</a>
                                    <a href="#" >Marketing</a>
                                    <a href="#" >Podcast</a>
                                </div>
                            </div>
                        </div>




                        <?php
                    }
                }

                ?>

            </div>






            <?php

            $post_objects = get_sub_field('post_objects');

            if( $post_objects ): ?>
                <h2>hoho</h2>
                <div class="boxes">
                <?php foreach( $post_objects as $post): ?>
                    <?php setup_postdata($post); ?>

                        <div class="box">
                            <div class="image-container">
                                <img src="" alt="">
                            </div>
                            <div class="text-under">
                            <a href="<?php the_permalink(); ?>"><p class="head"><?php the_title(); ?></p></a>
                                <p class="date">2018-01-02</p>
                                <div class="links">
                                    <a href="#" >Coach</a>
                                    <a href="#" >Marketing</a>
                                    <a href="#" >Podcast</a>
                                </div>
                            </div>
                        </div>

                    
                <?php endforeach; ?>
                <div class="boxes">
                <?php wp_reset_postdata();  ?>
            <?php endif; ?>         


        </div>
    </div>  
</section>