<?php
/*
$emp = [
     [1,"krishna", "manager",50000],
     [2, "virendra", "salesman", 30000],
     [3, "pankaj", "computer operater", 20000],
     [4, "shelu","driver", 5000]
];*/


$emp = [
         [
           "id"=> 1,
           "name"=>"krishna",
           "dasig"=>"manager",
           "salary"=>50000,
         ],
       [
         "id"=> 2,
         "name"=>"virendra",
         "dasig"=>"salesman",
         "salary"=> 30000,
       ],
       [
         "id"=> 3,
         "name"=> "pankaj",
         "dasig"=> "computer operater",
         "salary"=> 20000,
       ],
       [
         "id"=> 4,
         "name"=>"shelu",
         "dasig"=>"driver",
         "salary"=> 5000,
       ],
       [
         "id"=> 5,
         "name"=>"ravi",
         "dasig"=>"driver",
         "salary"=> 5000,
       ]
];
echo "<table border='2px' cellpadding='5px' cellspacing= '0px'>
<tr>
   <th>id</th>
   <th>name</th>
   <th>dasig</th>
   <th>salary</th>

   </tr>"
;
foreach ($emp as list( "id"=>$id, "name"=>$name, "dasig"=>$dasig, "salary"=>$salary)){
  echo "<tr><td>$id</td><td> $name</td><td> $dasig</td><td> $salary</td></tr>";
}
echo "</table>";
 ?>
