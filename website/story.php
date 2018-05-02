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
    <body style="background-image: url('images/story.jpeg');background-position: center center;background-size: auto;"> 
        <div id="wrapper"> 
            <!-- Banner -->             
            <section id="intro" class="main"> 
                <div class="container"> 
                    <div class="row"> 
                        <?php
include("admin/includes/db.php");

// "select cover_pic.*,story.image from cover_pic join story on cover_pic.cover_id=story.cover_id"
$run=mysqli_query($con,"select * from cover_pic where types='story' order by cover_id");
    if ($run == false) {
        echo "something wrong?";
    }
while($ros=mysqli_fetch_array($run)){
    $cover_pic = $ros['cover_id'];
       ?> 
                            <div class="col-md-3"> 
                                <div id="vid"> 
                                    <div class="frame"> 
                                        <div class="item actions" style="text-align: center;"> 
                                            <a style="background:none;text-decoration:none;" href='turn/index.php?cover_id=<?php echo $cover_pic;?>'> 
                                                <img class="thumbnail img-responsive" style="/* width:70% */height:250px;" src="admin/uploaded_image/<?php echo $ros['image']; ?>" ""> 
                                                <center> 
                                                    <h5 style="text-align: center;"><?php echo $ros['name']; ?></h5>
                                                </center>                                                 
                                            </a>                                             
                                        </div>                                         
                                    </div>                                     
                                </div>                                 
                            </div>                             
                            <!-- /.col-md-4 -->                             
                        <?php }?> 
                    </div>                     
                    <!-- .row -->                     
                </div>                 
                <ul class="actions"> 
                    <li>                          
</li>                     
                </ul>                 
            </section>
            <a href="index.php" style="color:yellow;text-decoration:none;" class="button big">Back</a> 
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
                        <a href="#" class="icon fa-envelope" style="/* color: #444444 */"><span class="label">Email</span></a> 
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