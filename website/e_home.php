<!DOCTYPE HTML> 
<html> 
    <head> 
        <title>Kids Learning and Fun</title>         
        <meta charset="utf-8" /> 
        <meta name="viewport" content="width=device-width, initial-scale=1" /> 
        <link rel="stylesheet" href="assets/css/main.css" /> 
        <link rel="stylesheet" type="text/css" href="admin/bower_components/bootstrap/dist/css/bootstrap.css"> 
    </head>     
    <body style="background-color: #bab055;"> 
        <div id="wrapper"> 
            <section id="intro" class="main"> 
                <div class="row"> 
                    <?php 
                   include("admin/includes/db.php");
                global $con;
                $query = mysqli_query($con,"SELECT *FROM product  ORDER BY product_id DESC") or die (mysqli_error($con));
                
                    while($fetch = mysqli_fetch_array($query))
                        {
                            
                        $pid = $fetch['product_id'];
                        
                        $query1 = mysqli_query($con,"SELECT * FROM stock WHERE product_id = '$pid'") or die (mysql_error());
                        $rows = mysqli_fetch_array($query1);
                        
                        $qty = $rows['qty'];
                        if($qty <= 5){
                        
                        }else{
                        
                            
                            echo "<div class='col-md-4'>"; 
                            echo "<h5><b><a style='text-decoration:none;color:#444444' class='' href='e_details.php?id=".$fetch['product_id']."'><img style='width:220px;height:220px;' class='thumbnail' src='photo/".$fetch['product_image']."'>".$fetch['product_name']."</h5></b></a>";
                            echo "P".$fetch['product_price']."";
                            echo "</div>";
                        
                            
                            
                        }
                            
                        }
            ?> 
                    <!-- .row -->                     
                </div>                 
                <ul class="actions"> 
                    <li>                          
</li>                     
                </ul>                 
            </section>
            <a href="index.php" class="button big" style="box-shadow: inset 0 0 0 2px #444444;
color: #444444;">Back</a> 
            <!-- Items -->             
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
    </div>     
    <!-- Scripts -->     
    <script src="assets/js/jquery.min.js"></script>     
    <script src="assets/js/skel.min.js"></script>     
    <script src="assets/js/util.js"></script>     
    <script src="assets/js/main.js"></script>     
</body> 
