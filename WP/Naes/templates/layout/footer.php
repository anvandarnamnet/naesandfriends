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
                    <h3>Company</h3>
                    <p>Consulting</p>
                    <p>Coaching</p>
                    <p>Education</p>
            </div>

                <div class="footer-col">
                        <h3>Address<h3>
                        <p>c/o Epicenter</p>
                        <p>Mastersamuelsgatan</p>
                        <p>123 45 Stockholm</p>
                </div>

                <div class="footer-col">
                        <h3>Contact</h3>
                        <p>hej@naesandfriends.com</p>
                        <div class="social-media-logos">
                            <a href="https://www.facebook.com/" class="social-media-links">
                                <object data="<?= get_option_field('icon_facebook'); ?>" type="image/svg+xml"></object>
                            </a>
                            <a href="https://twitter.com" class="social-media-links">
                                <object data="<?= get_option_field('icon_twitter'); ?>" type="image/svg+xml"></object>
                            </a>
                        </div>
                </div>
    </div>
</footer>