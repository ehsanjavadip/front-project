<!-- Coding with [HTML,PHP] by Ehsan Javadi | (C)  2022-->
<!DOCTYPE html>
<html lang="fa_IR" manifest="">
<head>

    <title>ورود | Code Article</title>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="keywords" content="Login,PHPDB,CodeArticle,Account" />
    <meta name="description" content="Login Form for sign in Account" />
    <!-- Favicon -->
    <link rel="shortcut icon" type="image/png" href="../assets/icons/codearticlelogonoback.png" />
    <link rel="stylesheet" type="text/css" href="../styles/login_view.css" />
    <link rel="stylesheet" type="text/css" href="../styles/fonticons/FontAwesome/css/all.min.css" />

</head>
<body text="black" link="red" alink="green" vlink="gray" onload="">
  <div class="website">
    <div class="logincard" style="margin-top:100px;">
       <center><img src="../assets/icons/codearticlelogonoback.png" alt="Code Article Logo" draggable="false" width="55px" /></center>
       <h2 dir="rtl">ورود به حساب کاربری CodeArticle</h2>

       <div class="mainform" dir="rtl">
           <form action="../controllers/login_controller.php" name="frmlogin" method="POST">
               <label for="txtusername">نام کاربری یا ایمیل :</label>
               <input type="text" style="font-family:Vazir;" name="txtusername" id="txtusername" placeholder="Username or email" required/>
               <br />
               <label for="txtpassword">رمز ورود - <a href="#">رمز خود را فراموش کرده اید ؟</a></label>
               <input type="password" style="font-family:Vazir;" name="txtpassword" id="txtpassword" max="8" placeholder="رمز ورود به حساب" required/>
               <!-- Submit Form Datas -->
               <br />
               <br />
               <button type="submit" style="font-family:Vazir;" name="btnsubmit">ورود به حساب</button>
           </form>
       </div>
       
       <div class="bottomform">
           <p>حساب کاربری ندارید؟ <a href="./register_view.php">ثبت نام کنید </a></p>
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