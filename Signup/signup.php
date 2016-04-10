<?php 
require_once("../MySQL/dbConnect.php");
?>
<html>
  <title>
  Sign Up
  </title>
  <body>
    <form action="../Index/index.php" method="post">
      <table>
        <tbody>  
          <tr><td>First Name:</td><td><input type="text" name="fname" required></td></tr><br>
          <tr><td>Last Name:</td><td><input type="text" name="lname" required></td></tr><br><?php 
          //I want to fix teh email so it tacks on @marist.edu if they dont fill it out?>
          <tr><td>Email:</td><td><input type="text" name="email" required></td></tr><br>
          <tr><td>Password:</td><td><input type="password" name="password" required></td></tr><br><?php 
          //we should make sure that the password is correct with a confirm password box..?>
        </tbody>
      </table>
      <input name="action" type="submit" value="Submit">
    </form>
  </body>
</html>