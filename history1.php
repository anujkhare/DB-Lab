<?php
    session_start();
    $var_value = $_SESSION['loginuser'];
    if(!isset($_SESSION['loginuser'])) 
    {
        header("Location: sign_in.html");  
    }
?>
<!DOCTYPE>
<html>
<head>
	<link href="css/dropdown.css" rel="stylesheet">
    <meta charset="UTF-8" />
        <!-- <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">  -->
        <title>Book Sharing Portal</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
        <meta name="description" content="Book Sharing Portal" />
        <meta name="keywords" content="html5, css3, form, switch, animation, :target, pseudo-class" />
        <meta name="author" content="Codrops" />
        <link rel="shortcut icon" href="../favicon.ico"> 
        <link rel="stylesheet" type="text/css" href="css/demo.css" />
        <link rel="stylesheet" type="text/css" href="css/style3.css" />
		<link rel="stylesheet" type="text/css" href="css/animate-custom.css" />
		<link href="css/Book_Table.css" rel="stylesheet">
		
</head>
<body>
            <ul class="menuH decor1">
            <li><a class="arrow">Welcome</a>
            <ul>
                <li><a class="arrow" href="change_pass.php"> <?php session_start();$var_value = $_SESSION['loginuser']; echo $_SESSION['loginuser']; ?></a>
                </li>
                
                </li>
                <li><a class="arrow" href="logout.php">Logout</a>
                </li>
            </ul>
            </li>
            <li><a class="arrow">History</a>
		<ul>
                <li><a class="arrow" href="history1.php">Shared</a>
                </li>
                
                <li><a class="arrow" href="history2.php">Reserved</a>
                </li>
            </ul>
		</li>
            <li><a class="arrow">Books Query</a>
            <ul>
                <li><a class="arrow" href="search_Box.php">Search</a>
                </li>
                
                <li><a class="arrow" href="book-share.php">Share Book</a>
                </li>
            </ul>
            </li>
            <li><a href="index.php">Home</a></li>
    </ul>
</body>
<body>
<br>
<table class="bordered" align="center" margin-top = "100px">
    <thead>

    <tr>
        <th>Serial No.</th>        
        <th>Shared Book</th>
         <th>User Reserved shared book</th>
    </tr>
    </thead>
     <?php
						$con = mysql_pconnect(':/cloudsql/ancient-tractor-91116:ancient-tractor-91116:sql','kcm','anujkhare') or die("could not connect to database");
                                if(! $con)
                                {
                                    die('Connection Failed'.mysql_error());
                                }
                                session_start();
                                $key = $_POST["bookname"];
                                $_SESSION['books'] = $key;
				$avail = 'Available';
                                mysql_select_db("new_schema1",$con);
                                $sql = "SELECT User_Name,Book_Name, Sharing_Status,Registered_By FROM new_table1";
                                $retval = mysql_query( $sql, $con);
                                if(! $retval )
                                {
                                  die('Could not get data: ' . mysql_error());
                                }
                                $count = 1;$link_address="reserve.php";
                                while($row = mysql_fetch_array($retval, MYSQL_ASSOC))
                                {
                                	if( $row['User_Name']==$_SESSION['loginuser'])
                                    {
                                        echo "<tr>";
                                        echo "<td>".$count."</td>"; 
                                        echo "<td>".$row['Book_Name']."</td>";
                                        //echo "<td>".$row['Book_Name']."</td>";
					if($Sharing_Status == $avail)
                                        {echo "<td>".$row['Sharing_Status']."</td>";}
					else
					{ echo "<td>".$row['Registered_By']."</td>";}
                                        
                                        echo "<tr>";
                                        $count++;
                                     }
                                    
                                } 
                                ?>
</table>

<br>
    
</body>
</html>
