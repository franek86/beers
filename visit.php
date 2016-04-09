<?php
  require_once 'core/init.php';
  define ('TITLE', 'VISIT US');
  include_once 'includes/head.php';
?>

<?php include_once 'includes/navigation.php'; ?>

  <!-- Full width section-->
  <div class="cover-container smallHeightBg">

    <!-- Logo -->
    <?php include_once 'includes/logo.php'; ?>

  </div><!--end cover-container-->

  <section class="visit">
    <div class="container sm-container">

      <!-- Big heading -->
      <div class="row">
        <div class="col-md-12">
          <div class="bigHeading blackHeading">
            VISIT US
          </div><!--end bigHeading-->
        </div><!--end col-md-12-->
      </div><!--end row-->

      <div class="row">
        <div class="col-md-12">
          <h3> Quality Beer Zagreb, Croatia</h3>
          <h5>Frankopanska ulica 10000 Zagreb </h5>

          <!--GOOGLE MAPS-->
          <div id="map-canvas">
            <iframe src="https://www.google.com/maps/embed?pb=!1m16!1m12!1m3!1d2780.979336759847!2d15.967238315439976!3d45.81167221821152!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!2m1!1sFrankopanska+ulica%2C+Zagreb%2C+Hrvatska!5e0!3m2!1shr!2sch!4v1455651430379" width="100%" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
          </div><!--end google-maps-->

        </div><!--end col-->
      </div><!--end row-->

      <br /><br />

      <div class="row">
        <div class="col-md-12">
          <h3> Quality Beer Zagreb, Croatia</h3>
          <h5>Radnička cesta 10000 Zagreb </h5>

          <!--GOOGLE MAPS-->
          <div id="map-canvas">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d7867.051530570029!2d16.005561836760602!3d45.802791407356665!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4765d6376ed5880d%3A0x566b0c5f5dd6adc6!2sRadni%C4%8Dka+cesta+57%2C+10000%2C+Zagreb%2C+Hrvatska!5e0!3m2!1shr!2sch!4v1455651392485" width="100%" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
          </div><!--end google-maps-->

        </div><!--end col-->
      </div><!--end row-->

    </div><!--end container-->
  </section><!--end visit-->


<?php include_once 'includes/footer.php'; ?>
