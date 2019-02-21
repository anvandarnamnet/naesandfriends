<?php 

    $background_image = get_sub_field('background_image');
    $background_color = get_sub_field('background_color');

?>

<div class="who-we-are-background" style="<?php echo $background_image ? "background-image: url($background_image[url]);" : null; ?><?php echo $background_color ? "background-color: $background_color;" : null; ?>">   
    <div class="main">
        <div class="main-inner">
            <section class="whoweare">
                    <div class="texts">
                        <h2 class="t1"><?php the_sub_field('titel'); ?></h2>
                        <p class="t2"><?php the_sub_field('underrubrik'); ?></p>
                        <p class="t3"><?php the_sub_field('text'); ?></p>
                    </div>
            </section>
        </div>
    </div>
</div>