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

// Upload Media Informations :
$filename = $_FILES['fileupload']['name'];
$filetype = $_FILES['fileupload']['type'];
$filetmp = $_FILES['fileupload']['tmp_name'];
$fileerror = $_FILES['fileupload']['error'];
$filesize = $_FILES['fileupload']['size'];
// ----------------------------------------------


// Check Important Message :
$submit = $_POST["btnsubmit"];

if(isset($submit)) {
    // Uploading File Proccess : 
       $target_dir = "../assets/uploads/articleimages/"; //Set Direction
       $target_file = $target_dir . basename($filename);
       $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
       $uploadOK = 1;
        
        if ($filesize > 5000000) { 
          echo '
            <div class="file_upload-size-too-long" style="margin-left:auto; margin-right:auto; background-color: tomato; border: 1px solid #d6d6d6; border-radius: 2px; padding: 20px; text-align:center; font-family:Vazir; color:white;">
              <h2>کاربر عزیز ، حجم فایل آپلودی شما بیشتر از حد مجاز می باشد</h2>
              <p>لطفا یک فایل کم حجم انتخاب کنید</p>
              <center>
                <a href="../views/add_product.php"><button type="button" name="btnbackarticle" style="font-family: Vazir; padding: 8px; cursor: pointer; color: black; outline: none; background-color: white; border: 1px solid rgb(163, 163, 163); border-radius: 2px;">بازگشت به افزودن مقاله</button></a>
              </center>
            </div>
          ';
        } else {
            if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg") {
                echo '
                  <div class="file_upload-format_not" style="margin-left:auto; margin-right:auto; background-color: tomato; border: 1px solid #d6d6d6; border-radius: 2px; padding: 20px; text-align:center; font-family:Vazir; color:white;">
                    <h2>کاربر عزیز ، شما تنها می توانید عکس های با فرمت jpg,jpeg,png را برای مقاله خود آپلود کنید</h2>
                    <p>لطفا قوانین پلتفرم CodeArticle را رعایت کنید</p>
                    <center>
                        <a href="../views/add_product.php"><button type="button" name="btnbackarticle" style="font-family: Vazir; padding: 8px; cursor: pointer; color: black; outline: none; background-color: white; border: 1px solid rgb(163, 163, 163); border-radius: 2px;">بازگشت به افزودن مقاله</button></a>
                    </center>
                  </div>
                ';
                $uploadOK = 0;
            } else {
                if(file_exists($target_file)) {
                    echo '
                      <div class="file_exsits" style="margin-left:auto; margin-right:auto; background-color: tomato; border: 1px solid #d6d6d6; border-radius: 2px; padding: 20px; text-align:center; font-family:Vazir; color:white;">
                        <h2>کاربر عزیز ، فایل آپلودی شما قبلا آپلود شده است</h2>
                        <p>لطفا فایل دیگری را برای مقاله خود آپلود کنید</p>
                        <center>
                            <a href="../views/add_product.php"><button type="button" name="btnbackarticle" style="font-family: Vazir; padding: 8px; cursor: pointer; color: black; outline: none; background-color: white; border: 1px solid rgb(163, 163, 163); border-radius: 2px;">بازگشت به افزودن مقاله</button></a>
                        </center>
                      </div>
                    ';
                    $uploadOK = 0;
                } else {
                    // Upload File in Database and Directory : 
                    if(move_uploaded_file($filetmp, $target_file)) {
                     $uploadOK = 1;
                     //  SQL Code : 
                     $sql = "INSERT INTO `articles` (`id`, `articlecode`, `name`, `category`, `author`, `subject`, `version`, `articletext`, `picturename`) VALUES (NULL, '$txtcode', '$txtname', '$txtcategory', '$txtauthor', '$txtsubject', '$txtversion', '$txtarticle', '$target_file');";
                     $result = mysqli_query($conn, $sql);
                     if($result) {
                         echo '
                         <div class="articlesuccess" style="margin-left:auto; margin-right:auto; background-color: Green; border: 1px solid #d6d6d6; border-radius: 2px; padding: 20px; text-align:center; font-family:Vazir; color:white;">
                             <h2>مقاله شما با موفقیت ثبت شد</h2>
                             <p>فایل عکس مقاله شما با موفقیت آپلود شد</p>
                             <p>با تشکر از شما . کارشناسان ما سریعا مقاله شما را بررسی می کنند و پس از چندین برداشت کوتاه بصورت زنده بر روی وب سایت قرار میگیرد. لطفا مراحل ثبت مقاله خود را از طریق ایمیل دنبال کنید</p>
                             <center>
                             <a href="../views/add_product.php"><button type="button" name="btnbackarticle" style="font-family: Vazir; padding: 8px; cursor: pointer; color: black; outline: none; background-color: white; border: 1px solid rgb(163, 163, 163); border-radius: 2px;">بازگشت به افزودن مقاله</button></a>
                             </center>
                         </div>
                         ';
                      } else {
                         echo '
                         <div class="ticketfail" style="margin-left:auto; margin-right:auto; background-color: tomato; border: 1px solid #d6d6d6; border-radius: 2px; padding: 20px; text-align:center; font-family:Vazir; color:white;">
                         <h2>مقاله شما ثبت نشد</h2>
                         <p>متاسف هستیم . این مشکل می تواند برای ارتباط با دیتابیس صورت دهد که ما در تلاش هستیم این مشکل را به زودی حل کنیم</p>
                            <center>
                            <a href="../views/add_product.php"><button type="button" name="btnbackarticle" style="font-family: Vazir; padding: 8px; cursor: pointer; color: black; outline: none; background-color: white; border: 1px solid rgb(163, 163, 163); border-radius: 2px;">بازگشت به افزودن مقاله</button></a>
                            </center>
                         </div>
                         ';
                        }
                    } else {
                        echo '
                          <div class="file_upload-error" style="margin-left:auto; margin-right:auto; background-color: tomato; border: 1px solid #d6d6d6; border-radius: 2px; padding: 20px; text-align:center; font-family:Vazir; color:white;">
                            <h2>متاسف هستیم، سرور آپلود CodeArticle به مشکل برخورده است</h2>
                            <p>لطفا بعدا دوباره امتحان کنید</p>
                            <center>
                            <a href="../views/add_product.php"><button type="button" name="btnbackarticle" style="font-family: Vazir; padding: 8px; cursor: pointer; color: black; outline: none; background-color: white; border: 1px solid rgb(163, 163, 163); border-radius: 2px;">بازگشت به افزودن مقاله</button></a>
                            </center>
                          </div>
                        ';
                        $uploadOK = 0;
                    }     
                 
                }
            }
        }
            
        



    
  
    
}

?>