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
            <h2>لیست مقالات :</h2>
            <hr />
            <ul>
            <?php 
                $sql = "SELECT * FROM `articles`";
                $result = mysqli_query($conn, $sql);
                //  Use While Loop Here ....
                if ($result->num_rows > 0){
                  while($row = $result->fetch_assoc()){  
                    $articlecode = $row['articlecode'];
                    $name = $row['name'];
                    $category = $row['category'];
                    $author = $row['author'];
                    $version = $row['version'];
                    $picture = $row['picturename'];
                    echo "
                    
                        <li>
                          <img src='$picture' width='300px' />
                          <h4>'$name'</h4>
                          <p>کد مقاله : '$articlecode'</p><span></span>
                          <p>دسته بندی : '$category'</p><span></span>
                          <p>نویسنده : '$author'</p><span></span>
                          <p>نسخه انتشار : '$version'</p><span></span>
                        </li>
                    
                    ";
                  }
                }
                else {
                    echo '<h4>هیچ مقاله ای متاسفانه در دیتابیس موجود نمی باشد.....</h4>';
                }
            ?>
            </ul>
            
        </div>
        <?php include_once './writingbanner_view.php'; ?>
        <?php include_once './emailcontact_view.php'; ?>
        <?php include_once './footer_view.php'; ?>
    </div>
</body>
</html>