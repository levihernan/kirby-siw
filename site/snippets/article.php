<?php
$tags = $article->tags()->split();
?>

<div id="myDiv" aria-labelledby="lalala" class="myProject col-md-6 d-flex ftco-animate <?= str_replace(' ','-',$article->location()->lower()->text()) ?> <?php foreach($tags as $tag): ?>
  <?= $tag ?>
<?php endforeach ?>">
  <div class="blog-entry justify-content-end">
    <div class="text p-4 mt-1 float-right d-block">
      <div class="d-flex align-items-center pt-2 mb-4">
      </div>
      <h3 class="heading mt-2"><a href="<?= $article->url() ?>"><?= $article->title() ?></a>
      </h3>
      <p>
        <?= $article->intro()->text() ?>
      </p>
      <p>
        <i class="fa fa-globe"></i> <?= $article->location()->text() ?>
      </p>
      <p>
        <i class="fa fa-check"></i>

        <?php foreach($tags as $tag): ?>
          <?= strtoupper($tag) ?>
        <?php endforeach ?>
      </p>
    </div>
  </div>
</div>
