<?php
	
    session_start();
    include("../credential.php");
    
    $connection = mysqli_connect($servername, $username, $password, $dbname);
	$query = "Delete from t4_3_3 where Uname like '".$_SESSION['username']."';";
	$res  = mysqli_query($connection,$query);
	$query = "Insert into t4_3_3 Values".$_GET['rows']."";
	$res  = mysqli_query($connection,$query) or die(mysqli_error($connection));
	echo $res;
	
?>
