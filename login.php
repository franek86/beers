<?php
  require_once 'core/init.php';
  define ('TITLE', 'LOGIN');
  include_once 'includes/head.php';
?>

<?php

  $email = ((isset($_POST['email'])) ? escape($_POST['email']) : '' );
  $password = ((isset($_POST['password'])) ? escape($_POST['password']) : '' );

  if(isset($_POST['login'])) {

  //  $password =  escape($_POST['password']);

    $sql = "SELECT * FROM users WHERE email = :email";
    $query = $db->prepare($sql);
    $query->bindParam('email', $email, PDO::PARAM_STR);
    $query->execute();
    $result = $query->fetch(PDO::FETCH_ASSOC);

    $errors = array();

    //Validate email
    if(empty($_POST['email'])) {
      $errors['emailError'] = "Your E-mail field can not be empty!";
    }

    if(empty($_POST['password'])) {
      $errors['passwordError'] = "Your Password field can not be empty!";
    }

    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
      $errors['emailError'] = "Invalid email format";
    }

    if(!password_verify($password, $result['pass'])){
      $errors['passIncorrect'] = "Incorrect password. Please try again.";
    } else {
      $_SESSION["userFirstName"] = $result['first_name'];
      //header('Location: addpost.php');
      $user_id = $result['id'];
      login($user_id);
    }
  }

?>

  <?php include_once 'includes/navigation.php'; ?>

    <!-- Full width section-->
    <div class="cover-container smallHeightBg">

      <!-- Logo -->
      <?php include_once 'includes/logo.php'; ?>

    </div><!--end cover-container-->

    <section class="login mg-50">
      <div class="container md-container">

        <!-- Big heading -->
        <div class="row">
          <div class="col-md-12">
            <div class="bigHeading blackHeading">
              LOGIN
            </div><!--end bigHeading-->
          </div><!--end col-md-12-->
        </div><!--end row-->

        <div class="row">
          <div class="col-md-12">

            <form action="" method="POST">

              <div class="form-group">
                <label for="email">E-mail *</label>
                <span class="error">
                  <?php if(isset($errors['emailError'])) echo $errors['emailError'];?>
                </span>
                <input type="email" name="email" class="input-lg" id="email" placeholder="Enter Your E-mail" value="<?php echo $email;?>">
              </div>

              <div class="form-group">
                <label for="password">Password *</label>
                <span class="error">
                  <?php if(isset($errors['passIncorrect'])) echo $errors['passIncorrect'];?>
                </span>
                <span class="error">
                  <?php if(isset($errors['passwordError'])) echo $errors['passwordError'];?>
                </span>
                <input type="password" name="password" class="input-lg" id="password" placeholder="Enter Your Password">
              </div>
              <div class="form-group">
                <h5>&#42; Required field</h5>
              </div>

              <button type="submit" name="login" class="btn-white">Login</button>
              <a href="login.php" class="btn-white">Cancel</a>
            </form>

          </div><!--end col-->
        </div><!--end row-->
      </div><!--end container-->
    </section>

<?php include_once 'includes/footer.php'; ?>
