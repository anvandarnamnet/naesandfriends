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
            <?php echo wp_nav(array(
                            'lang' => current_language(),
                            'nav_id' => 'top',
                        ));
                        ?>
    </header>