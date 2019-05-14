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
              <img class="siw-loguitos" src="<?= $site->url()?>/assets/images/HOME - SUBMIT.png" alt="">
              <a href="#" class="btn btn-primary d-block px-2 py-4">Submit your Project</a>
            </div>
          </div>
        </div>


        <div class="col-md-4 mb-4 ftco-animate">
          <div class="block-7">
            <div class="text-center">
              <h2 class="heading">Everyone</h2>
              <img class="siw-loguitos" src="<?= $site->url()?>/assets/images/HOME - BROWSE.png" alt="">
              <a href="#" class="btn btn-primary d-block px-2 py-4">Browse Projects</a>
            </div>
          </div>
        </div>


        <div class="col-md-4 mb-4 ftco-animate">
          <div class="block-7">
            <div class="text-center">
              <h2 class="heading">Organizations</h2>
              <img class="siw-loguitos" src="<?= $site->url()?>/assets/images/HOME - SUBMIT.png" alt="">
              <a href="#" class="btn btn-primary d-block px-2 py-4">Become a Partner</a>
            </div>
          </div>
        </div>

      </div>
    </div>
  </section>

  <section class="ftco-section">
    <div class="container-fluid">
      <div class="row justify-content-center mb-5 pb-3">
        <div class="col-md-12 heading-section ftco-animate text-center">
          <h3 class="subheading">UNDP</h3>
          <h2 class="mb-1">Objetivos de Desarrollo Sostenible</h2>
        </div>
      </div>

      <div class="row no-gutters">


        <div class="col-md-2 col-sm-4">
          <div class="package-program ftco-animate">
            <a href="#" class="img d-flex justify-content-center align-items-center" style="background-image: url('<?= $site->url() ?>/assets/images/E_SDG goals_icons-individual-rgb-01.png');">
              <div class="text p-1 text-center">
                <p>
                  1.- Erradicar la pobreza en todas sus formas en todo el mundo.

                </p>
              </div>
            </a>
          </div>
        </div>


        <div class="col-md-2 col-sm-4">
          <div class="package-program ftco-animate">
            <a href="#" class="img d-flex justify-content-center align-items-center" style="background-image: url('<?= $site->url() ?>/assets/images/E_SDG goals_icons-individual-rgb-02.png');">
              <div class="text p-1 text-center">
                <p>
                  2.- Poner fin al hambre, conseguir la seguridad alimentaria y una mejor nutrición, y promover la agricultura sostenible.

                </p>
              </div>
            </a>
          </div>
        </div>


        <div class="col-md-2 col-sm-4">
          <div class="package-program ftco-animate">
            <a href="#" class="img d-flex justify-content-center align-items-center" style="background-image: url('<?= $site->url() ?>/assets/images/E_SDG goals_icons-individual-rgb-03.png');">
              <div class="text p-1 text-center">
                <p>
                  3.- Garantizar una vida saludable y promover el bienestar para todos para todas las edades.

                </p>
              </div>
            </a>
          </div>
        </div>


        <div class="col-md-2 col-sm-4">
          <div class="package-program ftco-animate">
            <a href="#" class="img d-flex justify-content-center align-items-center" style="background-image: url('<?= $site->url() ?>/assets/images/E_SDG goals_icons-individual-rgb-04.png');">
              <div class="text p-1 text-center">
                <p>
                  4.- Garantizar una educación de calidad inclusiva y equitativa, y promover las oportunidades de aprendizaje permanente para todos.

                </p>
              </div>
            </a>
          </div>
        </div>


        <div class="col-md-2 col-sm-4">
          <div class="package-program ftco-animate">
            <a href="#" class="img d-flex justify-content-center align-items-center" style="background-image: url('<?= $site->url() ?>/assets/images/E_SDG goals_icons-individual-rgb-05.png');">
              <div class="text p-1 text-center">
                <p>
                  5.- Alcanzar la igualdad entre los géneros y empoderar a todas las mujeres y niñas.

                </p>
              </div>
            </a>
          </div>
        </div>


        <div class="col-md-2 col-sm-4">
          <div class="package-program ftco-animate">
            <a href="#" class="img d-flex justify-content-center align-items-center" style="background-image: url('<?= $site->url() ?>/assets/images/E_SDG goals_icons-individual-rgb-06.png');">
              <div class="text p-1 text-center">
                <p>
                  6.- Garantizar la disponibilidad y la gestión sostenible del agua y el saneamiento para todos.

                </p>
              </div>
            </a>
          </div>
        </div>


        <div class="col-md-2 col-sm-4">
          <div class="package-program ftco-animate">
            <a href="#" class="img d-flex justify-content-center align-items-center" style="background-image: url('<?= $site->url() ?>/assets/images/E_SDG goals_icons-individual-rgb-07.png');">
              <div class="text p-1 text-center">
                <p>
                  7.- Asegurar el acceso a energías asequibles, fiables, sostenibles y modernas para todos.

                </p>
              </div>
            </a>
          </div>
        </div>


        <div class="col-md-2 col-sm-4">
          <div class="package-program ftco-animate">
            <a href="#" class="img d-flex justify-content-center align-items-center" style="background-image: url('<?= $site->url() ?>/assets/images/E_SDG goals_icons-individual-rgb-08.png');">
              <div class="text p-1 text-center">
                <p>
                  8.- Fomentar el crecimiento económico sostenido, inclusivo y sostenible, el empleo pleno y productivo, y el trabajo decente para todos.

                </p>
              </div>
            </a>
          </div>
        </div>


        <div class="col-md-2 col-sm-4">
          <div class="package-program ftco-animate">
            <a href="#" class="img d-flex justify-content-center align-items-center" style="background-image: url('<?= $site->url() ?>/assets/images/E_SDG goals_icons-individual-rgb-09.png');">
              <div class="text p-1 text-center">
                <p>
                  9.- Desarrollar infraestructuras resilientes, promover la industrialización inclusiva y sostenible, y fomentar la innovación.

                </p>
              </div>
            </a>
          </div>
        </div>


        <div class="col-md-2 col-sm-4">
          <div class="package-program ftco-animate">
            <a href="#" class="img d-flex justify-content-center align-items-center" style="background-image: url('<?= $site->url() ?>/assets/images/E_SDG goals_icons-individual-rgb-10.png');">
              <div class="text p-1 text-center">
                <p>
                  10.- Reducir las desigualdades entre países y dentro de ellos.

                </p>
              </div>
            </a>
          </div>
        </div>


        <div class="col-md-2 col-sm-4">
          <div class="package-program ftco-animate">
            <a href="#" class="img d-flex justify-content-center align-items-center" style="background-image: url('<?= $site->url() ?>/assets/images/E_SDG goals_icons-individual-rgb-11.png');">
              <div class="text p-1 text-center">
                <p>
                  11.- Conseguir que las ciudades y los asentamientos humanos sean inclusivos, seguros, resilientes y sostenibles.

                </p>
              </div>
            </a>
          </div>
        </div>


        <div class="col-md-2 col-sm-4">
          <div class="package-program ftco-animate">
            <a href="#" class="img d-flex justify-content-center align-items-center" style="background-image: url('<?= $site->url() ?>/assets/images/E_SDG goals_icons-individual-rgb-12.png');">
              <div class="text p-1 text-center">
                <p>
                  12.- Garantizar las pautas de consumo y de producción sostenible.

                </p>
              </div>
            </a>
          </div>
        </div>


        <div class="col-md-2 col-sm-4">
          <div class="package-program ftco-animate">
            <a href="#" class="img d-flex justify-content-center align-items-center" style="background-image: url('<?= $site->url() ?>/assets/images/E_SDG goals_icons-individual-rgb-13.png');">
              <div class="text p-1 text-center">
                <p>
                  13.- Tomar medidas urgentes para combatir el cambio climático y sus efectos.

                </p>
              </div>
            </a>
          </div>
        </div>


        <div class="col-md-2 col-sm-4">
          <div class="package-program ftco-animate">
            <a href="#" class="img d-flex justify-content-center align-items-center" style="background-image: url('<?= $site->url() ?>/assets/images/E_SDG goals_icons-individual-rgb-14.png');">
              <div class="text p-1 text-center">
                <p>
                  14.- Conservar y utilizar de forma sostenible los océanos, mares y recursos marinos para lograr el desarrollo sostenible.

                </p>
              </div>
            </a>
          </div>
        </div>


        <div class="col-md-2 col-sm-4">
          <div class="package-program ftco-animate">
            <a href="#" class="img d-flex justify-content-center align-items-center" style="background-image: url('<?= $site->url() ?>/assets/images/E_SDG goals_icons-individual-rgb-15.png');">
              <div class="text p-1 text-center">
                <p>
                  15.- Proteger, restaurar y promover la utilización sostenible de los ecosistemas terrestres.

                </p>
              </div>
            </a>
          </div>
        </div>


        <div class="col-md-2 col-sm-4">
          <div class="package-program ftco-animate">
            <a href="#" class="img d-flex justify-content-center align-items-center" style="background-image: url('<?= $site->url() ?>/assets/images/E_SDG goals_icons-individual-rgb-16.png');">
              <div class="text p-1 text-center">
                <p>
                  16.- Promover sociedades pacíficas e inclusivas para el desarrollo sostenible, facilitar acceso a la justicia para todos y crear instituciones eficaces, responsables e inclusivas a todos los niveles.

                </p>
              </div>
            </a>
          </div>
        </div>


        <div class="col-md-2 col-sm-4">
          <div class="package-program ftco-animate">
            <a href="#" class="img d-flex justify-content-center align-items-center" style="background-image: url('<?= $site->url() ?>/assets/images/E_SDG goals_icons-individual-rgb-17.png');">
              <div class="text p-1 text-center">
                <p>
                  17.- Fortalecer los medios de ejecución y reavivar la alianza mundial para el desarrollo sostenible.

                </p>
              </div>
            </a>
          </div>
        </div>

        <div class="col-md-2 col-sm-4">
          <div class="package-program ftco-animate">
            <a href="#" class="img d-flex justify-content-center align-items-center" style="background-image: url('<?= $site->url() ?>/assets/images/E_SDG_logo_with_UN_Emblem_square_rgb.png');">
              <div class="text p-1 text-center">
                <p>
                  UNESCO (Organización de las Naciones Unidas para la Educación, la Ciencia y la Cultura)                 </div>
                </a>
              </div>
            </div>


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
            <?= $page->proyectos()->kirbytext() ?>

            <?php foreach ($site->find('proyectos')->children() as $proyecto) :?>

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
      <a href="#" class="btn btn-primary d-block px-2 py-4">Browse all Projects</a>
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

              <div class="col-md-8 offset-2 text text-center">
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
                  <h2 class="mb-4">Capacity Building Programe</h2>
                </div>
                <p class="">
                  <?= $page->extratext()->kirbytext() ?>
                </p>
                <a href="#" class="btn btn-primary d-block px-2 py-4">Learn more</a>

              </div>
            </div>
          </div>
        </section>


        <section class="ftco-section">
          <div class="container-fluid">
            <div class="row justify-content-center mb-5">
              <div class="col-md-12 heading-section text-center ftco-animate">
                <h3 class="subheading">Coaches</h3>
                <h2 class="mb-1">Meet Our Team</h2>
              </div>
            </div>
            <div class="row">


              <div class="col-lg-3 d-flex">
                <div class="coach align-items-stretch">
                  <div class="img" style="background-image: url(<?= $site->url() ?>/assets/images/trainer-1.jpg);"></div>
                  <div class="text bg-white p-4 ftco-animate">
                    <span class="subheading">Owner / Head Coach</span>
                    <h3><a href="#">Valentina Varas</a></h3>
                    <p></p>
                  </div>
                </div>
              </div>

              <div class="col-lg-3 d-flex">
                <div class="coach align-items-stretch">
                  <div class="img" style="background-image: url(<?= $site->url() ?>/assets/images/trainer-2.jpg);"></div>
                  <div class="text bg-white p-4 ftco-animate">
                    <span class="subheading">Owner / Head Coach</span>
                    <h3><a href="#">Valentina Varas</a></h3>
                    <p></p>
                  </div>
                </div>
              </div>

              <div class="col-lg-3 d-flex">
                <div class="coach align-items-stretch">
                  <div class="img" style="background-image: url(<?= $site->url() ?>/assets/images/trainer-3.jpg);"></div>
                  <div class="text bg-white p-4 ftco-animate">
                    <span class="subheading">Owner / Head Coach</span>
                    <h3><a href="#">Valentina Varas</a></h3>
                    <p></p>
                  </div>
                </div>
              </div>

              <div class="col-lg-3 d-flex">
                <div class="coach align-items-stretch">
                  <div class="img" style="background-image: url(<?= $site->url() ?>/assets/images/trainer-4.jpg);"></div>
                  <div class="text bg-white p-4 ftco-animate">
                    <span class="subheading">Owner / Head Coach</span>
                    <h3><a href="#">Valentina Varas</a></h3>
                    <p></p>
                  </div>
                </div>
              </div>



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


