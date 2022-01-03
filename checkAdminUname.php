<?php
  include 'controllers/AdminController.php';
  $uname = $_GET["username"];
  $adminUname = checkAdminUname($uname);
  if ($adminUname) {
    echo "Invalid";
  }
  else {
    echo "Valid";
  }
 ?>
