<?php
include "connection.php";
if (isset($_POST['submit'])) {
    $name = $_POST["name"];
    $age = $_POST["age"];
$query="UPDATE `infp` SET `name`='$name' WHERE age=$age";
mysqli_query($con, $query);
header('location:index.php');
}
?>