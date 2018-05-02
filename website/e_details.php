<!DOCTYPE HTML> 

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
        global $con;
            if(isset($_GET['id'])){
            $id = $_GET['id'];
            $query = mysqli_query($con,"SELECT * FROM product WHERE product_id = '$id' ");
            $row = mysqli_fetch_array($query);
        ?>
                <div>
                    <center>
                        <img class="img-polaroid" style="width:400px; height:350px;" src="photo/<?php echo $row['product_image']; ?>">
                        <h2 class="text-uppercase bg-primary"><?php echo $row['product_name']?></h2>
                        <h3 class="text-uppercase">Php <?php echo $row['product_price']?></h3>
                        <?php echo "<a href='e_cart.php?id=".$id."&action=add'><input type='submit' class='btn btn-inverse' name='add' value='Add to Cart'></a> &nbsp;  <a href='product1.php'><button class='btn btn-inverse'>Back</button></a> " ?>
                    </center>
                </div>
        <?php }?>
        
        
            
        
  

                    </div>
                    
                   
                    
                
                                  
                    <!-- .row -->                     
                </div> 
                              
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