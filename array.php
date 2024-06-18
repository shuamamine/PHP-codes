<?php
$name=array("Taylor","Selena","Dua");
print_r($name);
?>
<?php
$name=array("Taylor","Selena","Dua");
for($i=0;$i<3;$i++)
   echo "i=:" .$name[$i]."<br>";
?>
<?php
$name=array("Taylor","Selena","Dua");
foreach($name as $v)
  echo $v."<br>";
?>
<?php
$name=array(1=>"Taylor",2=>"Selena",3=>"Dua");
print_r($name);
?>
<?php
$name=array(1=>"Taylor",2=>"Selena",3=>"Dua");
for($i=0;$i<=3;$i++)
   echo "i=:" .$name[$i]."<br>";
?>
<?php
$name=array("A"=>"Taylor","B"=>"Selena","C"=>"Dua");
for($i=0;$i<=3;$i++)
   echo "i=:" .$name[$i]."<br>";
?>
<?php
$name=array("A"=>"Taylor","B"=>"Selena","C"=>"Dua");
foreach($name as $v=>$k)
  echo "Key=".$v."=>".$k."<br>";
?>