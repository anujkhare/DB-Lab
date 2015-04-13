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
	$show_db = $_GET['show_db'];
	if ($show_db == True) {

#		// sending query
#		$result = mysql_query("SELECT * FROM new_table1");
#		if (!$result) {
#		    die("Query to show fields from table failed");
#		}
#		
#		$fields_num = mysql_num_fields($result);
#		
#		echo "<h1>Table: {$table}</h1>";
#		echo "<table border='1'><tr>";
#		// printing table headers
#		for($i=0; $i<$fields_num; $i++)
#		{
#		    $field = mysql_fetch_field($result);
#		    echo "<td>{$field->name}</td>";
#		}
#		echo "</tr>\n";
#		while($row = mysql_fetch_row($result))
#		{
#		    echo "<tr>";
#		
#		    foreach($row as $cell)
#		        echo "<td>$cell</td>";
#		
#		    echo "</tr>\n";
#		}
#		mysql_free_result($result);
	}
?>

<script language="javascript">
	alert("Book registered!!!");
	location.href = "index.php";
</script>
	
