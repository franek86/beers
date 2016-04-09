<?php
  require_once 'core/init.php';
  define ('TITLE', 'BLOG');
  include_once 'includes/head.php';
?>

<?php
  $sql = "SELECT * FROM posts ORDER BY id_post DESC";
  $posts = $db->prepare($sql);
  $posts->execute();
?>

  <?php include_once 'includes/navigation.php'; ?>

  <!-- Full width section-->
  <div class="cover-container smallHeightBg">

    <!-- Logo -->
    <?php include_once 'includes/logo.php'; ?>

  </div><!--end cover-container-->

  <section class="blog mg-50">
    <div class="container sm-container">

      <?php if($posts):?>
        <?php while($result = $posts->fetch(PDO::FETCH_ASSOC)): ?>
            <div class="row">
              <div class="col-sm-12">
                <div class="post">
                  <h1 class="post-title"><?php echo $result['post_title']; ?></h1>
                  <p class="post-date"><?php echo formatDate($result['post_date']); ?> by <a href="#" class="author"><?php echo $result['author']; ?></a></p>
                  <p class="post-body"><?php echo shortText($result['post_body']); ?></p>
                  <a href="post.php?id=<?php echo $result['id_post'];?>" class="btn-more">Read</a>
                </div><!--blog-post -->
              </div><!--end col-->
          </div><!--end row-->
        <?php endwhile; ?>

      <?php else: ?>
        <p>There are no posts yet!</p>
      <?php endif; ?>

    </div><!--end container-->
  </section><!--end blog-->

<?php include_once 'includes/footer.php'; ?>
