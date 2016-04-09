<?php
  require_once 'core/init.php';
  define ('TITLE', 'BLOG');
  include_once 'includes/head.php';
?>

<?php
  $id = $_GET['id'];

  $sql = "SELECT * FROM posts WHERE id_post= :id";
  $query = $db->prepare($sql);
  $query -> bindParam(':id', $id);
  $query->execute();
  $result = $query->fetch(PDO::FETCH_ASSOC);
?>

<?php include_once 'includes/navigation.php'; ?>

<!-- Full width section-->
<div class="cover-container smallHeightBg">

  <!-- Logo -->
  <?php include_once 'includes/logo.php'; ?>

</div><!--end cover-container-->

<section class="blog mg-50">
  <div class="container">
    <div class="row">
      <div class="col-sm-8 col-sm-offset-2">
        <div class="post">
          <h1 class="post-title"><?php echo $result['post_title']; ?></h1>
          <p class="post-date"><?php echo formatDate($result['post_date']); ?> by <a href="#" class="author"><?php echo $result['author']; ?></a></p>
          <p class="post-body"><?php echo urldecode($result['post_body']); ?></p>
        </div><!--blog-post -->
      </div><!--end col-->
    </div><!--end row-->
  </div><!--end container-->
</section><!--end blog-->

<?php include_once 'includes/footer.php'; ?>
