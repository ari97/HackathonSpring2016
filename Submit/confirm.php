<?php 
session_start();
require_once "../Login/sessionVerify.php";
require_once "../MySQL/dbConnect.php";
// Run Query
if (isset($_POST['title'])){
  $title = $_POST['title'];
  $content = $_POST['content'];
  $category = $_POST['category'];
  //This is a subcategory
  $search= query("SELECT CategoryID, SubCID FROM SubC WHERE Name = '$category'");
  $row = mysqli_fetch_assoc($search);
  $subCategoryID = $row["SubCID"];
  $categoryID=$row["CategoryID"];
  
  //$search = "SELECT Category.name FROM Category INNER JOIN SubC on Category.Categoryid = SubC.CategoryID WHERE SubC.CategoryID = '$categoryID'";
}
//Remember if Category cannot be found, search for it in Category

// Creating Score & Recalculating it for all in the subcategory

//  Bounce them back to resultsBrowse.php header('Location: ../Borwse/browse.php?"SubCategory=\"$SubCategory\"')

//so we have some ajax/jquery apparentaly that lets us not have to go to another form to resubmit.

query("INSERT INTO Posts (UserID, Status, UpVotes, DownVotes, CategoryID, SubCategoryID, Title, Content) VALUES ($userID, 0, 1, 0, $categoryID, 
  $subCategoryID, '$title', '$content')");


$posts=query("SELECT UpVotes, DownVotes, Time, PostID FROM Posts WHERE SubCategoryID=$subCategoryID");  
while($row=mysqli_fetch_assoc($posts)){
  $n=$row["UpVotes"]+$row["DownVotes"];
  if($n==0){
    $score=0;
  }else{
    $z = 1.281551565545;
    $p = $row["UpVotes"] / $n;
    $left = $p + 1/(2*$n)*$z*$z;
    $right = $z*sqrt($p*(1-$p)/$n + $z*$z/(4*$n*$n));
    $under = 1+(1/$n*$z*$z);
    $score= ($left - $right) / $under;
  }
  $postID=$row["PostID"];
  query("UPDATE Posts SET Score=$score WHERE PostID=$postID");
}
header("Location: ../Browse/browse.php?SubCategory=\"$category\"");
?>