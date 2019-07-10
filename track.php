<?php
session_start();
?>

<!DOCTYPE html>
<html>
<head>
	<title>Tracking File</title>
	<link rel="stylesheet" type="text/css" href="cx.css">
	
	<style type="text/css">
		body{
			background-color: #42daf5 !important;
		}
		.form-signin {
  			  width: 100%;
			  max-width: 330px;
			  padding: 15px;
			  margin: auto;
			}

		h3{
			border: 2px solid red;
		}	
		#q{
			margin-top: 0px;
			padding:5px;
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
</head>
<body>
<link rel='stylesheet' href='https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css' integrity='sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T' crossorigin='anonymous'>
<script src='https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js' integrity='sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM' crossorigin='anonymous'></script>


<style>
b{
	text-decoration-color: white;
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
	<center>
  <h2>Track your document</h2>
  <form class="form-signin" action=track.php method=get>
  	<div class="form-group mb-2"><b>Search by Name: </b>
    <input class="form-control" required="true" type="text" name="field1" placeholder="Name" ></div>
    <div class="form-group mb-2">
        <input data-toggle="tooltip" data-placement="right" title="search % to view all files" class="btn btn-primary mb-2" type="submit" value="Search" >
    </div>
  </form>
</center>
</html>
<?php
if(isset($_SESSION['user']))
{
$c=0;$param='';
require('connect_login.php');
if(isset($_REQUEST['field1']))
{
	$param=$_REQUEST['field1'];
}
	$sql="SELECT * FROM docs WHERE name like '%".$param."%'";
	
	$numtoname = array('0' => 'PENDING','1'=>'APPROVED','-1'=>'REJECTED','NULL'=>'--');
	$cols = array();
	$rslt=$cnn->query($sql);
	if($rslt->num_rows>0)
	{
		$c=$rslt->num_rows;
		echo "<center> <h4>".$c." files(s) found</h4>";
		echo "<table><td><b>Id<b></td><td><b>Num<b></td><td><b>Name<b></td><td><b>Type<b></td><td><b>Link<b></td><td><b>Status<b></td><td><b>Query<b></td>";
		
		$cn=1;
		while($row=$rslt->fetch_assoc())
		{
			
			$cols['id']=$row['id'];
			$cols['name']=$row['name'];
			$cols['num']=$row['doc_no'];
			$cols['typ']=$row['doc_type'];
			$cols['loc']=$row['doc_loc'];
			
			$lev=1;
		while($row[$lev.'a']!=-2 and $lev<4)
		{
			
			$lev+=1;
		}
		$res='';
		if ($row[$lev.'a']==-2) {
			$lev-=1;
		}
			$query='';
			$res="file ".$numtoname[$row[$lev.'a']]." at office ".$lev;
			if ($row[$lev.'a']==-1) {
			$query=$row[$lev.'q'];
		}
		
		echo "<tr>";
			
				echo("<td>".$cols['id']." </td><td>".$cols['num']."</td><td>".$cols['name']."</td><td>".$cols['typ']."</td><td>".$cols['loc']."</td><td>".$res."</td><td>".$query."</td>"); 
				
			

			echo "</tr>";		
		echo "</table></center>";
	}else {
			echo "<center><h4>No file found</h4></center>";
		}

}
else{
	echo "<script>alert('you must login first!')</script>";
	echo "<script>location.href='form.php'</script>";
}

?>

</body>
</html>