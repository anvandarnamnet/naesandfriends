<?php 

$image = get_sub_field("image");

$size = get_sub_field("size");

?>

<?php if($size != "full"): ?>
    <div class="main-inner">
<?php endif; ?>

<img src="<?= $image['url'] ?>" alt="<?= $image['alt'] ?>">

<?php if($size != "full"): ?>
    </div>
<?php endif; ?>