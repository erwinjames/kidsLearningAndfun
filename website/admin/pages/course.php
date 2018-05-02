<!DOCTYPE html>
<?php
session_start();

if(!isset($_SESSION['user_name'])){
	header("location: login.php");
	}
else {
include ("../includes/db.php");

$sql = "select * FROM post";
$run = mysqli_query($con,$sql);
$total_post=mysqli_num_rows($run);

$sql = "select * FROM gallary";
$run = mysqli_query($con,$sql);
$total_image=mysqli_num_rows($run);

$sql = "select * FROM user";
$run = mysqli_query($con,$sql);
$total_user=mysqli_num_rows($run);

$sql = "select * FROM course";
$run = mysqli_query($con,$sql);
$total_course=mysqli_num_rows($run);



?>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Dashboard</title>

    <link href="../bower_components/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="../dist/css/sb-admin-2.css" rel="stylesheet">


</head>

<body>

    <div id="wrapper">

        
        <nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.php">Dashboard</a>
            </div>
           

            <ul class="nav navbar-top-links navbar-right">
                
                    <ul>
                        
                        <li><a href="logout.php"><i class="fa fa-sign-out fa-fw"></i> Logout</a>
                        </li>
                    </ul>
                    
                
                
            </ul>
            

            <nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.php">Dashboard</a>
            </div>
            <ul class="nav navbar-top-links navbar-right">
                
                    <ul>
                        
                        <li><a href="logout.php"><i class="fa fa-sign-out fa-fw"></i> Logout</a>
                        </li>
                    </ul>
                    
                
                
            </ul>
            <div class="navbar-default sidebar" role="navigation">
                <div class="sidebar-nav navbar-collapse">
                    <ul class="nav" id="side-menu">
                       
                        <li>
                            <a href="index.php"><i class="fa fa-dashboard fa-fw"></i> Dashboard</a>
                        </li>
                        <li>
                            <a href="new_images.php"><i class="fa fa-edit fa-fw"></i>Upload Cover Photo</a>
                        </li>
                        <li>
                            <a href="images.php"><i class="fa fa-photo fa-fw"></i> View All Image</span></a>
                        </li>
                          <li>
                            <a href="new_cartoons.php"><i class="fa fa-photo fa-fw"></i>Cartoons and Music</span></a>
                        </li>
                              
                          <li>
                            <a href="new_lessons.php"><i class="fa fa-photo fa-fw"></i>new lessons</span></a>
                        </li>     
                           <li>
                            <a href="storytime.php"><i class="fa fa-photo fa-fw"></i>new story</span></a>
                        </li>
                         </li>     
                           <li>
                            <a href="storytime.php"><i class="fa fa-photo fa-fw"></i>Transaction</span></a>
                        </li>                 
                    </ul>
                </div>
                <!-- /.sidebar-collapse -->
            </div>
            
        </nav>

          



<div class="row">
    <div class="col-md-3"></div>
                <div class="col-md-9">
                    <div class="panel panel-default">
                        <div class="panel-heading">
	<div class="panel-heading">
		
	</div>
 <div class="panel-body">
	<div class="dataTable_wrapper">
		<table class="table table-striped table-bordered table-hover" id="dataTables-example">
			<thead>
				<tr>
					<th>S.No.</th>
					<th>Title</th>
					<th>Story</th>
					<th>Edit</th>
					<th>Delete</th>
				</tr>
			</thead>


	<?php
include("../includes/db.php");
$i=1;


	$query="select * from course";
	$run=mysqli_query($con,$query);
	
while($row=mysqli_fetch_array($run)){
	$course_id = $row['id'];
	$title = $row['title'];
	
	$desc = $row['description'];
?>
	
	
	
	 <tbody>
        <tr class="gradeC">
             <td><?php echo $i++; ?></td>
			 <td><?php echo $title; ?></td>
			<td><?php echo $desc; ?></td>
			<td class="center"><a href="course_edit.php?edit=<?php echo $course_id;?>"><button type="button" class="btn btn-success disabled"><span class="fa fa-pencil">&nbsp;</span>Edit</button></a></td>
			<td><a href="course_delete.php?del=<?php echo $course_id;?>"><button type="button" class="btn btn-success"><span class="fa fa-trash-o">&nbsp;</span>Delete</button></a></td>
		</tr>
 </tbody>
                                
<?php } ?>

</table>
</div>
</div>
</div>
</div>
</div>
</div>
<!--Post Section Close-->






        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->

    <!-- jQuery -->
    <script src="../bower_components/jquery/dist/jquery.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="../bower_components/bootstrap/dist/js/bootstrap.min.js"></script>

    <!-- Metis Menu Plugin JavaScript -->
    <script src="../bower_components/metisMenu/dist/metisMenu.min.js"></script>

    <!-- Morris Charts JavaScript -->
    <script src="../bower_components/raphael/raphael-min.js"></script>
    <script src="../bower_components/morrisjs/morris.min.js"></script>
    <script src="../js/morris-data.js"></script>

    <!-- Custom Theme JavaScript -->
    <script src="../dist/js/sb-admin-2.js"></script>


</body>

</html>
<?php } ?>