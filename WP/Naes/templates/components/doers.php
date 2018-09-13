<div class="main">
    <div class="main-inner">    
    
    <section class="list-123">
        <div class="border-top"></div>
        <p class="t1"><?php the_sub_field('huvudrubrik') ?></p>
        <p class="t2"><?php the_sub_field('underrubrik') ?></p>
        <div class="boxes">



            <?php 

            $repeater = get_sub_field('repeater');

            if($repeater){
                foreach($repeater as $doers){
                    ?>
                    
                    <div class="box">
                        <p class="number"><?php echo $doers['bakgrundsnummer'] ?></p>
                        <div class="text-list-1">
                            <p class="t3"><?php echo $doers['listtitel'] ?></p>
                            <ul>
                                <li><?php echo $doers['punkt_1'] ?></li>
                                <li><?php echo $doers['punkt_2'] ?></li>
                                <li><?php echo $doers['punkt_3'] ?></li>
                            </ul>
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