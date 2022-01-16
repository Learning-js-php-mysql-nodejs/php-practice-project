<?php

function compare($a,$b){
  if($a ==$b){
    return 0;
  }
  return ($a>$b)? 1: -1;}


  function compareValue($a,$b){
    if($a ==$b){
      return 0;
    }
    return ($a>$b)? 1: -1;
}
$a1= ['a'=>'sanjay', 'b'=>'ravi','c'=>'virendra','d'=>'pankaj'];
$a2= ['a'=>'sanjay', 'e'=>'ravi','c'=>'red'];

//$newArray=array_diff($a1,$a2);
//$newArray=array_diff_key($a1,$a2);
//$newArray=array_diff_assoc($a1,$a2);
//$newArray=array_udiff_assoc($a1,$a2,'compare');
//$newArray=array_diff_uassoc($a1,$a2,'compare');
//$newArray=array_diff_ukey($a1,$a2,'compare');
//$newArray=array_udiff($a1,$a2,'compare');
$newArray=array_udiff_uassoc($a1,$a2,'compare','compareValue');



echo '<pre>';
print_r($newArray);
echo '</pre>';

 ?>
