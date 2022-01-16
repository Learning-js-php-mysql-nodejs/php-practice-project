<?php
Function square($n,$m){
  return [$n => $m];
  //return " $n for $m ";
  //  return strtoupper($n);
}

$age =array(1,2,3,4,5);
$b = array('leman','orange','banana','apple','grav');
      $newArray=array_map('square',$age ,$b);


      echo '<pre>';
      print_r($newArray);
      echo '</pre>';

 ?>
