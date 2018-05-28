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
            <ul>
                <li>What we do</li>
                <li>Who we are</li>
                <li>What people say</li>
                <li>Blog &amp pod</li>
                <li>Faq</li>
                <li>Contact</li>  
            </ul>
    </header>