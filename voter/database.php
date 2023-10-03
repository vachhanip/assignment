<html>
	<body>
		<?php
			$vote = new mysqli("localhost","root","","vote");
			if (!$vote) {
				// die('Not connected'. mysqli_error ( )) ;
				echo  "Not Connected";
			}	
		?>
	</body>
</html>