<?php
	
    session_start();
    include("../credential.php");
    
    $connection = mysqli_connect($servername, $username, $password, $dbname);
	$query = "Delete from t4_1_3 where Uname like '".$_SESSION['username']."';";
	$res  = mysqli_query($connection,$query);
	$query = "Insert into t4_1_3 Values('".$_SESSION['username']."','".$_GET['totalc']."','".$_GET['totals']."','".$_GET['lcd']."','".$_GET['lan']."','".$_GET['semi']."')"; 
	$res  = mysqli_query($connection,$query) or die(mysqli_error($connection));
	
?>
