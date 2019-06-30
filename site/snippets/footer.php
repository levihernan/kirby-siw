<footer class="ftco-footer ftco-section img">
  <div class="overlay"></div>
  <div class="container">
    <div class="row text-center">
      <div class="col-md-4 offset-md-4 col-10 offset-1 heading-section text-center">
        <h3 class="subheading text-black-50 text-center">Powered by</h3>
        <img class="footer-logo px-5" src="<?= $site->url() ?>/assets/images/logo eidos.png" alt="">
        <h3 class="subheading text-black-50 text-center">Inspired by</h3>
        <img class="footer-logo" src="<?= $site->url() ?>/assets/images/SDG logo.png" alt="">
        <h3 class="subheading mb-3 text-black-50 text-center">In collaboration with</h3>
    </div>
    </div>
<div class="row h-100 justify-content-center">
    <?php foreach ($site->find('logos')->files()->sortBy('Sort') as $logo): ?>
           <div class="col-md col-3 my-auto">
             <img class="footer-logo" src="<?= $site->url.'/'.$logo->uri() ?>" alt="">
           </div>
    <?php endforeach ?>
  </div>

    </div>
  </footer>



  <!-- loader -->
  <div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00"/></svg></div>


  <?= js('assets/js/jquery.min.js') ?>

  <!--script src="<?= $site->url() ?>/assets/js/jquery.min.js"></script-->
  <script src="<?= $site->url() ?>/assets/js/jquery-migrate-3.0.1.min.js"></script>
  <script src="<?= $site->url() ?>/assets/js/popper.min.js"></script>
  <script src="<?= $site->url() ?>/assets/js/bootstrap.min.js"></script>
  <script src="<?= $site->url() ?>/assets/js/jquery.easing.1.3.js"></script>
  <script src="<?= $site->url() ?>/assets/js/jquery.waypoints.min.js"></script>
  <script src="<?= $site->url() ?>/assets/js/jquery.stellar.min.js"></script>
  <script src="<?= $site->url() ?>/assets/js/owl.carousel.1.3.3.min.js"></script>
  <script src="<?= $site->url() ?>/assets/js/jquery.magnific-popup.min.js"></script>
  <script src="<?= $site->url() ?>/assets/js/aos.js"></script>
  <script src="<?= $site->url() ?>/assets/js/jquery.animateNumber.min.js"></script>
  <script src="<?= $site->url() ?>/assets/js/bootstrap-datepicker.js"></script>
  <script src="<?= $site->url() ?>/assets/js/jquery.timepicker.min.js"></script>
  <script src="<?= $site->url() ?>/assets/js/scrollax.min.js"></script>
  
  <?php if($page->slug()==='projects'):?>
    <script src="<?= $site->url() ?>/assets/js/jsrender.min.js"></script>
    <script src="<?= $site->url() ?>/assets/js/projects.js"></script>
  <?php endif;?>
  <!-- <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyC0wkyWYeRR83eCb4i16--J_6fdTeP7oTA&callback=initMap"></script> -->
  <!-- <script src="<?= $site->url() ?>/assets/js/google-map.js"></script> -->
  <script src="<?= $site->url() ?>/assets/js/main.js"></script>
  <script src="<?= $site->url() ?>/assets/js/tooltip.js"></script>
  <script src="<?= $site->url() ?>/assets/js/util.js"></script>
  <script type="text/javascript">
    $(function () {
      $('[data-toggle="tooltip"]').tooltip()
    })
  </script>    

</body>
</html>
