<?php 
include_once '../SQL/dbconnection.php';
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
    </style>

</head>
<body text="black" link="red" alink="green" vlink="gray" onload="">
    <div class="website">
        <?php include_once './header_view.php'; ?>
        <div class="cardprofile">
          <h2>پروفایل کاربری :</h2>
          <p>در این قسمت می توانید اطلاعات حساب کاربری خود را مشاهده کنید و آن را به آسانی ویرایش کنید</p>
          <hr />
            <fieldset>
              <legend>اطلاعات حساب کاربری :</legend>
              <p>در این قسمت شما می توانید اطلاعات حساب کاربری خود را به آسانی مشاهده کنید و در صورت نیاز آن را ویرایش کنید</p>
              <div class="profileform">
                <form action="../controllers/profile_con.php" name="frmprofile" method="POST" dir="rtl">
                 <!-- ------------------ -->
                  <?php 
                    $sql = "SELECT * FROM `users`";
                    $result = mysqli_query($conn, $sql);
                    if ($result->num_rows > 0){
                      while($row = $result->fetch_assoc()){  
                        $username = $row['username'];
                        $email = $row['email'];
                        $password = $row['password'];
                        $career = $row['career'];
                        $emailpre = $row['emailpre'];

                        echo '
                          <table style="border:1px solid #2c2c2c; padding:10px; text-align:center;" cellpadding="10">
                            <thead>
                              <th>نام کاربری</th>
                              <th>آدرس ایمیل</th>
                              <th>رمز ورود</th>
                              <th>شغل</th>
                              <th>اطلاعیه های ایمیل</th>
                            </thead>
                            <tbody>
                              <tr>
                                <td>'.$username.'</td>
                                <td>'.$email.'</td>
                                <td>'.$password.'</td>
                                <td>'.$career.'</td>
                                <td>'.$emailpre.'</td>
                              </tr>
                            </tbody>
                          
                          </table>
                          <br />
                        ';
                      }
                    }else {echo '<p>کاربری در دیتابیس وب سایت هنوز ثبت نشده است. ابتدا یک کاربر اضافه کنید</p>';}  
                  ?>
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
    </div>
    <!-- Javascript Code -->
</body>
</html>
<!-- Developed by Ehsan Javadi with [LOVE] , [COFFEE] in Esfahan, Iran -->