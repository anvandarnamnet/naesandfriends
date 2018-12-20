<?php
$logosrc = get_option_field('logo');
?>
<header>
            <div class="logo">
                <div class="inner-logo">
                    <a class="overlay-link" href="<?= get_home_url(); ?>"></a>
                    <object data="<?= get_option_field('logo'); ?> " type="image/svg+xml">
                    </object>
                </div>
            </div>
            <div class="desktop-nav">
                <?php echo wp_nav(array(
                                'lang' => current_language(),
                                'nav_id' => 'top',
                            ));
                            ?>
            </div>
            <button id="toggle-mobile-nav" class="mobile-nav-button"><hr class="line-1"><hr class="line-2"><hr class="line-3"></button>
            <div id="mobile-nav" class="mobile-nav">
            <?php echo wp_nav(array(
                            'lang' => current_language(),
                            'nav_id' => 'top',
                        ));
                        ?>
            </div>
</header>