
    <section class="tips">
        <?php the_sub_field('titel'); ?>
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
    </section>