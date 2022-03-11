<?php 
include_once '../SQL/dbconnection.php';
?>
<!-- Coding with [HTML,PHP] by Ehsan Javadi | (C)  2022-->
<!DOCTYPE html>
<html lang="fa_IR" manifest="">
<head>

    <title>Sign up | Code Article</title>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="keywords" content="Signup,PHPDB,CodeArticle,Account" />
    <meta name="description" content="Sign up Form for sign up Account" />
    <!-- Favicon -->
    <link rel="shortcut icon" type="image/png" href="../assets/icons/codearticlelogonoback.png" />
    <link rel="stylesheet" type="text/css" href="../styles/register_view.css" />
    <link rel="stylesheet" type="text/css" href="../styles/fonticons/FontAwesome/css/all.min.css" />

</head>
<body text="black" link="red" alink="green" vlink="gray" onload="">
  <div class="website">
    <div class="signupcard">
       <center><img src="../assets/icons/codearticlelogonoback.png" alt="Code Article Logo" draggable="false" width="55px" /></center>
       <h2>Sign up to CodeArticle</h2>

       <div class="mainform">
           <form action="../controllers/register_controller.php" name="frmregister" method="POST">
               <label for="txtusername">Username</label>
               <input type="text" name="txtusername" id="txtusername" placeholder="Username" required/>
               <br />
               <label for="txtemail">Email address</label>
               <input type="text" name="txtemail" id="txtemail" placeholder="Email" required/>
               <br />
               <label for="txtpassword">Password</label>
               <input type="password" name="txtpassword" id="txtpassword" min="8" placeholder="Password" required/>
               <p>Make sure it`s <span style="color:green;">at least 8 character</span> including a number and a lowercase letter.</p>
               <label for="txtcareer">Career</label>
               <input type="text" name="txtcareer" id="txtcareer" placeholder="Career" list="datalistcareer" required/>
               <br />
               <label for="chkemail">Email preferences</label>
               <input type="checkbox" name="chkemail" id="chkemail"/>
               <br />
               <label for="chkemail" style="color:#a3a3a3;">Send me article updates and news on CodeArticle</label>
              
               <!-- Submit Form Datas -->
               <br />
               <button type="submit" name="btnsubmit">Sign up</button>
           </form>
       </div>
       
       <div class="bottomform">
           <p>Have CodeArticle account? <a href="./login_view.php">Log in to account</a></p>
       </div>

       <!-- Bottom List -->
        <ul>
           <a href="#"><li>Terms</li></a>
           <a href="#"><li>Privacy</li></a>
           <a href="#"><li>Security</li></a>
           <a href="./contactus_view.php"><li>Contact</li></a>
        </ul>
    </div>
  </div> 
  <!-- JavaScript Code Includes -->

</body>
</html>
<!-- Developed by Ehsan Javadi with [LOVE] , [COFFEE] in Esfahan, Iran -->