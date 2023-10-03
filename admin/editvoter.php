<html>
	<head></head>
	<body align="center">
		<h2>UPDATE VOTER</h2>
		<?php
			require "./database.php";
			if(isset($_GET["no"])){
				$qury=mysqli_query($vote,"SELECT * from voter where no=".$_GET["no"]);
				$row=mysqli_fetch_array($qury);
				$name=$row[1];
                $aid=$row[2];
                $id=$row[3];
			}
			if(isset($_POST["submit"])){
				$name=$_POST["name"];
                $aid=$_POST["adid"];
                $id=$_POST["cid"];

				$qury=mysqli_query($vote,"UPDATE voter set name='$name' where no=".$_GET["no"]);
				$qury=mysqli_query($vote,"UPDATE voter set acid='$aid' where no=".$_GET["no"]);
				$qury=mysqli_query($vote,"UPDATE voter set vid='$id' where no=".$_GET["no"]);
				if($qury){
					header("location:voterlist.php");
				}
				else{
					echo"Something wrong in edit data.......!";
				}
			}
		?>
		<form name="frm1" method="post">
			<table align="center">
            <tr>
					<td>Name:</td> 
					<td><input type="text" placeholder="Name as per Aadhar card" name="name" value="<?php echo $name; ?>" pattern="[A-Za-z. ]{1,}" title="Enter only Alphabets" required></td>
				</tr>
                <tr>
					<td>Aadhar card Noumber:</td> 
					<td><input type="text" placeholder="Aadhar card Noumber" name="adid" value="<?php echo $aid; ?>" pattern="[0-9]{12}" title="Enter only Aadhar card No." required></td>
				</tr>
                <tr>
					<td>Voter ID Noumber:</td> 
					<td><input type="text" placeholder="Voter ID Noumber" name="cid" value="<?php echo $id; ?>" pattern="[A-Z]{3}[0-9]{7}" title="Enter only Voter ID No." required></td>
				</tr>
			    <tr>
					<td align="center" colspan="2"><input type="submit" name="submit" value="Update"></td>
				</tr>
			</table>
		</form>
	</body>
</html>