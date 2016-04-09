<?php
  require_once 'core/init.php';
  define ('TITLE', 'OUR STORY');
  include_once 'includes/head.php';
?>


  <?php include_once 'includes/navigation.php'; ?>

  <!-- Full width section-->
  <div class="cover-container smallHeightBg storyBg">

    <!-- Logo -->
    <?php include_once 'includes/logo.php'; ?>

    <!-- Big heading -->
    <div class="container headerWrapp">
      <div class="row">
        <div class="col-md-12">
          <div class="bigHeading blackHeading">
            OUR STORY SINCE 1940.
          </div><!--end bigHeading-->
        </div><!--end col-md-12-->
      </div><!--end row-->
    </div><!--end container-->

  </div><!--end cover-container-->

  <!-- Slider section -->
  <section class="slider">
    <div class="container">
      <div class="row">
        <div class="col-md-12">

          <div id="myCarousel" class="carousel slide" data-ride="carousel">

            <div class="carousel-inner" role="listbox">

              <div class="item active">
                <div class="myCaption">
                  <p><span class="fancyHeading">1940</span> Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. </p>
                </div>
              </div>

              <div class="item">
                <div class="myCaption">
                    <p><span class="fancyHeading">1953</span> Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. </p>
                </div>
              </div>

              <div class="item">
                <div class="myCaption">
                    <p><span class="fancyHeading">1967</span> Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. </p>
                </div>
              </div>

              <div class="item">
                <div class="myCaption">
                    <p><span class="fancyHeading">1973</span> Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. </p>
                </div>
              </div>

              <div class="item">
                <div class="myCaption">
                    <p><span class="fancyHeading">1986</span> Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. </p>
                </div>
              </div>

              <div class="item">
                <div class="myCaption">
                    <p><span class="fancyHeading">1994</span> Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. </p>
                </div>
              </div>

              <div class="item">
                <div class="myCaption">
                    <p><span class="fancyHeading">1999</span> Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. </p>
                </div>
              </div>

              <div class="item">
                <div class="myCaption">
                    <p><span class="fancyHeading">2003</span> Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. </p>
                </div>
              </div>

              <div class="item">
                <div class="myCaption">
                    <p><span class="fancyHeading">2009</span> Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. </p>
                </div>
              </div>

              <div class="item">
                <div class="myCaption">
                    <p><span class="fancyHeading">2015</span> Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. </p>
                </div>
              </div>

            </div><!-- end carousel inner -->

            <!-- Controls -->
            <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
              <img src="assets/img/icons/prev-arrow.svg" alt="Prev Arrow">
            </a>
            <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
              <img src="assets/img/icons/next-arrow.svg" alt="Next Arrow">
            </a>

            <ol class="carousel-indicators">

              <li data-target="#myCarousel" data-slide-to="0" class="active">1940</li>
              <li data-target="#myCarousel" data-slide-to="1">1953</li>
              <li data-target="#myCarousel" data-slide-to="2">1967</li>
              <li data-target="#myCarousel" data-slide-to="3">1973</li>
              <li data-target="#myCarousel" data-slide-to="4">1986</li>
              <li data-target="#myCarousel" data-slide-to="5">1994</li>
              <li data-target="#myCarousel" data-slide-to="6">1999</li>
              <li data-target="#myCarousel" data-slide-to="7">2003</li>
              <li data-target="#myCarousel" data-slide-to="8">2009</li>
              <li data-target="#myCarousel" data-slide-to="9">2015</li>

            </ol>  <!-- end indicators -->

          </div><!--end myCarousel-->

        </div><!--end col-->
      </div><!--end row-->
    </div><!-- end container-->
  </section><!-- end slider -->

<?php include_once 'includes/footer.php'; ?>
