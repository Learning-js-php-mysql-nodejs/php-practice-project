<?php
$a= ['salman','virendra','blue','green'];
$b= ['ram','mohan'];

//array_splice($a, 1, 2 ,$b);
array_splice($a, 1, 0,$b);

echo '<pre>';
print_r($a);
echo '</pre>';


 ?>
