<?php
include 'connection.php';
$age = $_GET["age"];
$query = "DELETE FROM `info` WHERE age=$age";
$result = mysqli_query($con, $query);
if ($result) {
   ?>
   <script>
      alert("Deletion successful");
    </script>
    <?php
    header("location:index.php");
}
?>