<html>
<body>
<?php
/*
$con = mysql_connect(':/cloudsql/ancient-tractor-91116:sql','root','') or die("could not connect to database");
*/
	include('connect.php');
session_start();

$email = $_POST["usernamesignup"];
$Sec_Que = $_POST["sec_que"];
$pass = $_POST["passwordsignup"];
$pass_confirm = $_POST["passwordsignup_confirm"]; 

// Connect to the database

if($pass != $pass_confirm)
{
?>
<script language="javascript">
    alert(" Password doesn't match ");
    location.href = "sign_in.html";
</script>
<?php
}

// Select the database to use
 mysql_select_db("new_schema1") or die("could not find the database");
 $result = mysql_query("SELECT * FROM new_table WHERE user_name='$email'");

$row = mysql_num_rows($result);
if($row != 0)
{
  while($rows=mysql_fetch_assoc($result))
  {
       $myusr= $rows['user_name'] ;
       $mysec = $rows['sec_que'];
     }
   if($myusr==$email && $mysec == $Sec_Que)
    {
    echo "hii beuty!!";
    $sql = "UPDATE new_table SET password = '$pass' WHERE User_Name='$email' " or die ("this stuffed up");
	 
	 if (!mysql_query($sql,$con))
  {
  die('Error: ' . mysql_error());
  }

                            
        						mysql_close($con);
        						
							?>
								<script language="javascript">
    							alert("Password Changed!!!");
    							location.href = "sign_in.html";
								</script>
								<?php
	 }   
	else 
     {
?>     
<script language="javascript">
    alert("Wrong Username or Wrong Answer of Security Question");
    location.href = "sign_in.html";
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
    location.href = "sign_in.html";
</script>
<?php
}


?>

</body>
</html>

