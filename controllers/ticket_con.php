<?php 
include_once '../SQL/dbconnection.php';

//User Informations : 
$txtname = $_POST["txtname"];
$txtusername = $_POST["txtusername"];
$txtemail = $_POST["txtemail"];
$txtsubject = $_POST["txtsubject"];
$txtmessage = $_POST["txtmessage"];


// Check Important Message :
$submit = $_POST["btnsubmit"];

if(isset($submit)) {
    // SQL Code : 
    $sql = "INSERT INTO `ticket` (`fullname`, `username`, `email`, `subject`, `message`) VALUES ('$txtname', '$txtusername', '$txtemail', '$txtsubject', '$txtmessage');";
    $result = mysqli_query($conn, $sql);
  
    if($result) {
    echo '
    <div class="ticketsuccess" style="margin-left:auto; margin-right:auto; background-color: Green; border: 1px solid #d6d6d6; border-radius: 2px; padding: 20px; text-align:center; font-family:Vazir; color:white;">
        <h2>تیکت شما با موفقیت ثبت شد</h2>
        <p>با تشکر از شما . کارشناسان ما سریعا به تیکت شما بررسی خواهند کرد. لطفا مراحل تیکت خود را از طریق ایمیل دنبال کنید</p>
        <center>
          <a href="../views/profile_view.php"><button type="button" name="btnbackprofile" style="font-family: Vazir; padding: 8px; cursor: pointer; color: black; outline: none; background-color: white; border: 1px solid rgb(163, 163, 163); border-radius: 2px;">بازگشت به حساب کاربری</button></a>
        </center>
    </div>
    ';
    }
    else {
        echo '
        <div class="ticketfail" style="margin-left:auto; margin-right:auto; background-color: tomato; border: 1px solid #d6d6d6; border-radius: 2px; padding: 20px; text-align:center; font-family:Vazir; color:white;">
        <h2>تیکت شما ثبت نشد</h2>
        <p>متاسف هستیم . این مشکل می تواند برای ارتباط با دیتابیس صورت دهد که ما در تلاش هستیم این مشکل را به زودی حل کنیم</p>
        <center>
          <a href="../views/profile_view.php"><button type="button" name="btnbackprofile" style="font-family: Vazir; padding: 8px; cursor: pointer; color: black; outline: none; background-color: white; border: 1px solid rgb(163, 163, 163); border-radius: 2px;">بازگشت به حساب کاربری</button></a>
        </center>
        </div>
        ';
    }
}

?>