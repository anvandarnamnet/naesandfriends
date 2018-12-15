<div class="main <?php the_sub_field('bakgrundsfarg'); ?>">
    <div class="main-inner">
    

        <section class="meet-employee">



            <div class="background-fill">
                <div class="image"><img src="<?php the_sub_field('bild') ?>" alt=""></div>
                <div class="mobile-image"><img src="<?php the_sub_field('bild') ?>" alt=""></div>
                <div class="yellow-box">
                    <p class="t1"><?php the_sub_field('titel') ?></p>
                    <p class="t2"><?php the_sub_field('text') ?></p>
                </div>
                
                <?php 
                    $link = get_sub_field('knapp');

                    if( $link ): 
                        $link_url = $link['url'];
                        $link_title = $link['title'];
                        $link_target = $link['target'] ? $link['target'] : 'self';
                        ?>
                        <a class="button" href="<?php echo esc_url($link_url); ?>" target="<?php echo esc_attr($link_target); ?>"><?php echo esc_html($link_title); ?></a>
                <?php endif; ?>

            </div>
        

        </section>
    </div>

</div>    