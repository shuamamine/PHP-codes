<?php
include ("header.php");
?>
<?php
if (isset($_REQUEST["submit"])) {
    $name = $_REQUEST["name"];
    $age = $_REQUEST["age"];
    if ($age < 0) {
        echo "<script> alert('Age cannot be negative');</script>";
    }
    else{
        header("Location:result.php");
    }
    // echo "Name: ".$name."Age: ".$age;
}
?>
<?php
include ("footer.php");
?>