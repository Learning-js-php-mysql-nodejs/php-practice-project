
<?php

echo "hour time : " . date("h"). "<br>";
echo "hour time : " . date("H"). "<br>";
echo "hour time : " . date("g"). "<br>";
echo "hour time : " . date("G"). "<br>";

echo  "<br>";

echo "minuts time : " . date("i"). "<br>";
echo  "<br>";

echo "secend time : " . date("s"). "<br>";
echo  "<br>";

echo "am-pm time : " . date("a"). "<br>";
echo  "<br>";

echo "am-pm time : " . date("A"). "<br>";
echo  "<br>";

echo "today time : " . date("h-i-s-a"). "<br>";

echo "today time : " . date("H-i-s-A"). "<br>";

echo "today time : " . date(" d/m/y H-i-s-A e"). "<br>";

date_default_timezone_set("Asia/Kolkata");
echo "today time : " . date(" d/m/y H-i-s-A e"). "<br>";


 ?>
