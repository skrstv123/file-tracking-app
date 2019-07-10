<?php
$server="localhost";
$un="id10111538_skrstv";
$pwd="skrstv@123";
$dbname="id10111538_db1";

$cnn = new mysqli($server,$un,$pwd,$dbname);

if($cnn -> connect_error)
{
	die("connection aborted".$cnn->connect_error);
}

?>