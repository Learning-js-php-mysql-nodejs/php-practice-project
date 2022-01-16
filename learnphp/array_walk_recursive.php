<?php
$age =array(
      $swift=array("dezire"=>40,"kwid" =>86,),
      "BMW"    =>56,
      "toyota" =>52,
      "red"    =>25);

      array_walk_recursive($age,'myFunction','this is a value');

    Function myFunction($kry,$value,$param) {

      echo" $kry $param $value<br>";
    }

 ?>
