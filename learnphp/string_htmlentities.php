<?php

$a = '<a href="https://www.virendra.com">Go to virendra uikey.com</a>';

$newArray= htmlentities($a);
//echo htmlentities($a,ENT_QUOTES);
//echo htmlentities($a,ENT_NOQUOTES);
//echo htmlspecialchars($a);

echo  $newArray."<br>";

echo html_entity_decode($newArray);


 ?>
