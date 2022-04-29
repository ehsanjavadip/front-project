<?php
    include_once '../SQL/dbconnection.php';
    // Login Controllers Codes Here
    // Check if Usersname Login or Logout from Own Profile
    
    $txtusername = $_POST["txtusername"];
    $txtpassword = md5($_POST["txtpassword"]);


    $btnsubmit = $_POST["btnsubmit"];


    // Check if User Exist in DataBase : 
    $sql = "SELECT * FROM users WHERE username='$txtusername' AND password= '$txtpassword'";
    $re_check = mysqli_query($conn, $sql);
    
    if(isset($btnsubmit)) {
        if(mysqli_num_rows($re_check) > 0 ) {
            $_SESSION['loggedin'] = $txtusername;
            header("Location: ../views/profile_view.php?username='$_SESSION[loggedin]'");
        } else {
            echo '
                <div class="usernotfound" style="margin-left:auto; margin-right:auto; background-color: tomato; border: 1px solid #d6d6d6; border-radius: 2px; padding: 20px; text-align:center; font-family:Vazir; color:white;">
                 <h2>کاربری با این مشخصات در دیتابیس ما پیدا نشد</h2>
                 <p>اگر دارای حساب کاربری هستید نام کاربری و رمز عبور را به دقت وارد نمایید. در صورت مشکل با کارشناسان ما از طریق صفحه ارتباط با ما در ارتباط باشید</p>
                 <center>
                 <a href="../views/login_view.php"><button type="button" name="btnbackarticle" style="font-family: Vazir; padding: 8px; cursor: pointer; color: black; outline: none; background-color: white; border: 1px solid rgb(163, 163, 163); border-radius: 2px;">بازگشت به صفحه ورود</button></a>
                 </center>
                </div>
            ';
        }
    }
?>