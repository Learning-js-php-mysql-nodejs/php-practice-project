<?php
$array = array(

  array(
      'id'=>2020,
      'first name'=> 'krishna',
      'last name'=> 'dhurvey',
  ),
  array(
      'id'=>2021,
      'first name'=> 'virendra',
      'last name'=> 'uikey',
  ),
  array(
      'id'=>2022,
      'first name'=> 'ankit',
      'last name'=> 'singh',
  )
);

$newArray=array_column($array,  'last name','id');

echo '<pre>';
print_r($newArray);
echo '</pre>';

 ?>
