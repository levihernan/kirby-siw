<nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
  <div class="container">
    <!-- <a class="navbar-brand" href="index.html">
      Social Innovation Warehouse
    </a> -->
    <a href="<?= $site->url() ?>/">
    <img class="logo-siw" src="<?= $site->url() ?>/assets/images/logo-small.png" alt="" height="54px">
  </a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="oi oi-menu"></span>
    </button>
    <div class="collapse navbar-collapse" id="ftco-nav">
      <ul class="navbar-nav ml-auto">
        <li class="nav-item"><a href="<? $site->url() ?>/projects" class="nav-link">Browse Projects</a></li>
        <li class="nav-item"><a href="<? $site->url() ?>/nominate" class="nav-link">Nominate a Project</a></li>
        <li class="nav-item"><a href="<? $site->url() ?>/partner" class="nav-link">Become a Partner</a></li>
      </ul>
    </div>
  </div>
</nav>
<!-- END nav -->
