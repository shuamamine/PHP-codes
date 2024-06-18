<?php
$r="Kolkata";
echo md5($r);
echo strlen($r);
echo crypt($r,10);
?>
<?php
$r="  Kolkata  ";
echo trim($r);
?>
<?php
$r="Kolkata";
echo substr($r,1,3);
?>