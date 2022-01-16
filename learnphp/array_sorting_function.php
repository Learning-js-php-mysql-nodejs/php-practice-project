<?php

$b = array('leman','orange','banana','apple','grav');
$a = array('leman','orange','banana','apple','grav');
//$a1= ['a'=>'sanjay', 'b'=>'ravi','c'=>'virendra','d'=>'pankaj'];
//$age =array(
    /*  "swift"  =>35,
      "BMW"    =>56,
      "toyota" =>52,
      "red"    =>25);*/

//sort($age);
//rsort($a1);
//natsort($age);

array_multisort($a,$b);

echo '<pre>';
print_r($a);
echo '</pre>';

echo '<pre>';
print_r($b);
echo '</pre>';

?>
