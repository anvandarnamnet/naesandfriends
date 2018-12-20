<section class="read-more">
    <h3>Continue Reading</h3>
    <?php 
    $args = array(
        'post_type' => 'blog-post',
        'posts_per_page' => 3,
        'order' => 'DESC',
        'orderby' => 'date',
        'post__not_in' => array($post->ID),
        'meta_key' => 'grid_size',
        'meta_value' => 'third',
    );
    $blog_query = new WP_Query($args);
    ?>

    <div class="grid">
    <?php
    while($blog_query->have_posts()){
        $blog_query->the_post();
        echo get_component("templates/components/post-grid-item");         
    }   
    wp_reset_query();
    ?>

    </div>
</section>