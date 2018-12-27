<div class="main">
    <div class="main-inner">
        <section class="skill-top">
                <div class="border-top"></div>
                <div class="content">
                    <div class="image"><img src="<?php the_sub_field('skillbild'); ?>" alt=""></div>
                    <div class="text">
                        <h3 class="head"><?php the_sub_field('rubrik'); ?></h3>
                        <p class="subhead"><?php the_sub_field('underrubrik'); ?></p>
                        <ul>

                            <?php 

                            $repeater = get_sub_field('lista');

                            if($repeater){
                                foreach($repeater as $lista){
                                    ?>
                                    
                                    <li><?php echo $lista['listitem'] ?></li> 

                                    <?php
                                }
                            }
                            ?>








                        </ul>
                        <div class="boxes">

                            <?php 

                            $link = get_sub_field('knapp1');

                            if( $link ): 
                                $link_url = $link['url'];
                                $link_title = $link['title'];
                                $link_target = $link['target'] ? $link['target'] : 'self';
                                ?>
                                <a class="box-1" href="<?php echo esc_url($link_url); ?>" target="<?php echo esc_attr($link_target); ?>"><?php echo esc_html($link_title); ?></a>
                            <?php endif; ?>

                            <?php 

                            $link = get_sub_field('knapp2');

                            if( $link ): 
                                $link_url = $link['url'];
                                $link_title = $link['title'];
                                $link_target = $link['target'] ? $link['target'] : 'self';
                                ?>
                                <a class="box-2" href="<?php echo esc_url($link_url); ?>" target="<?php echo esc_attr($link_target); ?>"><?php echo esc_html($link_title); ?></a>
                            <?php endif; ?>




                        </div>
                    </div>
                </div>
        </section>
    </div>
</div> 