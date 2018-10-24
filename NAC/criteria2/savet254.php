<?php

    session_start();
    include("../credential.php");

    $connection = mysqli_connect($servername, $username, $password, $dbname);
	$query = "Delete from t2_5_4 where Uname like '".$_SESSION['username']."';";
	$res  = mysqli_query($connection,$query);
	$query = "Insert into t2_5_4 Values('".$_SESSION['username']."','".urlencode($_GET['desc'])."','','".$_GET['link']."')";   // ".$_GET['rows']."";
	$res  = mysqli_query($connection,$query) or die(mysqli_error($connection));
	echo $res;
?>
