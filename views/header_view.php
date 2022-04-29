<!-- Coding with [HTML,PHP] by Ehsan Javadi | (C)  2022-->
<!DOCTYPE html>
<html lang="fa_IR" manifest="" dir="rtl">
<head>

    <!-- <title>ورود | Code Article</title> -->
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="keywords" content="Header,CSS,PHP" />
    <meta name="description" content="Header of Website Here" />
    <!-- Favicon -->
    <!-- <link rel="shortcut icon" type="image/png" href="../assets/icons/codearticlelogonoback.png" /> -->
    <link rel="stylesheet" type="text/css" href="../styles/header_view.css" />
    <link rel="stylesheet" type="text/css" href="../styles/fonticons/FontAwesome/css/all.min.css" />


</head>
<body text="black" link="red" alink="green" vlink="gray" onload="">
  <!-- Website Header Here -->
  <header>
    <div class="right">
        <img src="../assets/icons/codearticlewhite.png" alt="CodeArticle Logo PNG" width="50px"/>
        <ul>
          <a href="../index.php"><li>خانه</li></a>
          <a href="./articles_view.php" target="_blank"><li>مقالات</li></a>
          <a href="#"><li>درباره ما</li></a>
          <a href="./contactus_view.php"><li>ارتباط با ما</li></a>
          <a href="./admin/adminlogin_view.php"><li>مدیریت</li></a>
        </ul>       
    </div>
    <div class="left" dir="ltr">
        <ul>
            <li id="timesystem"></li>
            <a href="./register_view.php" id="registertext"><i class="fa fa-plus-circle" aria-hidden="true"></i><li >ثبت نام</li></a>
            <a href="./login_view.php" id="logintext"><i class="fa fa-user"></i><li >ورود</li></a>
            
        </ul>
    </div>
  </header>
  <!-- JavaScript Code Includes -->
  <script src="../javascript\controllers\timesystem.js"></script>
  <script src="https://momentjs.com/downloads/moment-with-locales.js"></script>
</body>
</html>
<!-- Developed by Ehsan Javadi with [LOVE] , [COFFEE] in Esfahan, Iran -->