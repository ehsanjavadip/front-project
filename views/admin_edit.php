<?php 
include_once '../SQL/dbconnection.php';
?>
<!-- Coding with [HTML,PHP] by Ehsan Javadi | (C)  2022-->
<!DOCTYPE html>
<html lang="fa_IR" manifest="" dir="rtl">
<head>

    <title>پنل مدیریت | ویرایش دستی حساب</title>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="keywords" content="CMS,EditUser,PHPDB,CodeArticle,Account" />
    <meta name="description" content="CMS Edit UserForm for Editing Info of an Account" />
    <!-- Favicon -->
    <link rel="shortcut icon" type="image/png" href="../assets/icons/codearticlelogonoback.png" />
    <link rel="stylesheet" type="text/css" href="../styles/admineditview.css" />
    <link rel="stylesheet" type="text/css" href="../styles/fonticons/FontAwesome/css/all.min.css" />
    

</head>
<body text="black" link="red" alink="green" vlink="gray" onload="">
    <div class="website">
        <?php include_once './header_view.php'; ?>
        <div class="edit_card">
            <h2><i class="fa fa-user"></i>  ویرایش اطلاعات حساب کاربری (ادمین) :</h2>
            <p>ادمین وب سایت در این قسمت می توانید اطلاعات کاربران را به صورت دستی ویرایش کنید. دقت کنید که اطلاعات را به صورت دقیق در فیلد ها وارد نمایید.</p>
            <hr />
            <fieldset>
              <legend>ویرایش اطلاعات حساب کاربری</legend>
              <div class="editadminform">
                <form action="../controllers/adminedit_con.php" name="frmadminedit" method="POST">
                  <label for="txtusername">نام کاربری :</label>
                  <input type="text" style="font-family: Vazir;" name="txtusername" id="txtusername" placeholder="مثال : mmdreza" required/>
                  <br />
                  <label for="txtpassword">رمز ورود  :</label>
                  <input type="password" style="font-family: Vazir;" name="txtpassword" id="txtpassword" min="8" placeholder="رمز ورود به حساب کاربری" required/>
                  <p class="pform">اطمینان حاصل فرمایید که رمز ورود <span style="color:green;">حداقل 8 کارکتر</span> شامل یک عدد و حرف بزرگ باشد</p>
                  <label for="txtcareer">شغل :</label>
                  <input type="text" name="txtcareer" style="font-family: Vazir;" id="txtcareer" placeholder="مثال : توسعه دهنده وب" list="datalistcareer" required/>
                  <br />
                  <br />
                  <button style="font-family: Vazir;" type="submit" name="btnsubmit">ویرایش اطلاعات</button>
                </form>
              </div>
            </fieldset>
        </div>
        <p style="margin-right:20px;">تمام حقوق برای <span style="color: Green;">احسان جوادی</span> محفوظ می باشد</p>
    </div>
    <!-- Javascript Codes -->
</body>
</html>