<?php
$val=array(array(1,2,3),array(4,5,6),array(7,8,9));
print_r($val);
echo "<br>";
for($i=0;$i<3;$i++)
{
   for($j=0;$j<3;$j++)
     echo " ".$val[$i][$j];
   echo "<br>";
}
?>
<?php
foreach($name as $v)
{
    foreach($v as $t)
      echo " ".$t;
  echo "<br>";
}
?>
<?php
$val=array("Amal"=>array(1,2,3),"Bimal"=>array(4,5,6),"Nirmal"=>array(7,8,9));
print_r($val);
echo "<br>";
foreach($name as $v)
{
    foreach($v as $t)
      echo " ".$t;
  echo "<br>";
}
?>