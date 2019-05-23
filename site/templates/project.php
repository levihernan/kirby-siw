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

              <div class="sdgs-container text-justify
              <?php foreach($tags as $tag): ?>
                <?= $tag ?>
              <?php endforeach ?>
              ">
              <span class="location">
                <i class="fa fa-globe"></i> <?= $page->location()->text() ?>
              </span>

              <span class="sdg-1">
                <i class="fa fa-check"></i>
                Economic growth must be inclusive to provide sustainable jobs and promote equality.
              </span>
              <span class="sdg-2">
                <i class="fa fa-check"></i>
                The food and agriculture sector offers key solutions for development, and is central for hunger and poverty eradication.
              </span>
              <span class="sdg-3">
                <i class="fa fa-check"></i>
                Ensuring healthy lives and promoting the well-being for all at all ages is essential to sustainable development.
              </span>
              <span class="sdg-4">
                <i class="fa fa-check"></i>
                Obtaining a quality education is the foundation to improving people’s lives and sustainable development.
              </span>
              <span class="sdg-5">
                <i class="fa fa-check"></i>
                Gender equality is not only a fundamental human right, but a necessary foundation for a peaceful, prosperous and sustainable world.
              </span>
              <span class="sdg-6">
                <i class="fa fa-check"></i>
                Clean, accessible water for all is an essential part of the world we want to live in.
              </span>
              <span class="sdg-7">
                <i class="fa fa-check"></i>
                Energy is central to nearly every major challenge and opportunity.
              </span>
              <span class="sdg-8">
                <i class="fa fa-check"></i>
                Sustainable economic growth will require societies to create the conditions that allow people to have quality jobs.
              </span>
              <span class="sdg-9">
                <i class="fa fa-check"></i>
                Investments in infrastructure are crucial to achieving sustainable development.
              </span>
              <span class="sdg-10">
                <i class="fa fa-check"></i>
                To reduce inequalities, policies should be universal in principle, paying attention to the needs of disadvantaged and marginalized populations.
              </span>
              <span class="sdg-11">
                <i class="fa fa-check"></i>
                There needs to be a future in which cities provide opportunities for all, with access to basic services, energy, housing, transportation and more.
              </span>
              <span class="sdg-12">
                <i class="fa fa-check"></i>
                Ensure responsible consumption and production patterns.
              </span>
              <span class="sdg-13">
                <i class="fa fa-check"></i>
                Climate change is a global challenge that affects everyone, everywhere.
              </span>
              <span class="sdg-14">
                <i class="fa fa-check"></i>
                Careful management of this essential global resource is a key feature of a sustainable future.
              </span>
              <span class="sdg-15">
                <i class="fa fa-check"></i>
                Sustainably manage forests, combat desertification, halt and reverse land degradation, halt biodiversity loss.
              </span>
              <span class="sdg-16">
                <i class="fa fa-check"></i>
                Access to justice for all, and building effective, accountable institutions at all levels.
              </span>
              <span class="sdg-17">
                <i class="fa fa-check"></i>
                Revitalize the global partnership for sustainable development.
              </span>




              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="container">

      <div class="row mb-4">

        <div class="col-md-6 mb-4">
          <a href="#" class="btn btn-primary d-block px-2 py-4">Download one-pager</a>
        </div>

        <div class="col-md-6 mb-4">
          <a href="#" class="btn btn-primary d-block px-2 py-4">Click here</a>
        </div>
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
