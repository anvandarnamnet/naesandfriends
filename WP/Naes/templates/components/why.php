<?php 

$slides = get_sub_field('slides');

?>

<section class="whysection <?php the_sub_field('bakgrundsfarg'); ?>">
        <h2 class="head">Why Naes &amp Friends?</h2>

        <?php if($slides): ?>
            <div class="swiper-container">

                <div class="swiper-wrapper">

                    
                    <?php foreach($slides as $slide): ?>
                        <div class="swiper-slide">
                            <div class="main-inner">
                                <div class="content">
                                    <div class="info">
                                        <div class="image"><img src="<?php echo $slide['image']['url']; ?>" alt="<?php echo $slide['image']['alt']; ?>"></div>
                                        <div class="image-mobile"><img src="<?php echo $slide['image']['url']; ?>" alt="<?php echo $slide['image']['alt']; ?>"></div>
                                        <div class="yellow-and-button">
                                            <div class="yellow">
                                                    <p class="text"><?php echo $slide['quote'] ?></p>
                                                    <p class="text-mobile"><?php echo $slide['quote'] ?></p>
                                                    <div class="border"></div>
                                                    <p class="name"><?php echo $slide['name'] ?></p>
                                            </div>
                                            
                                            <?php 
                                                if( $slide['link'] ): 
                                                    $link_url = $slide['link']['url'];
                                                    $link_title = $slide['link']['title'];
                                                    $link_target = $slide['link']['target'] ? $link['target'] : 'self';
                                                    ?>
                                                    <a class="button" href="<?php echo esc_url($link_url); ?>" target="<?php echo esc_attr($link_target); ?>"><?php echo esc_html($link_title); ?></a>
                                            <?php endif; ?>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    <?php endforeach; ?>

                    </div>


                    <div class="swiper-button-prev"></div>
                    <div class="swiper-button-next"></div>

                </div>
            </div>
        <?php endif; ?>

</section>

