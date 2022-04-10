<?php 
include_once '../SQL/dbconnection.php';
?>
<!-- Coding with [HTML,PHP] by Ehsan Javadi | (C)  2022-->
<!DOCTYPE html>
<html lang="fa_IR" manifest="">
<head>

    <title>ارتباط با ما | Code Article</title>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="keywords" content="Contactus,PHPDB,CodeArticle,Account" />
    <meta name="description" content="Contact us Form for Send Message Account" />
    <!-- Favicon -->
    <link rel="shortcut icon" type="image/png" href="../assets/icons/codearticlelogonoback.png" />
    <link rel="stylesheet" type="text/css" href="../styles/contactus_view.css" />
    <link rel="stylesheet" type="text/css" href="../styles/fonticons/FontAwesome/css/all.min.css" />

</head>
<body text="black" link="red" alink="green" vlink="gray" onload="">
  <div class="website">
    <div class="main">
       <center><img src="../assets/icons/codearticlelogonoback.png" alt="Code Article Logo" draggable="false" width="55px" /></center>
       <h2 dir="rtl">ارتباط با ما - CodeArticle</h2>
       
       <!-- Contactus Area -->
       <div class="contactusform" dir="rtl">
           <form action="../controllers/contactus_con.php" name="frmregister" method="POST">
               <label for="txtname">نام و نام خانوادگی :</label>
               <input type="text" name="txtname" id="txtname" style="font-family:Vazir;" placeholder="مثال : محمد نوروزی" required/>
               <br />
               <label for="txtemail">آدرس ایمیل :</label>
               <input type="text" name="txtemail" id="txtemail" placeholder="example@gmail.com" required/>
               <br />
               <label for="txtsubject">موضوع پیام :</label>
               <input type="text" name="txtsubject" style="font-family: Vazir;" id="txtsubject" placeholder="مثال : اطلاعات کاربری" required />
               <br />
               
               <label for="txtmessage" style="vertical-align:top;">متن پیام :</label>
               <br />
               <textarea name="txtmessage" id="txtmessage" cols="43" rows="10" required></textarea>
               <br />
               <span>آیا پیام شما مهم است ؟</span>
               <input type="checkbox" name="txtimportant" id="txtinportant" />
            
               <!-- Submit Form Datas -->
               <br />
               <br />
               <button type="submit" name="btnsubmit" style="font-family: Vazir;">ارسال پیام</button>
           </form>

           
       </div>
       <!-- Bottom List -->
       <ul>
             <a href="#"><li>قوانین</li></a>
             <a href="#"><li>حریم خصوصی</li></a>
             <a href="#"><li>امنیت</li></a>
             <a href="#"><li>درباره ما</li></a>
        </ul>
    </div>
  </div>
  <!-- JavaScript Code Includes -->

</body>
</html>
<!-- Developed by Ehsan Javadi with [LOVE] , [COFFEE] in Esfahan, Iran -->