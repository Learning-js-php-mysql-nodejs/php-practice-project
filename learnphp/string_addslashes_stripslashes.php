<?php
$a = "hello i am 'virendra'";

echo $a . "<br>" ;

 $str = addcslashes($a ,"a..h");

//echo $str;
echo stripslashes($str);

 ?>
