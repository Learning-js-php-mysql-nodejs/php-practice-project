<?php
echo "current time: ". date("h/i/s d-m-y"). "<br>";
echo date("d-m-y", mktime(1,20,50,10,15,2003)). "<br>";

echo date("d-m-y", gmmktime(1,20,50,10,15,2003)). "<br>";

 ?>
