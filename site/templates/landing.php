<? snippet('header') ?>


<body>

  <?= snippet('navbar') ?>

  <section class="ftco-section ftco-intro back-left" style="background-image: url('<?= $site->url() ?>/assets/images/graphics/crops/2-01.png');">
    <div class="container">
      <div class="row justify-content-end">
        <div class="col-md-6">
          <div class="heading-section ftco-animate">
            <h2 class="mb-4">Capacity Building Programme</h2>
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
        <p>
          <?= $page->text2()->text() ?>
        </p>
        <div class="row">
        <div class="col ftco-animate bullet-div">
          <?= $page->bullets()->kirbytext() ?>
        </div>
        <!-- <div class="col-md-4">
          <ul class="mt-5">
            <li class="ftco-animate">Yoga boosts brain power</li>
            <li class="ftco-animate">Yoga boosts brain power</li>
            <li class="ftco-animate">Yoga boosts brain power</li>
            <li class="ftco-animate">Yoga boosts brain power</li>
          </ul>
        </div>
        <div class="col-md-4">
          <ul class="mt-5">
            <li class="ftco-animate">Yoga boosts brain power</li>
            <li class="ftco-animate">Yoga boosts brain power</li>
            <li class="ftco-animate">Yoga boosts brain power</li>
            <li class="ftco-animate">Yoga boosts brain power</li>
          </ul>
        </div> -->



      </div>
    </div>
  </section>






<?= snippet('footer') ?>
