<?php
  require_once '../core/init.php';
  if (!is_logged()) {
    login_error_r();
  }
  define ('TITLE', 'ADDPOST');
  include_once 'includes/head.php';
?>

<?php

  $title = ((isset($_POST['title'])) ? escape($_POST['title']) : ' ');
  $body = ((isset($_POST['body'])) ? escape($_POST['body']) : ' ');
  $author = ((isset($_POST['author'])) ? escape($_POST['author']) : ' ');
  $errors = array();


  if (isset($_POST['submit'])) {

    //Validation
    if ($title == ' '  || empty($title)){
       $errors ['titleError']= 'Please fill out title field';
    }
    if ($body == ' ' || empty($body)) {
       $errors ['bodyError']= 'Please fill out body field';
    }
    if ($author == ' ' || empty($author)) {
       $errors ['authorError']= 'Please fill out author field';
    }  else{
      $sql = "INSERT INTO posts (post_title, post_body, author) VALUES (:title, :body, :author)";
      $query = $db->prepare($sql);

      $query->bindParam('title', $title, PDO::PARAM_STR);
      $query->bindParam('body', $body, PDO::PARAM_STR);
      $query->bindParam('author', $author, PDO::PARAM_STR);

      $query->execute();
      
      header('Location: index.php?msg=' .urldecode('POST UPDATED'));
      exit();
    }
  }

?>

  <?php include_once 'includes/navigation.php'; ?>

  <div class="add-post">
    <div class="container">
      <div class="row">
        <div class="col-sm-12">

          <form method="post" action="">

            <div class="form-group">
              <label fpr="title">Enter Title *</label>

              <span class="error">
                <?php if(isset($errors['titleError'])) echo $errors['titleError'];?>
              </span>

              <input type="text" name="title" id="title" class="form-control" placeholder="Enter Title" value=" <?php echo  $title; ?>">
            </div>

            <div class="form-group">

              <label for="body">Enter Post Body *</label>

              <span class="error">
                <?php if(isset($errors['bodyError'])) echo $errors['bodyError'];?>
              </span>

              <textarea name="body" id="body" class="form-control" placeholder="Enter Post Body" rows="20"><?php echo $body; ?></textarea>
            </div>

            <div class="form-group">
              <label for="author">Author *</label>

              <span class="error">
                <?php if(isset($errors['authorError'])) echo $errors['authorError'];?>
              </span>

              <input type="text" name="author" id="author" class="form-control" placeholder="Enter Author Name" value="<?php echo $author; ?>">
            </div>


            <div>
              <input type="submit" name="submit" class="btn-more" value="Publish" />
              <a href="index.php" class="btn-more">Cancel</a>
            </div>
          </form>

        </div><!--end col-->
      </div><!--end row-->
    </div><!--end container-->
  </div><!--end add-post-->
  <br><br><br>

<?php include_once 'includes/footer.php'; ?>
