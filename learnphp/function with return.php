<?php
function sum($math,$eng,$sc){
  $s= $math+$eng+$sc;
  return $s;
}
$total=sum(40,50,60);
echo $total;
echo "</br>";

$avrg= $total/3;
echo $avrg;
 ?>
