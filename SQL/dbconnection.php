<?php
// DataBase Connection  Here :

$serverName = "localhost";
$userName = "root";
$password = "";
$databaseName = "codearticle";

// make a Connection to DB :
$conn = mysqli_connect($serverName,$userName,$password,$databaseName);

// Check Connection to DB : 

if($conn) {
    // echo "Connection DB = OK";
} else {
    // echo "Connection DB = NOT";
}
session_start();
?>