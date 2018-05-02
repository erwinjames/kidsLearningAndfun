<?php
include("../includes/db.php");
header("location: new_cartoons.php");

$delete_id = $_GET['del'];

$delete_query = "delete from tbl_uploads where id='$delete_id'";

if(mysqli_query($con,$delete_query)){
	
	echo "<script>alert('Deleted');</script>";
	}
	
	
	
?>