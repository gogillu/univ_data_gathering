<?php
	
    session_start();
    include("../credential.php");
    
    $connection = mysqli_connect($servername, $username, $password, $dbname);
	$query = "Delete from ".$_GET["table"]." where Username like '".$_SESSION['username']."';";
	$res  = mysqli_query($connection,$query) or die(mysqli_error($connection));
	$query = "Insert into ".$_GET["table"]." Values".$_GET['rows']."";
	$res  = mysqli_query($connection,$query) or die(mysqli_error($connection));
	
?>
