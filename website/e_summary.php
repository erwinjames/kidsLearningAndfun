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
                        <form method="post" class="well"  style="background-color:#fff; overflow:hidden;">
    <table class="table" style="width:50%;">
    <label style="font-size:25px;">Summary of Order/s</label>
        <tr>
            <th><h5>Quantity</h5></td>
            <th><h5>Product Name</h5></td>
            <th><h5>Size</h5></td>
            <th><h5>Price</h5></td>
        </tr>
        
        <?php
          include("admin/includes/db.php");
        global $con;
        $t_id = $_GET['tid'];
        $query = mysqli_query($con,"SELECT * FROM transaction WHERE transaction_id = '$t_id'") or die (mysql_error());
        $fetch = mysqli_fetch_array($query);
        
        $amnt = $fetch['amount'];
        $t_id = $fetch['transaction_id'];
        
        $query2 = mysqli_query($con,"SELECT * FROM transaction_detail LEFT JOIN product ON product.product_id = transaction_detail.product_id WHERE transaction_detail.transaction_id = '$t_id'") or die (mysql_error());
        while($row = mysqli_fetch_array($query2)){
        
        $pname = $row['product_name'];
        $psize = $row['product_size'];
        $pprice = $row['product_price'];
        $oqty = $row['order_qty'];
        
        echo "<tr>";
        echo "<td>".$oqty."</td>";
        echo "<td>".$pname."</td>";
        echo "<td>".$psize."</td>";
        echo "<td>".$pprice."</td>";
        echo "</tr>";
        }
        ?>

    </table>
    <legend></legend>
    <h4>TOTAL: Php <?php echo $amnt; ?></h4>
    </form>

                             
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