<?php
  require_once 'core/init.php';
  define ('TITLE', 'LAGER');
  include_once 'includes/head.php';
?>

<?php
  if (!isset($_GET['beer'])) {
    $sql = "SELECT * FROM lager ORDER BY id_lager ASC";
    $query = $db->prepare($sql);
    $query->execute();
  }
?>

    <?php include_once 'includes/navigation.php'; ?>

    <!-- Full width section-->
    <div class="cover-container smallHeightBg lagerBg">

      <!-- Logo -->
      <?php include_once 'includes/logo.php'; ?>

      <!-- Big heading -->
      <div class="container headerWrapp">
        <div class="row">
          <div class="col-md-12">
            <div class="bigHeading whiteHeading">
              LAGER BEERS
            </div><!--end bigHeading-->
          </div><!--end col-md-12-->
        </div><!--end row-->
      </div><!--end container-->

    </div><!--end cover-container-->

    <!-- Lager beer section -->
    <section class="lagerBeer">
      <div class="container sm-container">
        <div class="row">
          <?php while($result = $query->fetch(PDO::FETCH_ASSOC)): ?>
            <div class="col-md-4">
              <div class="beer-item">
                <div class="img-wrapp">
                  <img src="<?php echo $result['lager_img']; ?>" alt="<?php echo $result['lager_title']; ?>">
                </div><!--end img-wrapp-->
                <h3><?php echo $result['lager_title']; ?></h3>
                <p><?php echo shortText($result['lager_desc']); ?></p>
                <a href="lagerdetails.php?beer=<?php echo urldecode($result['id_lager']); ?>" class="btn-white">More</a>
              </div><!--end beer-item-->
            </div><!--end col-->
            <?php endwhile; ?>
        </div><!--end row-->
      </div><!--end container-->
    </section><!-- end lagerBeer -->

<?php include_once 'includes/footer.php'; ?>
