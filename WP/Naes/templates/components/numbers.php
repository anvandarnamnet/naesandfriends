<?php 
$numbers = get_sub_field('numbers');
?>
<?php if($numbers): ?>
    <section class="big-bar">
        <div class="main-inner flex-container flex">
            <?php foreach($numbers as $number): ?>
                <div class="big-bar-text">
                    <p class="big-text"><?= $number['number']?></p>
                    <p class="small-text"><?= $number['title'] ?></p>
                </div>
            <?php endforeach;?>
        </div>
    </section>
<?php endif;?>