<?php session_start(); ?>
<html>
	<head>
		<title> Login </title>
		<link rel="stylesheet" href="login.css">
	</head>
	<body>
		<form method="POST" action="">
			<div class="login-box">
				<h1>Sign in</h1>
				<div class="ltextbox">
					<i class="fas fa-user"></i>
					<input type="text" placeholder="User Name" name="ID">
				</div>
	
				<div class="ltextbox">
					<i class="fas fa-lock"></i>
					<input type="password" placeholder="Password" name="password">
				</div>
	
				<input type="submit" class="lbtn" value="Signin" name="signin">
			</div>
		</form>
		
		<?php
			$n="priyanshu";
			$p="pri@0703";
			if(isset($_POST['signin']))//signin
			{
				$_SESSION['ID'] = $_POST['ID'];
				$_SESSION['password'] = $_POST['password'];
				$a = $_SESSION['ID'];
				$b = $_SESSION['password'];
				if($n==$a && $p==$b)
				{
					header("Location: home.php");
				}
			}
			if(isset($_SESSION['ID']))//relod
			{
				$a = $_SESSION['ID'];
				$b = $_SESSION['password'];
				if($n==$a && $p==$b)
				{
					header("Location: home.php");
				}
			}
		?>
		User Name:priyanshu,
		Password:pri@0703
	</body>
</html>