<?php 
include_once '../SQL/dbconnection.php';
?>
<!-- Coding with [HTML,PHP] by Ehsan Javadi | (C)  2022-->
<!DOCTYPE html>
<html lang="fa_IR" manifest="">
<head>

    <title>Edit Profile | Code Article</title>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="keywords" content=EditProf,PHPDB,CodeArticle,Account" />
    <meta name="description" content="EditPros Form for signed up Accounts" />
    <!-- Favicon -->
    <link rel="shortcut icon" type="image/png" href="../assets/icons/codearticlelogonoback.png" />
    <link rel="stylesheet" type="text/css" href="../styles/editprof_view.css" />
    <link rel="stylesheet" type="text/css" href="../styles/fonticons/FontAwesome/css/all.min.css" />

</head>
<body text="black" link="red" alink="green" vlink="gray" onload="">
  <div class="website">
    <div class="editprof">
       <center><img src="../assets/icons/codearticlelogonoback.png" alt="Code Article Logo" draggable="false" width="55px" /></center>
       <h2>Edit Profile on Code Article</h2>
       <p class="pheader">Change everything from here and save your changes so quickly</p>
       <div class="mainform">
           <form action="../controllers/editprof_con.php" name="frmregister" method="POST">
               <label for="txtusername">Username</label>
               <input type="text" name="txtusername" id="txtusername" placeholder="Username" required/>
               <br />
               <label for="txtemail">Email address</label>
               <input type="text" name="txtemail" id="txtemail" placeholder="Email" required/>
               <br />
               <label for="txtcareer">Career</label>
               <input type="text" name="txtcareer" id="txtcareer" placeholder="Career" list="datalistcareer" required/>
               <br />
               <label for="chkemail">Email preferences</label>
               <input type="checkbox" name="chkemail" id="chkemail"/>
              
               <!-- Submit Form Datas -->
               <br />
               <button type="submit" name="btnsubmit">Save Changes</button>
           </form>
       </div>
       
       <div class="bottomform">
           <p>Dont want to Edit Profile? <a href="../index.php"> Go Home</a></p>
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