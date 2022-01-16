<?php
$age =array(
      "swift"  =>35,
      "BMW"    =>56,
      "toyota" =>52,
      "red"    =>25);

      array_walk($age,'myFunction');

    Function myFunction($kry,$value) {

      echo" $kry:$value<br>";
    }

 ?>
