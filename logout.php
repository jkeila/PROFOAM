<?php
  require_once('includes/cargar.php');
  if(!$session->logout()) {redirect("index.php");}
?>
