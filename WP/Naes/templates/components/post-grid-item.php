<div class="post-grid-item grid-<?= get_field('grid_size') ?>">
        <a class="overlay-link" href="<?php the_permalink(); ?>"></a>
                <div class="<?php echo get_field('grid_size') ==  "full" ? get_field('image_position') : null ;?>">
                        <div class="image-container">
                                <img src="<?= get_field('teaser_image'); ?>" alt="image">
                        </div>
                        <div class="text-under-image">
                                <div>
                                        <p class="tui-head"><?php the_title(); ?></p>
                                        <p class="tui-date"><?php echo get_the_date('Y-m-d'); ?></p>
                                        <p class="bread"><?php echo get_the_excerpt() ?></p>
                                        <?php if( get_field('grid_size') ==  "full" ):?>
                                                <a class="read_more" href="<?php the_permalink() ?>">Read more<img src="<?php echo site_url() ?>/wp-content/themes/Naes/assets/images/arrow.png" alt="arrow"></a>
                                        <?php endif; ?>
                                </div>
                                <?php
                                $categories = wp_get_post_terms($post->ID, "blog-cat");
                                if(!empty($categories)){
                                        ?>
                                        <div class="tui-links">
                                        
                                        <?php
                                        foreach($categories as $cat){
                                                ?>
                                                <a href="#" ><?php echo $cat->name ?></a>
                                                <?php
                                        }
                                        ?>
                                        
                                        </div>
                                        
                                        <?php
                                }

                                ?>
                                
                                        
                                
                        </div>
                </div>
            </div>

            