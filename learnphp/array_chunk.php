<?php

//$car = [ "swift","bmw","toyota","red","blue","green"];

$age =array(
      "swift"=>35,
      "bmw"=>56,
      "toyota"=>52,
      "red"=>25
);

$newArray=array_chunk($age,3,true);

echo '<pre>';
print_r($newArray);
echo '</pre>';

 ?>
