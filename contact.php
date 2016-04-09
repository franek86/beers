<?php
  require_once 'core/init.php';
  define ('TITLE', 'CONTACT');
  include_once 'includes/head.php';
?>


<?php

  if (isset($_POST['send'])){
    require_once('classes/phpmailer/class.phpmailer.php');
    require_once('classes/phpmailer/PHPMailerAutoload.php');

    $mail = new PHPMailer();
    $mail->CharSet =  "utf-8";
    $mail->IsSMTP();
    $mail->SMTPAuth = true;
    $mail->SMTPSecure = "ssl";
    $mail->SMTPDebug = 0;
    $mail->Host = "smtp.gmail.com";
    $mail->Port = "465";
    $mail->IsHTML(true);

    $mail->Username = "yourmail";
    $mail->Password = "yourpass";

    $mail->setFrom('yourmail', $_POST['name']);
    $mail->AddAddress($_POST['email']);
    $mail->Subject  =  $_POST['name'];
    $mail->Body    = $_POST['msg'];

     if(!$mail->Send()){
        echo "Mail Error - >".$mail->ErrorInfo;
     }
     else
     {
        echo "Message was Successfully Send :)";
     }
  }

?>


    <?php include_once 'includes/navigation.php'; ?>

    <!-- Full width section-->
    <div class="cover-container smallHeightBg">

      <!-- Logo -->
      <?php include_once 'includes/logo.php'; ?>

    </div><!--end cover-container-->

    <section class="contact mg-50">
      <div class="container md-container">

        <!-- Big heading -->
        <div class="row">
          <div class="col-md-12">
            <div class="bigHeading blackHeading">
              CONTACT US
            </div><!--end bigHeading-->
          </div><!--end col-md-12-->
        </div><!--end row-->

        <div class="row">
          <div class="col-md-12">
            <p>We are available MON-FRI, 09.00h - 17.00h CET</p>
            <p>We will response to you as soon as possible.</p>
            <p>TEL: 004122212-225 or EMAIL: <a href="mailto:qualitybeer@gmail.com" class="brown">qualitybeer@gmail.com</a></p>
          </div><!--end col-->
        </div><!--end row-->

        <div class="row">
          <div class="col-md-12">
            <form id="contactFrom" action="" method="post">

              <div class="form-group">
                <label for="name">Your Name *</label>
                <input id="name" type="text" name="name" class="input-lg" placeholder="Enter Your Name">
              </div><!--end form-group-->

              <div class="form-group">
                <label for="email">Your E-mail *</label>
                <input id="email" type="email" name="email" class="input-lg" placeholder="Enter Your E-mail">
              </div><!--end form-group-->

              <div class="form-group">
                <label for="msg">Your Message</label>
                <textarea id="msg" name="msg" class="input-lg" placeholder="Enter Your Message" rows="10"></textarea>
              </div><!--end form-group-->

              <button type="submit" name="send" class="btn-white" onclick="return validate();">Send</button>

            </form><!--end contactForm-->
          </div><!--end col-->
        </div><!--end row-->

      </div><!--end container-->
    </section><!--end contact-->

<?php include_once 'includes/footer.php'; ?>
