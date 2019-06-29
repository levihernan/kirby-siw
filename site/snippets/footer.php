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
  <!-- <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyC0wkyWYeRR83eCb4i16--J_6fdTeP7oTA&callback=initMap"></script> -->
  <!-- <script src="<?= $site->url() ?>/assets/js/google-map.js"></script> -->
  <script src="<?= $site->url() ?>/assets/js/main.js"></script>
  <script src="<?= $site->url() ?>/assets/js/bootstrap-tooltip.js"></script>
  <script type="text/javascript">
  $( document ).ready(function() {
    console.log( "ready!" );
   
    $(function () {
      $('[data-toggle="tooltip"]').tooltip()
    })
  });

   var clock = 0
   
    filterSelection("all") // Execute the function and show all columns
    function filterSelection(c) {
      var x, i;
      x = document.getElementsByClassName("myProject");
      if (c == "all") c = "";
      // Add the "show" class (display:block) to the filtered elements, and remove the "show" class from the elements that are not selected
      for (i = 0; i < x.length; i++) {
        w3RemoveClass(x[i], "show");
        if (x[i].className.indexOf(c) > -1) w3AddClass(x[i], "show");
      }
    }

    function showProjectsbyKeyWord( keyword ){
      clearInterval(clock)
      clock = setTimeout(() => {
        $('#projects-hidden .project').each(function(){
          if($(this).text().toLowerCase().indexOf(keyword.toLowerCase()) > -1){
           var owl   = $(".owl-carousel").data('owlCarousel');
           elem      = $(this).parent().html();

           owl.addItem( elem );
           $(this).parent().remove();
          }
        });

        $('#projects-carousel .project').each(function(){
          if($(this).text().toLowerCase().indexOf(keyword.toLowerCase()) == -1){
           var owl   = $(".owl-carousel").data('owlCarousel');
           targetPos = $(this).parent().index();
           elem      = $(this).parent();

           $( elem ).clone().appendTo( $('#projects-hidden') );
           owl.removeItem(targetPos);
          }
        });
      },500)
    }

    function showProjectsbyCat( cat ){
      console.log("show by : " + cat)
      if ( cat == 'all'){
        $('#projects-hidden .project').each(function(){
           var owl   = $(".owl-carousel").data('owlCarousel');
           elem      = $(this).parent().html();
           owl.addItem( elem );
           $(this).parent().remove();
        });
      }else{
        $('#projects-hidden .project.'+ cat).each(function(){
           var owl   = $(".owl-carousel").data('owlCarousel');
           elem      = $(this).parent().html();
           owl.addItem( elem );
           $(this).parent().remove();
        });

        $('#projects-carousel .project:not(.project.'+ cat + ')').each(function(){
           var owl   = $(".owl-carousel").data('owlCarousel');
           targetPos = $(this).parent().index();
           elem      = $(this).parent();
           $( elem ).clone().appendTo( $('#projects-hidden') );
           owl.removeItem(targetPos);
        });
      }
    }

    // Show filtered elements
    function w3AddClass(element, name) {
      var i, arr1, arr2;
      arr1 = element.className.split(" ");
      arr2 = name.split(" ");
      for (i = 0; i < arr2.length; i++) {
        if (arr1.indexOf(arr2[i]) == -1) {
          element.className += " " + arr2[i];
        }
      }
    }

    // Hide elements that are not selected
    function w3RemoveClass(element, name) {
      var i, arr1, arr2;
      arr1 = element.className.split(" ");
      arr2 = name.split(" ");
      for (i = 0; i < arr2.length; i++) {
        while (arr1.indexOf(arr2[i]) > -1) {
          arr1.splice(arr1.indexOf(arr2[i]), 1);
        }
      }
      element.className = arr1.join(" ");
    }

  </script>    

</body>
</html>
