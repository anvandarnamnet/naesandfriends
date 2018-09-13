<?php

get_header();

?>
<article class="narrow">
    <div class="main-inner">
        <div class="meta-info">
            <h1 class="head"><?php the_title(); ?></h1>
            <div class="date-and-links">
                <p class="date">2018-01-02</p>
                <div class="three-links">
                        <a href="#">Coach</a>
                        <a href="#">Marketing</a>
                        <a href="#">Podcast</a>
                </div>
            </div>
        </div>
    </div>
    <section class="flexible">
        <?php
        if( have_rows('flexible_posts') ):
            // loop through the rows of data
            $_SESSION['component_count'] = 0;
           while ( have_rows('flexible_posts') ) : the_row();
               $layout = get_row_layout();
               ?>
               <div class="<?= $layout ?> component" id="component_<?= $_SESSION['component_count'] ?>">
                 <div class="anchor" id="<?= $layout ?>"></div>
                 <div class="anchor" id="c-<?= $_SESSION['component_count'] ?>"></div>
               <?= get_component("templates/components/posts/$layout"); ?>
             </div>
             <?php
             $_SESSION['component_count'] = $_SESSION['component_count'] + 1;
             
           endwhile;
       
       else :
       
         $_SESSION['error'][] = 'No flexible layouts found';
       
       
       
       endif;



        ?>
    </section>
    <div class="main-inner">
    <section class="share-article">
            <div class="share-save">
                <div class="share">
                    <p>Share this</p>
                    <div class="icons">
                        <a href="<?php echo generate_sharelink('facebook') ?>"><img src="<?= get_option_field('icon_facebook_round'); ?>" alt="facebook"></a>
                        <a href="<?php echo generate_sharelink('twitter') ?>"><img src="<?= get_option_field('icon_twitter_round'); ?>" alt="twitter"></a>
                        <img src="<?= get_option_field('icon_instagram_round'); ?>" alt="instagram">

                    </div>
                </div>
                <div class="save">
                    <p>Save this</p>
                    <div class="icons">
                            <img src="<?= get_option_field('icon_bookmark_round'); ?>" alt="">
                            <img src="<?= get_option_field('icon_heart_round'); ?>" alt="">
                    </div>
                </div>
            </div>
    </section>
    <?php
    /* Author info */ 
    $post_id = get_the_ID();
    $author = wp_get_post_terms( $post_id, 'authors')[0];
    $author_url = get_term_link($author, 'authors');
    ?>
    <?php if($author): 
        
        $read_more_file_url = get_field('read_more_file', $author);
        $email = get_field('email', $author);
    ?>
    <seciton class="author-section">
        <div class="profile">
                    <img class="author-img" src="<?= get_field('image', $author); ?>" alt="">
                    <div class="info">
                        <div class="top">
                            <div class="title-name">
                                <p class="title">Author</p>
                                <p class="name"><?= $author->name ?></p>
                            </div>
                            <div class="images">
                                <a href="<?= $author_url ?>"><img src="<?= get_option_field('icon_about'); ?>" alt=""></a>
                                <?php if($email){?><a href="mailto:<?= $author_url ?>"><img src="<?= get_option_field('icon_contact'); ?>" alt=""></a><?php } ?>
                                <?php if($read_more_file_url){?><a target="blank" href="<?= $read_more_file_url ?>"><img src="<?= get_option_field('icon_more'); ?>" alt=""></a><?php }?> 
                            </div>
                        </div>
                        <p class="about"><?= $author->description ?></p>
                    </div>
                </div>
    </section>
    <?php endif; ?>
    </div>
</article> 
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
<?php


get_footer();

?>