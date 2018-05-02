<!DOCTYPE html>
<?php
session_start();

if(!isset($_SESSION['user_name'])){
	header("location: login.php");
	}
else {
	?>
<html >

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
                  <h1 class="page-header">  <span class="fa fa-edit"></span>Create new Lessons</h1>
                </div>
                
            </div>
            
            <div class="row">
			
			 <div class="col-lg-6">
                <form role="form" action="" method="POST" enctype="multipart/form-data">
                                        <div class="form-group">
                                            <label>Subject</label>
                                           <select style="width:100px;" class="form-control" name="subjects">
                                               <option></option>
                                               <option>MATH</option>
                                               <option>SCIENCE</option>
                                               <option>Drawing</option>
                                               <option>Alphabetical letters</option>
                                           </select>
                                        </div>
                                     <div class="form-group">
                                         <label>categories</label>
                                          <select style="width:100px" class="form-control" name="categories">
                                              <option></option>
                                              <option>animals</option>
                                              <option>planets</option>
                                              <option>addition</option>
                                              <option>subtraction</option>
                                          </select>
                                     </div>
                                        
                                        
                                        <div class="form-group">
                                            <label>create new lessons</label>
                                            <textarea class="form-control" rows="8" name="lessons"></textarea>
                                        </div>
                                         <div class="form-group">
                                            <label>Image </label>
                                            <p class="form-control-static">upload image size 50kb to 100kb</p>
                                        </div>
                                        <div class="form-group">
                                            <label>Upload image</label>
                                            <input style="width:250px" class="form-control" type="file" name="image">
                                        </div>
										 <button type="submit" class="btn btn-default" name="submit">Submit Button</button>
										</form>
                        </div>
                        </div>
                        
                   
             
        </div>
    

    </div>
    
</body>

</html>

<?php 

include('../includes/db.php');


if(isset($_POST['submit'])){


    $title = $_POST['subjects'];
    $lesson = $_POST['lessons'];
    $categories=$_POST['categories'];
    $image_name = $_FILES['image']['name'];
    $image_type = $_FILES['image']['type'];
    $image_size = $_FILES['image']['size'];
    $image_tmp  = $_FILES['image']['tmp_name'];
    

    
    if($lesson==''){
    echo "<script>alert('Any field is empty')</script>";
    
    }
    if($image_type=="image/jpeg" or $image_type=="image/png" or
    $image_type=="image/gif"){
        
        if($image_size<=500000){
        move_uploaded_file($image_tmp,"../uploaded_image/$image_name");
        }
        else{
        echo "<script>alert('Image size is larger, only 50kb size is allowed ')</script>";
        }   
        
    
    }
    else{
    echo "<script>alert('Image type is invalid')</script>";
    }
    
    $query = "insert into subject(sub_name,sub_lesson,image,categories) 
            values('$title','$lesson','$image_name','$categories')";
    
    if(mysqli_query($con,$query)){
    
    echo "<script>alert('Published')</script>";
    
    }
    
}}

?>

