<?php

    session_start();
    include("../credential.php");

    $connection = mysqli_connect($servername, $username, $password, $dbname);
	$query = "Delete from t2_4_4 where Uname like '".$_SESSION['username']."';";
	$res  = mysqli_query($connection,$query);
	$query = "Insert into t2_4_4 Values".$_GET['rows']."";
	echo $query;
	$res  = mysqli_query($connection,$query) or die(mysqli_error($connection));

?>
