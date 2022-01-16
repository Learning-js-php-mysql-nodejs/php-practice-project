<?php
/*function test(){
  $x = 10;
echo "variable x inside";}
test();
echo "variable x outside";*/
/*$x = 10;
function test(){
   global $x;
  echo "variable x inside : $x";
}
test();
echo "variable x outside : $x";
*/

$x = 10;
$y = 15;

function test(){
  global $x , $y;
  $x = $x + $y;
}
test();
echo $x;
 ?>
