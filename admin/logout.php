<?php
  require_once '../core/init.php';
  unset($_SESSION["SUser"]);
  session_destroy();
  header('Location: ../blog.php');
?>
