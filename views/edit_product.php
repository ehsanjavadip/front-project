<?php 
include_once '../SQL/dbconnection.php';
?>
<!-- Coding with [HTML,PHP] by Ehsan Javadi | (C)  2022-->
<!DOCTYPE html>
<html lang="fa_IR" manifest="" dir="rtl">
<head>

    <title>ویرایش مقاله | Code Article</title>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="keywords" content="Edit Article,PHPDB,CodeArticle,Account" />
    <meta name="description" content="Edit Article Form for adding an article in CodeArticle" />
    <!-- Favicon -->
    <link rel="shortcut icon" type="image/png" href="../assets/icons/codearticlelogonoback.png" />
    <link rel="stylesheet" type="text/css" href="../styles/editproductview.css" />
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
            <span>شما اینجا هستید : </span><span>خانه</span>  <i class="fa fa-arrow-left"></i>  <span>حساب کاربری</span>   <i class="fa fa-arrow-left"></i>  <span>مقالات من</span>  <i class="fa fa-arrow-left"></i>  <span>ویرایش مقاله</span>  
          </div>
        </div>
        <?php include_once './headerbanner_view.php'; ?>
        <!--  -->
        <div class="card">
          <h2><i class="fa fa-shopping-basket" aria-hidden="true"></i>  ویرایش مقاله ثبت شده :</h2> 
          <p>کاربر عزیز وب سایت CodeArticle شما به آسانی میتوانید مقاله ثبت شده خود را ویرایش کنید و دوباره در این پلتفرم آن را بروزرسانی کنید</p>
          <hr />
          <fieldset>
              <legend>فرم ثبت مقاله جدید</legend>
              <div class="editarticleform">
               <form action="edit_product.php" name="frmarticleedit" method="POST">
                
                <p style="font-size: 15px;">لطفا توسط شناسه مقاله خود بین هزاران مقاله، مقاله خود را جست و جو کنید.....</p>
                <label for="txtarticlecode">کد مقاله :</label>
                <input type="text" name="txtarticlecode" id="txtarticlecode" style="font-family:Vazir;" placeholder="کد مقاله....." />
                <br />
                <button type="submit" id="btnsubmit" name="btnsubmit" style="font-family: Vazir;">جستجو مقاله</button>
                <?php
                    $txtarticlecode = $_POST['txtarticlecode'];
                    $btnsubmit = $_POST['btnsubmit'];
                    if(isset($btnsubmit)) {
                        $sql = "SELECT * FROM `articles`";
                        $result = mysqli_query($conn, $sql);
                        if ($result->num_rows > 0){
                            $row = $result->fetch_assoc();
                            if($row['articlecode'] == $txtarticlecode) {
                              $code = $txtarticlecode;
                              //Post Informations: 
                              $code = $row['articlecode']; 
                              $id = $row['id']; 
                              $name = $row['name'];
                              $category = $row['category'];
                              $author = $row['author'];
                              $subject = $row['subject'];
                              $version = $row['version'];
                              $articletext = $row['articletext'];
                              
                              echo "
                                <br />
                                <br />
                                <fieldset>
                                    <legend>اطلاعات مقاله جستجو شده</legend>
                                    <form action='edit_production.php' name='frmedit' method='POST'>
                                      <label for='txtname'>نام مقاله :</label>
                                      <input type='text' name='txtname' id='txtname' style='font-family:Vazir;' value='$name' required />
                                      <br />
                                      <label for='txtcode'>کد مقاله :</label>
                                      <input type='text' name='txtcode' id='txtcode' style='font-family:Vazir;' value='$code' required />
                                      <br />
                                      <label for='txtcategory'>دسته بندی :</label>
                                      <input type='text' name='txtcategory' id='txtcategory' style='font-family:Vazir;' value='$category' required />
                                      <br />
                                      <label for='txtauthor'>نویسنده :</label>
                                      <input type='text' name='txtauthor' id='txtauthor' style='font-family:Vazir;' value='$author' required />
                                      <br />
                                      <label for='txtsubject'>چکیده موضوع :</label>
                                      <input type='text' name='txtsubject' id='txtsubject' style='font-family:Vazir;' value='$subject' required />
                                      <br />
                                      <label for='txtversion'>نسخه انتشار :</label>
                                      <input type='text' name='txtversion' id='txtversion' style='font-family:Vazir;' value='$version' required />
                                      <br />
                                      <label for='txtarticle'>متن مقاله :</label>
                                      <textarea name='txtarticle' id='txtarticle' cols='43' rows='10' required>$articletext</textarea>
                                      <br />
                                      <button type='submit' name='btnedit' style='font-family: Vazir;'>ویرایش مقاله</button>
                                    </form>
                                </fieldset>
                              ";  
                              $btnedit = $_POST['btnedit'];
                              if(isset($btnedit)) {
                                $sql = "UPDATE `articles` SET `name` = '$name', `articlecode` = '$code', `category` = '$category', `author` = '$author', `subject` = '$subject', `version` = '$version', `articletext` = '$articletext' WHERE `articles`.`id` = 5;";
                                $result = mysqli_query($conn,$sql);
                                if($result) {
                                    echo "
                                     <script>window.alert('اطلاعات با موفقیت ویرایش شد');</script>
                                    ";
                                } else {
                                    echo "
                                     <script>window.alert('اطلاعات متاسفانه ویرایش نشد');</script>
                                    ";
                                }
                              }
                                
                            }
                            else {
                                echo '
                                <p>مقاله ای با این شناسه کاربری در دیتابیس پیدا نشد</p>
                                ';
                            } 
                        } else {echo 'مقاله ای در دیتابیس موجود نمی باشد';}
                    }
                ?>
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