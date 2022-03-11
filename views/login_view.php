<!-- Coding with [HTML,PHP] by Ehsan Javadi | (C)  2022-->
<!DOCTYPE html>
<html lang="fa_IR" manifest="">
<head>

    <title>Login | Code Article</title>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="keywords" content="Login,PHPDB,CodeArticle,Account" />
    <meta name="description" content="Login Form for sign in Account" />
    <!-- Favicon -->
    <link rel="shortcut icon" type="image/png" href="../assets/icons/codearticlelogonoback.png" />
    <link rel="stylesheet" type="text/css" href="../styles/login_view.css" />
    <link rel="stylesheet" type="text/css" href="../styles/fonticons/FontAwesome/css/all.min.css" />

</head>
<body text="black" link="red" alink="green" vlink="gray" onload="">
  <div class="website">
    <div class="logincard" style="margin-top:100px;">
       <center><img src="../assets/icons/codearticlelogonoback.png" alt="Code Article Logo" draggable="false" width="55px" /></center>
       <h2>Sign in to CodeArticle</h2>

       <div class="mainform">
           <form action="../controllers/login_controller.php" name="frmlogin" method="POST">
               <label for="txtusername">Username or email address</label>
               <input type="text" name="txtusername" id="txtusername" placeholder="Username or email" required/>
               <br />
               <label for="txtpassword">Password - <a href="#">Forgot password?</a></label>
               <input type="password" name="txtpassword" id="txtpassword" max="8" placeholder="Password" required/>
               <!-- Submit Form Datas -->
               <br />
               <br />
               <button type="submit" name="btnsubmit">Sign in</button>
           </form>
       </div>
       
       <div class="bottomform">
           <p>New to CodeArticle? <a href="./register_view.php">Create an account</a></p>
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