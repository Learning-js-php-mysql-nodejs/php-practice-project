<?php

//echo checkdate(1, 02, 2013);
$a1= date_create(2013-03-20);
$a2 = date_create(2013-07-15);

$diff = date_diff($a1,$a2);

//echo $diff-> days. "days" ;

echo $diff->format("%R%a day");

echo "<pre>";
print_r($diff);
echo "</pre>";
 ?>
