<!DOCTYPE html>
<?php
session_start();
 ?>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>index</title>
    <style media="screen">
       .box a{
         text-decoration: none;
         margin: 10px;
         background-color: #BFC9CA;
         color:#D35400;


       }
      #t1{
        margin: 10px;
      }
     #t1 th{
       background-color: #3CDAE6;

     }
    </style>
  </head>
  <body>
    <div class="">
         <h1>All User</h1>
          <div class=" box">
            <a href="#"><b>HELLO : <?php echo $_SESSION["username"]; ?> </b></a>
          </div>
         <?php
              $conn = mysqli_connect("localhost","root","","crud") or die("connection failed");

              $sql = "SELECT * FROM User ";

            $result = mysqli_query($conn , $sql) or die("query failed");

            if( mysqli_num_rows($result) > 0){


           ?>
         <table  id="t1"cellpadding="7px" border="1px solid black">
             <thead>
               <th>Id</th>
               <th>Name</th>
               <th>Age</th>
               <th>Gender</th>
               <th>Address</th>
               <th>Password</th>
               <th>Action</th>
             </thead>

        <tbody>

             <?php
                    while($row = mysqli_fetch_assoc($result)){

              ?>

         <tr>
               <td><?php echo $row["ID"]; ?></td>
               <td><?php echo $row["NAME"]; ?></td>
               <td><?php echo $row["AGE"]; ?></td>
               <td><?php echo $row["GENDER"]; ?></td>
               <td><?php echo $row["ADDRESS"]; ?></td>
               <td><?php echo $row["PASSWORD"]; ?></td>

               <td>
                   <a href='delete-inline.php?id=<?php echo $row['ID']; ?>'>Delete</a>
               </td>
            </tr>
          <?php } ?>
         </tbody>
         </table>
       <?php } ?>
    </div>
  </body>
</html>
