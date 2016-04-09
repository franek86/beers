<?php
  require_once 'core/init.php';
  define ('TITLE', 'HOME');
  include_once 'includes/head.php';
?>

<?php
  $sql = "SELECT * FROM featured ORDER BY id DESC";
  $query = $db->prepare($sql);
  $query->execute();
?>

    <?php include_once 'includes/navigation.php'; ?>

    <!-- Full width section-->
    <div class="cover-container fullHeightBg">

      <!-- Logo -->
      <?php include_once 'includes/logo.php'; ?>

      <!-- Big heading -->
      <div class="container headerWrapp">
        <div class="row">
          <div class="col-md-12">
            <div class="bigHeading">
              QUALTIY BEER
              <span>SINCE 1940.</span>
              <span><em>CHEERS!</em></span>
            </div><!--end bigHeading-->
          </div><!--end col-md-12-->
        </div><!--end row-->
      </div><!--end container-->

    </div><!--end cover-container-->

    <!-- Featured section -->
    <section class="featuredProducts">

      <?php while($result = $query->fetch(PDO::FETCH_ASSOC)): ?>
      <div class="container sm-container">
        <div class="row">

          <div class="product">
            <div class="col-md-4">
              <div class="product-img">
                <img class="img-responsive" src="<?php echo $result['featured_img']; ?>" alt="<?php echo $result['featured_title']; ?>" />
              </div><!--end product-img-->
            </div><!--end col-->

            <div class="col-md-8">
              <div class="content">
                <h2 class="title"><?php echo $result['featured_title']; ?>&percnt;</h2>
                <div class="text">
                  <p>
                    <?php echo $result['featured_desc']; ?>
                  </p>
                </div><!--end text-->
                <button type="button" class="btn-more" data-toggle="modal" data-target="#<?php echo $result['id']; ?>">More</button>
              </div><!--end content-->
            </div><!--end col-->

          </div><!--end product-->
        </div><!--end row-->
      </div><!--end container-->

      <?php include 'includes/detailsmodal.php'; ?>
      <?php endwhile; ?>
    </section><!-- end featuredProducts -->

<?php include_once 'includes/footer.php'; ?>
