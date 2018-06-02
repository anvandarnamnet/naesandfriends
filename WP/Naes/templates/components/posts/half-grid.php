<?php
$images = get_sub_field('images');

?>
<div class="main-inner">
    <div class="half-grid">
        <?php foreach($images as $image){
            ?>
            <div class="span-half">
                <img src="<?= $image['url'] ?>">
            </div>
            <?php
        } ?>
        
    </div>
</div>