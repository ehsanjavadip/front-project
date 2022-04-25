<?php 
include_once '../SQL/dbconnection.php';
?>
<!-- Coding with [HTML,PHP] by Ehsan Javadi | (C)  2022-->
<!DOCTYPE html>
<html lang="fa_IR" manifest="" dir="rtl">
<head>

    <title>پنل مدیریت | ثبت نام دستی کاربر</title>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="keywords" content="CMS,Register,PHPDB,CodeArticle,Account" />
    <meta name="description" content="CMS Registration UserForm for Creating an Account" />
    <!-- Favicon -->
    <link rel="shortcut icon" type="image/png" href="../assets/icons/codearticlelogonoback.png" />
    <link rel="stylesheet" type="text/css" href="../styles/adminregiview.css" />
    <link rel="stylesheet" type="text/css" href="../styles/fonticons/FontAwesome/css/all.min.css" />
    
    <!-- Some Inportant CSS Here -->
    <style>
      .whereami div {margin-right:85px; cursor: default; color: tomato;}
      .whereami span {color: #2c2c2c;}
    </style>
    <!-- ----------------------- -->

</head>
<body text="black" link="red" alink="green" vlink="gray" onload="">
    <div class="website">
        <?php include_once './header_view.php'; ?>
        <!-- Where Am I know ? Part -->
        <div class="whereami" style="background-color: #f5f5f5; font-size: 17px; padding-top: 10px; padding-bottom:10px;">
          <div>
            <span>شما اینجا هستید : </span><span>خانه</span>  <i class="fa fa-arrow-left"></i>  <span>مدیریت</span>   <i class="fa fa-arrow-left"></i>  <span>کاربران</span>  <i class="fa fa-arrow-left"></i>  <span>افزودن کاربر</span>  
          </div>
        </div>
        <?php include_once './headerbanner_view.php'; ?>
        <!--  -->
        <div class="register_card">
            <h2><i class="fa fa-user"></i>  ثبت نام دستی کاربر (ادمین) :</h2>
            <p>ادمین وب سایت در این قسمت می توانید کاربران را به صورت دستی به دیتابیس وب سایت اضافه کنید. دقت کنید که اطلاعات را به صورت دقیق در فیلد ها وارد نمایید.</p>
            <hr />
            <fieldset>
              <legend>ثبت نام دستی کاربران</legend>
              <div class="ticketform">
                <form action="../controllers/adminregister_con.php" name="frmadminreg" method="POST">
                  <label for="txtusername">نام کاربری :</label>
                  <input type="text" style="font-family: Vazir;" name="txtusername" id="txtusername" placeholder="مثال : mmdreza" required/>
                  <br />
                  <label for="txtemail">آدرس ایمیل :</label>
                  <input type="text" style="font-family: Vazir;" name="txtemail" id="txtemail" placeholder="example@gmail.com" required/>
                  <br />
                  <label for="txtpassword">رمز ورود  :</label>
                  <input type="password" style="font-family: Vazir;" name="txtpassword" id="txtpassword" min="8" placeholder="رمز ورود به حساب کاربری" required/>
                  <p class="pform">اطمینان حاصل فرمایید که رمز ورود <span style="color:green;">حداقل 8 کارکتر</span> شامل یک عدد و حرف بزرگ باشد</p>
                  <label for="txtcareer">شغل :</label>
                  <input type="text" name="txtcareer" style="font-family: Vazir;" id="txtcareer" placeholder="مثال : توسعه دهنده وب" list="datalistcareer" required/>
                  <br />
                  <br />
                  <button style="font-family: Vazir;" type="submit" name="btnsubmit">ثبت نام کاربر</button>
                </form>
              </div>
            </fieldset>
        </div>
        <p style="margin-right:20px;">تمام حقوق برای <span style="color: Green;">احسان جوادی</span> محفوظ می باشد</p>
        <?php include_once './writingbanner_view.php'; ?>
        <?php include_once './footer_view.php'; ?>
    </div>
    <!-- Javascript Codes -->
</body>
</html>