<? snippet('header') ?>
<body class="container-fluid mb-3">



  <style media="screen">
  .navbar .logo-siw {
    display: none !important;
  }
  .scrolled .logo-siw{
    display: block !important;
    /* filter: invert(100); */
    width: auto;
  }
  </style>

  <?= snippet('navbar') ?>

  <section class="hero-wrap back-right" style="background-image: url('<?= $site->url() ?>/assets/images/graphics/crops/9-15.png');">
    <div class="overlay"></div>
    <div class="container">
      <div class="row no-gutters slider-text js-fullheight align-items-center justify-content-start">
        <div class="col-md-8 ftco-animate">
          <img class="logo-siw" src="<?= $site->url() ?>/assets/images/Logo SIW.png" alt="">
          <!-- <p><a href="#" class="btn btn-primary p-3 px-4">15 Day Free Trial</a></p> -->
        </div>
      </div>
    </div>
    <img class="bg-svg bg-center" style="top: 100px; z-index:-1; padding:0 100px" src="<?= $site->url() ?>/assets/images/graphics/bubbles/Asset 1222.svg" >
  </section>




  <section class="ftco-section bg-light z-back">

    <svg class="bg-svg bg-center" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 53.96 32.56"><defs><style>.cls-1{fill:#ffbf00;}</style></defs><title>Asset 972</title><g id="Layer_2" data-name="Layer 2"><g id="Ñëîé_1" data-name="Ñëîé 1"><path class="cls-1" d="M6.58,31.28c-6.67-3.11-8.83-18-3.85-21.8C7.29,6,13.67,15.12,25.33,13.84,39.14,12.31,44.19-2,49.58.24c5.14,2.13,6.8,17.69-.84,26.16-2.88,3.19-8.51,7-14,6-3.54-.61-3.63-2.58-7.62-3.15-4.26-.6-5.63,1.43-12.46,2.2C10.52,31.92,8.46,32.16,6.58,31.28Z"/></g></g></svg>
    <!-- <div class="container">
    <a href="#" class="btn btn-primary d-block px-2 py-4 mb-4">Learn more</a>
  </div> -->

  <div class="container">
    <div class="row justify-content-center mb-5 pb-3">
      <div class="col-md-7 heading-section ftco-animate text-center">
        <!-- <h3 class="subheading">texto?</h3> -->
        <p class="mb-1"><?= $page->texto1()->kirbytext() ?></p>
      </div>
    </div>
    <div class="row">
      <div class="col-md-4 mb-4 ftco-animate">
        <div class="block-7">
          <div class="text-center">
            <h2 class="heading">Young Innovators</h2>
            <img class="siw-loguitos px-4" src="<?= $site->url()?>/assets/images/HOME - SUBMIT A PROJECT.png" alt="">
            <a href="<?= $site->url() ?>/nominate" class="btn btn-primary d-block px-2 py-4">Submit your Project</a>
          </div>
        </div>
      </div>


      <div class="col-md-4 mb-4 ftco-animate">
        <div class="block-7">
          <div class="text-center">
            <h2 class="heading">Everyone</h2>
            <img class="siw-loguitos px-4" src="<?= $site->url()?>/assets/images/HOME - BROWSE.png" alt="">
            <a href="<?= $site->url() ?>/projects" class="btn btn-primary d-block px-2 py-4">Browse Projects</a>
          </div>
        </div>
      </div>


      <div class="col-md-4 mb-4 ftco-animate">
        <div class="block-7">
          <div class="text-center">
            <h2 class="heading">Organizations</h2>
            <img class="siw-loguitos px-4" src="<?= $site->url()?>/assets/images/HOME - BECOME A PARTNER.png" alt="">
            <a href="<?= $site->url() ?>/partner" class="btn btn-primary d-block px-2 py-4">Become a Partner</a>
          </div>
        </div>
      </div>

    </div>
  </div>
</section>

