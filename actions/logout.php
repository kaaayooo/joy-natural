<?php

  session_start();
  session_unset();
  session_destroy();


// メインページのファイル名　入れる
  header("location: ../views/login.php"); 
  exit;

?>