<?php 
include_once '../SQL/dbconnection.php';

//User Informations : 
$txtusername = $_POST["txtusername"];
$txtemail = $_POST["txtemail"];
$txtcareer = $_POST["txtcareer"];


// Check Important Message :
$submit = $_POST["btnsubmit"];
$chkemail = $_POST["chkemail"];

if(isset($submit)) {
    if(isset($chkemail)) {
      $chkok = "yes";
  
      // SQL Code : 
      $sql = "UPDATE `users` SET `username` = '$txtusername', `email` = '$txtemail', `password` = '$txtpassword', `career` = '$txtcareer', `emailpre` = '$chkok' WHERE `users`.`username` = 'navidimani';";
      $result = mysqli_query($conn, $sql);
  
      if($result) {
        header("Location: ../index.php?editprofile=true");
      }
      else {
        header("location: ../index.php?editprofile=false");
      }
    }
    else {
      $chknot = "no"; 
  
      // SQL Code : 
      $sql = "UPDATE `users` SET `username` = '$txtusername', `email` = '$txtemail', `password` = '$txtpassword', `career` = '$txtcareer', `emailpre` = '$chknot' WHERE `users`.`username` = 'navidimani';";
      $result = mysqli_query($conn, $sql);
  
      if($result) {
        header("location: ../index.php?editprofile=true");
      }
      else {
        header("location: ../index.php?editprofile=false");
      }
    }
}


?>