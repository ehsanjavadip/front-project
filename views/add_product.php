<?php 
include_once '../SQL/dbconnection.php';
?>
<!-- Coding with [HTML,PHP] by Ehsan Javadi | (C)  2022-->
<!DOCTYPE html>
<html lang="fa_IR" manifest="" dir="rtl">
<head>

    <title>اضافه کردن مقاله | Code Article</title>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="keywords" content="Add Article,PHPDB,CodeArticle,Account" />
    <meta name="description" content="Add Article Form for adding an article in CodeArticle" />
    <!-- Favicon -->
    <link rel="shortcut icon" type="image/png" href="../assets/icons/codearticlelogonoback.png" />
    <link rel="stylesheet" type="text/css" href="../styles/fonticons/FontAwesome/css/all.min.css" />
    <link rel="stylesheet" type="text/css" href="../styles/addproduct.css" />
    
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
            <span>شما اینجا هستید : </span><span>خانه</span>  <i class="fa fa-arrow-left"></i>  <span>حساب کاربری</span>   <i class="fa fa-arrow-left"></i>  <span>مقالات من</span>  <i class="fa fa-arrow-left"></i>  <span>افزودن مقاله</span>  
          </div>
        </div>
        <!--  -->
        
        <?php include_once './headerbanner_view.php'; ?>
        <!-- Main Card -->
        <div class="card">
          <center><img src="../assets/icons/writing.gif" alt="Writing Gif Animated Image" width="150px" draggable="false"/></center>
          <h1><i class="fas fa-quote-right" aria-hidden="true"></i>  افزودن مقاله جدید <i class="fas fa-quote-left" aria-hidden="true"></i></h1> 
          <p>
            به آسانی مقاله خود را در این صفحه بنویسید و آن را با یک کلیک انتشار دهید
          </p>
          <p class="pinfo">
            کاربر عزیز شما می توانید با اطلاعات مقاله ی خود را در فیلد های زیر بنویسید و همچنین می توانید با یک ادیتور همه چیز تمام متن اصلی مقاله خود را نگارش کنید
          </p>
          <hr />
          <fieldset dir="rtl">
              <legend>فرم افزودن مقاله جدید</legend>
              <div class="articleform">
               <form action="../controllers/addproductcon.php" name="frmarticlenew" method="POST" enctype="multipart/form-data">
                
                <label for="txtname">نام مقاله :</label>
                <input type="text" name="txtname" id="txtname" style="font-family:Vazir;" placeholder="نام مقاله....." tabindex="1" required />
                <br />
                <label for="txtcode">کد مقاله :</label>
                <input type="text" name="txtcode" id="txtcode" style="font-family:Vazir;" placeholder="کد مقاله....." tabindex="2" required />
                <br />
                <label for="txtcategory">دسته بندی :</label>
                <input type="text" name="txtcategory" id="txtcategory" style="font-family:Vazir;" placeholder="دسته بندی مقاله....." tabindex="3" required />
                <br />
                <label for="txtauthor">نویسنده :</label>
                <input type="text" name="txtauthor" id="txtauthor" style="font-family:Vazir;" placeholder="نویسنده مقاله....." tabindex="4" required />
                <br />
                <label for="txtsubject">چکیده موضوع :</label>
                <input type="text" name="txtsubject" id="txtsubject" style="font-family:Vazir;" placeholder="چکیده موضوع مقاله....." tabindex="5" required />
                <br />
                <label for="txtversion">نسخه انتشار :</label>
                <input type="text" name="txtversion" id="txtversion" style="font-family:Vazir;" placeholder="نسخه انتشار مقاله....." tabindex="6" required />
                <br />
                <label for="txtarticle"><i class="fas fa-pen"></i> متن مقاله :</label>
                <textarea name="txtarticle" placeholder="با ادیتور حرفه ای ما شروع به نوشتن کن..." id="txtarticle" cols="43" rows="10" tabindex="7" dir="rtl" required></textarea>
                <br />
                <label for="fileupload"><i class="fas fa-paperclip"></i> آپلود عکس مقاله :</label>  <label for="fileupload" style="color:white;" class="btnupload" id="btnupload" tabindex="8">انتخاب فایل</label>
                <input type="file" name="fileupload" id="fileupload" accept=".jpg, .jpeg, .png" hidden required/>

                <button type="submit" name="btnsubmit" id="btnsubmit" tabindex="9" style="font-family: Vazir;">انتشار مقاله</button>
                  
               </form>
              </div>
          </fieldset>
        </div>
        <p style="margin-right:20px; cursor: default; text-align: center;">"از  <span style="color: Green;">نوشتن</span> در <span style="color: tomato;">CodeArticle</span> لذت ببرید"</p>
        <?php include_once './writingbanner_view.php'; ?>
        <?php include_once './footer_view.php'; ?>
  </div>
  <!-- Javascript Codes Here -->
   
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
  <!-- <script src="../libraries/tinymce/js/tinymce/tinymce.min.js"></script>
  <script src="../javascript/controllers/inittinymce.js"></script> -->
  
  
</body>
</html>
<!-- Developed by Ehsan Javadi with [LOVE] , [COFFEE] in Esfahan, Iran -->