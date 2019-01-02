<div class="container">
    <div class="map">
        <?php

$location = get_sub_field('location');

if (!empty($location)):
?>
        <div class="acf-map">
            <div class="marker" data-lat="<?php echo $location['lat']; ?>" data-lng="<?php echo $location['lng']; ?>"></div>
        </div>
        <?php endif;?>

    </div>
    <div class="form">
        <div class="header">
            <h1><?php the_sub_field('title')?></h1>
            <p><?php the_sub_field('text')?></p>
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
                <input type="hidden" name="page" value="<?php the_permalink();?>">
                <input class="submit-button" type="submit" value="Skicka">
            </div>
        </form>

    </div>
</div>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDGL97AA0QG2WBDkf1FQ_a4FNvOYiEdIkM"></script>