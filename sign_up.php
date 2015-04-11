<html>
<body>
<?php

$con = mysql_pconnect(':/cloudsql/ancient-tractor-91116:sql','root','') or die("could not connect to database");
if(! $con)
{
    die('Connection Failed'.mysql_error());
}
session_start();

$email = $_POST["usernamesignup"];
$pass = $_POST["passwordsignup"];
$pass_confirm = $_POST["passwordsignup_confirm"];
$Sec_Que =  $_POST["usec_que"];
// Connect to the database

if($pass != $pass_confirm)
{
?>
<script language="javascript">
    alert(" Password doesn't match ");
    location.href = "index.html#toregister";
</script>
<?php
}

// Select the database to use
$link = mysql_select_db("new_schema1") or die("could not find the database");
if (!$link) {
    die('Not connected : ' . mysql_error());
}

$sql="INSERT INTO new_table (user_name, password,sec_que)
VALUES
('$_POST[usernamesignup]','$_POST[passwordsignup]','$_POST[usec_que]')";

if (!mysql_query($sql,$con))
  {
 // die('Error: ' . mysql_error());
 ?>
<script language="javascript">
    alert("Username already exist , Please choose another");
    location.href = "sign_in.html#toregister";
</script>
 <?php
  }
?>
<script language="javascript">
    alert(" Congrats!!!! You are registered, Now log in");
    location.href = "index.php";
</script>
 <?php
mysql_close($con);
?>
</body>
</html>

