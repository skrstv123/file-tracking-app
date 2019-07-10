<?php
require('connect_login.php');
echo "<link rel='stylesheet' type='text/css' href='cx.css'>";


if(isset($_POST['name']))
{

$link="";

if($_FILES['files']['size']>0)
	{
	$fname=$_FILES["files"]['tmp_name'];
	$foname=$_FILES["files"]['name'];
	$uloc="files/".$foname;
	move_uploaded_file($fname, $uloc);
	$link=addslashes("<a href='".$uloc."'> download </a>");
	}
	else
		$link="--no file--";


$name=addslashes($_POST['name']);
$num=addslashes($_POST['num']);
$type=addslashes($_POST['type']);




$sql="select id from docs order by id desc limit 1";
$id=1;
$rslt=$cnn->query($sql);
if($rslt->num_rows>0){
	while($res=$rslt->fetch_assoc())
	{
		$id=$res['id'];
		$id+=1;
	}
}

$sqql="insert into docs(id,doc_no,doc_type,doc_loc,name) values (".$id.",'".$num."','".$type."','".$link."','".$name."')";
$cnn->query($sqql);
echo "<h1>doc submitted successfully <br> id generated is: <i>".$id."</i></h1>";
echo "<br><a href=dboard.php>click here to go back</a>";
}else{
echo "<script>location.href='feed.php'</script>";
}
?>