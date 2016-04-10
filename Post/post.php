<?php
session_start();
require_once("../Login/sessionVerify.php");
require_once("../MySQL/dbConnect.php");
require_once("../Mod/mod.php");
$ID=$_GET["PostID"];
$post=query("SELECT PostID, UserID, Status, UpVotes, Title, Content, AdminComment, Anonymous FROM Posts WHERE PostID=$ID");
$data=mysqli_fetch_assoc($post);
$isMod=isMod($userID,$data["SubCategoryID"]);

?>
<!DOCTYPE html>
<html>
  <title>
    <?php
    echo $data["Title"];
    ?>
  </title>
  <body>
    <h1>
      <?php
      echo $data["Title"];
      ?>
    </h1>
    <p>
      <?php
      echo $data["Content"];
      
      ?>
    </p>
    <?php
    if($data["UserID"]==$userID){
      echo "Edit?";//needs functionality
    }
    ?>
    <img src = "../Images/up.png" onclick = "someFunction()" onmouseover = "someOtherFunction()"/>
    <p> 
    Vote count: <?php echo ($data["UpVotes"]-$data["DownVotes"]);?>
    </p>
    <img src = "../Images/down.png" onclick = "someFunction()" onmouseover = "someOtherFunction()"/>
    <?php
    if($isMod){
      echo "<a href=\"../Browse/browse.php?SubCategory='Accounting'&PostID=" . $row["PostID"]."\"> 
      <img src=\"/Images/flag.png\" alt=\"Flag Logo\" height=\"15\" width=\"15\">
      </a>";
    }
    ?>
  </body>
</html>