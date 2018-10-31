<?php
	
    session_start();
    include("../credential.php");
    
    $connection = mysqli_connect($servername, $username, $password, $dbname);
	$query = "Delete from t4_2_6 where Uname like '".$_SESSION['username']."';";
	$res  = mysqli_query($connection,$query);
	$query = "Insert into t4_2_6 Values('".$_SESSION['username']."','".$_GET['last']."','".$_GET['method']."','".$_GET['users']."','".$_GET['teachers']."','".$_GET['students']."')";   // ".$_GET['rows']."";
	$res  = mysqli_query($connection,$query) or die(mysqli_error($connection));
	
?>
