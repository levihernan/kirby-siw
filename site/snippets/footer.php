<footer class="ftco-footer ftco-section img">
  <div class="overlay"></div>
  <div class="container">
    <div class="row text-center">
      <div class="col-2 offset-5 heading-section text-center">
        <h3 class="subheading">Powered by</h3>
        <img class="footer-logo" src="<?= $site->url() ?>/assets/images/logo eidos.png" alt="">
        <h3 class="subheading">Inspired by</h3>
        <img class="footer-logo" src="<?= $site->url() ?>/assets/images/SDG logo.png" alt="">
        <h3 class="subheading mb-3">In collaboration with</h3>
    </div>
    </div>
<div class="row h-100">
    <?php foreach ($site->find('logos')->files() as $logo): ?>
           <div class="col my-auto">
             <img class="footer-logo" src="<?= $site->url.'/'.$logo->uri() ?>" alt="">
           </div>
    <?php endforeach ?>
  </div>

    </div>
  </footer>



  <!-- loader -->
  <div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00"/></svg></div>


  <script src="<?= $site->url() ?>/assets/js/jquery.min.js"></script>
  <script src="<?= $site->url() ?>/assets/js/jquery-migrate-3.0.1.min.js"></script>
  <script src="<?= $site->url() ?>/assets/js/popper.min.js"></script>
  <script src="<?= $site->url() ?>/assets/js/bootstrap.min.js"></script>
  <script src="<?= $site->url() ?>/assets/js/jquery.easing.1.3.js"></script>
  <script src="<?= $site->url() ?>/assets/js/jquery.waypoints.min.js"></script>
  <script src="<?= $site->url() ?>/assets/js/jquery.stellar.min.js"></script>
  <script src="<?= $site->url() ?>/assets/js/owl.carousel.min.js"></script>
  <script src="<?= $site->url() ?>/assets/js/jquery.magnific-popup.min.js"></script>
  <script src="<?= $site->url() ?>/assets/js/aos.js"></script>
  <script src="<?= $site->url() ?>/assets/js/jquery.animateNumber.min.js"></script>
  <script src="<?= $site->url() ?>/assets/js/bootstrap-datepicker.js"></script>
  <script src="<?= $site->url() ?>/assets/js/jquery.timepicker.min.js"></script>
  <script src="<?= $site->url() ?>/assets/js/scrollax.min.js"></script>
  <!-- <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCsrDgPQa5TxygzUaLU8sJl_hIe_uK_muY&callback=initMap"></script> -->
  <script src="<?= $site->url() ?>/assets/js/google-map.js"></script>
  <script src="<?= $site->url() ?>/assets/js/main.js"></script>
  <script src="<?= $site->url() ?>/assets/js/bootstrap-tooltip.js"></script>
  <script type="text/javascript">
  $( document ).ready(function() {
    console.log( "ready!" );
    $(function () {
      $('[data-toggle="tooltip"]').tooltip()
    })
  });
  </script>

</body>
</html>
