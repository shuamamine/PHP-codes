<?php
include ("header.php");
?>
<?php
if (isset($_GET["submit"])) {
    $name = $_GET["name"];
    $age = $_GET["age"];
    if ($age < 0) {
        echo "<script> alert('Age cannot be negative');</script>";
    }
    echo "Name: ".$name."Age: ".$age;
}
?>
<?php
include ("footer.php");
?>

</html>