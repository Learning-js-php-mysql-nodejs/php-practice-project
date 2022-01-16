<?php

session_start();

print_r($_SESSION);

 ?>
 <html>
    <head>

     <title>form page</title>

    </head>
    <body>
  <?php
    echo "favorite color : ". $_SESSION["favcolor"];
        ?>  
    </body>
 </html>
