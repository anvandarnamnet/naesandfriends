<?php
$doer = get_sub_field('doer');
$coach = get_sub_field('coach');
$teacher = get_sub_field('teacher');
?>
<section class="need">
    <div class="main-inner">
        <h2><?= get_sub_field('header'); ?></h2>
        <div class="boxes">
            <div class="box-1">
                <a class="overlay-link" href="<?= $doer['href']; ?>"></a>
                <div class="texts">
                    <h3 class="texts-1"><?= $doer['header']; ?></h3>
                    <p class="texts-2"><?= $doer['text'] ?></p>
                </div>  
            </div>
            <div class="box-2">
            <a class="overlay-link" href="<?= $coach['href']; ?>"></a>
                <div class="texts">
                    <h3 class="texts-1"><?= $coach['header']; ?></h3>
                    <p class="texts-2"><?= $coach['text'] ?></p>
                </div> 
            </div>
            <div class="box-3">
            <a class="overlay-link" href="<?= $teacher['href']; ?>"></a>
                <div class="texts">
                    <h3 class="texts-1"><?= $teacher['header']; ?></h3>
                    <p class="texts-2"><?= $teacher['text'] ?></p>
                </div> 
            </div>
        </div>
</div>
    </section>