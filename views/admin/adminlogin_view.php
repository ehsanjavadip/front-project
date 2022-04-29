<?php 
include_once '../../SQL/dbconnection.php';
if(isset($_SESSION['adminloggedin'])) {
  header("Location: ./admin_view.php?username=$_SESSION[adminloggedin]");
} else {}
?>
<!-- Coding with [HTML,PHP] by Ehsan Javadi | (C)  2022-->
<!DOCTYPE html>
<html lang="fa_IR" manifest="">
<head>

    <title>ورود ادمین | Code Article</title>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="keywords" content="Admin Login,PHPDB,CodeArticle,Account" />
    <meta name="description" content="Admin Login Form for sign in Account" />
    <!-- Favicon -->
    <link rel="shortcut icon" type="image/png" href="../../assets/icons/codearticlelogonoback.png" />
    <link rel="stylesheet" type="text/css" href="../../styles/admin/adminlogin.css" />
    <link rel="stylesheet" type="text/css" href="../../styles/fonticons/FontAwesome/css/all.min.css" />

</head>
<body text="black" link="red" alink="green" vlink="gray" onload="">
  <div class="website">
    <div class="adminlogincard" style="margin-top:100px;">
       <center><img src="../../assets/icons/admin.gif" alt="Admin Panel Icon" draggable="false" width="125px"></center>
       <h2 dir="rtl">ورود به پنل مدیریت CodeArticle</h2>

        <div class="mainform" dir="rtl">
           <form action="../../controllers/admincontrollers/adminlogincon.php" name="frmlogin" method="POST">
               <label for="txtusername">نام کاربری ادمین  :</label>
               <input type="text" style="font-family:Vazir;" name="txtusername" id="txtusername" placeholder="مثال : ehsanjavadip" maxlength="8" required/>
               <span>نام کاربری حداکثر باید 8 کاراکتر باشد</span>
               <br />
               <label for="txtpassword">رمز ورود</label>
               <input type="password" style="font-family:Vazir;" name="txtpassword" id="txtpassword"  maxlength="8" placeholder="رمز ورود به پنل مدیریت" required/>
               <!-- Submit Form Datas -->
               <br />
               <br />
               <button type="submit" style="font-family:Vazir;" name="btnsubmit">ورود به پنل مدیریت</button>
           </form>
           <!-- PHP CHeck Login in Profile -->
           <?php 
               
           ?>
        </div>
       
       <div class="bottomform">
           <p style="cursor:default; color:#215c98;">CodeArticle Admin Panel Sign-in System</p>
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