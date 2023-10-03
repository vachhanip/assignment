<?php
	session_start();
	if(isset($_SESSION['ID']))
	{
	}
	else
	{
		header("Location: login.php");
	}
	if(isset($_POST['signout']))
	{
		session_destroy();
		header("Location: login.php");
	}
?>

<html>
    <head>
		<title> Home </title>
		<link rel="stylesheet" href="sidebar.css">
	</head>

    <body>
		<form method="post">
        <ul align="center">
            <li><a class="active" href="home.php">Home</a></li>
			<li><a href="addvoter.php">ADD Voter</a></li>
            <li><a href="voterlist.php">Voter list</a></li>
			<input type="submit" class="lbtn" value="Logout" name="signout">
        </ul>
        <div style="margin-left:15%;padding:1px 16px;">
            <h1>This is Online Voting system</h1>
            
        </div>
    </body>
</html>