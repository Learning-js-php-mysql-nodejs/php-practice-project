<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>UserRegistration</title>
  </head>
  <body>
    <fieldset>
    <legend>Registration with Personal Details</legend>

    <form action="savedata.php" method="post">
     <div>
         <label for="id">User id   : </label>
         <input type="text" name="id" value=""> <br><br>

         <label for="name">Username : </label>
         <input type="text" name="name" value=""><br><br>

        <label for="id">age      : </label>
        <input type="text" name="age" value=""> <br><br>

        <label for="id">gender  : </label>
        <input type="radio" name="gender" value="male">Male <input type="radio" name="gender" value="female">Female <br><br>

        <label for="id">address  : </label>
        <input type="textarea" name="address" value=""> <br><br>

        <label for="id">Password  : </label>
        <input type="password" name="password" value=""> <br><br>

     <div class="container" style="background-color:">
 </div>
   <button type="button" class="cancelbtn">Cancel</button>
    <input class="submit" type="submit" value="Save"  />
   </div>


   </form>
</fieldset>
  </body>
</html>
