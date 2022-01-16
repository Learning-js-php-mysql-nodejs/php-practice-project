<?php
$b = array('leman','orange','banana','apple','grav');


echo "<b> current:</b>" . current($b)."<br>";
echo "<b> key:</b>". key($b). "<br>";
echo "<b> pos:</b>". pos($b). "<br>";

next($b);
echo "<b> current:</b>" . current($b)."<br>";

end($b);
echo "<b> current:</b>" . current($b)."<br>";

prev($b);
echo "<b> current:</b>" . current($b)."<br>";
echo "<b> key:</b>". key($b). "<br>";

reset($b);
echo "<b> current:</b>" . current($b)."<br>";



  echo "<pre>" ;
  print_r(each($b)) ;
  echo "</pre>" ;





 ?>
