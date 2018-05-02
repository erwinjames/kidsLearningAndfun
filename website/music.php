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
    </head>     
    <body> 
             
        <div id="wrapper"> 
            <!-- Banner -->             
          <section id="intro" class="main"> 
      <div class="container"> 
                        <div class="row"> 
                        <?php
include("admin/includes/db.php");

$sql="select cover_pic.*,tbl_uploads.file from cover_pic join tbl_uploads on cover_pic.cover_id=tbl_uploads.cover_id where type='audio/mp3' order by name ASC";
$run=mysqli_query($con,$sql);
    
while($row=mysqli_fetch_array($run)){
    $image_name = $row['image'];
    $cover_pic = $row['cover_id'];
   ?> 
         
                           <div class="col-md-4"> 
                                <div id="vid"> 
                                    <div class="frame">
                                        <div id="VideoPanel" style="background: #d0a639;background-image: url('images/Frame.png');background-size: cover;background-origin: padding-box;background-position: center center;width: 250px;"> 
                                            <img class="img-responsive text-align" src="admin/uploaded_image/<?php echo $image_name; ?>" style="width:200px; height:250px;margin-left: 24px;padding: 21px;box-shadow: 10px 1px 100px #285173;margin-top: 48px;background-image: url('images/Frame.png');background-size: contain;background-position: center center;text-shadow: none;">
                                            <h4 style="text-align: center;"><?php echo $row['name']; ?></h4>
                                        </div>
                                    </div>                                     
                                    <!-- <div id="controls">
                                        <div id="seek-bar">
                                            <div id="fill"></div>
                                        </div>                                         
                                        <div class="play">
                                           <!--  <a style="background:none" href="admin/pages/uploads/<?php echo $row['file'] ?>"> -->
                                            <a style="background:none" href='videotv.php?cover_id=<?php echo $cover_pic; ?>'> 
                                                <img src="images/Play.png" style="margin-left: 94px;margin-top: 64px;">
                                            </a>
                                        </div>                                         
                                    </div> -->                                     
                                </div>                                 
                            </div>                             
                            <!-- /.col-md-4 -->                             
                        <?php }?> 
                    </div>                     
                    <!-- .row -->                     
                </div> 
                <ul class="actions"> 
                    <li>
                        <a href="index.php" class="button big">Back</a>
                    </li>                     
                </ul>                 
            </section>           
            <!-- Items -->             
             
             
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