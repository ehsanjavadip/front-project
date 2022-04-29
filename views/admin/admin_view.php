<?php 
include_once '../../SQL/dbconnection.php';
if(!isset($_SESSION['adminloggedin'])) {
  header("Location: ./adminlogin_view.php");
} else {}
?>