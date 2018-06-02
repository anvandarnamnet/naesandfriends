<?php
    $url = get_sub_field('video');
    preg_match('/[\\?\\&]v=([^\\?\\&]+)/', $url, $matches);
    $id = $matches[1];
?>
<div class="main-inner">
    <div class="video-wrapper">
        <iframe id="ytplayer" type="text/html"
            src="https://www.youtube.com/embed/<?php echo $id ?>?rel=0&showinfo=0&color=white&iv_load_policy=3"
            frameborder="0" allowfullscreen></iframe> 
    </div>
</div>