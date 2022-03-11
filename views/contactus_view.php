<?php 
include_once '../SQL/dbconnection.php';
?>
<!-- Coding with [HTML,PHP] by Ehsan Javadi | (C)  2022-->
<!DOCTYPE html>
<html lang="fa_IR" manifest="">
<head>

    <title>Contact Us | Code Article</title>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="keywords" content="Contactus,PHPDB,CodeArticle,Account" />
    <meta name="description" content="Contact us Form for Send Message Account" />
    <!-- Favicon -->
    <link rel="shortcut icon" type="image/png" href="../assets/icons/codearticlelogonoback.png" />
    <link rel="stylesheet" type="text/css" href="../styles/contactus_view.css" />
    <link rel="stylesheet" type="text/css" href="../styles/fonticons/FontAwesome/css/all.min.css" />

</head>
<body text="black" link="red" alink="green" vlink="gray" onload="">
  <div class="website">
    <div class="main">
       <center><img src="../assets/icons/codearticlelogonoback.png" alt="Code Article Logo" draggable="false" width="55px" /></center>
       <h2>Contact Us CodeArticle</h2>
       
       <!-- Contactus Area -->
       <div class="contactusform">
           <form action="../controllers/contactus_con.php" name="frmregister" method="POST">
               <label for="txtname">Full Name</label>
               <input type="text" name="txtname" id="txtname" placeholder="Full Name" required/>
               <br />
               <label for="txtemail">Email address</label>
               <input type="text" name="txtemail" id="txtemail" placeholder="Email" required/>
               <br />
               <label for="txtsubject">Message Subject</label>
               <input type="text" name="txtsubject" style="font-family: Vazir;" id="txtsubject" placeholder="Subject" required />
               <br />
               
               <label for="txtmessage" style="vertical-align:top;">Message</label>
               <br />
               <textarea name="txtmessage" id="txtmessage" cols="43" rows="10" required></textarea>
               <br />
               <span>Important Message?</span>
               <input type="checkbox" name="txtimportant" id="txtinportant" />
            
               <!-- Submit Form Datas -->
               <br />
               <br />
               <button type="submit" name="btnsubmit">Send Message</button>
           </form>

           
       </div>
       <!-- Bottom List -->
       <ul>
             <a href="#"><li>Terms</li></a>
             <a href="#"><li>Privacy</li></a>
             <a href="#"><li>Security</li></a>
             <a href="#"><li>About</li></a>
        </ul>
    </div>
  </div>
  <!-- JavaScript Code Includes -->

</body>
</html>
<!-- Developed by Ehsan Javadi with [LOVE] , [COFFEE] in Esfahan, Iran -->