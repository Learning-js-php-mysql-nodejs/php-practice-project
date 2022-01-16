<?php
$marks =[
  "virendra"=> [
               "physics"=> 60,
               "english"=> 80,
                "mathes"=> 70
               ],
  "pankaj"=>   [
               "physics"=> 80,
               "english"=> 40,
               "mathes"=> 50
],
"shelu"=>     [
            "physics"=> 90,
            "english"=> 30,
            "mathes"=> 40
],
];
echo "<table border = '2px' cellpadding= '5px' cellspacing= '1px'>
<tr bgcolor= 'gray'>
  <th>student name</th>
  <th>physics</th>
  <th>english</th>
  <th>chamistry</th>
  </tr>"
;
foreach ($marks as $key => $v1) {
  echo "<tr>
  <td>$key</td>";
  foreach ($v1 as $v2) {
    echo "<td> $v2 </td>";
  }
  echo "</tr>";
}
"</table>";
 ?>
