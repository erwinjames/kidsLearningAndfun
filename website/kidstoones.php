<!DOCTYPE HTML> 
<!--
	Epilogue by TEMPLATED
	templated.co @templatedco
	Released for free under the Creative Commons Attribution 3.0 license (templated.co/license)
--> 
<html> 
    <head> 
        <title>Kids Learning and Fun</title>         
        <meta charset="utf-8" /> 
        <meta name="viewport" content="width=device-width, initial-scale=1" /> 
        <link rel="stylesheet" href="assets/css/main.css" /> 
        <link rel="stylesheet" type="text/css" href="admin/bower_components/bootstrap/dist/css/bootstrap.css"> 
    </head>     
    <body style="background: #bab055;background-image: url('images/minions-in-cinema-1920x1080-wallpaper.jpg');background-position: center center;color: #bab055;"> 
        <div id="wrapper"> 
            <!-- Banner -->             
            <section id="intro" class="main"> 
                <div class="container"> 
                    <div class="row"> 
                        <?php
include("admin/includes/db.php");

$sql="select cover_pic.*,tbl_uploads.file from cover_pic join tbl_uploads on cover_pic.cover_id=tbl_uploads.cover_id where type='video/mp4' order by name ASC";
$run=mysqli_query($con,$sql);
    
while($row=mysqli_fetch_array($run)){
    $image_name = $row['image'];
    $cover_pic = $row['cover_id'];
   ?> 
                            <div class="col-md-2"> 
                                <div class="itemsss thumbnail" style="text-decoration: none;"> 
                                    <a style="background:none;text-decoration: none;" href='videotv.php?cover_id=<?php echo $cover_pic; ?>'> 
                                        <img class=" img-responsive text-align" src="admin/uploaded_image/<?php echo $image_name; ?>" style="width:220px; height:200px;">
                                        <h5 style="text-align: center;text-decoration: none;color:#fff"><b><?php echo $row['name']; ?></b><button style="margin-top:30px;" class="btn   ">PLAY</button></h5> 

                                        
                                    </a>  
                                                                     
                                </div>                                 
                            </div>                             
                            <!-- /.col-md-4 -->                             
                        <?php }?> 
                    </div>                     
                    <!-- .row -->                     
                </div>                 
            </section>             
            <ul class="actions">
                <a href="index.php" class="button big" style="color: #b8a524;">Back</a> 
                <li> 
</li>                 
            </ul>             
            <footer id="footer"> 
                <ul class="icons"> 
                    <li> 
                        <a href="#" class="icon fa-twitter"><span class="label">Twitter</span></a> 
                    </li>                     
                    <li> 
                        <a href="#" class="icon fa-facebook"><span class="label">Facebook</span></a> 
                    </li>                     
                    <li> 
                        <a href="#" class="icon fa-instagram"><span class="label">Instagram</span></a> 
                    </li>                     
                    <li> 
                        <a href="#" class="icon fa-linkedin"><span class="label">LinkedIn</span></a> 
                    </li>                     
                    <li> 
                        <a href="#" class="icon fa-envelope"><span class="label">Email</span></a> 
                    </li>                     
                </ul>                 
                <p class="copyright">&copy;Kids Learning and Fun</p>
            </footer>             
        </div>         
        <!-- Scripts -->         
        <script src="assets/js/jquery.min.js"></script>         
        <script src="assets/js/skel.min.js"></script>         
        <script src="assets/js/util.js"></script>         
        <script src="assets/js/main.js"></script>         
    </body>     
</html>