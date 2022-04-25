<?php 
  include_once '../SQL/dbconnection.php';
  
  if(isset($_SESSION['loggedin'])) {
    unset($_SESSION['loggedin']);
    header("location: ../views/login_view.php");
  } else {header("location: ../login_view.php");}
?>