<section class="ftco-section">
  <div class="container">
    <div class="row justify-content-center mb-5 pb-3">
      <div class="col-md-12 heading-section ftco-animate text-center">
        <h3 class="subheading">UNDP</h3>
        <h2 class="mb-1">Sustainable Development Goals</h2>
      </div>
    </div>

    <div class="row">
      <?php $counter = 0 ?>
      <?php foreach ($page->find('sdgs')->files() as $sdg): ?>
        <?php $counter ++ ?>
        <div class="col-md-2 my-2 p-1 col-4">
          <img class="sdg-image ftco-animate" src="<?= $site->url.'/'.$sdg->uri() ?>" alt="" data-toggle="tooltip" data-placement="top" title="<?= $sdg->text() ?>">
        </div>
        <!-- &lt;span class="sdg-<?= $counter ?>"&gt;
        &lt;i class="fa fa-check"&gt;&lt;/i&gt;

          <?= $sdg->title() ?>
        &lt;/span&gt;<br> -->
        <!-- .sdg-<?= $counter ?> > p.sdg-<?= $counter ?>,  -->
      <?php endforeach ?>

    </div>
  </div>






</section>


<!-- <div class="map">
  <div class="container">
    <img class="w-100" src="<?= $page->map()->toFile()->url()?>" alt="">
  </div>
</div> -->
<iframe class="gMap" src="https://www.google.com/maps/d/embed?mid=1hbvfo6itCbzmDsBhOud03Revqhki3reC" width="640" height="480"></iframe>

<!-- <div id="map" class="map"></div> -->

<section class="ftco-section bg-light hero-wrap back-right" style="background-image: url('<?= $site->url() ?>/assets/images/graphics/bubbles/Asset 52.png');">

<svg class="bg-svg bg-center" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 42.75 26.49"><defs><style>.cls-1{fill:#941b80;opacity:0.5;}</style></defs><title>Asset 212</title><g id="Layer_2" data-name="Layer 2"><g id="Ñëîé_1" data-name="Ñëîé 1"><path class="cls-1" d="M33,6c6,.91,11.73,11.31,9,16.12C37.2,30.77,2.66,25.61.15,15-1.44,8.27,9.77-1.49,13.69.19,17,1.61,16.66,6.34,20.44,8,24.39,9.74,26.93,5.07,33,6Z"/></g></g></svg>
  <div class="container">
    <div class="row justify-content-center mb-5 pb-3">
      <div class="col-md-7 heading-section ftco-animate text-center">
        <h3 class="subheading">Browse Projects</h3>
      </div>
    </div>
    <div class="row d-flex">
      <div class="col-md-8 offset-md-2 text text-center mb-4 text-black-50">
        <?= $page->proyectos()->kirbytext() ?>
      </div>
    </div>
    <div class="row">



      <?php foreach ($site->find('projects')->children()->shuffle()->limit(6) as $proyecto) :?>
        <div class="col-md-4 d-flex ftco-animate">
          <div class="blog-entry justify-content-end">
            <div class="text p-4 mt-1 float-right d-block">
              <div class="d-flex align-items-center pt-2 mb-4">
              </div>
              <h3 class="heading mt-2"><a href="#"><?= $proyecto->title() ?></a>
              </h3>
              <p>
                <?= $proyecto->text()->text() ?>
              </p>
              <p>
                <i class="fa fa-globe"></i> <?= $proyecto->location()->text() ?>
              </p>
              <p>
                <i class="fa fa-check"></i>
                <?php
                $tags = $proyecto->tags()->split();
                ?>
                <?php foreach($tags as $tag): ?>
                  <?= strtoupper($tag) ?>
                <?php endforeach ?>
              </p>
            </div>
          </div>
        </div>


      <?php endforeach ?>

    </div>
  </div>
  <div class="container">
    <a href="<?= $site->url() ?>/projects" class="btn btn-primary d-block px-2 py-4 my-3">Browse all Projects</a>
  </div>

</section>

