<?php
	#echo "here we are!";
	include('connect.php');
	
	session_start();
	$User_name = $_GET['user_name'];
	$Book_name = $_GET['book_name'];
	$user = $_SESSION['loginuser'];
	mysql_select_db("new_schema1") or die("could not find the database");
	$sql = "UPDATE new_table1 SET Sharing_Status = 'NOT',Registered_By = '$user' WHERE User_Name='$User_name' AND Book_Name='$Book_name' " or die ("this stuffed up");
	if (!mysql_query($sql,$con))
  {
		echo "SQL QUERY FAILED";
  }
#
#		die('Error: ' . mysql_error());
#			
?>

<script language="javascript">
	alert("Book registered!!!");
	location.href = "index.php";
</script>
	
