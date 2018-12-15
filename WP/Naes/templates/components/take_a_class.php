<div class="main <?php the_sub_field('bakgrundsfarg'); ?>">
        <section class="take-a-class">
                <div class="content">
                    <h2 class="head"><?php the_sub_field('titel'); ?></h2>
                    <div class="text-and-image">
                        <div class="text">
                            <p class="top"><?php the_sub_field('ingress'); ?></p>
                            <p class="mid"><?php the_sub_field('text'); ?></p>

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
                        <div class="videocontainer">
                        <video controls>
                            <source src="<?php echo site_url('wp-content/themes/Naes/assets/images/mov_bbb.mp4') ?>" type="video/mp4">
                            Your browser does not support HTML5 video.
                        </video>
                        </div>

                    </div>
                </div>
        </section>
</div
