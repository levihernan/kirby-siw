<?php snippet('header') ?>


<body>

  <?= snippet('navbar') ?>

  <section class="ftco-section ftco-intro back-left" style="background-image: url('<?= $page->photo()->toFile()->url() ?>');">
    <div class="container">
      <div class="row justify-content-end pt-5">
        <div class="col-md-6">
          <div class="heading-section ftco-animate">
            <h2 class="mb-4"><?= $page->title() ?></h2>
          </div>
          <div class="ftco-animate">
            <?= $page->text()->kirbytext() ?>
          </div>

        </div>
      </div>
    </div>
  </section>

  <section class="ftco-section bg-light">
    <div class="container">
      <div class="row justify-content-center mb-5 pb-3 ">
        <div class="col-md-12 heading-section ftco-animate text-center">
          <!--h3 class="subheading">UNDP</h3-->
          <h2 class="mb-1">Browse all Projects</h2>
        </div>

        <div class="col-4">
          <div class="form-group">
            <input type="text" class="is-text-filterable" onkeyup="showProjectsbyKeyWord(this.value)" placeholder="Search in Projects ..." autofocus required>
          </div>

          <div class="locations">
            <span class="mx-2 cursor-pointer" onclick="showProjectsbyCat('all')">
              <i class="fa fa-globe"></i>
              All
            </span>
              <?php $tags = $page->children()->pluck('location', ',', true); sort($tags) ?>
              <?php foreach($tags as $tag): ?>
                <span class="mx-2 cursor-pointer" onclick="showProjectsbyCat('<?= strtolower(str_replace(' ','-',$tag)) ?>')">
                  <i class="fa fa-globe"></i>
                  <?= $tag ?>
                </span>
              <?php endforeach ?>
            </div>
            <div class="locations sdgs">
              <div class="row">
              <?php $sdgs = $site->find('home')->find('sdgs') ?>
              <?php $counter = 0 ?>
              <?php foreach ($sdgs->files() as $sdg): ?>
              <?php $counter ++ ?>

              <!-- <span class="sdg-text mx-2" onclick="filterSelection('lala')">
                <i class="fa fa-check"></i><?= $sdg->title() ?>
              </span> -->
              <div class="col-md-4 my-2">
                <img onclick="showProjectsbyCat('<?php if ($counter < 18) {
                  echo 'sdg-'.$counter;
                }
                else {
                  echo 'all';
                }
                ?>')" class="sdg-image ftco-animate" src="<?= $site->url.'/'.$sdg->uri() ?>" alt="" data-toggle="tooltip" data-placement="top" title="<?= $sdg->text() ?>">
              </div>
              <?php endforeach ?>
            </div>
          </div>
        </div>
        <div class="col-8">
          <div id="projects-carousel" class="row owl-carousel testimony-section carousel2">
            <?php foreach ($articles as $article): ?>
              <?php snippet('article', ['article' => $article]) ?>
            <?php endforeach ?>
          </div>
          <div id="projects-hidden" class="hide"></div>
        </div>
      </div>
    </div>
  </section>

<?php snippet('footer') ?>
