<section id="testimonials" class="<?php the_sub_field('bakgrundsfarg'); ?>">
    <div class="main">
        <div class="main-inner">
            <div class="continue"><h2><?php the_sub_field('titel'); ?></h2></div>
            <div class="three-images">

            <?php 
            $post_objects = get_sub_field('testimonials');

            if( $post_objects ): ?>
                
                <?php foreach( $post_objects as $post): // variable must be called $post (IMPORTANT) ?>
                    <?php setup_postdata($post); ?>
                    

                    <div class="three-photos">
                        <a href="<?php the_permalink(); ?>">
                        <div class="image-container" style="background-image: url(<?php the_field('bild') ?>);"></div>
                        <div class="text-under-image">
                            <p class="tui-subject"><?php the_field('position') ?></p>
                            <p class="tui-head"><?php the_title(); ?></p>
                            <p class="tui-bread"><?php the_field('citat') ?></p>    
                        </div>
                        </a>
                    </div>
                    




                <?php endforeach; ?>
                
                <?php wp_reset_postdata(); // IMPORTANT - reset the $post object so the rest of the page works correctly ?>
            <?php endif; ?>



            </div>
        </div>
    </div>
</section>