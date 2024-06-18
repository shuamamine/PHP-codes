<?php
$username = "root";
$password="";
$server = "localhost";
$db="db"; // Database name
$con = mysqli_connect($server, $user, $password, $db);
if ($con) {
    
}
else{
    die("conection not successful");
}
?>