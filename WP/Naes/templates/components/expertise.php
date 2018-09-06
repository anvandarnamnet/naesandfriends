<section>

    <section class="third-section">
        <div class="border-top"></div>
        <div class="content">
            <p>Our Expertise</p>
            <div class="boxes">
                <div class="img-green-1"><img src="<?php the_sub_field('expertise_bild_1'); ?>" alt=""></div>
                <div class="img-green-2"><img src="<?php the_sub_field('expertise_bild_2'); ?>" alt=""></div>
                <div class="img-green-3"><img src="<?php the_sub_field('expertise_bild_3'); ?>" alt=""></div>
                <div class="box">
                    <p class="t1"><?php the_sub_field('expertice_title'); ?></p>
                    <p class="t2"><?php the_sub_field('expertice_text'); ?></p>
                </div>
                <div class="box">
                        <p class="t1"><?php the_sub_field('expertice_title2'); ?></p>
                        <p class="t2"><?php the_sub_field('expertice_text2'); ?></p>
                </div>
                <div class="box">
                        <p class="t1"><?php the_sub_field('expertice_title3'); ?></p>
                        <p class="t2"><?php the_sub_field('expertice_text3'); ?></p>
                </div>
            </div>
            <?php 
                $repeater = get_sub_field('repeater');
                foreach($repeater as $expertise){
                    ?>
                    <div classs="box">
                        <p class="t1"><?php echo $expertise['text1'] ?>
                    </div>
                    <?php
                }

            
            
            
            ?>
        </div>
    </section>
    
    
</section>