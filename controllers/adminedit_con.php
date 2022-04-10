<?php 
include_once '../SQL/dbconnection.php';

//User Informations : 
$txtusername = $_POST["txtusername"];
$txtpass = $_POST["txtpassword"];
$txtcareer = $_POST["txtcareer"];


// Check Important Message :
$submit = $_POST["btnsubmit"];

if(isset($submit)) {
    // SQL Code : 
    $sql = "UPDATE `users` SET `username` = '$txtusername', `password` = '$txtpassword', `career` = '$txtcareer', WHERE `users`.`username` = '$txtusername';";
    $result = mysqli_query($conn, $sql);
  
    if($result) {
    echo '
    <div class="ticketsuccess" style="margin-left:auto; margin-right:auto; background-color: Green; border: 1px solid #d6d6d6; border-radius: 2px; padding: 20px; text-align:center; font-family:Vazir; color:white;">
        <h2>اطلاعات کاربر با موفقیت ویرایش شد</h2>
        <p>ادمین عزیز، کاربری که ویرایش کرده اید اطلاعات آن به زودی بر روی دیتابیس وب سایت اصلاح خواهد شد. اخبار و اطلاعیه های مربوطه به ایمیل کاربر ارسال خواهد شد</p>
        <center>
          <a href="../views/admin_view.php"><button type="button" name="btnbackprofile" style="font-family: Vazir; padding: 8px; cursor: pointer; color: black; outline: none; background-color: white; border: 1px solid rgb(163, 163, 163); border-radius: 2px;">بازگشت به صفحه ادمین</button></a>
        </center>
    </div>
    ';
    }
    else {
        echo '
        <div class="ticketfail" style="margin-left:auto; margin-right:auto; background-color: tomato; border: 1px solid #d6d6d6; border-radius: 2px; padding: 20px; text-align:center; font-family:Vazir; color:white;">
        <h2>اطلاعات کاربر ویرایش نشد</h2>
        <p>در این رابطه متاسف هستیم، کارشناسان ما در حال برطرف کردن مشکل این صفحه می باشند، لطفا دقایقی بعد دوباره امتحان کنید</p>
        <center>
          <a href="../views/admin_view.php"><button type="button" name="btnbackprofile" style="font-family: Vazir; padding: 8px; cursor: pointer; color: black; outline: none; background-color: white; border: 1px solid rgb(163, 163, 163); border-radius: 2px;">بازگشت به صفحه ادمین</button></a>
        </center>
        </div>
        ';
    }
}

?>