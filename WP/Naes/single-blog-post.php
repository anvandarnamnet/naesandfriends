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
                        <img src="<?= get_option_field('icon_facebook_round'); ?>" alt="">
                        <img src="<?= get_option_field('icon_twitter_round'); ?>" alt="">
                        <img src="<?= get_option_field('icon_instagram_round'); ?>" alt="">

                    </div>
                </div>
                <div class="save">
                    <p>Save this</p>
                    <div class="icons">
                            <img src="img/blog-inner/heart-icon.png" alt="">
                            <img src="img/blog-inner/bookmark-icon.png" alt="">
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
                                <a href="<?= $author_url ?>"><img src="<?= get_option_field('icon_contact'); ?>" alt=""></a>
                                <a target="blank" href="<?= get_field('read_more_file', $author); ?>"><img src="<?= get_option_field('icon_more'); ?>" alt=""></a>
                            </div>
                        </div>
                        <p class="about"><?= $author->description ?></p>
                    </div>
                </div>
    </section>
    </div>
</article> 
<section class="read-more">
</section>
<?php


get_footer();

?>