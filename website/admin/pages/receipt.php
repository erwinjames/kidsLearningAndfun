<!DOCTYPE html>
<?php
session_start();

if(!isset($_SESSION['user_name'])){
	header("location: login.php");
	}
else {
include ("../includes/db.php");

$sql = "select * FROM post";
$run = mysqli_query($con,$sql);
$total_post=mysqli_num_rows($run);

$sql = "select * FROM gallary";
$run = mysqli_query($con,$sql);
$total_image=mysqli_num_rows($run);

$sql = "select * FROM user";
$run = mysqli_query($con,$sql);
$total_user=mysqli_num_rows($run);

$sql = "select * FROM course";
$run = mysqli_query($con,$sql);
$total_course=mysqli_num_rows($run);



?>

<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Dashboard</title>

    <link href="../bower_components/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="../dist/css/sb-admin-2.css" rel="stylesheet">
    


</head>

<body>

    <div id="wrapper">

        <!-- Navigation -->
         <nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.php">Dashboard</a>
            </div>
            <ul class="nav navbar-top-links navbar-right">
                
                    <ul>
                        
                        <li><a href="logout.php"><i class="fa fa-sign-out fa-fw"></i> Logout</a>
                        </li>
                    </ul>
                    
                
                
            </ul>
            <div class="navbar-default sidebar" role="navigation">
                <div class="sidebar-nav navbar-collapse">
                    <ul class="nav" id="side-menu">
                       
                        <li>
                            <a href="index.php"><i class="fa fa-dashboard fa-fw"></i> Dashboard</a>
                        </li>
                        <li>
                            <a href="new_images.php"><i class="fa fa-edit fa-fw"></i>Upload Cover Photo</a>
                        </li>
                        <li>
                            <a href="images.php"><i class="fa fa-photo fa-fw"></i> View All Image</span></a>
                        </li>
                          <li>
                            <a href="new_cartoons.php"><i class="fa fa-photo fa-fw"></i>Cartoons and Music</span></a>
                        </li>
                              
                          <li>
                            <a href="new_lessons.php"><i class="fa fa-photo fa-fw"></i>new lessons</span></a>
                        </li>     
                           <li>
                            <a href="storytime.php"><i class="fa fa-photo fa-fw"></i>new story</span></a>
                        </li>
                          <li>
                            <a href="transaction.php"><i class="fa fa-photo fa-fw"></i>Transaction</span></a>
                        </li>                 
                    </ul>
                </div>
                <!-- /.sidebar-collapse -->
            </div>
            <!-- /.navbar-static-side -->
        </nav>

			
			
			
           

<!--Post Section Open-->


<div class="row">
    <div class="col-md-3"></div>
                <div class="col-md-9">
                    <div class="panel panel-default">
                        <div class="panel-heading">
	<div class="panel-heading">
		<h2>Receipt</h2>
	</div>
 <div class="panel-body">
	<div class="dataTable_wrapper">
		<table class="table" style="width:50%;">
    
        <tr>
            <th><h5>Quantity</h5></td>
            <th><h5>Product Name</h5></td>
            <th><h5>Price</h5></td>
        </tr>
        
        <?php
        $t_id = $_GET['tid'];
        global $con;
        $query = mysqli_query($con,"SELECT * FROM transaction WHERE transaction_id = '$t_id'") or die (mysql_error());
        $fetch = mysqli_fetch_array($query);
        
        $amnt = $fetch['amount'];
        echo "Date : ". $fetch['order_date']."";
        
        $query2 = mysqli_query($con,"SELECT * FROM transaction_detail LEFT JOIN product ON product.product_id = transaction_detail.product_id WHERE transaction_detail.transaction_id = '$t_id'") or die (mysql_error());
        while($row = mysqli_fetch_array($query2)){
        
        $pname = $row['product_name'];
        $pprice = $row['product_price'];
        $oqty = $row['order_qty'];
        
        echo "<tr>";
        echo "<td>".$oqty."</td>";
        echo "<td>".$pname."</td>";
        echo "<td>".$pprice."</td>";
        echo "</tr>";
        }
        ?>

    </table>
    <legend></legend>
    <h4>TOTAL: Php <?php echo $amnt; ?></h4>
    </center>
</div>
</div>
</div>
</div>
</div>
</div>
<?php } ?>

<!--Post Section Close-->






        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->

    <!-- jQuery -->
    <script src="../bower_components/jquery/dist/jquery.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="../bower_components/bootstrap/dist/js/bootstrap.min.js"></script>

    <!-- Metis Menu Plugin JavaScript -->
    <script src="../bower_components/metisMenu/dist/metisMenu.min.js"></script>

    <!-- Morris Charts JavaScript -->
    <script src="../bower_components/raphael/raphael-min.js"></script>
    <script src="../bower_components/morrisjs/morris.min.js"></script>
    <script src="../js/morris-data.js"></script>

    <!-- Custom Theme JavaScript -->
    <script src="../dist/js/sb-admin-2.js"></script>


</body>

</html>
