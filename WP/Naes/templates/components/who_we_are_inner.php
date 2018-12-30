<section class="pic-and-info">
    <div class="container">
        <div class="left">
            <div class="image">
                <img src="<?php the_sub_field('bild'); ?>" alt="">
            </div>
        </div>
        <div class="right">
            <div class="texts">
                <p class="title"><?php the_sub_field('position'); ?></p>
                <p class="bread-1"><?php the_sub_field('text'); ?></p>
            </div>
            <div id="contact-me" class="contact-me">
                <div class="contact-me-header">
                        <h3><?php the_sub_field('form_title'); ?></h3>
                        <button id="close-contact-me" class="close-button"></button>
                    </div>
                <form id="contact-form" class="contact-form" method="POST">
                    <div class="spinner-overlay">
                        <div class="spinner"></div>
                    </div>
                    <div id="form-response" class="form-response"></div>
                    <div class="form-group">
                        <div class="box">
                            <input type="text" name="name" placeholder="Name">
                            <div class="image-holder">
                                <img src="<?php echo site_url('wp-content/themes/Naes/assets/images/profile.png') ?>" alt="">
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="box">
                            <input type="email" name="email" placeholder="Email">
                            <div class="image-holder">
                                <img src="<?php echo site_url('wp-content/themes/Naes/assets/images/mail.png') ?>" alt="">
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="box">
                            <input type="tel" name="phone" placeholder="Phone">
                            <div class="image-holder">
                                <img src="<?php echo site_url('wp-content/themes/Naes/assets/images/phone.png') ?>" alt="">
                            </div>
                        </div>
                    </div>    
                    <div class="form-group">
                        <div class="box-big">
                            <textarea name="message" placeholder="Message"></textarea>
                        </div>
                    </div>
                    <div class="form-group">
                        <a href="<?php echo get_privacy_policy_url(); ?>">Såhär gör vi med dina kontaktuppgifter</a>
                        <div class="checkbox">
                            <label>
                                <input type="checkbox" name="gdpr" value="Godkänner" required>
                                <span class="checkmark"></span>
                                Jag godkänner
                            </label>  
                        </div>
                    </div>  
                    <div class="form-group">
                        <input type="hidden" name="page" value="<?php the_permalink(); ?>">
                        <input class="submit-button" type="submit" value="Skicka">
                    </div>
                </form>
            </div>
        </div>
        <div class="yellow">
            <p><?php the_sub_field('rubrik'); ?></p>
            <div class="social-links">
                <a class="link">
                    <img src="<?php echo site_url('wp-content/themes/Naes/assets/images/facebook.png') ?>" alt="">
                </a>
                <a class="link">
                    <img src="<?php echo site_url('wp-content/themes/Naes/assets/images/3.png') ?>" alt="">
                </a>
                <a class="link">
                    <img src="<?php echo site_url('wp-content/themes/Naes/assets/images/4.png') ?>" alt="">
                </a>
                <button id="open-contact-me" class="link">
                    <img src="<?php echo site_url('wp-content/themes/Naes/assets/images/5.png') ?>" alt="">
                </button>
            </div>
        </div>
</section>