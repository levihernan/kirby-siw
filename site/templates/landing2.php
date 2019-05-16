<? snippet('header') ?>


<body>

  <?= snippet('navbar') ?>

  <section class="ftco-section ftco-intro back-left" style="background-image: url('<?= $site->url() ?>/assets/images/graphics/crops/2-01.png');">
    <div class="container">
      <div class="row justify-content-end">
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
        <p>
          <?= $page->text2()->text() ?>
        </p>
        <div class="row">


          <div class="col-md-3">
            <div class="services ftco-animate text-center">
              <div class="icon d-flex justify-content-center align-items-center m-auto">
                <!-- <span class="flaticon-like"></span> -->
                <img class="siw-loguitos" src="<?= $site->url()?>/assets/images/HOME - SOCIAL.png" alt="">
              </div>
              <div class="text mt-4">
                <?= $page->icon1()->text() ?>
                <!-- <p>A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country</p> -->
              </div>
            </div>
          </div>

          <div class="col-md-3">
            <div class="services ftco-animate text-center">
              <div class="icon d-flex justify-content-center align-items-center m-auto">
                <!-- <span class="flaticon-like"></span> -->
                <img class="siw-loguitos" src="<?= $site->url()?>/assets/images/HOME - SOCIAL.png" alt="">
              </div>
              <div class="text mt-4">
                <?= $page->icon2()->text() ?>
                <!-- <p>A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country</p> -->
              </div>
            </div>
          </div>

          <div class="col-md-3">
            <div class="services ftco-animate text-center">
              <div class="icon d-flex justify-content-center align-items-center m-auto">
                <!-- <span class="flaticon-like"></span> -->
                <img class="siw-loguitos" src="<?= $site->url()?>/assets/images/HOME - SOCIAL.png" alt="">
              </div>
              <div class="text mt-4">
                <?= $page->icon3()->text() ?>
                <!-- <p>A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country</p> -->
              </div>
            </div>
          </div>

          <div class="col-md-3">
            <div class="services ftco-animate text-center">
              <div class="icon d-flex justify-content-center align-items-center m-auto">
                <!-- <span class="flaticon-like"></span> -->
                <img class="siw-loguitos" src="<?= $site->url()?>/assets/images/HOME - SOCIAL.png" alt="">
              </div>
              <div class="text mt-4">
                <?= $page->icon4()->text() ?>
                <!-- <p>A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country</p> -->
              </div>
            </div>
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
