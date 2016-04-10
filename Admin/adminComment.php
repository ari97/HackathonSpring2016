<?php
session_start();
require_once("../Login/sessionVerify.php");
require_once("../MySQL/dbConnect.php");
require_once("../Admin/admin.php");
$postID=$_GET["PostID"];
$post=query("SELECT PostID, Status, Title, Content, AdminComment FROM Posts WHERE PostID=$postID");
$data=mysqli_fetch_assoc($post)
?>
<html>
  <head>
    <title>
      Submit A Suggestion
    </title>
  </head>
  <body>
    <form action="../Post/post.php?PostID='<?php echo $postID?>'" method="post">
      <table>
        <tbody>  
          <tr><td>Title:</td><td><?php echo $data["Title"];?></td></tr><br>
          <tr><td>Suggestion:</td><td><?php echo $data["Content"];?></td></tr><br>
          <tr><td>Your Comment:</td><td><input type="text" name="adminComment"></td></tr><br>
          <input type="radio" name="status" value="3"> Solved<br>
          <input type="radio" name="status" value="4"> Rejected<br>
          <input type="radio" name="status" value="5"> In-Progress<br>
        </tbody>
      </table>
      <input name="action" type="submit" value="Submit">
    </form> 
  </body>
</html>