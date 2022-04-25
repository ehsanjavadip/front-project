<?php 
include_once '../SQL/dbconnection.php';
?>
<!-- Coding with [HTML,PHP] by Ehsan Javadi | (C)  2022-->
<!DOCTYPE html>
<html lang="fa_IR" manifest="" dir="rtl">
<head>

    <title>ثبت تیکت | Code Article</title>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="keywords" content="Ticket,PHPDB,CodeArticle,Account" />
    <meta name="description" content="Ticket Regitration Form for send problem of Account" />
    <!-- Favicon -->
    <link rel="shortcut icon" type="image/png" href="../assets/icons/codearticlelogonoback.png" />
    <link rel="stylesheet" type="text/css" href="../styles/ticketview.css" />
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
            <span>شما اینجا هستید : </span><span>خانه</span>  <i class="fa fa-arrow-left"></i>  <span>حساب کاربری</span>   <i class="fa fa-arrow-left"></i>  <span>پروفایل کاربری</span>  <i class="fa fa-arrow-left"></i>  <span>ثبت تیکت</span>  
          </div>
        </div>
        <?php include_once './headerbanner_view.php'; ?>
        <!--  -->
        <div class="card">
          <h2>ثبت تیکت جدید :</h2>
          <p>کاربر گرامی در این قسمت می توانید به آسانی در صورت وجود مشکل در حساب کاربری خود تیکت ثبت کنید. پشتیبانان سریعا به شما پاسخ خواهند داد</p>
          <hr />
          <fieldset>
              <legend>فرم ثبت تیکت</legend>
              <div class="ticketform">
               <form action="../controllers/ticket_con.php" name="frmticket" method="POST">
                <label for="txtname">نام و نام خانوادگی :</label>
                <input type="text" name="txtname" id="txtname" style="font-family:Vazir;" placeholder="مثال : محمد نوروزی" required/>
                <br />
                <label for="txtusername">نام کاربری :</label>
                <input type="text" style="font-family: Vazir;" name="txtusername" id="txtusername" placeholder="مثال : mmdreza" required/>
                <br />
                <label for="txtemail">ایمیل :</label>
                <input type="text" style="font-family: Vazir;" name="txtemail" id="txtemail" placeholder="example@gmail.com" required/>
                <br />

                <label for="txtsubject">شرح مشکل یا پیام :</label>
                <input type="text" name="txtsubject" style="font-family: Vazir;" id="txtsubject" placeholder="مثال : اطلاعات کاربری" required />
                <br />
               
                <label for="txtmessage" style="vertical-align:top;">متن پیام :</label>
                <br />
                <textarea name="txtmessage" id="txtmessage" cols="43" rows="10" required></textarea>
                <br />
                
                <button type="submit" name="btnsubmit" style="font-family: Vazir;">ارسال تیکت</button>
                  
               </form>
              </div>
          </fieldset>
        </div>
        <p style="margin-right:20px;">تمام حقوق برای <span style="color: Green;">احسان جوادی</span> محفوظ می باشد</p>
        <?php include_once './writingbanner_view.php'; ?>
        <?php include_once './footer_view.php'; ?>
  </div>
  <!-- Javascript Codes Here -->
</body>
</html>
<!-- Developed by Ehsan Javadi with [LOVE] , [COFFEE] in Esfahan, Iran -->