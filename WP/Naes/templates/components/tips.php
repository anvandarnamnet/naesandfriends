
    <section class="tipsen <?php the_sub_field('bakgrundsfarg'); ?>">
    <div class="main">
        <div class="main-inner">
            <h2><?php the_sub_field('titel'); ?></h2>

            <?php

            $post_objects = get_sub_field('post_object');

            if( $post_objects ): ?>
                <div class="grid">
                <?php foreach( $post_objects as $post): 
                    setup_postdata( $post ); 
                    echo get_component("templates/components/post-grid-item"); 
                endforeach; ?>
                </div>
                <?php wp_reset_postdata();  ?>
            <?php endif; ?>         


        </div>
    </div>  
</section>


 