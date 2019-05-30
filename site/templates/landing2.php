<? snippet('header') ?>

<body class="container-fluid mb-3">

  <?= snippet('navbar') ?>

  <section class="ftco-section ftco-intro back-left" style="background-image: url('<?= $page->photo()->toFile()->url() ?>');">
    <div class="container">
      <div class="row justify-content-end pt-5">
        <div class="col-md-6">
          <div class="heading-section ftco-animate">
            <h2 class="mb-4"><?= $page->title()->text() ?></h2>
          </div>
          <p class="ftco-animate">
            <?= $page->text()->kirbytext() ?>
          </p>

        </div>
      </div>
    </div>
  </section>

  <section class="ftco-section padding ftco-section-services bg-light pt-5">



    <div class="container">
        <div class="row">
          <div class="col-md-3">
            <div class="services ftco-animate text-center">
              <div class="icon d-flex justify-content-center align-items-center m-auto">
                <!-- <span class="flaticon-like"></span> -->
                <img class="siw-loguitos" src="<?= $site->url()?>/assets/images/HOME - SOCIAL.png" alt="">
              </div>
              <div class="text mt-4 text-black-50">
                <?= $page->icon1()->kirbytext() ?>
                <!-- <p>A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country</p> -->
              </div>
            </div>
          </div>

          <div class="col-md-3">
            <div class="services ftco-animate text-center">
              <div class="icon d-flex justify-content-center align-items-center m-auto">
                <!-- <span class="flaticon-like"></span> -->
                <img class="siw-loguitos" src="<?= $site->url()?>/assets/images/SUBMIT - CBP.png" alt="">
              </div>
              <div class="text mt-4 text-black-50">
                <?= $page->icon2()->kirbytext() ?>
                <!-- <p>A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country</p> -->
              </div>
            </div>
          </div>

          <div class="col-md-3">
            <div class="services ftco-animate text-center">
              <div class="icon d-flex justify-content-center align-items-center m-auto">
                <!-- <span class="flaticon-like"></span> -->
                <img class="siw-loguitos" src="<?= $site->url()?>/assets/images/SUBMIT - COMPS GOVS.png" alt="">
              </div>
              <div class="text mt-4 text-black-50">
                <?= $page->icon3()->kirbytext() ?>
                <!-- <p>A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country</p> -->
              </div>
            </div>
          </div>

          <div class="col-md-3">
            <div class="services ftco-animate text-center">
              <div class="icon d-flex justify-content-center align-items-center m-auto">
                <!-- <span class="flaticon-like"></span> -->
                <img class="siw-loguitos" src="<?= $site->url()?>/assets/images/HOME - BECOME A PARTNER.png" alt="">
              </div>
              <div class="text mt-4 text-black-50">
                <?= $page->icon4()->kirbytext() ?>
                <!-- <p>A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country</p> -->
              </div>
            </div>
          </div>
          <div class="row my-3">
            <div class="col-12">
              <?= $page->text2()->kirbytext() ?>
            </div>
        </div>




      </div>
    </div>
  </section>
  <section class="ftco-section contact-section">
    <?php snippet('contact-tile') ?>
    </section>






<?= snippet('footer') ?>
