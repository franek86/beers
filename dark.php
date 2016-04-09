<?php
  require_once 'core/init.php';
  define ('TITLE', 'DARK');
  include_once 'includes/head.php';
?>

<?php
  if (!isset($_GET['beer'])) {
    $sql = "SELECT * FROM dark ORDER BY id_dark ASC";
    $query = $db->prepare($sql);
    $query->execute();
  }
?>

    <?php include_once 'includes/navigation.php'; ?>

    <!-- Full width section-->
    <div class="cover-container smallHeightBg darkBg">

      <!-- Logo -->
      <?php include_once 'includes/logo.php'; ?>

      <!-- Big heading -->
      <div class="container headerWrapp">
        <div class="row">
          <div class="col-md-12">
            <div class="bigHeading whiteHeading brownHeading">
              DARK BEERS
            </div><!--end bigHeading-->
          </div><!--end col-md-12-->
        </div><!--end row-->
      </div><!--end container-->

    </div><!--end cover-container-->

    <!-- Dark beer section -->
    <section class="dark">
      <div class="container sm-container">
        <div class="row">
          <?php while($result = $query->fetch(PDO::FETCH_ASSOC)): ?>
            <div class="col-md-4">
              <div class="beer-item">
                <div class="img-wrapp">
                  <img src="<?php echo $result['dark_img']; ?>" alt="<?php echo $result['dark_title']; ?>">
                </div><!--end img-wrapp-->
                <h3><?php echo $result['dark_title']; ?></h3>
                <p><?php echo shortText($result['dark_desc']); ?></p>
                <a href="darkdetails.php?beer=<?php echo urldecode($result['id_dark']); ?>" class="btn-white">More</a>
              </div><!--end beer-item-->
            </div><!--end col-->
            <?php endwhile; ?>
        </div><!--end row-->
      </div><!--end container-->
    </section>

  <?php include_once 'includes/footer.php'; ?>
