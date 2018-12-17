<footer>
    <div class="flex-container footer-flex main-inner">
        <div class="footer-col logo">
            <a class="overlay-link" href="<?= get_home_url(); ?>"></a>
            <object data="<?= get_option_field('logo_white'); ?>" type="image/svg+xml">
            </object>
        </div>
        <div class="footer-col small-hide">
        </div>

            <div class="footer-col">
                    <h3><?php echo get_option_field('footer_title_1'); ?></h3>
                    <?php echo wp_nav(array(
                            'lang' => current_language(),
                            'nav_id' => 'footer',
                        ));
                        ?>
            </div>

                <div class="footer-col">
                        <h3><?php echo get_option_field('footer_title_2'); ?><h3>
                        <p><?php echo get_option_field('address_row_1'); ?></p>
                        <p><?php echo get_option_field('address_row_2'); ?></p>
                        <p><?php echo get_option_field('address_row_3'); ?></p>
                </div>

                <div class="footer-col">
                        <h3><?php echo get_option_field('footer_title_3'); ?></h3>
                        <a href="mailto:<?php echo get_option_field('email'); ?>"><?php echo get_option_field('email'); ?></a>
                        <div class="social-media-logos">
                            <a href="<?php echo get_option_field('facebook_link'); ?>" class="social-media-links">
                                <object data="<?= get_option_field('icon_facebook'); ?>" type="image/svg+xml"></object>
                            </a>
                            <a href="<?php echo get_option_field('twitter_link'); ?>" class="social-media-links">
                                <object data="<?= get_option_field('icon_twitter'); ?>" type="image/svg+xml"></object>
                            </a>
                        </div>
                </div>
    </div>
</footer>