<?php
session_start();

require_once("category.php");
require_once("../Login/sessionVerify.php");
require_once("../MySQL/dbConnect.php");
?>
<html>
  <title>
    Submit A Sugestion
  </title>
  <body>
    <form action="confirm.php" method="post">
      <table>
        <tbody>  
          <tr><td>Title:</td><td><input type="text" name="title" required></td></tr><br>
          <tr><td>Suggestion:</td><td><input type="text" name="content" required></td></tr><br>
          <tr><td>Category:</td><td><select name="category" required>
          <?php
          recursive($categories);
          ?>
          </select>
          <tr><td>Anonymous?</td><td><input type="checkbox" name="Anonymous"></td></tr><br>
        </tbody>
      </table>
      <input name="action" type="submit" value="Submit">
      <a  href="../Login/logout.php">logout NRDDD</a>
    </form>
  </body>
</html>