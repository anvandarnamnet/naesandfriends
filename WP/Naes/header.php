<html>
  <head>
    <title><?= get_option_field('title'); ?></title>
     <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
     <link href="https://fonts.googleapis.com/css?family=Poppins:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
     <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php wp_head(); ?>
  </head>
  <body <?php body_class(); ?>>
    <div style="width: 0px; height: 0px;" id="top" ></div>
    <?= get_component('templates/layout/header'); ?>
<div class="header-fix"></div>

<?php if(get_field('hero')):?>
  <section class="hero">
    <div class="hero-container" style="background-image: url(<?php the_field('hero_image') ?>)">
      
      <div class="main-inner">
        
          <?php the_field('hero_text') ?>

          <div class="button-container">
            <?php 
              $link = get_field('knapp');

              if( $link ): 
                  $link_url = $link['url'];
                  $link_title = $link['title'];
                  $link_target = $link['target'] ? $link['target'] : 'self';
                  ?>
                  <a class="hero-button" href="<?php echo esc_url($link_url); ?>" target="<?php echo esc_attr($link_target); ?>"><?php echo esc_html($link_title); ?></a>
          <?php endif; ?>
          </div>

      </div>

      

    </div>
    <div class="hire">
      <div class="main-inner">
        <div class="hire-inner">
          <div class="hire-title">
            <h3>Want to hire us?</h3>
          </div>
          <div class="hire-items">
            <div class="hire-item">
              <div class="hire-image"><img src="<?php echo get_option_field('icon_phone') ?>"></div>
              <div class="hire-text">
                <p>CALL US</p>
                <a href="tel:<?php echo get_option_field('phone_number') ?>"><?php echo get_option_field('phone_number') ?></a>
              </div>
            </div>
            <div class="hire-item">
              <div class="hire-image"><img src="<?php echo get_option_field('icon_conversation') ?>"></div>
              <div class="hire-text">
                <p>CHAT WHIT US</p>
                <a href="#">Chat</a>
              </div>
            </div>
            <div class="hire-item">
              <div class="hire-image"><img src="<?php echo get_option_field('icon_email') ?>"></div>
              <div class="hire-text">
                <p>CALL US</p>
                <a href="email:<?php echo get_option_field('email') ?>">Write Email</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
<?php endif; ?>