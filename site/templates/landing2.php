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

    <!-- <img class="alf" src="<?= $site->url() ?>/assets/images/alf.png" alt="">

    <svg >
          <path id="myClip"  d="M6.58,31.28c-6.67-3.11-8.83-18-3.85-21.8C7.29,6,13.67,15.12,25.33,13.84,39.14,12.31,44.19-2,49.58.24c5.14,2.13,6.8,17.69-.84,26.16-2.88,3.19-8.51,7-14,6-3.54-.61-3.63-2.58-7.62-3.15-4.26-.6-5.63,1.43-12.46,2.2C10.52,31.92,8.46,32.16,6.58,31.28Z"/>

    </svg> -->

    <div class="container">
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
          <div class="row my-3">
          <?= $page->text2()->kirbytext() ?>
        </div>




      </div>
    </div>
  </section>






<?= snippet('footer') ?>
