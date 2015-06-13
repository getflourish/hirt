    <?php snippet("header") ?>

    <h1>
        <?php echo $page->title() ?>
    </h1>
    <h2>
        <?php echo $page->subtitle() ?>
    </h2>

    <ul class="teaser cf">
      <?php foreach(page('services')->children()->visible()->limit(3) as $service): ?>
      <li>
        <?php if($image = $service->images()->sortBy('sort', 'asc')->first()): ?>
        <a href="<?php echo $service->url() ?>">
          <img src="<?php echo $image->url() ?>" alt="<?php echo $service->title()->html() ?>" >
        </a>
        <?php endif ?>
        <h3><a href="<?php echo $service->url() ?>"><?php echo $service->title()->html() ?></a></h3>
        <p><?php echo $service->text()->excerpt(80) ?> <a href="<?php echo $service->url() ?>">read&nbsp;more&nbsp;→</a></p>
      </li>
      <?php endforeach ?>
    </ul>



    <main class="main">
        <?php echo $page->text()->kirbytext() ?>
    </main>


    <!-- Footer snippet -->

    <?php snippet('footer') ?>