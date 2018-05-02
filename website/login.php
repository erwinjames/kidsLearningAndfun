<!DOCTYPE html>
<?php 
session_start();
if(isset($_SESSION['usr_id'])!="") {
	header("Location: index.php");
}


include("admin/includes/db.php");

if (isset($_POST['login'])) {

	$email = mysqli_real_escape_string($con, $_POST['user_name']);
	$password = mysqli_real_escape_string($con, $_POST['pass']);
	$result = mysqli_query($con, "SELECT * FROM user WHERE user_name = '" . $email. "' and pass = '" .($password) . "'");

	if ($row = mysqli_fetch_array($result)) {
		$_SESSION['usr_id'] = $row['id'];
		$_SESSION['usr_name'] = $row['user_name'];
		header("Location: index.php");
	} else {
		$errormsg = "Incorrect Email or Password!!!";
	}
}
 ?>
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
	<div class="login-face"><img src="login_face.png"></div>
	<section class="form">
		<form action="login.php" method="POST">
			<div class="input uname">
				<input type="text" id="username" name="user_name" placeholder="Username" required/>
				<i class="fa fa-user"></i>
			</div>
			<div class="input pass">
				<input type="password" id="password"  name="pass" placeholder="Password" required/>
				<i class="fa fa-lock"></i>
			</div>
			<!-- <a href="#" style="float:right;color:gray;font-size:14px;text-decoration:none;
			font-family:san-serif,Arial;margin-bottom:10px;">Lost Your Password?</a>
			<p class="error-msg">Wrong Credential</p> -->
			<div>
				<input type="submit" id="login" value="Log in" name="login"  />
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
