<?php

include('../includes/db.php');
if(isset($_POST['btn-upload']))
{    
    $title=$_POST['title'];
    $option=$_POST['option'];
	$file = rand(1000,100000)."-".$_FILES['file']['name'];
    $file_loc = $_FILES['file']['tmp_name'];
	$file_size = $_FILES['file']['size'];
	$file_type = $_FILES['file']['type'];
	
	$folder="uploads/";
	//directory//
	
	$new_size = $file_size/1024;  
	// new file size in KB
	
	
	$new_file_name = strtolower($file);
	
	
	$final_file=str_replace(' ','-',$new_file_name);
	
	if(move_uploaded_file($file_loc,$folder.$final_file))
	{
		$sql="INSERT INTO tbl_uploads(file,type,size,cover_id,name) VALUES('$final_file','$file_type','$new_size','$option','$title')";
		mysqli_query($con,$sql);
		?>
		<script>
		alert('successfully uploaded');
		window.location.href='new_cartoons.php?success';
        </script>
		<?php
	}
	else
	{
		?>
		<script>
		alert('File is to big');
		window.location.href='new_cartoons.php?success';
        </script>
		<?php
	}
}
?>