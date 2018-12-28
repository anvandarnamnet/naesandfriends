<?php 
$numbers = get_option_field('numbers', 'option');
$image = get_sub_field('bg_image');
?>
<?php if($numbers): ?>
    <section class="big-bar" style="background-image: url(<?php echo $image['url'] ?>)">
        <div class="overlay">
            <div class="main-inner flex-container flex">
                <?php foreach($numbers as $number): ?>
                    <div class="big-bar-text">
                        <p class="big-text"><?= $number['number']?></p>
                        <p class="small-text"><?= $number['title'] ?></p>
                    </div>
                <?php endforeach;?>
            </div>
        </div>
    </section>
<?php endif;?>