<section  id="aboutSIW" class="ftco-section ftco-section-services bg-light">
  <svg class="bg-svg bg-center" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 53.96 32.56">
    <defs>
      <style>.cls-2{fill: url(#my-linear-gradient);}</style>
    </defs>
    <linearGradient id="my-linear-gradient" x1="638.17" y1="-298.09" x2="670.35" y2="-317.82" gradientTransform="matrix(-0.23, 0.97, 0.97, 0.23, 473.04, -542.31)" gradientUnits="userSpaceOnUse">
      <stop offset="0.02" stop-color="#8ee3ef"/>
      <stop offset="1" stop-color="#3891a6"/>
    </linearGradient>
    <g id="Layer_2" data-name="Layer 2">
      <g id="Ñëîé_1" data-name="Ñëîé 1">
        <!-- <path class="cls-2" d="M27,5C38.44,11,50.7,23.49,47.81,29.51c-2.11,4.4-11.57,3.83-26.41,2.92C18.77,32.28.34,31.15,0,27.31-.23,24.51,4.07,23,6.18,16.73,8.45,10,5.08,4.45,7.28,1.28,9.35-1.71,19.36,1,27,5Z"/> -->
        <path class="cls-2" d="M13.07,0C19.68,0,17,7.4,26,4.4c9.77-3.26,12.8-2.77,17.32-2.77a8.17,8.17,0,0,1,5.19,14.48h0c-5.62,4.62-6.3,7.46-3.41,14.14h0a8.17,8.17,0,1,1-15.24,5.82h0c-2.31-6.94-4.52-10.43-16.21-9.94v0l-.56,0A13.07,13.07,0,1,1,13.07,0Z"/>
      </g>
    </g>
  </svg>




  <div class="container">
    <div class="row justify-content-center mb-5 pb-3">
      <div class="col-md-7 heading-section ftco-animate text-center">
        <h2 class="mb-1">About the SIW</h3>
        </div>
      </div>
      <div class="row">

        <div class="col-md-4">
          <div class="services ftco-animate text-center">
            <div class="icon d-flex justify-content-center align-items-center m-auto">
              <!-- <span class="flaticon-like"></span> -->
              <img class="siw-loguitos" src="<?= $site->url()?>/assets/images/HOME - SOCIAL.png" alt="">
            </div>
            <div class="text mt-4">
              <h3>Social</h3>
              <?= $page->icon1()->text() ?>
              <!-- <p>A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country</p> -->
            </div>
          </div>
        </div>

        <div class="col-md-4">
          <div class="services ftco-animate text-center">
            <div class="icon d-flex justify-content-center align-items-center m-auto">
              <!-- <span class="flaticon-like"></span> -->
              <img class="siw-loguitos" src="<?= $site->url()?>/assets/images/HOME - INNOVATION.png" alt="">

            </div>
            <div class="text mt-4">
              <h3>Innovation</h3>
              <?= $page->icon2()->text() ?>              </div>
            </div>
          </div>

          <div class="col-md-4">
            <div class="services ftco-animate text-center">
              <div class="icon d-flex justify-content-center align-items-center m-auto">
                <!-- <span class="flaticon-like"></span> -->
                <img class="siw-loguitos" src="<?= $site->url()?>/assets/images/HOME - WAREHOUSE.png" alt="">

              </div>
              <div class="text mt-4">
                <h3>Warehouse</h3>
                <?= $page->icon3()->text() ?>              </div>
              </div>
            </div>

            <div class="row">

              <div class="col-md-8 offset-md-2 text text-center mb-4">
                <?= $page->extratext()->kirbytext() ?>
              </div>
            </div>

            <div class="col-md-6 mb-4">
              <a href="<?= $site->url() ?>/about-eidos" class="btn btn-primary d-block px-2 py-4">Learn more about Eidos</a>
            </div>

            <div class="col-md-6 mb-4">
              <a href="<?= $site->url() ?>/about-y20" class="btn btn-primary d-block px-2 py-4">Learn more about Y20</a>
            </div>

          </div>
        </div>
      </section>






      <section class="ftco-section ftco-intro back-left" style="background-image: url(<?= $site->url() ?>/assets/images/graphics/crops/VV-22.png);">
        <div class="container">
          <div class="row justify-content-end">
            <div class="col-md-6 ftco-animate">
              <div class="heading-section ftco-animate">
                <h2 class="mb-4">Capacity Building Programme</h2>
              </div>
              <p class="">
                <?= $page->capacity()->kirbytext() ?>
              </p>
              <a href="<?= $site->url() ?>/capacity-building-programme" class="btn btn-primary d-block px-2 py-4">Learn more</a>

            </div>
          </div>
        </div>
      </section>


      <section class="ftco-section">
        <svg class="bg-svg bg-center" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 47.76 34"><defs><style>.cls-1{fill:#ed254e;opacity:0.5;}</style></defs><title>Asset 112</title><g id="Layer_2" data-name="Layer 2"><g id="Ñëîé_1" data-name="Ñëîé 1"><path class="cls-1" d="M13.76,0A13.73,13.73,0,0,1,24.92,5.72h0c6.66,9.22,8.19,9.37,15.44,10.61h0A8.9,8.9,0,1,1,33.27,32h0c-5.71-4.61-6.84-5.67-18.09-4.58H15.1c-.44,0-.89.07-1.34.07A13.76,13.76,0,0,1,13.76,0Z"/></g></g></svg>
        <div class="container">
          <div class="row justify-content-center mb-5">
            <div class="col-md-12 heading-section text-center ftco-animate">
              <!-- <h3 class="subheading">textito</h3> -->
              <h2 class="mb-1">Meet Our Team</h2>
            </div>
          </div>

          <div class="row justify-content-center">
            <?php foreach ($page->find('team')->files() as $team): ?>

              <div class="col-6 col-md my-2 coach ftco-animate">
                <img class="sdg-image" src="<?= $site->url.'/'.$team->uri() ?>" alt="">
                <div class="align-content-center d-flex flex-column h-100 justify-content-center text text-center">
                  <span class="subheading"><?= $team->role()->text() ?></span>
                  <h3><a href="<?= $team->link() ?>"><?= $team->title()->text() ?></a></h3>
                </div>
              </div>

            <?php endforeach ?>
          </div>
        </div>
      </section>


      <section class="ftco-section contact-section">
        <?php snippet('contact-tile') ?>
        </section>


        <section class="ftco-section testimony-section">
          <div class="container">
            <svg class="bg-svg bg-center" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 53.93 32.61"><defs><style>.cls-1{fill:url(#linear-gradient);}</style><linearGradient id="linear-gradient" x1="92.59" y1="600.95" x2="56.8" y2="627.52" gradientTransform="matrix(0.99, 0.14, 0.14, -0.99, -133.04, 613.24)" gradientUnits="userSpaceOnUse"><stop offset="0.02" stop-color="#ffbf00"/><stop offset="0.18" stop-color="#ffbb02"/><stop offset="0.34" stop-color="#fdaf08"/><stop offset="0.49" stop-color="#fb9b12"/><stop offset="0.65" stop-color="#f88020"/><stop offset="0.81" stop-color="#f35c32"/><stop offset="0.96" stop-color="#ee3048"/><stop offset="1" stop-color="#ed254e"/></linearGradient></defs><title>Asset 1612</title><g id="Layer_2" data-name="Layer 2"><g id="Ñëîé_1" data-name="Ñëîé 1"><path class="cls-1" d="M6.64,31.47c-6.68-3.08-8.91-18-4-21.78,4.55-3.48,11,5.59,22.63,4.25C39.12,12.35,44.1-2,49.5.23c5.15,2.11,6.88,17.66-.72,26.16-2.87,3.21-8.48,7-14,6.08-3.55-.59-3.64-2.57-7.64-3.11-4.26-.59-5.62,1.46-12.45,2.26C10.59,32.1,8.53,32.34,6.64,31.47Z"/></g></g></svg>
            <div class="row justify-content-center mb-5 pb-3">
              <div class="col-md-7 heading-section ftco-animate text-center">
                <h3 class="subheading">Testimony</h3>
                <h2 class="mb-1">Successful Stories</h2>
              </div>
            </div>

            <div class="row">
              <?php foreach ($page->find('quotes')->files() as $quote): ?>

                <div class="col d-flex">
                  <div class="testimony-wrap p-4 pb-5 my-auto">
                    <div class="text">
                      <div class="line pl-5">
                        <p class="mb-4 pb-1"><?= $quote->text()->text() ?></p>
                        <span class="quote d-flex align-items-center justify-content-center">
                          <i class="icon-quote-left"></i>
                        </span>
                      </div>
                      <div class="d-flex align-items-center">
                        <div class="user-img" style="background-image: url('<?= $site->url.'/'.$quote->uri() ?>')">
                        </div>
                        <div class="ml-4">
                          <p class="name"><?= $quote->quoter()->text() ?></p>
                          <span class="position"><?= $quote->extra()->text() ?></span>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              <?php endforeach ?>
            </div>
          </div>
        </section>

        <!-- LANDMARK -->

        <?= snippet('footer') ?>
