<?php

  $u_id = $_POST['id'];
  $u_name = $_POST['name']; 
  $u_age = $_POST['age'];
  $u_gender = $_POST['gender'];
  $u_address = $_POST['address'];
  $u_password = md5($_POST['password']);

  $conn = mysqli_connect("localhost","root","","crud") or die("connection failed");

  $sql = "INSERT INTO user(ID,NAME,AGE,GENDER,ADDRESS,PASSWORD) VALUES ('{$u_id}','{$u_name}','{$u_age}','{$u_gender}','{$u_address}','{$u_password}') ";

$result = mysqli_query($conn , $sql) or die("query failed");

header("location: http://localhost/demologin/index.php");

mysqli_close($conn);

 ?>
