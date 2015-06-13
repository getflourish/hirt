<div>
    <!-- define a new variable called 'header_image' -->
    <?php $header_image = $page->image($image) ?>

    <!-- display image -->
    <img src="<?php echo $header_image->url()?>" alt="">
</div>