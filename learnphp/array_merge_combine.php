<?php
/*
$fruits = ['a'=>'orange','b'=> 'mango','apple','orange'];
$colore = ['a'=>['vegi'=>['blue','white']],
                 'c'=>'red',
                  'green'];*/

$name = array("ram","mohan","ravi");
$age = array("21","22","23");

//$newArray= array_merge($fruits,$colore);

  //$newArray = $fruits + $colore;

//$newArray= array_merge_recursive($fruits,$colore);
$newArray= array_combine($name,$age);

echo '<pre>';
print_r($newArray);
echo '</pre>';

 ?>
