<?php
include 'connection.php';
if (isset($_POST['submit'])) {
    $name = $_REQUEST["name"];
    $age = $_REQUEST["age"];
    $query = "INSERT INTO `info`(`name`, `age`) VALUES ('$name','$age)";
    mysqli_query($con, $query);
}
?>