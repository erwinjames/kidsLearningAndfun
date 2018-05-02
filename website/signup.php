<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<meta name="viewport" content="width=device-width,initial-scale=1.0"/>
<title>Your Website</title>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="style.css" type="text/css" />
<script type="text/javascript"></script>
</head>

<body>

<div class="login-form">
	<legend style="font-style: none;text-align: center;">Sign Up</legend>
	<section class="form">
		<form  method="POST">
			<div class="input uname">
				<input type="text" id="username"  name="firstname" placeholder="Username" required/>
				<i class="fa fa-user"></i>
			</div>
			<div class="input pass">
				<input type="password" id="password"  name="password" placeholder="Password" required/>
				<i class="fa fa-lock"></i>
			</div>
			<div>
				<input type="submit" id="login" value="Sign Up" name="submit"  />
			</div>
			
		</form>
	</section>
</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
<script type="text/javascript">
$(document).ready(function(){
	$("#login").click(function(){
		if($("#username").val() == ""){
			$(".input").addClass("error");
			$("#username").css({"border":"2px solid red"});
		}
		if($("#password").val() == ""){
			$(".pass").addClass("error");
		}

	})
	$(".input").click(function(){
		$(".input").removeClass("error");
		$("#username").css({"border":"2px solid #ddd"});
	})
})
</script>

</body>
</html>
<!-- <!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta content="width=device-width, initial-scale=1.0" name="viewport" >
	<link rel="stylesheet" href="css/bootstrap.min.css" type="text/css" />
</head>
<body>
<div class="container">
	<div class="row">
		<div class="col-md-4 col-md-offset-4 well">
			<form role="form" action="" method="post" name="signupform" enctype="multipart/form-data">
				<fieldset>
					<legend>Sign Up</legend>

					<div class="form-group">
						<label for="name">Name</label>
						<input type="text" name="firstname" placeholder="Enter Full Name"  class="form-control" />
						
					</div>
					<div class="form-group">
						<label for="name">Password</label>
						<input type="password" name="password" placeholder="Password" required class="form-control" />
						
					</div>

					<div class="form-group">
						<input type="submit" name="submit" value="Sign Up" class="btn btn-primary" />
					</div>
				</fieldset>
			</form>
			<span class="text-success"><?php if (isset($successmsg)) { echo $successmsg; } ?></span>
			<span class="text-danger"><?php if (isset($errormsg)) { echo $errormsg; } ?></span>
		</div>
	</div>
</div>
<script src="js/jquery-1.10.2.js"></script>
<script src="js/bootstrap.min.js"></script>
</body>
</html> -->

<?php
	include ('admin/includes/db.php');
	
	if (isset($_POST['submit']))
	{
		$username=$_POST['firstname'];
		$password=$_POST['password'];
		
			$sql=mySQLi_query($con,"select * from user WHERE user_name='$username'") or die (mySQL_error());
			$row=mySQLi_num_rows($sql);
			if ($row > 0)
			{
			echo "<script>alert('E-mail already taken!'); window.location='signup.php'</script>";
			}
			else
		{
			mySQLi_query($con,"INSERT INTO user (user_name,pass)
			VALUES ('" .$username . "', '" .($password) . "')");
			
			echo "<script>alert('Account successfully created!'); window.location='login.php'</script>";
		}
			
	}
	
?>

