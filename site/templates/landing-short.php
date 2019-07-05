<? snippet('header') ?>


<body>

  <?= snippet('navbar') ?>

  <section class="ftco-section ftco-intro back-left-sm landingBackground" style="background-image: url('<?= $page->photo()->toFile()->url() ?>')">
    <div class="container">
      <div class="row justify-content-end pt-5">
        <div class="col-md-6">
          <div class="heading-section ftco-animate">
            <h2 class="mb-4"><?= $page->title()->text() ?></h2>
          </div>
          <p class="ftco-animate">
            <?= $page->text()->text() ?>
          </p>
        </div>
      </div>
    </div>
  </section>








<?= snippet('footer') ?>
