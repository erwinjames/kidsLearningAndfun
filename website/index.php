<!DOCTYPE HTML> 
<?php session_start();
include("admin/includes/db.php");

 ?>
<html> 
    <head> 
        <title>Kids Learning and Fun</title>         
        <meta charset="utf-8" /> 
        <meta name="viewport" content="width=device-width, initial-scale=1" /> 
        <link rel="stylesheet" href="assets/css/main.css" /> 
        <link rel="stylesheet" href="assets/css/font-awesome.min.css" /> 
    </head>     
    <body> 
        <!-- Header -->         
        <header id="header" class="alt"> 
            <div class="inner"> 
</div>             
        </header>         
        <!-- Wrapper -->         
        <div id="wrapper"> 
            <!-- Banner -->             
            <section id="intro" class="main"> 
                <h3 style="font-size: 30px;">Welcome!!!</h3> 
                <ul class="actions"> 
                    <li>
                        <?php if (isset($_SESSION['usr_id'])) { ?>
                            <a href=""><p><?php echo $_SESSION['usr_name']; ?></p></a>
                            <a href="logout.php" class="button big" style="box-shadow: inset 0 0 0 2px #444444;">Log out</a>
                            <div class="actions">
                                <a href="e_home.php"><i class="fa fa-shopping-cart fa-2x"></i></a>
                            </div>
                            <?php } else { ?>
                            <span class="icon major"><img style="width: 300px;" class="img-responsive" src="images/logo.png"></span> 
                            <a href="Login.php" class="button big">Log In</a>
                            <a href="signup.php" class="button big">Sign Up?</a>
                        <?php } ?>
                    </li>                     
                </ul>                 
            </section>             
            <!-- Items -->             
            <section class="main items"> 
                <article class="item"> 
                    <header> 
                        <a href="kidstoones.php">
                            <img src="images/minions-in-cinema-1920x1080-wallpaper.jpg" alt="" />
                        </a>                         
                        <h3>Kidstoons</h3> 
                    </header>                     
                    <p>Having fun of watching cartoons</p> 
                    <ul class="actions"> 
                        <li>
                            <a href="kidstoones.php" class="button" style="box-shadow: inset 0 0 0 2px #444444;color: #444444;">More</a>
                        </li>                         
                    </ul>                     
                </article>                 
                <article class="item"> 
                    <header> 
                        <a href="music.php">
                            <img src="images/music.jpeg" alt="" />
                        </a>                         
                        <h3>Music</h3> 
                    </header>                     
                    <p>kids can play music they want</p> 
                    <ul class="actions"> 
                        <li>
                            <a href="music.php" class="button" style="box-shadow: inset 0 0 0 2px #444444;
color: #444444;">More</a>
                        </li>                         
                    </ul>                     
                </article>                 
                <article class="item"> 
                    <header> 
                        <a href="story.php">
                            <img src="images/story.jpeg" alt="" />
                        </a>                         
                        <h3>Story</h3> 
                    </header>                     
                    <p>Fun of reading books? this section may best for you</p> 
                    <ul class="actions"> 
                        <li>
                            <a href="story.php" class="button" style="box-shadow: inset 0 0 0 2px #444444;">More</a>
                        </li>                         
                    </ul>                     
                </article>                 
                <article class="item"> 
                    <header> 
                        <a href="learning.php">
                            <img src="images/learning.jpeg" alt="" />
                        </a>                         
                        <h3>Learning</h3> 
                    </header>                     
                    <p>Want to be engeneers, astrounots this section well help you to achive that</p> 
                    <ul class="actions"> 
                        <li>
                            <a href="learning.php" class="button" style="box-shadow: inset 0 0 0 2px #444444;">More</a>
                        </li>                         
                    </ul>                     
                </article>                 
            </section>             
            <footer id="footer"> 
                <ul class="icons"> 
                    <li>
                        <a href="#" class="icon fa-twitter" style="color: #444444;"><span class="label">Twitter</span></a>
                    </li>                     
                    <li>
                        <a href="#" class="icon fa-facebook" style="color: #444444;"><span class="label">Facebook</span></a>
                    </li>                     
                    <li>
                        <a href="#" class="icon fa-instagram" style="color: #444444;"><span class="label">Instagram</span></a>
                    </li>                     
                    <li>
                        <a href="#" class="icon fa-linkedin" style="color: #444444;"><span class="label">LinkedIn</span></a>
                    </li>                     
                    <li>
                        <a href="#" class="icon fa-envelope" style="color: #444444;"><span class="label">Email</span></a>
                    </li>                     
                </ul>                 
                <p class="copyright" style="color: #444444;">&copy;Kids Learning and Fun</p> 
            </footer>             
        </div>         
        <!-- Scripts -->         
        <script src="assets/js/jquery.min.js"></script>         
        <script src="assets/js/skel.min.js"></script>         
        <script src="assets/js/util.js"></script>         
        <script src="assets/js/main.js"></script>         
    </body>     
</html>