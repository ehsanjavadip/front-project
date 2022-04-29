<?php 
include_once '../SQL/dbconnection.php';
if(isset($_SESSION['loggedin'])) {
  header("Location: profile_view.php");
} else {
  header("Location: register_view.php");
}

//User Informations : 
$txtname = $_POST["txtname"];
$txtfamilyname = $_POST["txtfamilyname"];
$txtusername = $_POST["txtusername"];
$txtemail = $_POST["txtemail"];
$txtpassword = md5($_POST["txtpassword"]);
$txtcareer = $_POST["txtcareer"];


// Check Important Message :
$submit = $_POST["btnsubmit"];
$chkemail = $_POST["chkemail"];

if(isset($submit)) {
    if(isset($chkemail)) {
      $chkok = "yes";
  
      // SQL Code : 
      $sql = "INSERT INTO `users` (`name` , `familyname` , `username`, `email`, `password`, `career`, `emailpre`) VALUES ('$txtname', '$txtfamilyname' ,'$txtusername', '$txtemail', '$txtpassword', '$txtcareer', '$chkok');";
      $result = mysqli_query($conn, $sql);
  
      if($result) {
        $_SESSION['loggedin'] = $txtusername;
        header("Location: ../views/profile_view.php?username='$_SESSION[loggedin]'");
      }
      else {
        header("location: ../views/register_view.php?signup=false");
      }
    }
    else {
      $chknot = "no"; 
  
      // SQL Code : 
      $sql = "INSERT INTO `users` (`name` , `familyname` , `username`, `email`, `password`, `career`, `emailpre`) VALUES ('$txtname', '$txtfamilyname' ,'$txtusername', '$txtemail', '$txtpassword', '$txtcareer', '$chkok');";
      $result = mysqli_query($conn, $sql);
  
      if($result) {
        $_SESSION['loggedin'] = $txtusername;
        header("Location: ../views/profile_view.php?username='$_SESSION[loggedin]'");
      }
      else {
        header("location: ../views/register_view.php?signup=false");
      }
    }
}


?>