<?php
 //echo date_default_timezone_get()."<br>";

 /*date_default_timezone_set("Asia/kolkata");
echo date_default_timezone_get()."<br>";

$tz= timezone_open("Asia/kolkata");
echo timezone_name_get($tz)."<br>";

echo "<pre>";
print_r(timezone_location_get($tz));
echo "</pre>";
 //echo timezone_name_get()."<br>";
 //echo date_default_timezone_get()."<br>";
 //echo date_default_timezone_get()."<br>";*/

 echo "<pre>";
 print_r(timezone_identifiers_list(16));
 echo "</pre>";

 ?>
