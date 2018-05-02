<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<meta name=viewport content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">
  
<title>Simple Sketchy</title>

<script src="js/jquery-1.7.min.js"></script>
<script src="js/modernizr.custom.34982.js"></script>

<script src="js/sketcher.js"></script>
<script src="js/trigonometry.js"></script>

<link rel="stylesheet" href="assets/bootstrap.css" />
<link rel="stylesheet" href="assets/styles.css" />

<script>
var sketcher = null;

$(document).ready(function(e) {
	
	sketcher = new Sketcher( "sketch" );
});

</script>

</head>

<body>
<!-- <div class="topbar-wrapper" style="z-index: 5;">
    <div class="topbar" data-dropdown="dropdown">
      <div class="topbar-inner">
        <div class="container">
          <h3><a href="#">Simple Sketchy</a></h3>
          
          <ul class="nav">
            <li class="active"><a href="#">a sketch app using "lineTo(x,y)" drawing</a></li>
          </ul>
          
          <ul class="nav secondary-nav">
            <a href="#">
             <input type="button" class="btn error" value="clear"
             	onclick="sketcher.clear();" />
             </a>
          </ul>
        </div>
      </div><!-- /topbar-inner -->
    </div><!-- /topbar -->
  </div> -->
  
    <canvas id="sketch" width="500" height="500" />
</body>
</html>
