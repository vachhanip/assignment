<html>
    <head></head>
    <body>
        <h2>DELETE VOTER</h2>
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
                $result=mysqli_query($vote,"DELETE from voter where no=".$_GET["no"]);
                if($result)
                {
                    header("location:voterlist.php");
                }
                else{
                    echo"Something wrong in delete data.......!";
                }
            }
        ?>
        <form name="frm1" method="post">
            Are you sure to delete the Voter with Name:<b><u><?php echo $name; ?></u></b> ; Aadhar card Noumber:<b><u><?php echo $aid ?></u></b> and Voter ID Noumber:<b><u><?php echo $id; ?></u></b>?<br><br>
            <input type="submit" name="submit" value="Delete">
        </form>
    </body>
</html>