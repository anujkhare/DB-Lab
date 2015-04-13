<?php
	$con = mysql_connect(':/cloudsql/ancient-tractor-91116:sql','root','') or die("could not connect to database");
	if(! $con)
	{
	    die('Connection Failed'.mysql_error());
	}

#	session_start();
#	$show_db = $_GET['show_db'];
#	$user = $_SESSION['loginuser'];
#	if ($show_db == True && $user=='rishabh') {
#		echo $user;
#	
#		#include('show_db.php');
#
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
#  }
	
?>
