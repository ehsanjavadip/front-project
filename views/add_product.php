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
    <link rel="stylesheet" type="text/css" href="../styles/addproductview.css" />
    <link rel="stylesheet" type="text/css" href="../styles/fonticons/FontAwesome/css/all.min.css" />
    

</head>
<body text="black" link="red" alink="green" vlink="gray" onload="">
  <div class="website">
        <?php include_once './header_view.php'; ?>
        <div class="card">
          <h2><i class="fa fa-shopping-basket" aria-hidden="true"></i>  ثبت مقاله جدید :</h2> 
          <p>کاربر گرامی به صفحه اضافه کردن مقاله در Code Article خوش آمدید. در این صفحه شما می توانید به آسانی مقاله خود را بنویسید و آن را انتشار دهید</p>
          <hr />
          <fieldset>
              <legend>فرم ثبت مقاله جدید</legend>
              <div class="articleform">
               <form action="../controllers/addproductcon.php" name="frmarticlenew" method="POST">
                
                <label for="txtname">نام مقاله :</label>
                <input type="text" name="txtname" id="txtname" style="font-family:Vazir;" placeholder="نام مقاله....." required />
                <br />
                <label for="txtcode">کد مقاله :</label>
                <input type="text" name="txtcode" id="txtcode" style="font-family:Vazir;" placeholder="کد مقاله....." required />
                <br />
                <label for="txtcategory">دسته بندی :</label>
                <input type="text" name="txtcategory" id="txtcategory" style="font-family:Vazir;" placeholder="دسته بندی مقاله....." required />
                <br />
                <label for="txtauthor">نویسنده :</label>
                <input type="text" name="txtauthor" id="txtauthor" style="font-family:Vazir;" placeholder="نویسنده مقاله....." required />
                <br />
                <label for="txtsubject">چکیده موضوع :</label>
                <input type="text" name="txtsubject" id="txtsubject" style="font-family:Vazir;" placeholder="چکیده موضوع مقاله....." required />
                <br />
                <label for="txtversion">نسخه انتشار :</label>
                <input type="text" name="txtversion" id="txtversion" style="font-family:Vazir;" placeholder="نسخه انتشار مقاله....." required />
                <br />
                <label for="txtarticle">متن مقاله :</label>
                <textarea name="txtarticle" id="txtarticle" cols="43" rows="10" required></textarea>
                <br />
                
                <button type="submit" name="btnsubmit" style="font-family: Vazir;">انتشار مقاله</button>
                  
               </form>
              </div>
          </fieldset>
        </div>
        <p style="margin-right:20px;">تمام حقوق برای <span style="color: Green;">احسان جوادی</span> محفوظ می باشد</p>
  </div>
  <!-- Javascript Codes Here -->
</body>
</html>
<!-- Developed by Ehsan Javadi with [LOVE] , [COFFEE] in Esfahan, Iran -->