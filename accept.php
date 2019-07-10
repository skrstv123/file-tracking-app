<?php
require('connect_login.php');
$level=$_GET['lvl'];
$id=$_GET['id'];
$sql="update docs set ".$level."a=1 where id=".$id;
if($level<4){
	$nlvl=$level+1;
	$sq="update docs set ".$nlvl."a=0 where id=".$id;
	$cnn->query($sq);
}
$cnn->query($sql);
header("location: pending.php");

?>