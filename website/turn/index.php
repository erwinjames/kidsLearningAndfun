<!doctype html>
<html lang="en">
<head>
<meta name="viewport" content="width = 1050, user-scalable = no" />
<script type="text/javascript" src="extras/jquery.min.1.7.js"></script>
<script type="text/javascript" src="extras/modernizr.2.5.3.min.js"></script>
</head>
<body>
	<div class="flipbook-viewport">
	<div class="container">
		<div class="flipbook">
<?php
            
include("../admin/includes/db.php");
$cover_pic = $_GET['cover_id'];
Global $con;

$run =mysqli_query($con,"select * from story where cover_id = $cover_pic");
    if ($run==false) {
        echo "error";
    }
while($row=mysqli_fetch_array($run)){

echo "<div style=\"background-image:url(../admin/uploaded_image/$row[image])\">";
echo "</div>";
}
   ?>  

			<!-- <div style="background-image:url(../admin/uploaded_image/<?php echo $image; ?>)"></div> -->

			
		<!-- 	<div style="background-image:url(pages/1.png)"></div>
			<div style="background-image:url(pages/3.jpg)"></div>
			<div style="background-image:url(pages/4.jpg)"></div>
			<div style="background-image:url(pages/5.jpg)"></div>
			<div style="background-image:url(pages/6.jpg)"></div>
			<div style="background-image:url(pages/7.jpg)"></div>
			<div style="background-image:url(pages/8.jpg)"></div>
			<div style="background-image:url(pages/9.jpg)"></div>
			<div style="background-image:url(pages/10.jpg)"></div>
			<div style="background-image:url(pages/11.jpg)"></div>
		

	<div style="background-image:url(pages/12.jpg)"></div> -->
		</div>
	</div>
</div>
<script type="text/javascript">

function loadApp() {

	// Create the flipbook

	$('.flipbook').turn({
			// Width

			width:922,
			
			// Height

			height:600,

			// Elevation

			elevation: 50,
			
			// Enable gradients

			gradients: true,
			
			// Auto center this flipbook

			autoCenter: true

	});
}

// Load the HTML4 version if there's not CSS transform

yepnope({
	test : Modernizr.csstransforms,
	yep: ['lib/turn.js'],
	nope: ['lib/turn.html4.min.js'],
	both: ['css/basic.css'],
	complete: loadApp
});

</script>

</body>
</html>