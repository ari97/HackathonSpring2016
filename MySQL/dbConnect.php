<?php 
$conn = mysqli_connect("localhost","mcelevan12","")
or die("Error: Cannot connect to database server");
require_once "sqlhelper.php";
require_once "makedatabase.php";
query("USE $dbname");
//$conn = mysqli_connect("localhost","mcelevan12","")
//or die("Error: Cannot connect to database server");
?>