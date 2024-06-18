<?php
// $con=oci_connect('system','', 'localhost/XE');
// $username="system";
//  $password="";
//  $dbname="oci:dbname=localhost/XE";
 $conn=new PDO("system","", "oci:dbname=localhost/XE") or die("error");
//  if(!$conn){
//     $e=oci_error();
//     trigger_error(htmlentities($e['message'],ENT_QUOTES),E_USER_ERROR);
//  }
//  else{
//     echo "Connected";
//  }
//  $state=$conn->query('SELECT * FROM product');
// while($rs=$state->fetch()){
//     echo "Product ID".$rs['PID'];
// }
?>