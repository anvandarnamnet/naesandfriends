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
      <?php the_field('hero_text') ?>
    </div>
  </section>
<?php endif; ?>