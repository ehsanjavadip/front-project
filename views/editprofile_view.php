<?php 
include_once '../SQL/dbconnection.php';
?>
<!-- Coding with [HTML,PHP] by Ehsan Javadi | (C)  2022-->
<!DOCTYPE html>
<html lang="fa_IR" manifest="">
<head>

    <title>ویرایش حساب | Code Article</title>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="keywords" content="EditProf,PHPDB,CodeArticle,Account" />
    <meta name="description" content="EditPros Form for signed up Accounts" />
    <!-- Favicon -->
    <link rel="shortcut icon" type="image/png" href="../assets/icons/codearticlelogonoback.png" />
    <link rel="stylesheet" type="text/css" href="../styles/editprof_view.css" />
    <link rel="stylesheet" type="text/css" href="../styles/fonticons/FontAwesome/css/all.min.css" />

</head>
<body text="black" link="red" alink="green" vlink="gray" onload="">
  <div class="website">
    <div class="editprof">
       <center><img src="../assets/icons/codearticlelogonoback.png" alt="Code Article Logo" draggable="false" width="55px" /></center>
       <h2 dir="rtl">ویرایش اطلاعات کاربری - Code Article</h2>
       <p class="pheader">تغییر اطلاعات حساب کاربری از این قسمت و ذخیره تغییرات بسرعت در دیتابیس</p>
       <div class="mainform"  dir="rtl">
           <form action="../controllers/editprof_con.php" name="frmregister" method="POST">
               <label for="txtusername">نام کاربری :</label>
               <input type="text" name="txtusername" style="font-family:Vazir;" id="txtusername" placeholder="مثال : ehsanjavadi" required/>
               <br />
               <label for="txtemail">آدرس ایمیل :</label>
               <input type="text" name="txtemail" style="font-family:Vazir;" id="txtemail" placeholder="example@gmail.com" required/>
               <br />
               <label for="txtcareer">شغل :</label>
               <input type="text" name="txtcareer" style="font-family:Vazir;" id="txtcareer" placeholder="مثال : توسعه دهنده وب" list="datalistcareer" required/>
               <br />
               <label for="chkemail">ارسال اخبار و مزیت ها در ایمیل</label>
               <input type="checkbox" name="chkemail" id="chkemail"/>
              
               <!-- Submit Form Datas -->
               <br />
               <button type="submit" style="font-family:Vazir;" name="btnsubmit">ذخیره تغییرات</button>
           </form>
       </div>
       
       <div class="bottomform">
           <p>قصد ویرایش اطلاعات را ندارید؟ <a href="./profile_view.php"> رفتن به حساب کاربری</a></p>
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