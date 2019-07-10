<?php
session_start();
?>
<link rel='stylesheet' href='https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css' integrity='sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T' crossorigin='anonymous'>
<script src='https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js' integrity='sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM' crossorigin='anonymous'></script>
<style>
b{
	text-decoration-color: white;
}
body{
	background-color:;
}

</style>


<script src="https://kit.fontawesome.com/536a7d8830.js"></script>


<div>
 <nav class="navbar fixed-top navbar-expand-lg navbar-light"  style="background-color: #42f5dd;">
     <div class="navbar-brand" style="padding-left: 44%; padding-right:;">
   
  	<img  src="Capture.JPG" width="170" height="70" style="margin-left: ; margin-right:;">
  </div>

</nav>
</div>
<br><br><br><br><br><br><br>
<?php
$level=0;
$ofn=0;
require 'connect_login.php';
if (!isset($_SESSION['user']))
	echo "<script>location.href='form.php'</script>";

else
{
	
	$sql="select * from private where uname='".$_SESSION['user']."'";
	$level=0;
	$ofn=0;
	$rslt=$cnn->query($sql);
	if($rslt->num_rows>0)
	{
		$c=$rslt->num_rows;
		
		while($row=$rslt->fetch_assoc())
		{
			
			$level=$row['level'];
			$ofn=$row['ofname'];
		}
		
	}

	echo "<div class='container' style='margin-bottom:5px;' margin-left:0px; margin-right:0px;><div class='container'><p> <a href='feeder.php' class='btn btn-outline-primary btn-lg btn-block' role='button'>ADD NEW</a></p> <p> <a href='verified.php?ofn=".$ofn."' class='btn btn-outline-success btn-lg btn-block' role='button'>APPROVED</a></p><p> <a href='pending.php?ofn=".$ofn."'
	class='btn btn-outline-warning btn-lg btn-block' role='button'>PENDING</a></p>";

	if ($ofn!=1) {
		echo "<p> <a class='btn btn-outline-danger btn-lg btn-block' href='rejected.php?ofn=".$ofn."' role='button'>REJECTED</a></p>";
		
	}
	echo "<p> 
<a href='track.php' class='btn btn-outline-secondary btn-lg btn-block' role='button'>ALL FILE</a></p>";

	

}
echo "</div></div>";
?>
<div style="margin-top:10px;">
<footer class="fixed-bottom" style="background-color: black; text:white;">
	<img src="https://ecounselling.nic.in/img/niclogo1.png" width="140" height="40">
    <img align="right" src="https://png2.kisspng.com/sh/c8b0bffb8f2355f00cd6edfa73917cd2/L0KzQYm3VcAyN5NsiZH0aYP2gLBuTfxwb5CyeuRqbnSwdLb6iCRweF58ed51cHHzdcO0VfFmQGNmTNY8ZULmcYm1V8M4QWU1T6s6NUK4QYe7VsIyOmY5T5D5bne=/kisspng-logo-brand-desktop-wallpaper-5ae82a4d3e2ca8.7379407915251646212547.png" width="80" height="40" alt="">
      
      <div align="center">
      <form style="margin-top:15px" action='logout.php' method='POST' >
      <button style="margin-left:;" class="btn btn-outline-danger btn-sm my-2 my-sm-0" type="submit">Logout <b> <?php if (isset($_SESSION['user']))
	echo $_SESSION['user']; ?></b></button>
	<a href=about.html class="btn btn-outline-info btn-sm my-2 my-sm-0" role="button"><b> About</b></a>
    </form></div>
    <center><div style="color:teal; margin: 10px;">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever  versions of Lorem Ipsum.</div></center>

	
</footer>
</div>


