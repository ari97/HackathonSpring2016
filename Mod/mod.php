<?php
require_once("../MySQL/dbConnect.php");
function isMod($userID, $categoryID){
  $sql = "SELECT CategoryID FROM Duties where UserID = $userID";
  $query = query($sql);
  while($row = mysqli_fetch_assoc($query)){
    if($row["CategoryID"] = $categoryID){
      return true;
    }
  }
  return false;
} 

?>