<!-- <section class="ftco-section testimony-section">
  <div class="container">
    <div class="row justify-content-center mb-5 pb-3">
      <div class="col-md-7 heading-section ftco-animate text-center">
        <h3 class="subheading">Testimony</h3>
        <h2 class="mb-1">Successful Stories</h2>
      </div>
    </div>
    <div class="row ftco-animate">
      <div class="col-md-12">
        <div class="carousel-testimony owl-carousel">
          <div class="item">
            <div class="testimony-wrap p-4 pb-5">
              <div class="text">
                <div class="line pl-5">
                  <p class="mb-4 pb-1">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                  <span class="quote d-flex align-items-center justify-content-center">
                    <i class="icon-quote-left"></i>
                  </span>
                </div>
                <div class="d-flex align-items-center">
                  <div class="user-img" style="background-image: url(<?= $site->url() ?>/assets/images/person_1.jpg)">
                  </div>
                  <div class="ml-4">
                    <p class="name">Gabby Smith</p>
                    <span class="position">Customer</span>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="item">
            <div class="testimony-wrap p-4 pb-5">
              <div class="text">
                <div class="line pl-5">
                  <p class="mb-4 pb-1">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                  <span class="quote d-flex align-items-center justify-content-center">
                    <i class="icon-quote-left"></i>
                  </span>
                </div>

                <div class="d-flex align-items-center">
                  <div class="user-img" style="background-image: url(<?= $site->url() ?>/assets/images/person_2.jpg)">
                  </div>
                  <div class="ml-4">
                    <p class="name">Floyd Weather</p>
                    <span class="position">Customer</span>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="item">
            <div class="testimony-wrap p-4 pb-5">
              <div class="text">
                <div class="line pl-5">
                  <p class="mb-4 pb-1">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                  <span class="quote d-flex align-items-center justify-content-center">
                    <i class="icon-quote-left"></i>
                  </span>
                </div>

                <div class="d-flex align-items-center">
                  <div class="user-img" style="background-image: url(<?= $site->url() ?>/assets/images/person_3.jpg)">
                  </div>
                  <div class="ml-4">
                    <p class="name">James Dee</p>
                    <span class="position">Customer</span>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="item">
            <div class="testimony-wrap p-4 pb-5">
              <div class="text">
                <div class="line pl-5">
                  <p class="mb-4 pb-1">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                  <span class="quote d-flex align-items-center justify-content-center">
                    <i class="icon-quote-left"></i>
                  </span>
                </div>

                <div class="d-flex align-items-center">
                  <div class="user-img" style="background-image: url(<?= $site->url() ?>/assets/images/person_4.jpg)">
                  </div>
                  <div class="ml-4">
                    <p class="name">Lance Roger</p>
                    <span class="position">Customer</span>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="item">
            <div class="testimony-wrap p-4 pb-5">
              <div class="text">
                <div class="line pl-5">
                  <p class="mb-4 pb-1">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                  <span class="quote d-flex align-items-center justify-content-center">
                    <i class="icon-quote-left"></i>
                  </span>
                </div>

                <div class="d-flex align-items-center">
                  <div class="user-img" style="background-image: url(<?= $site->url() ?>/assets/images/person_2.jpg)">
                  </div>
                  <div class="ml-4">
                    <p class="name">Kenny Bufer</p>
                    <span class="position">Customer</span>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section> -->

<!-- LANDMARK -->

<?= snippet('footer') ?>
