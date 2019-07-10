<?php
session_start();
?>
<link rel='stylesheet' href='https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css' integrity='sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T' crossorigin='anonymous'>
<script src='https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js' integrity='sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM' crossorigin='anonymous'></script>


<style>
b{
	text-decoration-color: white;
}
h2{
	margin-right:50px; 
}
body{
	background-color: #42daf5;
}
textarea{
	border:2px solid black;
	border-radius: 8px;
}
</style>





<div class="container">
 <nav class="navbar fixed-top navbar-expand-lg navbar-light"  style="background-color: #42f5dd;">
     <div class="navbar-brand" style="padding-left: 44%; padding-right:;">
   
  	<img  src="Capture.JPG" width="170" height="70" style="margin-left: ; margin-right:;">
  </div>
</nav>
</div>
<br><br><br><br>
<div>
		<form action='logout.php' method='POST' >
      
			<div class="container">
			  <div class="row">
			    <div class="col-lg-6" style="padding-top:1%; padding-left:1%; padding-right:44%;">
			      <a href='pending.php' style="margin-right:;" class='btn btn-outline-primary btn-sm' role='button'>BACK</a>
			    </div>
			    <div class="col-lg-6" style="padding-top:1%; padding-left:44%; padding-right:1%;">			      
      <button style="margin-left:; margin-right: 0px;" class="btn btn-outline-danger btn-sm my-2 my-sm-0" type="submit">Logout_<b><?php if (isset($_SESSION['user']))echo $_SESSION['user'];?></b></button>
			    </div>
			  </div>
			  </div>
			</form></div>

<?php
$id=$_REQUEST['id'];
$level=$_REQUEST['lvl'];
require('connect_login.php');
if(isset($_REQUEST['query']))
{
	$sql="update docs set ".$level."q='".$_REQUEST['query']."' where id=".$id;
	$cnn->query($sql);
	$sql2="update docs set ".$level."a=-1 where id=".$id;
	$cnn->query($sql2);
	
	$sql3="update docs set ".($level-1)."a=0 where id=".$id;
	$cnn->query($sql3);
	echo "<script>location.href='dboard.php'</script>";
}
else{
	echo "<center><h2>DOCUMENT ID: ".$id." </h2>";
}

?>
<style>
	.form-signin {
  			  width: 100%;
			  max-width: 330px;
			  padding: 15px;
			  margin: auto;
			}
</style>
<p><h4></h4></center>
  <form class="form-signin" action=query.php method="post">
  	
  	<input type="hidden" name="id" value=<?php echo $id; ?> >

 
  	<input type="hidden" name="lvl" value=<?php echo $level;?> >

  <div class="form-group">
		<label for="query"><h5>Write your comment</h5></label>
        <textarea required="true" rows="10" cols="30" name="query" placeholder="Comment" onkeyup="adjust_textarea(this)"></textarea><br>
    </div>
    <div class="form-group mb-2">
    <input class='btn btn-outline-primary btn-sm' role='button' type="Submit" value="Submit" />
</div>
  </form>
  </p>
</div>

</body>
</html>