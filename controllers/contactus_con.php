<?php 
include_once '../SQL/dbconnection.php';

//User Informations : 
$txtname = $_POST["txtname"];
$txtemail = $_POST["txtemail"];
$txtsubject = $_POST["txtsubject"];
$txtmessage = $_POST["txtmessage"];


// Check Important Message :
$submit = $_POST["btnsubmit"];
$txtimportant = $_POST["txtimportant"];

if(isset($submit)) {
    if(isset($txtimportant)) {
      $chkok = "yes";
  
      // SQL Code : 
      $sql = "INSERT INTO `messages` (`fullname`, `email`, `subject`, `message`, `important`) VALUES ('$txtname', '$txtemail', '$txtsubject', '$txtmessage', '$chkok');";
      $result = mysqli_query($conn, $sql);
  
      if($result) {
        header("Location: ../index.php?message=true");
      }
      else {
        header("location: ../index.php?message=false");
      }
    }
    else {
      $chknot = "no"; 
  
      // SQL Code : 
      $sql = "INSERT INTO `messages` (`fullname`, `email`, `subject`, `message`, `important`) VALUES ('$txtname', '$txtemail', '$txtsubject', '$txtmessage', '$chknot');";
      $result = mysqli_query($conn, $sql);
  
      if($result) {
        header("location: ../index.php?message=true");
      }
      else {
        header("location: ../index.php?message=false");
      }
    }
}


?>