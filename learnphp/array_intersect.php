<?php

$a1= ['a'=>'sanjay', 'b'=>'ravi','c'=>'virendra','d'=>'pankaj'];
$a2= ['a'=>'sanjay', 'e'=>'ravi','c'=>'red'];


$newArray=array_intersect_uassoc($a1,$a2);


echo '<pre>';
print_r($newArray);
echo '</pre>';


 ?>
