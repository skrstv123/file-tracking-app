<?php
session_start();
if(isset($_SESSION['user']))
	echo "<script>location.href='dboard.php'</script>";
?>

<!DOCTYPE html>
<html>
<head>
	<title>e-files</title>
	<link rel='stylesheet' href='https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css' integrity='sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T' crossorigin='anonymous'>
<script src='https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js' integrity='sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM' crossorigin='anonymous'></script>
<style>
	.form-signin {
  width: 100%;
  max-width: 330px;
  padding: 15px;
  margin: auto;
}
</style>
</head>
<body>

<div class="container">
  <nav class="navbar fixed-top navbar-expand-lg navbar-light"  style="background-color: #42f5dd;">
     <div class="navbar-brand" style="padding-left: 43%; padding-right:;">
   
  	<img  src="Capture.JPG" width="170" height="70" style="margin-left: ; margin-right:;">
  </div>
</nav>
</div>
<br><br><br><br><br><br>
	<div class="container"><div class="container">
	<P>
		
		<FORM action="login_2.php" method="post" class='form-signin'>
		<H6> EMPLOYEE LOGIN AREA :</H6>
<div class="form-group">
		<label for="username">Username:</label>
		<input class="form-control" placeholder="Username" type="text" name="uname" required="true">
		</div>
		<div class="form-group">
		<label for="pwd">Password:</label>
		<input class="form-control" type="password" name="pwd" placeholder="Password" required="true">
		</div>
		<div class="form-group">
		<input class="btn btn-primary" type="submit" name="sb" value="LOG IN">
	</div>
	</FORM>

</P>
</div></div>


<footer class="fixed-bottom" style="background-color: black; text:white;" >
	
		
	
		><img src="https://ecounselling.nic.in/img/niclogo1.png" width="140" height="40">
    <img align="right" src="https://png2.kisspng.com/sh/c8b0bffb8f2355f00cd6edfa73917cd2/L0KzQYm3VcAyN5NsiZH0aYP2gLBuTfxwb5CyeuRqbnSwdLb6iCRweF58ed51cHHzdcO0VfFmQGNmTNY8ZULmcYm1V8M4QWU1T6s6NUK4QYe7VsIyOmY5T5D5bne=/kisspng-logo-brand-desktop-wallpaper-5ae82a4d3e2ca8.7379407915251646212547.png" width="80" height="40" alt="">
    <div align="center">
    <a href="about.html" style="color:teal;" class="btn btn-outline-info btn-sm my-2 my-sm-0" role="button"><b>About</b></a></div>
	<center><div style="color:teal; margin: 10px;">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever  versions of Lorem Ipsum.</div></center>
	
</footer>
</body>
</html>