<!DOCTYPE html> 
<html lang="en"> 
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
        <!--[if lt IE 9]>
		<script src="js/ie-support/html5.js"></script>
		<script src="js/ie-support/respond.js"></script>
		<![endif]-->         
    </head>     
    <body> 
        <div class="primary-header"> 
            <div class="colors"> 
                <div class="container"> 
                    <img src="images/logo.png" style="width: 14%"> 
                    <!-- #branding -->                     
                    <div class="main-navigation"> 
                        <button type="button" class="menu-toggle"> 
                            <i class="fa fa-bars"></i> 
                        </button>                         
                        <ul class="menu"> 
                            <li class="menu-item "> 
                                <a href="index.php" style="background-color:blue;color:white;font-weight: lighter;text-align: center;font-style: italic;font-variant: small-caps;">Home</a> 
                            </li>                             
                            <li class="menu-item"> 
                                <a href="School_items.php" style="background-color:#b6d97a;color:white;font-weight: lighter;text-align: center;font-style: italic;">School Items</a> 
                            </li>                             
                            <li class="menu-item"> 
                                <a href="login.php" style="background-color:orange;color: white;font-weight: lighter;text-align: center;font-style: italic;">login</a> 
                            </li>                             
                            <li class="menu-item"> 
                                <a href="signup.php" style="background-color:red;color: white;font-weight: lighter;text-align: center;font-style: italic;">Signup</a> 
                            </li>                             
                        </ul>                         
                        <!-- .menu -->                         
                    </div>                     
                    <!-- .main-navigation -->                     
                    <div class="mobile-navigation"></div>                     
                </div>                 
            </div>             
            <!-- .container -->             
        </div>         
        <div id="site-content">
            <header class="site-header">
                <div class="container"> 
                    <div class="fullwidth-block" style="border-radius: 23px;text-shadow: #796a6a;"> 
                        <!-- .primary-header -->                         
           
                        <div class="back"> 
                            <div class="row"> 
                                <div class="container"> 
                                    <div class="col-md-6"> 
                                        <div style="color:white;"> 
                                             <?php
include('admin/includes/db.php');
$name= mysqli_query($con,"select * from subject where categories='animals' order by id");

 while($res= mysqli_fetch_assoc($name))
{

echo "<img style='margin-left:20%;text-align:center;' class='img-responsive' src=admin/uploaded_image/$res[image]>";

echo '<br>';
echo $res['sub_lesson'];

?>

                                            </div>                                             
                                        </div>                                         
                                 </div>
                                                                   
                                </div>                                 
                            </div>                             
                        </div>
                    </div>                     
            </header>             
        </div>
    <?php } ?>         
    </div>     
    <main class="main-content"> 
        <!-- /.col-md-4 -->         
    </div>     
    <!-- .row -->     
</div>  
<!-- .fullwidth-block --> 
<!-- .container --> 
<!-- .fullwidth-block --> 
<!-- <footer class="site-footer"> 
    <div class="container"> 
        <div class="row"> 
            <div class="col-md-3"> 
                <div class="widget"> 
                    <h3 class="widget-title">Contact us</h3> 
                    <address>Lincoln High School <br>745 Jewel Ave Street <br>Fress Meadows, NY 1136</address> 
                    <a href="mailto:info@lincolnhighschool.com">info@lincolnhighschool.com</a> 
                    <br> 
                    <a href="tel:48942652394324">(489) 42652394324</a> 
                </div>                 
            </div>             
            <div class="col-md-3"> 
                <div class="widget"> 
                    <h3 class="widget-title">Social media</h3> 
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p> 
                    <div class="social-links circle"> 
                        <a href="#"><i class="fa fa-facebook"></i></a> 
                        <a href="#"><i class="fa fa-google-plus"></i></a> 
                        <a href="#"><i class="fa fa-twitter"></i></a> 
                        <a href="#"><i class="fa fa-pinterest"></i></a> 
                    </div>                     
                </div>                 
            </div>             
            <div class="col-md-3"> 
                <div class="widget"> 
                    <h3 class="widget-title">Featured students</h3> 
                    <ul class="student-list"> 
                        <li> 
                            <a href="#"> 
                                <img src="dummy/student-sm-1.jpg" alt="" class="avatar"> 
                                <span class="fn">Sarah Branson</span> 
                                <span class="average">Average: 4,9</span> 
                            </a>                             
                        </li>                         
                        <li> 
                            <a href="#"> 
                                <img src="dummy/student-sm-2.jpg" alt="" class="avatar"> 
                                <span class="fn">Dorothy Smith</span> 
                                <span class="average">Average: 4,9</span> 
                            </a>                             
                        </li>                         
                    </ul>                     
                </div>                 
            </div>             
            <div class="col-md-3"> 
                <div class="widget"> 
                    <h3 class="widget-title">Newsletter</h3> 
                    <p>Aspernatur, rerum. Impedit, deleniti suscipit</p> 
                    <form action="#" class="subscribe"> 
                        <input type="email" placeholder="Email Address..."> 
                        <input type="submit" class="light" value="Subscribe"> 
                    </form>                     
                </div>                 
            </div>             
        </div>         
        <div class="copy">Copyright 2014 Lincoln High School. All rights reserved.</div>         
    </div>     
</footer> 
 -->
<script src="js/jquery-1.11.1.min.js"></script> 
<script src="js/plugins.js"></script> 
<script src="js/app.js"></script> 
<script src="jquery-1.10.2.min.js"></script>
