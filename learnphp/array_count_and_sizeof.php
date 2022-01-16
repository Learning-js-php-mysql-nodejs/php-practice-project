<?php

$food = array('orange', 'mango','apple','orange' );
// echo count($food);
// echo sizeof($food);



 // $food = array(
   // "fruits"=> array('orange', 'mango','apple','viren' ),
    // "vagi"=> array('green', 'red','yellow','white' )
//);
// echo count($food );
// echo sizeof($food );
// echo count($food ,1);
// echo count($food["fruits"] ,1);

echo "<pre>";
print_r(array_count_values($food));
echo "</pre>";

?>
