<? snippet('header') ?>


<body>

  <?= snippet('navbar') ?>

  <section class="ftco-section ftco-intro back-left" style="background-image: url('<?= $site->url() ?>  /assets/images/graphics/crops/2-01.png');">
    <div class="container">
      <div class="row justify-content-end pt-5">

        <!-- <svg width="0" height="0" viewbox="0 0 500 500" width="30%" >
          <defs>
          <clipPath id="myClip">
          <path transform="scale(10, 10)"
          d="M6.58,31.28c-6.67-3.11-8.83-18-3.85-21.8C7.29,6,13.67,15.12,25.33,13.84,39.14,12.31,44.19-2,49.58.24c5.14,2.13,6.8,17.69-.84,26.16-2.88,3.19-8.51,7-14,6-3.54-.61-3.63-2.58-7.62-3.15-4.26-.6-5.63,1.43-12.46,2.2C10.52,31.92,8.46,32.16,6.58,31.28Z"/>
            </clipPath>
          </defs>
        </svg> -->

          <svg width="0" height="0">
            <defs>
              <clipPath id="myClip" clipPathUnits="objectBoundingBox">
                <polygon points="0 1, 0 0, 1 0, 0.8 1" />
              </clipPath>
            </defs>
          </svg>

          <img class="alf" src="<?= $page->photo()->toFile()->url() ?>" alt="">



        <div class="col-md-6">
          <div class="heading-section ftco-animate">
            <h2 class="mb-4"><?= $page->title()->text() ?></h2>
          </div>
          <div class="ftco-animate">
            <?= $page->text()->kirbytext() ?>

            <div class="text p-4 mt-1 float-left d-block">
              <p>
                <i class="fa fa-globe"></i> <?= $page->location()->text() ?>
              </p>
              <p>
                <i class="fa fa-check"></i>
                <?php
                $tags = $page->tags()->split();
                ?>
                <?php foreach($tags as $tag): ?>
                  <?= strtoupper($tag) ?>
                <?php endforeach ?>
              </p>

              <div class="sdgs-container
              <?php foreach($tags as $tag): ?>
                <?= $tag ?>
              <?php endforeach ?>
              ">
              <p class="sdg-1"> Economic growth must be inclusive to provide sustainable jobs and promote equality. </p>
<p class="sdg-2"> The food and agriculture sector offers key solutions for development, and is central for hunger and poverty eradication. </p>
<p class="sdg-3"> Ensuring healthy lives and promoting the well-being for all at all ages is essential to sustainable development. </p>
<p class="sdg-4"> Obtaining a quality education is the foundation to improving people’s lives and sustainable development. </p>
<p class="sdg-5"> Gender equality is not only a fundamental human right, but a necessary foundation for a peaceful, prosperous and sustainable world. </p>
<p class="sdg-6"> Clean, accessible water for all is an essential part of the world we want to live in. </p>
<p class="sdg-7"> Energy is central to nearly every major challenge and opportunity. </p>
<p class="sdg-8"> Sustainable economic growth will require societies to create the conditions that allow people to have quality jobs. </p>
<p class="sdg-9"> Investments in infrastructure are crucial to achieving sustainable development. </p>
<p class="sdg-10"> To reduce inequalities, policies should be universal in principle, paying attention to the needs of disadvantaged and marginalized populations. </p>
<p class="sdg-11"> There needs to be a future in which cities provide opportunities for all, with access to basic services, energy, housing, transportation and more. </p>
<p class="sdg-12"> Ensure responsible consumption and production patterns. </p>
<p class="sdg-13"> Climate change is a global challenge that affects everyone, everywhere. </p>
<p class="sdg-14"> Careful management of this essential global resource is a key feature of a sustainable future. </p>
<p class="sdg-15"> Sustainably manage forests, combat desertification, halt and reverse land degradation, halt biodiversity loss. </p>
<p class="sdg-16"> Access to justice for all, and building effective, accountable institutions at all levels. </p>
<p class="sdg-17"> Revitalize the global partnership for sustainable development. </p>


<div class="row mb-4">

  <div class="col-md-6 mb-4">
    <a href="#" class="btn btn-primary d-block px-2 py-4">Download one-pager</a>
  </div>

  <div class="col-md-6 mb-4">
    <a href="#" class="btn btn-primary d-block px-2 py-4">Click here</a>
  </div>
</div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="container">
      <!-- full buttons -->

      <div class="testimony-wrap p-4 pb-5">

        <div class="text">
          <div class="line pl-5">
            <p class="mb-4 pb-1">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,</p>
            <span class="quote d-flex align-items-center justify-content-center">
              <i class="icon-quote-left"></i>
            </span>
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
