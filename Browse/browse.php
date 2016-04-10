<?php
session_start();
require_once("../Login/sessionVerify.php");
require_once("../MySQL/dbConnect.php");
require_once("../Mod/mod.php");
require_once("../Admin/admin.php");
$subCategory=$_GET["SubCategory"];
$subCategory=trim($subCategory,"\"");
$subCategory=trim($subCategory,"'");
if(null!==($flaggedPost=$_GET["PostID"])){
  query("UPDATE Posts SET Status=1 WHERE PostID=$flaggedPost");
  echo "You just flagged a post.";
}
$sql = "SELECT SubCID FROM SubC WHERE name = '$subCategory'";
$ID = query($sql);
$ID = mysqli_fetch_assoc($ID);
$isMod=isMod($userID,$ID["SubCID"]);
$isAdmin=isAdmin($userID,$ID["SubCID"]);
if(!($isMod||$isAdmin)){
  $Status= " AND Status<>1 ";
}
$posts=query("SELECT PostID, UserID, Status, UpVotes, DownVotes, Title, Content, AdminComment, Anonymous FROM Posts WHERE SubCategoryID="
.$ID["SubCID"]." $Status ORDER BY Score DESC");
//if($isMod)
?>
<!DOCTYPE html>
<html>
  <title>
    <?php
    echo $category;
    ?>
  </title>
  <body>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
    <link rel="stylesheet" type="text/css" href="../Index/index.css">
    <h1>
      <?php
      echo $category;
      ?>
    </h1>
    <a href = "../Login/logout.php"><button type="button" class="btn btn-primary btn-lg" id="login" style="margin-top:0%;">Log Out</button><a/>
    
    <div class="container" style="width: 50%; height: 70%;">
      <table class = "table" style="table-layout:fixed">
        <tr>
          <th>Title</th>
          <th>Upvotes</th>		
          <th>Downvotes</th>
          <th>UserID:</th>
          <th>SubCategory</th>
          <?php if($isMod||$isAdmin){
            echo "<th>Flag Post</th>";
          }
          ?>
        </tr>
      <?php
      while($row = mysqli_fetch_assoc($posts)){
        echo "<tr>\n";
        echo "<td><a href=\"../Post/post.php?PostID=".$row["PostID"]."\">".$row["Title"]."</a></td>";
        echo "<td>".$row["UpVotes"]."</td>";
        echo "<td>".$row["DownVotes"]."</td>";
        echo "<td>".$row["UserID"]."</td>"; //We need to get the Username not their ID
        if($isMod){
          echo "<a href=\"../Browse/browse.php?SubCategory='$subCategory'&PostID=" . $row["PostID"]."\"> 
          <img src=\"/Images/flag.png\" alt=\"Flag Logo\" height=\"15\" width=\"15\">
          </a>";
        }
        if($isAdmin){
          echo "<a href=\"../Admin/adminComment.php?PostID=" . $row["PostID"]."\"> 
          <img src=\"/Images/flag.png\" alt=\"Flag Logo\" height=\"15\" width=\"15\">
          </a>";
        }
        echo"</td>";
        echo "<tr>\n";
        
      }
      ?>
      </table>
    </div>
    <a href="../About/About.php"><button type="button" class="btn btn-primary btn-lg $dropdown" id="about">About Us</button></a>
  </body>
</html>