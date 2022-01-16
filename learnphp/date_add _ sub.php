<?php

$newArray = date_create("2021-03-15");

//date_add($newArray , date_interval_create_from_date_string("30 days"));

//date_sub($newArray , date_interval_create_from_date_string("30 days"));

//date_modify($newArray , "10 days");

date_modify($newArray , "-10 days");

echo date_format($newArray, "d-m-y");
 ?>
