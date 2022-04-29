<?php 
include_once '../SQL/dbconnection.php';
if(!isset($_SESSION['loggedin'])) {
  header("Location: login_view.php");
} else {
  $username = $_SESSION['loggedin'];
  $sql= "SELECT * FROM users WHERE username='$username'";
  $result = mysqli_query($conn,$sql);
  $fetch = mysqli_fetch_array($result);

}
?>
<!-- Coding with [HTML,PHP] by Ehsan Javadi | (C)  2022-->
<!DOCTYPE html>
<html lang="fa_IR" manifest="" dir="rtl">
<head>

    <title>پروفایل کاربری | Code Article</title>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="keywords" content="Profile Account,PHPDB,CodeArticle,Account" />
    <meta name="description" content="Profile Account Form for See Informations" />
    <!-- Favicon -->
    <link rel="shortcut icon" type="image/png" href="../assets/icons/codearticlelogonoback.png" />
    <link rel="stylesheet" type="text/css" href="../styles/profileview.css" />
    <link rel="stylesheet" type="text/css" href="../styles/fonticons/FontAwesome/css/all.min.css" />
    
    <style>
      .cardprofile button {margin:2px;}
      .whereami div {margin-right:85px; cursor: default; color: tomato;}
      .whereami span {color: #2c2c2c;}
    </style>

</head>
<body text="black" link="red" alink="green" vlink="gray" onload="playSound()">
    <div class="website">
        <?php include_once './header_view.php'; ?>
        <!-- Where Am I know ? Part -->
        <div class="whereami" style="background-color: #f5f5f5; font-size: 17px; padding-top: 10px; padding-bottom:10px;">
          <div>
            <span>شما اینجا هستید : </span><span>خانه</span>  <i class="fa fa-arrow-left"></i>  <span>حساب کاربری</span>   <i class="fa fa-arrow-left"></i>  <span>پروفایل کاربری</span> 
          </div>
        </div>
        <?php include_once './headerbanner_view.php'; ?>
        <!--  -->
        <div class="cardprofile">
          <h2>پروفایل کاربری :</h2>
          <span>سلام <font color="tomato"><?php echo $fetch['name']." ".$fetch['familyname'] ?></font> عزیز، به پروفایل کاربری خود خوش آمدید</span>
          <a href="../controllers/logout_controller.php"><p style="color: tomato;">خروج از حساب کاربری</p></a>

          <p>در این قسمت می توانید اطلاعات حساب کاربری خود را مشاهده کنید و آن را به آسانی ویرایش کنید</p>
          <hr />
            <fieldset>
              <legend>اطلاعات حساب کاربری :</legend>
              <p>در این قسمت شما می توانید اطلاعات حساب کاربری خود را به آسانی مشاهده کنید و در صورت نیاز آن را ویرایش کنید</p>
              <div class="profileform">
                <form action="../controllers/profile_con.php" name="frmprofile" method="POST" dir="rtl">
                 <!-- ------------------ -->
                 <center>
                   <a href="./editprofile_view.php"><button type="button" name="btneditprofile" style="font-family: Vazir;">ویرایش حساب کاربری</button></a>
                   <a href="./ticket_view.php"><button type="button" name="btnticketnew" style="font-family: Vazir;">تیکت</button></a>
                   <br /> 
                   <a href="./add_product.php"><button type="button" name="btnnewarticle" style="font-family: Vazir;">مقاله جدید</button></a>
                   <a href="./edit_product.php"><button type="button" name="btneditarticle" style="font-family: Vazir;">ویرایش مقاله</button></a>
                 </center>
                </form>
              </div>
            </fieldset>
        </div>
        <p style="margin-right:20px;">تمام حقوق برای <span style="color: Green;">احسان جوادی</span> محفوظ می باشد</p>
        <?php include_once './writingbanner_view.php'; ?>
        <?php include_once './emailcontact_view.php'; ?>
        <?php include_once './footer_view.php'; ?>
    </div>
    <!-- Javascript Code -->
    <!-- <script src="../javascript/welcomesound.js" type="text/javascript"></script> -->
  
</body>
</html>
<!-- Developed by Ehsan Javadi with [LOVE] , [COFFEE] in Esfahan, Iran -->