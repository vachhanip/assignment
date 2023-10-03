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
		<title> Admin </title>
		<link rel="stylesheet" href="sidebar.css">
	</head>
	<body align="center">
		<form method="post">
		<ul align="center">
        	<li><a href="home.php">Home</a></li>
			<li><a href="addvoter.php">ADD Voter</a></li>
        	<li><a class="active" href="voterlist.php">Voter list</a></li>
			<input type="submit" class="lbtn" value="Logout" name="signout">
    	</ul>
    	<div style="margin-left:15%;padding:1px 16px;">
        <h2>LIST OF VOTER</h2>
		<?php
			require "./database.php";
			$qury=mysqli_query($vote,"SELECT * from voter");
			
			echo"<table align='center' border=1>
					<tr>
						<th>Name</th>
						<th>Aadhar card Noumber</th>
						<th>Voter ID Noumber</th>
						<th>Edit</th>
						<th>Delete</th>
					</tr>
			";
			
			while($row=mysqli_fetch_array($qury)){
				echo"
					<tr>
						<td>".$row[1]."</td>
						<td>".$row[2]."</td>
						<td>".$row[3]."</td>
						<td><a href='editvoter.php?no=".$row[0]."'>Edit</a></td>
						<td><a href='deletevoter.php?no=".$row[0]."'>Delete</a></td>
						</tr>
				";
			}
			echo"</table>";
		?>
		</div>
    </body>
</html>