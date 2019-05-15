<?php snippet('header') ?>


<body>

  <?= snippet('navbar') ?>

  <section class="ftco-section ftco-intro back-left" style="background-image: url('<?= $site->url() ?>/assets/images/graphics/crops/2-01.png');">
    <div class="container">
      <div class="row justify-content-end">
        <div class="col-md-6">
          <div class="heading-section ftco-animate">
            <h2 class="mb-4">Project Factory</h2>
          </div>
          <p class="ftco-animate">
            <?= $page->text()->text() ?>
            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
          </p>

        </div>
      </div>
    </div>
  </section>

  <section class="ftco-section bg-light">


<div class="container">
  <div class="row justify-content-center mb-5 pb-3">
    <div class="col-md-12 heading-section ftco-animate text-center">
      <h3 class="subheading">UNDP</h3>
      <h2 class="mb-1">Browse all Projects</h2>
    </div>

    <?php $tags = $page->children()->pluck('location', ',', true); sort($tags) ?>
    <?php foreach($tags as $tag): ?>
      <?= $tag ?>
    <?php endforeach ?>
  </div>
  <div class="row">

<?php foreach ($articles as $article): ?>
  <?php snippet('article', ['article' => $article]) ?>
<?php endforeach ?>
</div>

</div>
</section>
<?php snippet('footer') ?>
