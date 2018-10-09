<?php
	
    session_start();
    include("../credential.php");
    
    $connection = mysqli_connect($servername, $username, $password, $dbname);
	$query = "Delete from ".$_GET["table"]." where Uname like '".$_SESSION['username']."';";
	$res  = mysqli_query($connection,$query);
	$query = "Insert into ".$_GET["table"]." Values".$_GET['rows']."";
	$res  = mysqli_query($connection,$query) or die(mysqli_error($connection));
	echo $res;
	
?>
