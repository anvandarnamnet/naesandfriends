<?php
$margin_top = get_sub_field('margin_top');
$margin_bottom = get_sub_field('margin_bottom');
$position = get_sub_field('position');

?>
<div class="green-bar <?php echo $position ?>">
</div>
<style>
<?= '#component_' . $_SESSION['component_count'] ?>{
  margin-top: <?= $margin_top ?>;
  margin-bottom: <?= $margin_bottom ?>;
}

</style>