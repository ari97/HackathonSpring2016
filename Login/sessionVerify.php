<?php
if(isset($_SESSION['id'])) {
  $userID = $_SESSION['id'];
} else {
  header('Location: ../Login/login.php');
  die();
}//send login the page that you were on before
?>