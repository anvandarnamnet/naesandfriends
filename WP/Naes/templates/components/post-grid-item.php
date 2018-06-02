<div class="post-grid-item grid-<?= get_field('grid_size') ?>">
        <a class="overlay-link" href="<?php the_permalink(); ?>"></a>
                <div class="image-container">
                    <img src="<?= get_field('teaser_image'); ?>" alt="image">
                </div>
                <div class="text-under-image">
                        <p class="tui-head"><?php the_title(); ?></p>
                        <p class="tui-date"><?php the_date('Y-m-d'); ?></p>
                        <?php
                        $categories = get_field('categories');
                        if(!empty($categories)){
                                ?>
                                <div class="tui-links">
                                
                                <?php
                                foreach($categories as $cat){
                                        ?>
                                        <a href="#" >Coach</a>
                                        <?php
                                }
                                ?>
                                
                                </div>
                                
                                <?php
                        }

                        ?>
                        <div class="three-links">
                        <a href="#" >Marketing</a>
                        <a href="#" >Podcast</a>
                        </div>
                        
                                
                        
                    </div>
            </div>

            