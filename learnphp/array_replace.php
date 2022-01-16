<?php
//$fruits = ['orange', 'apple','a'=>'banana','mango'];

//$vagi = [ 'a'=>'greps',1=>'cream'];

//$color = ['ravi', 'virendra ', 'carrat'];

$fruits= array("a"=>array("red"),"b"=>array("green","blue"));

$vagi= array("a"=>array("white"),"b"=>array("yellow"));

$newArray= array_replace_recursive($fruits, $vagi);

echo "<pre>";
print_r($newArray);
echo "</pre>";
 ?>
