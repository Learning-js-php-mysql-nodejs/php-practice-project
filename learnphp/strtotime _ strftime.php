<?php

$date = "now";

echo strtotime($date)."<br>";

echo date("d-m-y",strtotime($date))."<br>";

echo date("d-m-y",strtotime("3-05-2012"))."<br>";

echo date("d-m-y h:m",strtotime("+5 days"))."<br>";
echo date("d-m-y h:m",strtotime("+1 week"))."<br>";
echo date("d-m-y h:m",strtotime("next monday"))."<br>";
echo date("d-m-y h:m",strtotime("first day of month"))."<br>";
 ?>
