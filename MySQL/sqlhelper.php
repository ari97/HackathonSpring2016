<?php
	function query($sql) {
		global $conn;
		return mysqli_query($conn, $sql);
	}
	
	function query_error($sql) {
		global $conn;
		if (!mysqli_query($conn, $sql)) {
			return mysqli_error($conn);
		}
		return "No Error";
	}

	function getUserName($userID){
		$row = query("SELECT * FROM Users WHERE user ");
	}


	function createTable ($table, $cols) {
		$sql = "CREATE TABLE $table (" . implode(", ", $cols) . ")";
		
		return query($sql);
	}
	
	function insertInto ($table, $cols, $vals) {
		$sql = "INSERT INTO $table (". implode(", ", $cols). ")
		VALUES (" . implode(", ", $vals) . ")";
		
		return query($sql);
	}
	
	function tableExists ($table) {
		$sql = "SELECT * FROM $table";
		
		if (query($sql) !== FALSE) {
			return true;
		} else {
			return false;
		}
	}
	
	function addPost($vals){
		$sql = "INSERT INTO Posts (UserID, Status, UpVotes, DownVotes, Category, SubCategory, Title, Content, Anonymous, Time)
		VALUES (" . implode(", ", $vals) . ")";
		return query($sql);
	}
	
	function removePost($PostID){
		$sql = "DELETE FROM Posts WHERE PostID=$PostID";
		return query($sql);
	}
	
	function editPost($PostID, $Content){
		$sql = "UPDATE Posts SET Content='$Content' WHERE PostID=$PostID";
		return query($sql);
	}
	
?>