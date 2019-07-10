<?php
session_start();
?>
<link rel='stylesheet' href='https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css' integrity='sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T' crossorigin='anonymous'>
<script src='https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js' integrity='sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM' crossorigin='anonymous'></script>


<style>
b{
	text-decoration-color: white;
}

</style>


<script src="https://kit.fontawesome.com/536a7d8830.js"></script>


<div class="container">
<nav class="navbar fixed-top navbar-expand-lg navbar-light"  style="background-color: #42f5dd;">
     <div class="navbar-brand" style="padding-left: 44%; padding-right:;">
   
  	<img  src="Capture.JPG" width="170" height="70" style="margin-left: ; margin-right:;">
  </div>
</nav>
</div>
<br><br><br><br>
<?php

if(isset($_SESSION['user']))
{}
else{
	echo "<script>alert('you must login first')</script>";
	echo "<script>location.href='form.php'</script>";
}
?>


<!DOCTYPE html>
<html>
<head>
	<title>govt site</title>
	<link rel="stylesheet" type="text/css" href="cx.css">
	<style>
		#in{
	border:2px solid black;
	border-radius: 3px;
	margin:3px;
	padding: 2px;
		   }
		   #inf{
	border:2px solid black;
	border-radius: 3px;
	margin:3px;
	padding-left: 84px;
			}
			
	.form-signin {
  width: 100%;
  max-width: 330px;
  padding: 15px;
  margin: auto;
}

	</style>
</head>
<body>
	<div>
		<form action='logout.php' method='POST' >
      
			<div class="container">
			  <div class="row">
			    <div class="col-lg-6">
			      <script src="https://kit.fontawesome.com/536a7d8830.js"></script>
			      <a href='dboard.php' style="margin-right:455px;"  role='button'><i class="fas fa-home" style="font-size: 40px;"></i></a>
			    </div>
			    <div class="col-lg-6">			      
      <button style="margin-left: 455px; margin-right: 0px;" class="btn btn-outline-danger btn-sm my-2 my-sm-0" type="submit">Logout <b> <?php if (isset($_SESSION['user']))
	echo $_SESSION['user']; ?></b></button>
			    </div>
			  </div>
			  </div>
			</form></div>
    </form>
	</div>
	<H4> Add New File :</H4>
	<P><FORM class='form-signin' action="feed.php" method="post" enctype="multipart/form-data">
		
		<b>Enter File Name: </b><div class="form-group">
<input class="form-control" required='True' id='in' type="text" name="name" placeholder="Name">
</div>
<div class="form-group">
<b>Enter File Number: </b>
	<input class="form-control" required='True' id='in' type="text" name="num" placeholder="Number">
</div>
<div class="form-group">
	<b>Enter File Type: </b>
	<input class="form-control" required='True' id='in' type="text" name="type" placeholder="Type"></div>
	
	<b>Choose a file to upload:</b>
	<input style="padding: 3px;" class="btn btn-outline-info" type="file" name="files"><br><br>
	<input class="btn btn-primary btn-lg" type="submit" name="submit">
	</FORM></P>

</body>
</html>