<div class="main">
    <div class="main-inner">
        <section class="skill-top">
                <div class="border-top"></div>
                <div class="content">
                    <div class="image"><img src="<?php the_sub_field('skillbild'); ?>" alt=""></div>
                    <div class="text">
                        <p class="head"><?php the_sub_field('rubrik'); ?></p>
                        <p class="subhead"><?php the_sub_field('underrubrik'); ?></p>
                        <ul>

                            <?php 

                            $repeater = get_sub_field('lista');

                            if($repeater){
                                foreach($repeater as $lista){
                                    ?>
                                    
                                    <li><?php echo $lista['listitem'] ?></li> 

                                    <?php
                                }
                            }
                            ?>








                        </ul>
                        <div class="boxes">
                            <div class="box-1">Read more</div>
                            <div class="box-2">Contact us</div>
                        </div>
                    </div>
                </div>
        </section>
    </div>
</div> 