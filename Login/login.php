<?php
  session_start();

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
      header('Location: ../Submit/submit.php');//dis be not quite goodisticous MAKE SURE YOU FIXDED
    } else {
      echo "You somehow managed to fail in logging in"; //an error message
    }
  }
?>

<!DOCTYPE html>
<html>
    <head>
        <title>PHP / MySQL Login System</title>
    </head>
    <body>
        <h1>PHP/MySQLi Login System</h1>
        <form method="post" action="../Login/login.php">
            <input type="text" name="email" placeholder="email" /><br />
            <input type="password" name="password" placeholder="Password" /><br />
            <input type="submit" name="submit" value="Login" />
        
        </form>
    
    </body>

</html>