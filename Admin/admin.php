<?php
require_once("../MySQL/dbConnect.php");
function isAdmin($userID, $categoryID){
  $adminStatusQuery=query("SELECT AdminStatus FROM Users WHERE UserID=$userID");
  $adminStatus=mysqli_fetch_assoc($adminStatusQuery);
  if($adminStatus["AdminStatus"]=='Y'){
    $sql = "SELECT CategoryID FROM Duties where UserID = $userID";
    $query = query($sql);
    while($row = mysqli_fetch_assoc($query)){
      if($row["CategoryID"] = $categoryID){
        return true;
      }
    }
  }
  return false;
} 

?>