<? snippet('header') ?>
<body>

  <?= snippet('navbar') ?>

  <section class="hero-wrap back-right" style="background-image: url('<?= $site->url() ?>/assets/images/graphics/crops/VV-20.png');">
    <div class="overlay"></div>
    <div class="container">
      <div class="row no-gutters slider-text js-fullheight align-items-center justify-content-start">
        <div class="col-md-8 ftco-animate">
          <img class="logo-siw" src="<?= $site->url() ?>/assets/images/Logo SIW.png" alt="" height="400px">
          <!-- <p><a href="#" class="btn btn-primary p-3 px-4">15 Day Free Trial</a></p> -->
        </div>
      </div>
    </div>
  </section>

  <section class="ftco-section bg-light">

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
            <img class="siw-loguitos px-4" src="<?= $site->url()?>/assets/images/HOME - SUBMIT.png" alt="">
            <a href="#" class="btn btn-primary d-block px-2 py-4">Submit your Project</a>
          </div>
        </div>
      </div>


      <div class="col-md-4 mb-4 ftco-animate">
        <div class="block-7">
          <div class="text-center">
            <h2 class="heading">Everyone</h2>
            <img class="siw-loguitos px-4" src="<?= $site->url()?>/assets/images/HOME - BROWSE.png" alt="">
            <a href="#" class="btn btn-primary d-block px-2 py-4">Browse Projects</a>
          </div>
        </div>
      </div>


      <div class="col-md-4 mb-4 ftco-animate">
        <div class="block-7">
          <div class="text-center">
            <h2 class="heading">Organizations</h2>
            <img class="siw-loguitos px-4" src="<?= $site->url()?>/assets/images/HOME - BROWSE.png" alt="">
            <a href="#" class="btn btn-primary d-block px-2 py-4">Become a Partner</a>
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
        <h2 class="mb-1">Objetivos de Desarrollo Sostenible</h2>
      </div>
    </div>

    <div class="row">
      <?php foreach ($page->find('sdgs')->files() as $sdg): ?>

        <div class="col-md-2 my-2">
          <img class="sdg-image ftco-animate" src="<?= $site->url.'/'.$sdg->uri() ?>" alt="" data-toggle="tooltip" data-placement="top" title="<?= $sdg->text() ?>">
        </div>

      <?php endforeach ?>

    </div>
  </div>






</section>

<div id="map" class="map"></div>

<section class="ftco-section bg-light">
  <div class="container">
    <div class="row justify-content-center mb-5 pb-3">
      <div class="col-md-7 heading-section ftco-animate text-center">
        <h3 class="subheading">Browse Projects</h3>
      </div>
    </div>
    <div class="row d-flex">
      <div class="col-md-8 offset-2 text text-center mb-4">
        <?= $page->proyectos()->kirbytext() ?>
      </div>

      <?php foreach ($site->find('proyectos')->children()->shuffle()->limit(6) as $proyecto) :?>
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
    <a href="#" class="btn btn-primary d-block px-2 my-4">Browse all Projects</a>
  </div>

</section>

<section  id="aboutSIW" class="ftco-section ftco-section-services bg-light">
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

              <div class="col-md-8 offset-2 text text-center mb-4">
                <?= $page->extratext()->kirbytext() ?>
              </div>
            </div>

            <div class="col-md-6 mb-4">
              <a href="#" class="btn btn-primary d-block px-2 py-4">Learn more about EIDOS</a>
            </div>

            <div class="col-md-6 mb-4">
              <a href="#" class="btn btn-primary d-block px-2 py-4">Learn more about Y20</a>
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
              <a href="#" class="btn btn-primary d-block px-2 py-4">Learn more</a>

            </div>
          </div>
        </div>
      </section>


      <section class="ftco-section">
        <div class="container">
          <div class="row justify-content-center mb-5">
            <div class="col-md-12 heading-section text-center ftco-animate">
              <h3 class="subheading">textito</h3>
              <h2 class="mb-1">Meet Our Team</h2>
            </div>
          </div>

          <div class="row">
            <?php foreach ($page->find('team')->files() as $team): ?>

              <div class="col my-2 coach ftco-animate">
                <img class="sdg-image" src="<?= $site->url.'/'.$team->uri() ?>" alt="">
                <div class="text text-center">

                  <span class="subheading"><?= $team->role()->text() ?></span>
                  <h3><a><?= $team->title()->text() ?></a></h3>
                </div>
              </div>

            <?php endforeach ?>
          </div>
        </div>
      </section>


      <section class="ftco-section contact-section">
        <div class="container">
          <div class="row block-9">
            <div class="col-md-6 offset-3 contact-info ftco-animate bg-light p-4">
              <div class="row">
                <div class="col-md-12 mb-4">
                  <h2 class="h4">Contact Information</h2>
                </div>
                <div class="col-md-12 mb-3">
                  <p><span>Address:</span> 198 West 21th Street, Suite 721 New York NY 10016</p>
                </div>
                <div class="col-md-12 mb-3">
                  <p><span>Phone:</span> <a href="tel://1234567920">+ 1235 2355 98</a></p>
                </div>
                <div class="col-md-12 mb-3">
                  <p><span>Email:</span> <a href="mailto:info@yoursite.com">info@yoursite.com</a></p>
                </div>
                <div class="col-md-12 mb-3">
                  <p><span>Website:</span> <a href="#">yoursite.com</a></p>
                </div>
              </div>
            </div>
            <!-- <div class="col-md-1"></div>
              <div class="col-md-6 ftco-animate">
                <form action="#" class="contact-form">
                  <div class="row">
                    <div class="col-md-6">
                      <div class="form-group">
                        <input type="text" class="form-control" placeholder="Your Name">
                      </div>
                    </div>
                    <div class="col-md-6">
                      <div class="form-group">
                        <input type="text" class="form-control" placeholder="Your Email">
                      </div>
                    </div>
                  </div>
                  <div class="form-group">
                    <input type="text" class="form-control" placeholder="Subject">
                  </div>
                  <div class="form-group">
                    <textarea name="" id="" cols="30" rows="7" class="form-control" placeholder="Message"></textarea>
                  </div>
                  <div class="form-group">
                    <input type="submit" value="Send Message" class="btn btn-primary py-3 px-5">
                  </div>
                </form>
              </div> -->
            </div>
          </div>
        </section>


        <section class="ftco-section testimony-section">
          <div class="container">
            <div class="row justify-content-center mb-5 pb-3">
              <div class="col-md-7 heading-section ftco-animate text-center">
                <h3 class="subheading">Testimony</h3>
                <h2 class="mb-1">Successful Stories</h2>
              </div>
            </div>

            <div class="row">
              <?php foreach ($page->find('quotes')->files() as $quote): ?>

                <div class="col">
                  <div class="testimony-wrap p-4 pb-5">
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
