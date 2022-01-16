<?php
$emp = [
     [1,"krishna", "manager",50000],
     [2, "virendra", "salesman", 30000],
     [3, "pankaj", "computer operater", 20000],
     [4, "shelu","driver", 5000]
];

/*for($row =0; $row <4 ; $row++){
  for($col =0; $col<4; $col++){
  echo $emp[$row][$col]. "  ";
}
echo "</br>";
}*/

foreach ($emp as $v1){
  foreach($v1 as $v2){
    echo $v2." ";
  }
  echo "<br>";
}

 ?>
