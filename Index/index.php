<?php
require_once("../MySQL/dbConnect.php");
if(isset($_POST["fname"])){
  $email=$_POST["email"];
  $query=query("SELECT * FROM Users WHERE Email='$email'");
  if(($row=mysqli_fetch_assoc($query))){
    echo "Signup failed! Someone all ready signed up with that email.";
  } else{
    $fname=$_POST["fname"];
    $lname=$_POST["lname"];
    $email=$_POST["email"];
    $password=$_POST["password"];
    query("INSERT INTO Users (FirstName, LastName, Email, Password) VALUES ('$fname', '$lname', '$email', '$password')");
  }
}
if(isset($_SESSION['id'])) {
  $userID = $_SESSION['id'];
  $dropdown = "dropdown-toggle";
} else{
  $dropdown = "";
}
?>

<HTML><head><title>Home Page</title></head>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
<link rel ="stylesheet" type="text/css" href="index.css">

<body>
          <a href ="../Signup/signup.php"><button type="button" class="btn btn-primary btn-lg" id="signup">Sign Up</button><a/>
          <a href = "../Login/login.php"><button type="button" class="btn btn-primary btn-lg" id="login">Login</button><a/>
        <div class = "header">
          <p>
            Marist Solutions
          </p>
        </div>
        <div class = "container" >
          <a href="../Browse/browse.php?SubCategory=&quot;Accounting"><button type="button" class="btn btn-primary btn-lg $dropdown" id="browse">Browse</button></a>
          <a href="../Submit/submit.php"><button type="button" class="btn btn-primary btn-lg" id="submit">Submit</button></a>
        </div>
          <a href="../About/About.php"><button type="button" class="btn btn-primary btn-lg $dropdown" id="about">About Us</button></a>
      </body>
      