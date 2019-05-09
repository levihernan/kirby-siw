<?php snippet('header') ?>

<h1><?php echo $page->title()->html() ?></h1>

<?php foreach ($articles as $article): ?>
  <?php snippet('article', ['article' => $article]) ?>
<?php endforeach ?>

<?php snippet('footer') ?>
