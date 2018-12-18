<?php $slides = get_sub_field('slides'); ?>
<div class="main <?php the_sub_field('bakgrundsfarg'); ?>">
        <section class="take-a-class">
            <h2 class="head"><?php the_sub_field('title'); ?></h2>

            <?php if($slides): ?>
                <div class="swiper-container">

                    <div class="swiper-wrapper">

                        
                        <?php foreach($slides as $slide): ?>
                            <div class="swiper-slide">
                                <div class="content">
                                    
                                    <div class="text-and-image">
                                        <div class="text">
                                            <p class="top"><?php echo $slide['introduction'] ?></p>
                                            <p class="mid"><?php echo $slide['text']; ?></p>

                                            <?php 
                                            if( $slide['link'] ): 

                                                $link_url = $slide['link']['url'];
                                                $link_title = $slide['link']['title'];
                                                $link_target = $slide['link']['target'] ? $link['target'] : 'self';
                                                ?>
                                                <a class="button" href="<?php echo esc_url($link_url); ?>" target="<?php echo esc_attr($link_target); ?>"><?php echo esc_html($link_title); ?></a>
                                            <?php endif; ?>
                                            
                                        </div>
                                        <div class="videocontainer">
                                            <video controls>
                                                <source src="<?php echo $slide['video']['url'] ?>" type="video/mp4">
                                                Your browser does not support HTML5 video.
                                            </video>
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
</div>
