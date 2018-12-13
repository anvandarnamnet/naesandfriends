<div class="main">
    <div class="main-inner">

        <section id="partners">
            <h2>Our partners</h2>
            <div class="three-images">



                 <?php 

                    $repeater = get_sub_field('repeater');

                    if($repeater){
                        foreach($repeater as $partner){
                ?>

                    <div class="three-photos">
                            <div class="image-container">
                                <img src="<?php echo $partner['bild'] ?>" alt="image">
                            </div>
                            <div class="text-under-image">
                                <p class="tui-subject"><?php echo $partner['titel'] ?></p>
                                <p class="tui-bread"><?php echo $partner['text'] ?></p>    
                            </div>
                    </div>
                    
                <?php
                    }
                }

                ?>




            </div>
        </section>
    </div>
</div>