<?php 
include_once '../SQL/dbconnection.php'; // ِDB Connection is Here
?>
<!-- Coding with [HTML,PHP] by Ehsan Javadi | (C)  2022-->
<!DOCTYPE html>
<html lang="fa_IR" manifest="" dir="rtl">
<head>

    <title>مقالات | Code Article</title>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="keywords" content="Articles List,PHPDB,CodeArticle,Account" />
    <meta name="description" content="Articles List to  See Articles" />
    <!-- Favicon -->
    <link rel="shortcut icon" type="image/png" href="../assets/icons/codearticlelogonoback.png" />
    <link rel="stylesheet" type="text/css" href="../styles/articlesview.css" />
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
            <span>شما اینجا هستید : </span><span>خانه</span>  <i class="fa fa-arrow-left"></i>  <span>مقالات</span> 
          </div>
        </div>
        <?php include_once './headerbanner_view.php'; ?>

        <!--  -->
        <div class="articleslist">
            <center><img src="../assets/icons/eyeflat.gif" alt="Exploring Articles Animated Image" width="150px" draggable="false"/></center>
            <h1><i class="fas fa-quote-right" aria-hidden="true"></i>  لیست مقالات <i class="fas fa-quote-left" aria-hidden="true"></i></h1> 
            <p>
              میان هزاران مقاله در پلتفرم ما شروع به جستجو و خواندن کنید
            </p>
            <p class="pinfo">
              مقاله ها بصورت زنده در این صفحه قرار می گیرند، شما به آسانی می توانید مقاله مورد نظر خود را انتخاب کنید و با ورود به صفحه اختصاصی آن اقدام به خواندن مقاله ها در صفحات گرافیکی و جذاب کنید
            </p>
            <hr />
            <br />
            <!-- Show All Articles in Grid System by CSS -->
            <div class="grid grid-2 grid-1 grid-3 grid-4">
              
               <?php include '../controllers/showarticlecon.php'; ?>
            </div>
            <!-- --------------------------------------- -->
            
        </div>
        <p style="margin-right:20px; cursor: default; text-align: center;">"از  <span style="color: Green;">نوشتن</span> در <span style="color: tomato;">CodeArticle</span> لذت ببرید"</p>

        <?php include_once './writingbanner_view.php'; ?>
        <?php include_once './emailcontact_view.php'; ?>
        <?php include_once './footer_view.php'; ?>
    </div>
</body>
</html>