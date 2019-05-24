<? snippet('header') ?>


<body>

  <?= snippet('navbar') ?>

  <section class="ftco-section ftco-intro back-left" style="background-image: url('<?= $page->photo()->toFile()->url() ?>');">
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

  <section class="ftco-section ftco-section-services bg-light">
    <div class="container">

          <?= $page->text2()->text()->kirbytext() ?>

        <div class="row">
        <div class="col ftco-animate bullet-div">
          <?= $page->bullets()->kirbytext() ?>
        </div>




      </div>
    </div>
  </section>






<?= snippet('footer') ?>
