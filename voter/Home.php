<?php
	session_start();
	if(isset($_SESSION['fullname']))
	{
	}
	else
	{
		header("Location: login.php");
	}
	if(isset($_POST['logout']))
	{
		session_destroy();
		header("Location: login.php");
	}
?>
<html>
	<head>
		<title> Home </title>
	</head>
	<body>
		<form method="POST" action="" autocomplete="off">
			<input type="submit" class="btn" value="Logout" name="logout">
		</form>
    </body>
</html>