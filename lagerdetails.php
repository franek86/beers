<?php
  require_once 'core/init.php';
  define ('TITLE', 'LAGER BEER');
  include_once 'includes/head.php';
?>

<?php
  if (isset($_GET['beer'])) {
    $beer = $_GET['beer'];

    $sql = "SELECT * FROM lager WHERE id_lager = :beer";
    $query = $db->prepare($sql);
    $query -> bindParam(':beer', $beer);
    $query->execute();
    $result = $query->fetch(PDO::FETCH_ASSOC);
  }
?>

  <?php include_once 'includes/navigation.php'; ?>

  <!-- Full width section-->
  <div class="cover-container smallHeightBg">

    <!-- Logo -->
    <?php include_once 'includes/logo.php'; ?>

  </div><!--end cover-container-->

  <!-- Beer section -->
  <section class="beer">
    <div class="container sm-container">
      <div class="row">
        <div class="col-md-12">

          <div class="beer-item">
            <h1 class="mg-50"><?php echo $result['lager_title']; ?></h1>
            <div class="img-wrapp">
              <img src="<?php echo $result['lager_img']; ?>" alt="<?php echo $result['lager_title']; ?>">
            </div><!--end img-wrapp-->
            <p><?php echo $result['lager_desc']; ?></p>
          </div><!--end beer-item-->

        </div><!--end col-->
      </div><!--end row-->
    </div><!--end container-->

    <div class="container">
      <div class="measures">
        <div class="row">
          <div class="col-md-offset-3 col-md-3">
            <div class="fancyText">
              <?php echo $result['ibu']; ?> ibu
            </div><!--end fancyText-->
          </div><!--end col-->

          <div class="col-md-3">
            <div class="fancyText">
              <?php echo $result['alc_vol']; ?>&percnt;
            </div><!--end fancyText-->
          </div><!--end col-->
        </div><!--end row-->

        <div class="row">
          <div class="col-md-12">
            <div class="fancyText">
              <?php echo $result['litre']; ?>
            </div><!--end fancyText-->
          </div><!--end col-->
        </div><!--end row-->

      </div><!--end measures-->
    </div><!--end container-->
  </section><!--end beer-->


<?php include_once 'includes/footer.php'; ?>
