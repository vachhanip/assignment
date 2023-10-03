<?php session_start(); ?>
<html>
	<head>
		<title> Login </title>
		<link rel="stylesheet" href="login.css">
	</head>
	<body>
		<form method="POST" action="" autocomplete="on">
			<div class="login-box">
				<h1>Login</h1>
				<div class="login">
					<i class="fa fa-user"></i>
					<input type="text" placeholder="Name as per Aadhar card" name="funam" pattern="[A-Za-z. ]{1,}" title="Enter only Alphabets" required>
				</div>
				<div class="login">
					<i class="fa fa-id-card"></i>
					<input type="text" placeholder="Aadhar card Noumber" name="aid" pattern="[0-9]{12}" title="Enter only Aadhar card No." required>
				</div>
				<div class="login">
				<i class="fas fa-vote-yea"></i>
					<input type="text" placeholder="Voter ID Noumber" name="id" pattern="[A-Z]{3}[0-9]{7}" title="Enter only Voter ID No." required>
				</div>
				<input type="submit" class="btn" value="Login" name="login" onclick="alert('Make sure you enter right Information')">
	
	    		</div>
		</form>	
		<?php
			require "./database.php";
			if(isset($_POST['login'])){
				//Entered value
				$x=$_POST['funam'];
				$y=$_POST['aid'];
				$z=$_POST['id'];

				//SQL value
				$qury=mysqli_query($vote,"SELECT * from voter where acid=".$_POST["aid"]);
				$row=mysqli_fetch_array($qury);
				$a=$_SESSION['fullname'] = $row[1];
				$b=$_SESSION['acid'] = $row[2];
				$c=$_SESSION['vid'] = $row[3];
				
				if($x==$a && $y==$b && $z==$c){
					header("Location: Home.php");
				}
				else{
					header("Location: loginerror.html");
				}
			}
			if(isset($_SESSION['fullname']) && isset($_SESSION['acid']) && isset($_SESSION['vid'])){
				header("Location: Home.php");
			}
		?>
	</body>
</html>