<?php 
include_once '../SQL/dbconnection.php';

//User Informations : 
$txtusername = $_POST["txtusername"];
$txtemail = $_POST["txtemail"];
$txtpass = $_POST["txtpassword"];
$txtcareer = $_POST["txtcareer"];


// Check Important Message :
$submit = $_POST["btnsubmit"];

if(isset($submit)) {
    // SQL Code : 
    $sql = "INSERT INTO `users` (`username`, `email`, `password`, `career`, `emailpre`) VALUES ('$txtusername', '$txtemail', '$txtpass', '$txtcareer', 'no');";
    $result = mysqli_query($conn, $sql);
  
    if($result) {
    echo '
    <div class="ticketsuccess" style="margin-left:auto; margin-right:auto; background-color: Green; border: 1px solid #d6d6d6; border-radius: 2px; padding: 20px; text-align:center; font-family:Vazir; color:white;">
        <h2>کاربر با موفقیت ثبت شد</h2>
        <p>ادمین عزیز، کاربری که بصورت دستی وارد کرده اید با موفقیت در دیتابیس وب سایت ثبت شد. ایمیل های ثبت موفقیت آمیز این حساب به ایمیل اصلی کاربر ارسال خواهند شد</p>
        <center>
          <a href="../views/admin_view.php"><button type="button" name="btnbackprofile" style="font-family: Vazir; padding: 8px; cursor: pointer; color: black; outline: none; background-color: white; border: 1px solid rgb(163, 163, 163); border-radius: 2px;">بازگشت به صفحه ادمین</button></a>
        </center>
    </div>
    ';
    }
    else {
        echo '
        <div class="ticketfail" style="margin-left:auto; margin-right:auto; background-color: tomato; border: 1px solid #d6d6d6; border-radius: 2px; padding: 20px; text-align:center; font-family:Vazir; color:white;">
        <h2>کاربر شما ثبت نشد</h2>
        <p>در این رابطه متاسف هستیم، کارشناسان ما در حال برطرف کردن مشکل این صفحه می باشند، لطفا دقایقی بعد دوباره امتحان کنید</p>
        <center>
          <a href="../views/admin_view.php"><button type="button" name="btnbackprofile" style="font-family: Vazir; padding: 8px; cursor: pointer; color: black; outline: none; background-color: white; border: 1px solid rgb(163, 163, 163); border-radius: 2px;">بازگشت به صفحه ادمین</button></a>
        </center>
        </div>
        ';
    }
}

?>