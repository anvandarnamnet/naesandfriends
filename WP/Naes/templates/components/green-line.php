<?php
$margin_top = get_sub_field('margin_top');
$margin_bottom = get_sub_field('margin_bottom');

?>
<div class="green-bar">
</div>
<style>
<?= '#component_' . $_SESSION['component_count'] ?>{
  margin-top: <?= $margin_top ?>;
  margin-bottom: <?= $margin_bottom ?>;
}
</style>