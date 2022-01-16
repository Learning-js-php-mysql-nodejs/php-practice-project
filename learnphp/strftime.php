<?php
echo strftime("%B %D %Y %X %Z"). "<br>";

echo strftime("%B %D %Y %X %Z",mktime(21,30,0,05,18,2005)). "<br>";

echo gmstrftime("%B %D %Y %X %Z",mktime(21,30,0,05,18,2005));


 ?>
