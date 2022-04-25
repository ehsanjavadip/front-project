<!-- Coding with [HTML,PHP] by Ehsan Javadi | (C)  2022-->
<!DOCTYPE html>
<html lang="fa_IR" manifest="" dir="rtl">
<head>

    <!-- <title>ورود | Code Article</title> -->
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="keywords" content="Email Part,CSS,PHP" />
    <meta name="description" content="Email Part of Website Here" />
    <!-- Favicon -->
    <!-- <link rel="shortcut icon" type="image/png" href="../assets/icons/codearticlelogonoback.png" /> -->
    <link rel="stylesheet" type="text/css" href="../styles/emailcontactview.css" />
    <link rel="stylesheet" type="text/css" href="../styles/fonticons/FontAwesome/css/all.min.css" />

</head>
<body text="black" link="red" alink="green" vlink="gray" onload="">
    <!-- Website Email Part Here -->
    <div class="emailpart">
      <center><img src="../assets/icons/emaillogo.png" alt="Email Logo Png" width="100px"></center>
      <div class="line"></div>
      <p>آیا دوست دارید که اخبار و رویداد های CodeArticle به ایمیل شما ارسال شود؟</p>
      <!-- Email Form -->
        <!-------------------------------  -->

		 <form class="form" action="" method="POST" name="frmemail">
          <i class="fa fa-envelope icon" style="color:#2c2c2c; font-size: 27px; position:absolute; margin-right: 10px; margin-top:8px;"></i>
		  <input type="email" dir="ltr" class="form__field" placeholder="Your E-Mail Address" name="txtemail" required/>
          <button type="submit" name="btnsubmit" class="btnsubmit">ثبت</button>
		 </form>
          
        <?php 
            include_once '../SQL/dbconnection.php';

            $date = date("Y-m-d");
            $time = date("h:i:sa");
            $hostname = gethostname();

            if(isset($_POST['btnsubmit']))
            {
               $datetime = $date . "/" . $time; 
               $sql = "INSERT INTO `emails` (`email`, `datetime`, `hostname`) VALUES ('$_POST[txtemail]', '$datetime', '$hostname');";
               $result = mysqli_query($conn, $sql);
                if($result) {
                   include_once 'emailcontact_view.php';
                   echo '
                     <p>ایمیل شما با موفقیت در سامانه ثبت شد. منتظر اخبار فوق العاده باشيد</p>
                   ';
                }
                else {
                    include_once 'emailcontact_view.php';
                    echo '
                     <p>کاربر عزیز متاسفانه مشکلی در سامانه وجود. لطفا بعد دوباره امتحان کنید</p>
                    ';
                } 
            }

        ?>
        <!-------------------------------  -->
      
    </div>
    <!-- JavaScript Code Includes -->
</body>
</html>
<!-- Developed by Ehsan Javadi with [LOVE] , [COFFEE] in Esfahan, Iran -->