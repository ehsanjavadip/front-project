<?php 
include_once '../SQL/dbconnection.php';

//User Informations : 
$txtname = $_POST["txtname"];
$txtcode = $_POST["txtcode"];
$txtcategory = $_POST["txtcategory"];
$txtauthor = $_POST["txtauthor"];
$txtsubject = $_POST["txtsubject"];
$txtversion = $_POST["txtversion"];
$txtarticle = $_POST["txtarticle"];


// Check Important Message :
$submit = $_POST["btnsubmit"];

if(isset($submit)) {
    // SQL Code : 
    $sql = "INSERT INTO `articles` (`id`, `name`, `articlecode`, `category`, `author`, `subject`, `version`, `articletext`) VALUES (NULL, '$txtname' , '$txtcode', '$txtcategory' , '$txtauthor', '$txtsubject' , '$txtversion' , '$txtarticle' );";
    $result = mysqli_query($conn, $sql);
  
    if($result) {
    echo '
    <div class="articlesuccess" style="margin-left:auto; margin-right:auto; background-color: Green; border: 1px solid #d6d6d6; border-radius: 2px; padding: 20px; text-align:center; font-family:Vazir; color:white;">
        <h2>مقاله شما با موفقیت ثبت شد</h2>
        <p>با تشکر از شما . کارشناسان ما سریعا مقاله شما را بررسی می کنند و پس از چندین برداشت کوتاه بصورت زنده بر روی وب سایت قرار میگیرد. لطفا مراحل ثبت مقاله خود را از طریق ایمیل دنبال کنید</p>
        <center>
          <a href="../index.php"><button type="button" name="btnbackhome" style="font-family: Vazir; padding: 8px; cursor: pointer; color: black; outline: none; background-color: white; border: 1px solid rgb(163, 163, 163); border-radius: 2px;">بازگشت به خانه</button></a>
        </center>
    </div>
    ';
    }
    else {
        echo '
        <div class="ticketfail" style="margin-left:auto; margin-right:auto; background-color: tomato; border: 1px solid #d6d6d6; border-radius: 2px; padding: 20px; text-align:center; font-family:Vazir; color:white;">
        <h2>مقاله شما ثبت نشد</h2>
        <p>متاسف هستیم . این مشکل می تواند برای ارتباط با دیتابیس صورت دهد که ما در تلاش هستیم این مشکل را به زودی حل کنیم</p>
        <center>
        <a href="../index.php"><button type="button" name="btnbackhome" style="font-family: Vazir; padding: 8px; cursor: pointer; color: black; outline: none; background-color: white; border: 1px solid rgb(163, 163, 163); border-radius: 2px;">بازگشت به خانه</button></a>
        </center>
        </div>
        ';
    }
}

?>