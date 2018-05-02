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
            <div class="row">  
            <form method="post" class="well" style="background-color:#fff;">
    <table class="table">
    <label style="">My Cart</label>
        <tr>
            <th><h5>Image</h5></td>
            <th><h5>Product Name</h5></th>
            <th><h5>Quantity</h5></th>
            <th><h5>Price</h5></th>
            <th><h5>Subtotal</h5></th>
        </tr>
    
<?php
 
ob_start();
include("admin/includes/db.php");
    if (isset($_GET['id']))
    $id=$_GET['id'];
    else
    $id=1;
    if (isset($_GET['action']))
    $action=$_GET['action'];
    else
    $action="empty";

    switch($action)
    {
        
        case "view":
            if (isset($_SESSION['cart'][$id]))
            $_SESSION['cart'][$id];
        break;
        case "add":
            if (isset($_SESSION['cart'][$id]))
            $_SESSION['cart'][$id]++;
            else
            $_SESSION['cart'][$id]=1;
        break;
        case "remove":
            if (isset($_SESSION['cart'][$id]))
            {
                $_SESSION['cart'][$id]--;
                if ($_SESSION['cart'][$id]==0)
                unset($_SESSION['cart'][$id]);
            }
        break; 
    }
if (isset($_SESSION['cart']))
    {   
    
    $total=0;
    foreach($_SESSION['cart'] as $id => $x)
    {
         include("admin/includes/db.php");
        global $con;
    $result=mysqli_query($con,"Select * from product where product_id=$id");
    $myrow=mysqli_fetch_array($result);
    $name=$myrow['product_name'];
    $name=substr($name,0,40);
    $price=$myrow['product_price'];
    $image=$myrow['product_image'];
    $line_cost=$price*$x;
    $total=$total+$line_cost;
    
    
        echo "<tr class='table'>";
        echo "<td><h5><img height='50px' width='40px' src='photo/".$image."'></h5></td>";
        echo "<td><h5><input type='hidden' required value='".$id."' name='pid[]'> ".$name."</h5></td>";
        echo "<td><h5><input type='hidden' required value='".$x."' name='qty[]'> ".$x."</h5></td>";
        echo "<td><h5>".$price."</h5></td>";
        echo "<td><strong><h5>P ".$line_cost."</h5></strong>";
        echo "</tr>";
        }
        
        echo"<tr>";
        echo "<td></td>";
        echo "<td></td>";
        echo "<td></td>";
        echo "<td></td>";
        echo "<td><h6>TOTAL:</h6></td>";
        echo "<td><strong><input type='hidden' value='".$total."' required name='total'><h6 class='text-danger'>P ".$total."</h6></strong></td>";
        echo "<td></td>";
        echo "<td><a class='btn btn-danger btn-sm pull-right' href='e_cart.php?id=".$id."&action=empty'><i class='fa fa-trash-o'></i> Empty cart</a></td>";       
        echo "</tr>";
    }
    else
        echo "<font color='#111' class='alert alert-error'>Cart is empty</font>";

?>
    </table>
        <div class='pull-right'>
    <a href='e_home.php' class='btn btn-inverse btn-lg'>Continue Shopping</a>
    <?php echo "<button name='pay_now' type='submit' class='btn btn-inverse btn-lg' >Purchase</button>";
    include ("function/paypal.php"); 
    ?>
    </form>
                   
                    
                
                                  
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
<? ob_flush(); ?>