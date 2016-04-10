<?php
session_start();

require_once("category.php");
require_once("../Login/sessionVerify.php");
require_once("../MySQL/dbConnect.php");
?>
<html>
  <title>
    Submit A Suggestion
  </title>
  <body>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
 <link rel ="stylesheet" type="text/css" href="Submit.css">

<!--<div class="container">-->
<!--  <form action="confirm.php" method="post">-->
<!--    <table>-->
<!--      <tbody>  -->
<!--        <tr><td>Title:</td><td><input type="text" name="title" required></td></tr><br>-->
<!--        <tr><td>Suggestion:</td><td><input type="text" name="content" required></td></tr><br>-->
<!--        <tr><td>Category:</td><td><select name="category" required>-->
<!--        <?php-->
<!--        recursive($categories);-->
<!--        ?>-->
<!--        </select>-->
<!--      </tbody>-->
<!--    </table>-->
<!--    <input name="action" type="submit" value="Submit">-->
<!--</div>-->

    <div class = "container">
      <form role="form" action="confirm.php" method="post">
        <div class="form-group">
          <label for="text">Title:</label>
          <input type="text" class="form-control" id="fname" name="title" required>
        </div>
        <div class="form-group">
          <label for="text">Suggestion:</label>
          <input type="text" class="form-control" id="lname" name="content" size="50">
        </div>

        Category:</td><td><select name="category" required>
        <?php
        recursive($categories);
        ?>
        </select>
        <br>
        <button type="submit" class="btn btn-default" style = "padding-top: 10px; position:relative; top:90%; left:40%;">Submit</button>
      </form>
      
    </div>
      <a href="../About/About.php"><button type="button" class="btn btn-primary btn-lg" id="about">About Us</button></a>
      <a href="../Index/index.php"><button type="button" class="btn btn-primary" id="home">Home</button></a>
     <a  href="../Login/logout.php" style = " position:absolute; top:10px;right:10px;">Logout</a>
    </form>
  </body>
</html>