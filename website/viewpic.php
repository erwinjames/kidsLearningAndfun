<!DOCTYPE HTML> 
<html> 
    <head> 
        <title>Kids Learning and Fun</title>         
        <meta charset="utf-8" /> 
        <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no"> 
        <link rel="stylesheet" href="assets/css/main.css" /> 
        <script src="assets/js/jquery-1.7.min.js"></script>         
        <script src="assets/js/modernizr.custom.34982.js"></script>         
        <script src="assets/js/sketcher.js"></script>         
        <script src="assets/js/trigonometry.js"></script>         
        <link rel="stylesheet" type="text/css" href="admin/bower_components/bootstrap/dist/css/bootstrap.css"> 
        <link rel="stylesheet" href="assets/styles.css" /> 
        <script>
var sketcher = null;

$(document).ready(function(e) {
    
    sketcher = new Sketcher( "sketch" );
});

</script>         
    </head>     
    <body style="background-color: #bab055"> 
        <div id="wrapper"> 
            <!-- Banner -->             
        <section id="intro" class="main">
                <div class="row" style="/* width: 83% */"> 
                    <div class="container" style="/*width: 84%;*/"> 
                            <div class="col-md-3"> 
                            <?php

include('admin/includes/db.php');
  $id=$_GET['pic_id'];
$name= mysqli_query($con,"select * from subject  where id=$id");

 while($res= mysqli_fetch_assoc($name))
{

echo "<img style='width:85%;' class='thumbnail img-responsive' src=admin/uploaded_image/$res[image]></a>";



?> 
                        </div>
                        <div class="col-md-6">
                            <canvas class="img-responsive" id="sketch" width="455" height="500" /> 
                            <!-- <input type="button" class="btn error" value="clear" onclick="sketcher.clear();" /> -->
                        </div>                         
                        <div class="col-md-3">
</div>                         
                    </div>                     
                </div>                 
            <?php } ?> 
            <!-- .row -->             
            </section>             
            <!-- Items -->             
            <ul class="actions"> 
                <li> 
                    <a href="drawing.php" class="button big">Back</a> 
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