<?php
    session_start();
    $var_value = $_SESSION['loginuser'];
    if(!isset($_SESSION['loginuser'])) 
    {
        header("Location: sign_in.html");  
    }
?>
<!DOCTYPE html>
<!--[if lt IE 7 ]> <html lang="en" class="no-js ie6 lt8"> <![endif]-->
<!--[if IE 7 ]>    <html lang="en" class="no-js ie7 lt8"> <![endif]-->
<!--[if IE 8 ]>    <html lang="en" class="no-js ie8 lt8"> <![endif]-->
<!--[if IE 9 ]>    <html lang="en" class="no-js ie9"> <![endif]-->
<!--[if (gt IE 9)|!(IE)]><!--> <html lang="en" class="no-js"> <!--<![endif]-->
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
<br><br>
    <body>
        <div class="container">
            <!-- Codrops top bar -->
            <div class="codrops-top">
                <span class="right">
                </span>
                <div class="clr"></div>
            </div><!--/ Codrops top bar -->
            <br><br>
            <section>				
                <div id="container_demo" >
                    <!-- hidden anchor to stop jump http://www.css3create.com/Astuce-Empecher-le-scroll-avec-l-utilisation-de-target#wrap4  -->
                    <a class="hiddenanchor" id="toregister"></a>
                    <a class="hiddenanchor" id="tologin"></a>
                    <div id="wrapper">
                        <div id="login" class="animate form">
                            <form  action="details_change.php" autocomplete="on" method = "post"> 
                                <h1> Chane Details </h1> 
                                <p> 
                                    <label for="usernamesignup" class="uname" data-icon="u">Your username</label>
                                    <input id="usernamesignup" name="usernamesignup" required="required" type="text" value= "<?php session_start();$var_value = $_SESSION['loginuser']; echo $_SESSION['loginuser'];?>" readonly="readonly" />
                                </p>
                                <p> 
                                    <label for="security_question" class="uname" data-icon="u">Answer of security question</label>
                                    <input id="sec_que" name="sec_que"  type="text" placeholder="What is your favourite sport?" onblur="this.value=this.value.toUpperCase()"  />
                                </p>
                                
                                <p> 
                                    <label for="passwordsignup" class="youpasswd" data-icon="p">Current password</label>
                                    <input id="passwordsignup" name="passwordsignup" required="required" type="password" placeholder="eg. X8df!90EO" pattern=".{4,10}" required title="4 to 10 characters"/>
                                </p>
                                <p> 
                                    <label for="passwordsignup_confirm" class="youpasswd" data-icon="p">New password(length>=4)</label>
                                    <input id="passwordsignup_confirm" name="passwordsignup_confirm"  type="password" placeholder="eg. X8df!90EO" pattern="[A-Za-z0-9]{0}|[A-Za-z0-9]{4,10}" title="4 to 10 characters"/>
                                </p>
                                <p class="signin button"> 
									<input type="submit" value="Save"/> 
                            </form>
                        </div>
                </div>  
            </section>
        </div>
    </body>
</html>
