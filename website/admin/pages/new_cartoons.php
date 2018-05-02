<!DOCTYPE html>
<?php
session_start();

if(!isset($_SESSION['user_name'])){
	header("location: login.php");
	}
else {
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
                          <li>
                            <a href="transaction.php"><i class="fa fa-photo fa-fw"></i>Transaction</span></a>
                        </li>              
                    </ul>
                </div>
                <!-- /.sidebar-collapse -->
            </div>
          
        </nav>

        <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                  <h1 class="page-header">  <span class="fa fa-edit"></span>Upload Cartoons and music</h1>
                </div>
                
            </div>
            <!-- /.row -->
            <form action="uploads.php" method="post" enctype="multipart/form-data">
                <div class="col-md-4">
                    <div class="form-group">
                                            <?php
include('../includes/db.php');
$name= mysqli_query($con,"select * from cover_pic");

echo '<select class="form-control" name="title">';
echo '<option selected="selected">Select</option>';
 while($res= mysqli_fetch_assoc($name))
{

echo '<option>';
echo $res['name'];
echo'</option>';
}
echo'</select>';

?>
                                      
                     </div><br>
                     <div class="form-control">
                         <?php
include('../includes/db.php');
$name= mysqli_query($con,"select * from cover_pic");

echo '<select class="form-control" name="option">';
echo '<option selected="selected">Select</option>';
 while($res= mysqli_fetch_assoc($name))
{

echo '<option>';
echo $res['cover_id']."---->".$res['name'];
echo'</option>';
}
echo'</select>';

?>
                     </div>

    <input class="form-control" type="file" name="file" /><br>
     <button type="submit" class="btn btn-success" name="btn-upload">Submit Button</button>
     </div>
     <div class="row">
        <div class="col-md-12">
            <div class="panel-body">
                <h1 class="page-header">  <span class="fa fa-edit"></span>Cartoons</h1>
    <div class="dataTable_wrapper">
        <table class="table table-striped table-bordered table-hover" id="dataTables-example">
            <thead>
                <tr>

                    <th>Title</th>
                    <th>size</th>
                    <th>view</th>
                    <th>delete</th>
                </tr>
            </thead>


<?php
    include("../includes/db.php");
    $sql="SELECT * FROM tbl_uploads  where type='video/mp4'";
    $result_set=mysqli_query($con,$sql);
    while($row=mysqli_fetch_array($result_set))
    {
        $video_id = $row['id'];
        ?>
        <tr>
        <td><?php echo $row['file'] ?></td>
        <td><?php echo $row['size'] ?></td>
        <td><video width="300" height="200" controls><source src="uploads/<?php echo $row['file'] ?>" type=""><a href="uploads/<?php echo $row['file'] ?>" target="_blank"></a></video></td>
        <td><a href="cartoons_delete.php?del=<?php echo $video_id;?>"><button type="button" class="btn btn-success"><span class="fa fa-trash-o">&nbsp;</span>Delete</button></a>
  
        </td>
        </tr>
        <?php
    }
    ?>
    


</table>
</div>
</div>
            
        </div>
        <div class="row">
            <div class="col-md-12">
                 <div class="panel-body">
                     <h1 class="page-header">  <span class="fa fa-edit"></span>Music</h1>
    <div class="dataTable_wrapper">
        <table class="table table-striped table-bordered table-hover" id="dataTables-example">
            <thead>
                <tr>

                    <th>Title</th>
                    <th>size</th>
                    <th>view</th>
                    <th>delete</th>
                </tr>
            </thead>


<?php
    include("../includes/db.php");
    $sql="SELECT * FROM tbl_uploads where type='audio/mp3'";
    $result_set=mysqli_query($con,$sql);
    while($row=mysqli_fetch_array($result_set))
    {
        $music_id = $row['id'];
        ?>
        <tr>
        <td><?php echo $row['file'] ?></td>
        <td><?php echo $row['size'] ?></td>
        <td><audio controls><source src="uploads/<?php echo $row['file'] ?>" type=""</audio></td>
        <td><a href="cartoons_delete.php?del=<?php echo $music_id;?>"><button type="button" class="btn btn-success"><span class="fa fa-trash-o">&nbsp;</span>Delete</button></a>

        </td>
        </tr>
        <?php
    }
    ?>
    


</table>
</div>
</div>

            </div>

        </div>
         
     </div>
    </form>
    <br /><br />
    <?php
    if(isset($_POST['success']))
    {
        ?>
        
        <?php
    }
    else if(isset($_POST['fail']))
    {
        ?>
        <label>Problem While File Uploading !</label>
        <?php
    }
    else
    {
        ?>
        
        <?php
    }
    ?>
</body>
</html>
<?php
    }
    ?>