<?php
  require_once '../core/init.php';

  if (!is_logged()) {
    login_error_r();
  }

  define ('TITLE', 'ADDPOST');
  include_once 'includes/head.php';
?>
<?php
  $sql = "SELECT * FROM posts ORDER BY id_post DESC";
  $query = $db->prepare($sql);
  $query->execute();
 ?>

  <?php include_once 'includes/navigation.php'; ?>

  <div class="container">

    <?php if (isset($_GET['msg'])): ?>
      <div class="msg"><?php echo escape($_GET['msg']) ; ?></div>
    <?php endif; ?>

    <div class="table-responsive">
      <table class="table table-bordered">

          <tr>
            <th>ID</th>
            <th>POST TITLE</th>
            <th>POST TEXT</th>
            <th>POST AUTHOR</th>
            <th>POST DATE</th>
          </tr>

          <?php while($row = $query->fetch(PDO::FETCH_ASSOC)): ?>
            <tr>
                <td class="post-id"><?php echo $row['id_post']; ?></td>
                <td><a class="post-link" href="editpost.php?edit=<?php echo urldecode($row['id_post']); ?>"><?php echo $row['post_title']; ?></a></td>
                <td><?php echo shortText($row['post_body']); ?></td>
                <td><?php echo $row['author']; ?></td>
                <td><?php echo formatDate ($row['post_date']); ?></td>
            </tr>
          <?php endwhile; ?>

      </table>
    </div><!--end table-responsive-->

  </div><!--end container-->
  <br><br><br>

<?php include_once 'includes/footer.php'; ?>
