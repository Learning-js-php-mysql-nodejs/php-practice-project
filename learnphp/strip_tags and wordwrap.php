<?php

$a =  "hello '<b>' world '</b>' , hello '<i>'earth '</i>'";

//echo strip_tags($a,"<b>");


echo wordwrap($a,2,"<br>",true);

 ?>
