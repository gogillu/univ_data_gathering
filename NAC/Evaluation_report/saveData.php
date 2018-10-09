<?php
	
    session_start();
    include("../credential.php");
    
    $connection = mysqli_connect($servername, $username, $password, $dbname);
	$query = "Delete from ".$_POST["table"]." where Username like '".$_SESSION['username']."';";
	
	$res  = mysqli_query($connection,$query);
	$query = "Insert into ".$_POST["table"]." Values".$_POST['rows']."";
	echo ("alert('{$query}')");
	$res  = mysqli_query($connection,$query) or die(mysqli_error($connection));
	echo $_POST["table"];
	
?>
