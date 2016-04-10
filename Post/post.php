<?php
session_start();
require_once("../Login/sessionVerify.php");
require_once("../MySQL/dbConnect.php");
require_once("../Mod/mod.php");
require_once("../Admin/admin.php");
require_once("vote.php");

$ID=$_GET["PostID"];
$isMod=isMod($userID,$data["SubCategoryID"]);
$isAdmin=isAdmin($userID,$data["SubCategoryID"]);
if(isset($_POST["adminComment"])){
  $adminComment=$_POST["adminComment"];
  $status=$_POST["status"];
  query("UPDATE Posts SET AdminComment='$adminComment', Status=$status WHERE PostID=$ID");
}

$vote=$_GET["Vote"];
$vote=trim($vote,"\"");
$vote=trim($vote,"'");
if($vote=='up'){
  $query=query("SELECT Vote FROM Votes WHERE PostID=$ID AND UserID=$userID");
  $vote=mysqli_fetch_assoc($query);
  if($vote["Vote"]!=='UP'){
    if($vote["Vote"]=='DOWN'){
      query("UPDATE Posts SET UpVotes=UpVotes+1 WHERE PostID=$ID");
      query("UPDATE Votes SET Vote='UP' WHERE PostID=$ID AND UserID=$userID");
    }else{
      query("INSERT INTO Votes VALUES($ID, $userID, 'UP')");
    }
  }
} elseif($vote=='down'){
  $query=query("SELECT Vote FROM Votes WHERE PostID=$ID AND UserID=$userID");
  $vote=mysqli_fetch_assoc($query);
  if($vote["Vote"]!=='DOWN'){
    if($vote["Vote"]=='UP'){
      query("UPDATE Posts SET DownVotes=DownVotes+1 WHERE PostID=$ID");
      query("UPDATE Votes SET Vote='DOWN' WHERE PostID=$ID AND UserID=$userID");
    }else{
      query("INSERT INTO Votes VALUES($ID, $userID, 'DOWN')");
    }
  }
}
$post=query("SELECT PostID, UserID, SubCategoryID, Status, UpVotes, DownVotes, Title, Content, AdminComment, Anonymous FROM Posts WHERE PostID=$ID");
$data=mysqli_fetch_assoc($post);
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
    <p>
      <?php
      echo $data["AdminComment"];
      ?>
    </p>
    <?php
    /*if($data["UserID"]==$userID){
      echo "Edit?";//needs functionality
    }*/
    ?>
    <?php
    if(voted($userID,$ID)!=="UP"){
    echo "
      <a href=\"../Post/post.php?Vote='up'&PostID=$ID\">
      <img src = \"../Images/up.png\" onclick = \"someFunction()\" onmouseover = \"someOtherFunction()\" height=\"35\" width=\"35\"/>
    </a>";
    }else{
       echo "
      <img src = \"../Images/up.png\" onclick = \"someFunction()\" onmouseover = \"someOtherFunction()\" height=\"35\" width=\"35\"/>";
    }
    ?>
    <p> 
    Vote count: 
    <?php 
    echo $data["UpVotes"]-$data["DownVotes"];
    ?>
    </p>
    <?php
    if(voted($userID,$ID)!=="DOWN"){
    echo "
      <a href=\"../Post/post.php?Vote='down'&PostID=$ID\">
      <img src = \"../Images/down.png\" onclick = \"someFunction()\" onmouseover = \"someOtherFunction()\" height=\"35\" width=\"35\"/>
    </a>";
    }else{
    echo "
      <img src = \"../Images/down.png\" onclick = \"someFunction()\" onmouseover = \"someOtherFunction()\" height=\"35\" width=\"35\"/>";
    }
    ?>
    <?php
    if($isMod){
      echo "<a href=\"../Browse/browse.php?SubCategory='Accounting'&PostID=" . $data["PostID"]."\"> 
      <img src=\"/Images/flag.png\" alt=\"Flag Logo\" height=\"15\" width=\"15\">
      </a>";
    }
    if($isAdmin){
      echo "<a href=\"../Admin/adminComment.php?PostID=" . $data["PostID"]."\"> 
      <img src=\"/Images/flag.png\" alt=\"Flag Logo\" height=\"15\" width=\"15\">
      </a>";
    }
    ?>
  </body>
</html>