<?php
include("../includes/db.php");
header("location: index.php?view_post=view_post");

$delete_id = $_GET['del'];

$delete_query = "delete from post where id='$delete_id'";

if(mysqli_query($con,$delete_query)){
	
	echo "<script>alert('Deleted');</script>";
	}
	
	
	
?>