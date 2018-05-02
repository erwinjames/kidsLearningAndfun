<?php

	include('../db/dbconn.php');
	global $con;

if (isset($_POST['enter']))

	{
		$username=$_POST['username'];
		$password=$_POST['password'];

		
			$result=mysqli_query($con,"SELECT * FROM admin WHERE username='$username' AND password='$password' ")
				or die ('cannot login' . mysql_error());
			$row=mysqli_fetch_array  ($result);
			$run_num_rows = mysqli_num_rows($result);
							
							global $con;
						if ($run_num_rows > 0 )
						{
							session_start ();
							$_SESSION['id'] = $row['adminid'];
							header ("location:admin_home.php");
						}
						
					
	}

?>