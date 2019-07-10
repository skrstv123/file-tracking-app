<?php
session_start();
?>
<link rel='stylesheet' href='https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css' integrity='sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T' crossorigin='anonymous'>
<script src='https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js' integrity='sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM' crossorigin='anonymous'></script>


<style>
b{
	text-decoration-color: white;
}
table{
			border: 2px solid yellow;
			border-radius: 1px;
		}
		tr{
			border: 2px solid yellow;
			border-radius: 1px;

		}
		td{
			border: 2px solid black;
			border-radius: 1px;
			margin:5px;
			padding: 8px;
			padding-left: 28px;
			padding-right: 28px;

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


<?php
require('connect_login.php');
echo "<link rel='stylesheet' type='text/css' href='cx.css'>";
if(isset($_SESSION['user']))
{
	$ofn=$_REQUEST['ofn'];
		$sql="select * from docs where ".$ofn."a=-1";
	$c=0;
	$message="";
	$rslt=$cnn->query($sql);
	echo "<center><table><tr><td><b>Id<b></td><td><b>Num<b></td><td><b>Name<b></td><td><b>Type<b></td><td><b>Link<b></td><td><b>Query<b></td></tr>";
	if($rslt->num_rows>0)
	{
		$c=$rslt->num_rows;
		
		$message="You have rejected ".$c." file(s).";
		
		echo "<h3>".$message."</h3><div class='container'><BR>";
		while($row=$rslt->fetch_assoc())
		{
			echo "<tr>";
			
				echo("<td> ".$row['id']." </td><td> ".$row['doc_no']."</td><td> ".$row['name']."</td><td> ".$row['doc_type']."</td><td>".$row['doc_loc']."</td>"); 
				echo "<td><b> ".$row[($ofn).'q']." </b></td>";

			echo "</tr>";

		}
	}
	
	else
	echo "<h3>You have rejected ".$c." file(s).</h3>";

	echo("</div>");
	
}
else{
	echo "<script>alert('you must login first!')</script>";
	echo "<script>location.href='form.php'</script>";
}
?>

