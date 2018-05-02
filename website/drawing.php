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
                        <div class="col-md-6">
  <?php
include('admin/includes/db.php');
$name= mysqli_query($con,"select * from subject where sub_name='Drawing' order by id");

 while($res= mysqli_fetch_assoc($name))
{
    $id=$res['id'];
    echo "<hr>";
// href=admin/uploaded_image/$res[image]
echo "<a href=viewpic.php?pic_id=$id><img style='text-align:center;width:40%;' class='img-responsive' src=admin/uploaded_image/$res[image]></a>";

echo '<br>';
echo $res['sub_lesson'];

?>

                    </div>
                    
  <?php } ?>              
                                  
                    <!-- .row -->                     
                </div> 
                             
            </section>           
            <!-- Items -->             
                <ul class="actions"> 
                    <li>
                        <a href="learning.php" class="button big">Back</a>
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