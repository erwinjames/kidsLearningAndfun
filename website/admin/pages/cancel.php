		<?php
		include ("../includes/db.php");
		
		$t_id = $_GET['id'];
		global $con;
		mysqli_query($con,"UPDATE transaction SET order_stat = 'Cancelled' WHERE transaction_id = '$t_id'") or die(mysql_error());
								
		header("location: transaction.php");	
		
		?>