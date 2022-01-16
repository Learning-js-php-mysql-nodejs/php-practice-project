<?php
$a1= ['a'=>'sanjay', 'b'=>'ravi','c'=>'virendra','d'=>'virendra'];

//$newArray= array_values($a1);

$newArray= array_unique($a1);



echo '<pre>';
print_r($newArray);
echo '</pre>';

 ?>
