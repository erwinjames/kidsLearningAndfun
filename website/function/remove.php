<?php
include('../db/dbconn.php');

$id = $_POST['id'];
global $con;
 mysqli_query($con,"DELETE FROM product WHERE product_id = '$id'") or die(mysql_error());

?>