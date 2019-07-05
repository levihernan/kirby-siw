<?php snippet('header') ?>


<body>

  <?= snippet('navbar') ?>

  <section class="ftco-section ftco-intro landingBackground bgBig" style="background-image: url('<?= $page->photo()->toFile()->url() ?>');">
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

        <div class="col-md-4">
          <div class="form-group">
            <input type="text" class="keyword-link is-text-filterable" placeholder="Search in Projects ..." autofocus required>
          </div>

          <div class="locations">
            <span class="mx-2">
              <i class="fa fa-globe"></i>
              <span class="location-link" name="all">All</span>
            </span>
            <?php $tags = $page->children()->pluck('location', ',', true); sort($tags) ?>
            <?php foreach($tags as $tag): ?>
              <span class="mx-2">
                <i class="fa fa-globe"></i>
                <span class="location-link" name="<?= $tag ?>"><?= $tag ?></span>
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
              <div class="col-md-4 p-1 col-2">
                <img class="sdg-image tag-link ftco-animate" name="<?php if ($counter < 18) { echo 'sdg-'.$counter; } else { echo 'all';}?>" src="<?= $site->url.'/'.$sdg->uri() ?>" alt="" data-toggle="tooltip" data-placement="top" title="<?= $sdg->text() ?>">
              </div>
              <?php endforeach ?>
            </div>
          </div>
        </div>

        <div class="col-md-8">
          <div class="projects-ajax hide"></div>
        </div>
      </div>
    </div>
  </section>

  <script id="project" type="text/x-jsrender">
    <div class="row">
      <div class="projects-ajax-response col-12">
      {{if count}}
      We found {{:count}} project{{if count>1}}s{{/if}}.
      {{else}}
      Sorry, We could not find any project with the word <b>{{:keyword}}</b>.
      {{/if}}
      </div>
    </div>
    <div class="row">
    {{props items.data}}
      <div class="project col-lg-4 col-md-6 col-sm-12">
        <div class="blog-entry justify-content-end">
          <div class="text p-4 mt-1 float-right d-block">
            <div class="d-flex align-items-center mb-4">
            </div>
            <h3 class="heading mt-2"><a href="{{:prop.url}}">{{:prop.title}}</a>
            </h3>
            {{:prop.intro}}
            <p>
              <i class="fa fa-globe"></i> {{:prop.location}}
            </p>
            <p class="sdg-check">
              <i class="fa fa-check"></i> <span class="text-uppercase">{{:prop.tags}}</span>
            </p>
          </div>
        </div>
      </div>
    {{/props}}
    </div>
    <div class="row justify-content-center">
      <nav aria-label="Page navigation example">
        <ul class="pagination">
          <!--li class="page-item"><a class="page-link" href="#">Previous</a></li-->
          {{props pages}}
          <li class="page-item"><a class="page-link" name="{{>prop+1}}" href="#">{{>prop+1}}</a></li>
          {{/props}}
          <!--li class="page-item"><a class="page-link" href="#">Next</a></li-->
        </ul>
      </nav>
    </div>
  </script>

<?php snippet('footer') ?>
