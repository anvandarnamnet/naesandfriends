<?php

if(! (bool) get_sub_field('featured')){
    $args = array(
        'post_type' => 'blog-post',
        'posts_per_page' => -1,
    );
    $blog_query = new WP_Query($args);
    ?>

    <div class="main-inner">
        <div class="spinner-overlay">
            <div class="spinner"></div>
        </div>
        <div id="blog-posts-container" class="grid">
        <?php
        while($blog_query->have_posts()){
            $blog_query->the_post();
            echo get_component("templates/components/post-grid-item");         
        }   
        wp_reset_query();
        ?>

        </div>
    </div>

    <?php
}else{
    $teasers = get_sub_field('posts');
    ?>
    <div class="main-inner">
    <div class="grid">
    <?php
    foreach($teasers as $post){
        setup_postdata( $post ); 
        echo get_component("templates/components/post-grid-item"); 
    }
    wp_reset_postdata();
    ?>

    </div>
</div>
    <?php
}
?>
