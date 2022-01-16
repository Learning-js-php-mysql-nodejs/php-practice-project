<?php
$firstname = "virendra";
$lastname = "uikey";
$age = "25";
$gender = "male";
$country= "india";

$extra =["gender" =>"male","country"=> "india"];
$newArray = compact("firstname","lastname","age","extra");


  echo "<pre>" ;
  print_r($newArray) ;
  echo "</pre>" ;
 ?>
