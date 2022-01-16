<?php
   $u_id = $_GET['id'];

  $conn = mysqli_connect("localhost","root","","crud") or die("connection failed");

  $sql = "DELETE FROM user WHERE ID = {$u_id}";

 $result = mysqli_query($conn , $sql) or die("query failed");

 header("location: http://localhost/demologin/index.php");

 mysqli_close($conn);

 ?>
