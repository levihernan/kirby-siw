<? snippet('header') ?>


<body>

  <?= snippet('navbar') ?>

  <section class="ftco-section ftco-intro back-left back-project" style="background-image: url('<?= $page->photo()->toFile()->url() ?>">
    <div class="container">
      <div class="row justify-content-end pt-5">

        <div class="col-md-6">
          <div class="heading-section ftco-animate">
            <h2 class="mb-4"><?= $page->title()->text() ?></h2>
          </div>
          <div class="ftco-animate">
            <?= $page->text()->kirbytext() ?>

            <div class="text p-4 mt-1 float-left d-block">

              <!-- <p>
                <i class="fa fa-check"></i>
                <?php
                $tags = $page->tags()->split();
                ?>
                <?php foreach($tags as $tag): ?>
                  <?= strtoupper($tag) ?>
                <?php endforeach ?>
              </p> -->

              <div class="sdgs-container locations
              <?php foreach($tags as $tag): ?>
                <?= $tag ?>
              <?php endforeach ?>
              ">
              <span class="location">
                <i class="fa fa-globe"></i> <?= $page->location()->text() ?>
              </span><br>

              <span class="sdg-1"> <i class="fa fa-check"></i> SDG 1: NO POVERTY </span>
<span class="sdg-2"> <i class="fa fa-check"></i> SDG 2: ZERO HUNGER </span>
<span class="sdg-3"> <i class="fa fa-check"></i> SDG 3: GOOD HEALTH AND WELL-BEING </span>
<span class="sdg-4"> <i class="fa fa-check"></i> SDG 4: QUALITY EDUCATION </span>
<span class="sdg-5"> <i class="fa fa-check"></i> SDG 5: GENDER EQUALITY </span>
<span class="sdg-6"> <i class="fa fa-check"></i> SDG 6: CLEAN WATER AND SANITATION </span>
<span class="sdg-7"> <i class="fa fa-check"></i> SDG 7: AFFORDABLE AND CLEAN ENERGY </span>
<span class="sdg-8"> <i class="fa fa-check"></i> SDG 8: DECENT WORK AND ECONOMIC GROWTH </span>
<span class="sdg-9"> <i class="fa fa-check"></i> SDG 9: INDUSTRY, INNOVATION AND INFRASTRUCTURE </span>
<span class="sdg-10"> <i class="fa fa-check"></i> SDG 10: REDUCED INEQUALITIES </span>
<span class="sdg-11"> <i class="fa fa-check"></i> SDG 11: SUSTAINABLE CITIES AND COMMUNITIES </span>
<span class="sdg-12"> <i class="fa fa-check"></i> SDG 12: RESPONSIBLE CONSUMPTION AND PRODUCTION </span>
<span class="sdg-13"> <i class="fa fa-check"></i> SDG 13: CLIMATE ACTION </span>
<span class="sdg-14"> <i class="fa fa-check"></i> SDG 14: LIFE BELOW WATER </span>
<span class="sdg-15"> <i class="fa fa-check"></i> SDG 15: LIFE ON LAND </span>
<span class="sdg-16"> <i class="fa fa-check"></i> SDG 16: PEACE, JUSTICE AND STRONG INSTITUTIONS </span>
<span class="sdg-17"> <i class="fa fa-check"></i> SDG 17: PARTNERSHIPS FOR THE GOALS </span>
<span class="sdg-18"> <i class="fa fa-check"></i> </span>




              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="container">

      <div class="row mb-4 justify-content-center">

        <?php if ( $page->files()->find('one-pager.pdf') ) : ?>
        <div class="col-md-6 mb-4">
          <a target="_blank" href="<?= $page->files()->find('one-pager.pdf')->url() ?>" class="btn btn-primary d-block px-2 py-4">Download one-pager</a>
        </div>
      <?php endif ?>
      <?php if ( $page->files()->find('theory-of-change.pdf') ) : ?>

        <div class="col-md-6 mb-4">
          <a target="_blank" href="<?= $page->files()->find('theory-of-change.pdf')->url() ?>" class="btn btn-primary d-block px-2 py-4">Download Theory of Change</a>
        </div>
      <?php endif ?>
      </div>
      <!-- full buttons -->



  <!-- </section>



  <section class="ftco-section ftco-section-services bg-light"> -->
    <div class="container">


          <?= $page->text2()->text()->kirbytext() ?>

        <div class="row">
        <div class="col ftco-animate bullet-div">
          <?= $page->bullets()->kirbytext() ?>
        </div>

        <div class="testimony-wrap p-4 pb-5">

          <div class="text">
            <div class="line pl-5">
              <p class="mb-4 pb-1"><?= $page->quote()->text() ?></p>
              <span class="quote d-flex align-items-center justify-content-center">
                <i class="icon-quote-left"></i>
              </span>
            </div>
          </div>
        </div>


      </div>
    </div>
  </section>






<?= snippet('footer') ?>
