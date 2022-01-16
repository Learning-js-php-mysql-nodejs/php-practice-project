<?php
$a = " i love php , i love php too";
$a1= array('love'=>'like','php'=>'pythan');
//echo str_replace("php","pythan",$a);
//echo substr_replace($a,"php and pythan",0,12);
//echo strtr($a,"vo","ik");
echo strtr($a,$a1);
 ?>
