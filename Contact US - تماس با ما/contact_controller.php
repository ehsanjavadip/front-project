<?php 
// Import Database Connection : 
include_once "./dbconnection.php";

// Proccess Code : 
$txtnamefamily = $_POST["txtnamefamily"];
$txtemail = $_POST["txtemail"];
$txtsubject = $_POST["txtsubject"];
$txtmessage = $_POST["txtmessage"];


// Check Important Message :
$submit = $_POST["btnsubmit"];
$chkimportant = $_POST["chkimportant"];

if(isset($submit)) {
  if(isset($chkimportant)) {
    $chkok = "yes";

    // SQL Code : 
    $sql = "INSERT INTO `message` (`name`, `email`, `subject`, `message`, `important`) VALUES ('$txtnamefamily', '$txtemail', '$txtsubject', '$txtmessage' , '$chkok');";
    $result = mysqli_query($conn, $sql);

    if($result) {
        header("location: ./contact_view.html?message=sent");
    }
    else {
        header("location: ./contact_view.html?message=unsent");
    }
  }
  else {
    $chknot = "no"; 

    // SQL Code : 
    $sql = "INSERT INTO `message` (`name`, `email`, `subject`, `message`, `important`) VALUES ('$txtnamefamily', '$txtemail', '$txtsubject', '$txtmessage' , '$chknot');";
    $result = mysqli_query($conn, $sql);

    if($result) {
        header("location: ./contact_view.html?message=sent");
    }
    else {
        header("location: ./contact_view.html?message=unsent");
    }
  }
}
?>