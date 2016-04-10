<?php 
require_once("../MySQL/dbConnect.php");
?>
<!DOCTYPE html>
<html>
  <head>
  <title>
    Sign Up
  </title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
  <link rel ="stylesheet" type="text/css" href="signup.css">
  </head>
  <body>
    <p id = "header"> Sign Up </p>
    <div class = "container">
      <form role="form" action="../Index/index.php" method="post">
        <div class="form-group">
          <label for="text">First Name:</label>
          <input type="text" class="form-control" id="fname" name="fname">
        </div>
        <div class="form-group">
          <label for="text">Last Name:</label>
          <input type="text" class="form-control" id="lname" name="lname">
        </div>
        <div class="form-group">
          <label for="email">Email address:</label>
          <input type="email" class="form-control" id="email" name="email">
        </div>
        <div class="form-group">
          <label for="pwd">Password:</label>
          <input type="password" class="form-control" id="pwd" name="password">
        </div>
        <button id="submit" name="action" type="submit" class="btn btn-default">Submit</button>
      </form>
    </div>
      <br />
      <br />
      <br />
      <br />
      <a href="../About/About.php"><button type="button" class="btn btn-primary btn-lg" id="about">About Us</button></a>
      <!--<br />-->
      <!--<br />-->
      <!--<br />-->
      <!--<br />-->
      <a href="../Index/index.php"><button type="button" class="btn btn-primary btn-lg $dropdown" id="home">Home</button></a>
  </body>
</html>