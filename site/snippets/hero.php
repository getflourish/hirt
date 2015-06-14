<div>
    <!-- define a new variable called 'header_image' -->
    <?php $header_image = $page->image($image) ?>

    <!-- display image -->
    <div class="hero" style="background-image: url(<?php echo $header_image->url()?>)">
		<h1>Hirt Massagen</h1>
    </div>
</div>