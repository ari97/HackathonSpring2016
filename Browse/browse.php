<?php
session_start();
require_once("../Login/sessionVerify.php");
require_once("../MySQL/dbConnect.php");
require_once("../Mod/mod.php");
$subCategory=$_GET["SubCategory"];


if(null!==($flaggedPost=$_GET["PostID"])){
  query("UPDATE Posts SET Status=1 WHERE PostID=$flaggedPost");
  echo "YOU did IT!";
}
$sql = "SELECT SubCID FROM SubC WHERE name = $subCategory";
$ID = query($sql);
$ID = mysqli_fetch_assoc($ID);
$isMod=isMod($userID,$ID["SubCID"]);

$posts=query("SELECT PostID, UserID, Status, UpVotes, DownVotes, Title, Content, AdminComment, Anonymous FROM Posts WHERE SubCategoryID="
.$ID["SubCID"]." AND Status<>1 ORDER BY Score DESC");
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
    <h1>
      <?php
      echo $category;
      
      ?>
    </h1>
    <table>
      <tr>
        <th>Title</th>
        <th>Upvotes</th>		
        <th>Downvotes</th>
        <th>Submitted By:</th>
        <th>SubCategory</th>
        <th>Date Created</th>
        <?php if($isMod){
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
      echo "<td>".$row[""]."</td>";
      echo "<td>";
      if($isMod){
        echo "<a href=\"../Browse/browse.php?SubCategory='Accounting'&PostID=" . $row["PostID"]."\"> 
        <img src=\"/Images/flag.png\" alt=\"Flag Logo\" height=\"15\" width=\"15\">
        </a>";
      }
      echo"</td>";
      echo "<tr>\n";
      
    }
    ?>
    </table>
    
    
  </body>
</html>