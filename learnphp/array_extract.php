<?php

$a = "orange";
$a1= array('a'=>'sanjay', 'b'=>'ravi','c'=>'virendra','d'=>'virendra');

//extract($a1);
//extract($a1 , EXTR_OVERWRITE);
//extract($a1 , EXTR_SKIP);
extract($a1 , EXTR_PREFIX_SAME ,"test");
extract($a1 , EXTR_PREFIX_ALL ,"test");

echo "value of a: $a <br>";
echo "value of a: $test_a <br>";
echo "value of a: $test_b <br>";
echo "value of a: $test_c <br>";
 ?>
