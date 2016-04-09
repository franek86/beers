<?php
  require_once 'core/init.php';
  define ('TITLE', 'ENTER');
  include_once 'includes/head.php';
?>


<?php
  $errors = array();

  if (isset($_POST['YES'])) {
    header('Location:home.php');
    exit();
  }

  if(isset($_POST['NO'])){
    $errors['no'] = "Sorry, you are too young to drink a beer!";
  }

?>

<!-- Enter in the site section-->

<div class="container">
  <section class="enterSite">
    <div class="row">
      <div class="col-md-12">

        <p class="verifayAge">
          ONLY AGE OVER 18 YEARS ALLOWED
        </p>

        <form action="" method="POST">
            <input name="YES" id="yes"  class="btn-more" type="Submit" value="Yes" />
            <input name="NO" id="no"  class="btn-more" type="Submit" value="NO" />
        </form>

        <span class="error errorBig">
          <?php if(isset($errors['no'])) echo $errors['no'];?>
        </span>

      </div><!--end col-->
    </div><!--end row-->
  </section><!--end enterSite-->
</div><!--end container-->
