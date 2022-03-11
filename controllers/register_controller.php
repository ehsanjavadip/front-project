<?php 
include_once '../SQL/dbconnection.php';

//User Informations : 
$txtusername = $_POST["txtusername"];
$txtemail = $_POST["txtemail"];
$txtpassword = $_POST["txtpassword"];
$txtcareer = $_POST["txtcareer"];


// Check Important Message :
$submit = $_POST["btnsubmit"];
$chkemail = $_POST["chkemail"];

if(isset($submit)) {
    if(isset($chkemail)) {
      $chkok = "yes";
  
      // SQL Code : 
      $sql = "INSERT INTO `users` (`username`, `email`, `password`, `career`, `emailpre`) VALUES ('$txtusername', '$txtemail', '$txtpassword', '$txtcareer', '$chkok');";
      $result = mysqli_query($conn, $sql);
  
      if($result) {
        header("Location: ../index.php?signup=true");
      }
      else {
        header("location: ../index.php?signup=false");
      }
    }
    else {
      $chknot = "no"; 
  
      // SQL Code : 
      $sql = "INSERT INTO `users` (`username`, `email`, `password`, `career`, `emailpre`) VALUES ('$txtusername', '$txtemail', '$txtpassword', '$txtcareer', '$chknot');";
      $result = mysqli_query($conn, $sql);
  
      if($result) {
        header("location: ../index.php?signup=true");
      }
      else {
        header("location: ../index.php?signup=false");
      }
    }
}


?>