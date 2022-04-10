<?php 
include_once '../SQL/dbconnection.php';
?>
<!-- Coding with [HTML,PHP] by Ehsan Javadi | (C)  2022-->
<!DOCTYPE html>
<html lang="fa_IR" manifest="">
<head>

    <title>ثبت نام کاربر | Code Article</title>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="keywords" content="Signup,PHPDB,CodeArticle,Account" />
    <meta name="description" content="Sign up Form for sign up Account" />
    <!-- Favicon -->
    <link rel="shortcut icon" type="image/png" href="../assets/icons/codearticlelogonoback.png" />
    <link rel="stylesheet" type="text/css" href="../styles/register_view.css" />
    <link rel="stylesheet" type="text/css" href="../styles/fonticons/FontAwesome/css/all.min.css" />

</head>
<body text="black" link="red" alink="green" vlink="gray" onload="">
  <div class="website">
    <div class="signupcard">
       <center><img src="../assets/icons/codearticlelogonoback.png" alt="Code Article Logo" draggable="false" width="55px" /></center>
       <h2 dir="rtl">ثبت نام کاربر - CodeArticle</h2>

       <div class="mainform" dir="rtl">
           <form action="../controllers/register_controller.php" name="frmregister" method="POST">
               <label for="txtusername">نام کاربری :</label>
               <input type="text" style="font-family: Vazir;" name="txtusername" id="txtusername" placeholder="مثال : mmdreza" required/>
               <br />
               <label for="txtemail">آدرس ایمیل :</label>
               <input type="text" style="font-family: Vazir;" name="txtemail" id="txtemail" placeholder="example@gmail.com" required/>
               <br />
               <label for="txtpassword">رمز ورود  :</label>
               <input type="password" style="font-family: Vazir;" name="txtpassword" id="txtpassword" min="8" placeholder="رمز ورود به حساب کاربری" required/>
               <p>اطمینان حاصل فرمایید که رمز ورود <span style="color:green;">حداقل 8 کارکتر</span> شامل یک عدد و حرف بزرگ باشد</p>
               <label for="txtcareer">شغل :</label>
               <input type="text" name="txtcareer" style="font-family: Vazir;" id="txtcareer" placeholder="مثال : توسعه دهنده وب" list="datalistcareer" required/>
               <br />
               <label for="chkemail">ارسال اخبار و مزیت ها در ایمیل</label>
               <input type="checkbox" name="chkemail" id="chkemail"/>
               <br />
              
               <!-- Submit Form Datas -->
               <br />
               <button style="font-family: Vazir;" type="submit" name="btnsubmit">ثبت نام</button>
           </form>
       </div>
       
       <div class="bottomform">
           <p>حساب کاربری دارید ؟ <a href="./login_view.php">وارد شوید</a></p>
       </div>

       <!-- Bottom List -->
        <ul>
           <a href="#"><li>قوانین</li></a>
           <a href="#"><li>حریم خصوصی</li></a>
           <a href="#"><li>امنیت</li></a>
           <a href="./contactus_view.php"><li>ارتباط با ما</li></a>
        </ul>
    </div>
  </div> 
  <!-- JavaScript Code Includes -->

</body>
</html>
<!-- Developed by Ehsan Javadi with [LOVE] , [COFFEE] in Esfahan, Iran -->