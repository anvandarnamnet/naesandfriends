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
    <section class="author-section">
        <div class="profile">
                    <img class="author-img" src="<?= get_field('image', $author); ?>" alt="">
                    <div class="info">
                        <div class="top">
                            <div class="title-name">
                                <p class="title">Author</p>
                                <p class="name"><?= $author->name ?></p>
                            </div>
                            <div class="images">
                                <a href="<?= get_field('about-link', $author); ?>"><img src="<?= get_option_field('icon_about'); ?>" alt=""></a>
                                <?php if($email){?><a href="mailto:<?= get_field('email', $author); ?>"><img src="<?= get_option_field('icon_contact'); ?>" alt=""></a><?php } ?>
                                <?php if($read_more_file_url){?><a href="<?= get_field('about-link', $author); ?>"><img src="<?= get_option_field('icon_more'); ?>" alt=""></a><?php }?> 
                            </div>
                        </div>
                        <p class="about"><?= $author->description ?></p>
                    </div>
                </div>
    </section>
    <?php endif; ?>
    </div>