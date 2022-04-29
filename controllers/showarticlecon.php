<?php 
    // Get All Articles From DataBase :
    $sql = "SELECT * FROM `articles`";
    $result = mysqli_query($conn, $sql);
    //  Use While Loop Here ....
    if ($result->num_rows > 0){
      while($row = $result->fetch_assoc()){  
        $articlecode = $row['articlecode'];
        $name = $row['name'];
        $subject = $row['subject'];
        $category = $row['category'];
        $author = $row['author'];
        $version = $row['version'];
        $picture = $row['picturename'];
        // Load All Cards
        include '../views/components/articlecard.php';
        
      }
    }
    else {
        echo '<h2>هیچ مقاله ای متاسفانه در دیتابیس موجود نمی باشد.....</h2>';
    }
?>