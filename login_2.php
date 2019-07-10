<?php
session_start();
$usn=$_POST['uname'];
$pwrd=$_POST['pwd'];
require 'connect_login.php';

$sql="select * from private where uname='".$usn."' and pwd='".$pwrd."'";
echo "<br>";
$rslt=$cnn->query($sql);
if($rslt->num_rows>0){
	
	if(isset($_SESSION['user']))
		echo "<script>location.href='dboard.php'</script>";
	else{
		$_SESSION['user']=$usn;
		while ($row=$rslt->fetch_assoc()) {
			$_SESSION['ofn']=$row['ofname'];
			break;
		}
		echo "<script>alert('login success! welcome ".$usn."')</script>";
		echo "<script>location.href='dboard.php'</script>";
	}
}
else
{
	echo "<script>alert('login failed, credentials don\'t match')</script>";
	echo "<script>location.href='form.php'</script>";
}
?>