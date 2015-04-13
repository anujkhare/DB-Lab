<html>
<body>
<?php
/*
$con = mysql_connect(':/cloudsql/ancient-tractor-91116:sql','root','') or die("could not connect to database");
*/
	include('connect.php');
session_start();

$Sec_Que = $_POST["sec_que"];
$pass = $_POST["passwordsignup"];
$pass_confirm = $_POST["passwordsignup_confirm"]; 
$email = $_SESSION['loginuser'];

// Connect to the database



// Select the database to use
mysql_select_db("new_schema1") or die("could not find the database");
$result = mysql_query("SELECT * FROM new_table WHERE user_name='$email'");
if (!$result) {
    die('Invalid query: ' . mysql_error());
}

$row = mysql_num_rows($result);
if($row != 0)
{
  while($rows=mysql_fetch_assoc($result))
  {
       $mypass= $rows['password'] ;
      // $mysec = $rows['sec_que'];
     }
   if($mypass == $pass )
    {
	if(!empty($Sec_Que) && !empty($pass_confirm))
   { $sql = "UPDATE new_table SET password = '$pass_confirm',sec_que = '$Sec_Que' WHERE User_Name='$email' " or die ("this stuffed up");}
else if( empty($Sec_Que) && !empty($pass_confirm))
{ $sql = "UPDATE new_table SET password = '$pass_confirm' WHERE User_Name='$email' " or die ("this stuffed up"); }
else if( !empty($Sec_Que) && empty($pass_confirm))
{ $sql = "UPDATE new_table SET sec_que = '$Sec_Que' WHERE User_Name='$email' " or die ("this stuffed up"); }
else if( empty($Sec_Que) && empty($pass_confirm))
{ ?>     
<script language="javascript">
    alert("Both Security Question and New Password Empty.");
    location.href = "change_pass.php";
</script>
<?php }
	 
	 if (!mysql_query($sql,$con))
  	{
  	die('Error: ' . mysql_error());
  	}

                            
        						mysql_close($con);
        						
							?>
								<script language="javascript">
    							alert("Details updated!!!");
    							location.href = "sign_in.html";
								</script>
								<?php
	 } 
	else 
     {
?>     
<script language="javascript">
    alert("Wrong Password");
    location.href = "index.php";
</script>
<?php
      //header("Location: sign_in.html");
	   }	
}
else
{
?>     
<script language="javascript">
    alert("Wrong Username or Wrong Answer of Security Question");
    location.href = "change_pass.php";
</script>
<?php
}


?>

</body>
</html>

