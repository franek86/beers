<?php

session_start();

require_once $_SERVER['DOCUMENT_ROOT'] . '/beers/config/config.php';
require_once $_SERVER['DOCUMENT_ROOT'] . '/beers/app/helpers.php';

//Connection to database
try {
 $db = new PDO("mysql:host=" .DB_HOST. ";dbname=" .DB_NAME, DB_USER, DB_PASSWORD);
 $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
 die($e -> getMessage());
}

if (isset($_SESSION['SUser'])) {
  $user_id = $_SESSION['SUser'];
  $sql = "SELECT * FROM users WHERE id = '$user_id'";
  $query = $db->prepare($sql);
  $query->execute();
  $user_data = $query->fetch(PDO::FETCH_ASSOC);
}

if (isset($_SESSION['success'])) {
  echo '<div class="bg-success"><p class="text-success text-center">' .$_SESSION["success"]. '</p></div>';
  unset($_SESSION['success']);
}

if (isset($_SESSION['error_flash'])) {
  echo '<div class="bg-danger"><p class="text-danger text-center">' .$_SESSION["error_flash"]. '</p></div>';
  unset($_SESSION['error_flash']);
}
