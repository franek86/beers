<?php

  //Function for shor text
  function shortText($text, $chars = 150){
     $text = $text." ";
     $text = trim(substr($text, 0, $chars));
     $text = substr($text, 0, strrpos($text,' '));
     $text = $text."&hellip;";
     return $text;
    }

  //function for format date
  function formatDate($date){
       return date('j, F, Y, H:i',strtotime($date));
    }

  function escape($data) {
   $data = trim($data);
   $data = stripslashes($data);
   $data = htmlspecialchars($data);
   return $data;
  }

  //Function For Login
  function login($user_id){
    $_SESSION['SUser'] = $user_id;
    global $db;
    $date = date('Y-m-d H:i:s');
    $db->query("UPDATE users SET last_login = '$date' WHERE id = 'user_id'");
    $_SESSION['success' ]= 'You are now logged in';
    header('Location: admin/index.php');
  }

  function is_logged(){
    if (isset($_SESSION['SUser']) && $_SESSION['SUser'] > 0) {
      return true;
    }
    return false;
  }

  function login_error_r($url = '../login.php'){
    $_SESSION['error_flash'] = 'You must be logged in';
    header('Location: '.$url);
  }
