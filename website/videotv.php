<!DOCTYPE html> 
<html> 
    <head> 
        <meta charset="UTF-8"> 
        <meta http-equiv="X-UA-Compatible" content="IE=edge"> 
        <meta name="viewport" content="width=device-width, initial-scale=1.0,maximum-scale=1"> 
        <title>Kids Learning and fun</title>         
        <!-- Loading third party fonts -->         
        <link href="http://fonts.googleapis.com/css?family=Arvo:400,700|" rel="stylesheet" type="text/css"> 
        <link href="fonts/font-awesome.min.css" rel="stylesheet" type="text/css"> 
        <!-- Loading main css file -->         
        <link rel="stylesheet" href="style.css"> 
        <link href="Main.css" rel="stylesheet" /> 
    </head>     
    <body> 
        
        <div id="site-content"> 
            <header class="site-header">                        
                        <div class="container"> 
                            <div class="row"> 
                                <div class="col-md-0">
</div>
                                <?php
            
include("admin/includes/db.php");
$cover_pic = $_GET['cover_id'];
Global $con;

$run =mysqli_query($con,"select * from tbl_uploads where cover_id=$cover_pic");
    if ($run==false) {
        echo "error";
    }
while($row=mysqli_fetch_array($run)){
    $file =$row['file'];
    $name = $row['name'];
   ?> 
                                    <div class="col-md-12"> 
                                        <div id="vid"> 
                                            <div class="frame"> 
                                                
                                                     <video style="overflow:hidden;margin-top:50px;" width="100%" height="528px" autoplay="" controls="false">
                                                    <source src="admin/pages/uploads/<?php echo $file; ?>" type=""><a href="admin/pages/uploads/<?php echo $file; ?>" target="_blank"></a>
                                                    </video>
                                                    <h4 style="text-align: center;"><?php echo $name; ?></h4> 
                                                                                             
                                            </div>                                                                                         
                                        </div>                                         
                                    </div>
                                        <?php }?> 
                                    <div class="col-md-0">
</div>                                     
                                    <!-- /.col-md-4 -->                                     
                            
                            </div>                             
                            <!-- .row -->                             
                        </div>                         
                    </div>                     
            </header>             
        </div>         
    </div>     
    <!-- .fullwidth-block -->     
    <!-- .container -->     
</div> 

<script src="js/jquery-1.11.1.min.js"></script> 
<script src="js/plugins.js"></script> 
<script src="js/app.js"></script> 
<script src="jquery-1.10.2.min.js"></script>
