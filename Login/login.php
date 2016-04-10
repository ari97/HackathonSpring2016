<?php
  session_start();
  echo $_POST['email'];
  if (isset($_POST['submit'])) {
    require_once("../MySQL/dbConnect.php"); 
    $email = strip_tags($_POST['email']);//trying to help stop injects
    $password = strip_tags($_POST['password']);//not perfect
    $sql = "SELECT UserID, Email, Password FROM Users WHERE email = '$email' LIMIT 1";
    
    $query= query($sql); 
    
    if ($query) {
      $row = mysqli_fetch_assoc($query);
      $userID = $row["UserID"];
      $dbEmail = $row["Email"];
      $dbPassword = $row["Password"];
       
    }
    if ($email == $dbEmail && $password == $dbPassword) {
      $_SESSION['email'] = $email;
      $_SESSION['id'] = $userID;
      echo "here";
      header('Location: ../Index/index.php');//dis be not quite goodisticous MAKE SURE YOU FIXDED
    } else {
      echo "You somehow managed to fail in logging in"; //an error message
    }
  }
?>

<!DOCTYPE html>
<html>
    <head>
        <title>PHP / MySQL Login System</title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
        
        <link rel ="stylesheet" type="text/css" href="login.css">
    </head>
    <body>
      <p id = "header">PHP/MySQLi Login System</p>
      <div class = "container">
        <form role="form" action="login.php" method="post">
          <div class="form-group">
            <label for="email">Email address:</label>
            <input type="email" class="form-control" name="email">
          </div>
          <div class="form-group">
            <label for="pwd">Password:</label>
            <input type="password" class="form-control" name="password">
          </div>
          <button name = "submit" type="submit" class="btn btn-default">Submit</button>
        </form>
      </div>
      <br />
      <br />
      <br />
      <br />
      <a href="../About/About.php"><button type="button" class="btn btn-primary btn-lg" id="about">About Us</button></a>
      <br />
      <br />
      <br />
      <br />
      <a href="../Index/index.php"><button type="button" class="btn btn-primary btn-lg $dropdown" id="home">Home</button></a>
    </body>
</html>