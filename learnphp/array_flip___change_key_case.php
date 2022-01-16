<?php

$age =array(
      "swift"  =>35,
      "BMW"    =>56,
      "toyota" =>52,
      "red"    =>25);
//$newArray=array_flip($age);
//$newArray=array_change_key_case($age,CASE_UPPER);
$newArray=array_change_key_case($age,CASE_LOWER);
echo '<pre>';
print_r($newArray);
echo '</pre>';


 ?>
