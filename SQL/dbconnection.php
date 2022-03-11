<?php
// DataBase Connection  Here :

$serverName = "localhost";
$userName = "root";
$password = "";
$databaseName = "CodeArticle";

// make a Connection to DB :
$conn = mysqli_connect($serverName,$userName,$password,$databaseName);

// Check Connection to DB : 

if($conn) {
    // echo "Connection DB = OK";
} else {
    // echo "Connection DB = NOT";
}

?>