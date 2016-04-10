<?php

function voted($userID, $postID){
  $votesQuery=query("SELECT * FROM Votes WHERE UserID=$userID AND PostID=$postID");
  $votes=mysqli_fetch_assoc($votesQuery);
  return $votes["Vote"];
}
?>