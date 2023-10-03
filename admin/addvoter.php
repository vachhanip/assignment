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
		<title> Add </title>
		<link rel="stylesheet" href="sidebar.css">
	</head>
    <body align="center">
        <form method="post">
        <ul align="center">
            <li><a href="home.php">Home</a></li>
            <li><a class="active" href="addvoter.php">ADD Voter</a></li>
            <li><a href="voterlist.php">Voter list</a></li>
            <input type="submit" class="lbtn" value="Logout" name="signout">
        </ul>
        <div style="margin-left:15%;padding:1px 16px;">
            <h2>ADD VOTER</h2>
            <table align="center">
                <tr>
					<td>Name:</td> 
					<td><input type="text" placeholder="Name as per Aadhar card" name="name" pattern="[A-Za-z. ]{1,}" title="Enter only Alphabets" required></td>
				</tr>
                <tr>
					<td>Aadhar card Noumber:</td> 
					<td><input type="text" placeholder="Aadhar card Noumber" name="adid" pattern="[0-9]{12}" title="Enter only Aadhar card No." required></td>
				</tr>
                <tr>
					<td>Voter ID Noumber:</td> 
					<td><input type="text" placeholder="Voter ID Noumber" name="cid" pattern="[A-Z]{3}[0-9]{7}" title="Enter only Voter ID No." required></td>
				</tr>
			    <tr>
					<td align="center" colspan="2"><input type="submit" class="lbtn" name="submit" value="Insert"></td>
				</tr>
            </table>
		</form>
        <?php
            require "./database.php";
            if(isset($_POST["submit"])){
                $name=$_POST["name"];
                $aid=$_POST["adid"];
                $id=$_POST["cid"];
                $qury=mysqli_query($vote,"INSERT into voter (`name`,`acid`,`vid`)
                    values('$name','$aid','$id') ");
                if($qury){
                    header("location:voterlist.php");
                }
                else{
                    echo"Something wrong in insert data";
                }
            }
        ?>
        </div>
    </body>
</html>