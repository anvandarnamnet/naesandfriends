
    <section class="tipsen <?php the_sub_field('bakgrundsfarg'); ?>">
    <div class="main">
        <div class="main-inner">
            <h2><?php the_sub_field('titel'); ?></h2>

            <?php

            $args = array(
                'post_type' => 'blog-post',
                'posts_per_page' => 3,
                'meta_query' => array(
                    array(
                        'key' => 'author',
                        'value' => get_the_ID()
                    )
                )
            );
            $blog_query = new WP_Query($args);

            if( $blog_query ): ?>
                <div class="grid">
                <?php
                while($blog_query->have_posts()){
                    $blog_query->the_post();
                    echo get_component("templates/components/post-grid-item");         
                }   
                wp_reset_query();
                ?>
                </div>
                <?php wp_reset_postdata();  ?>
            <?php endif; ?>         


        </div>
    </div>  
</section>


 