<?php
	
    session_start();
    include("../credential.php");

$date = date_create();
save_log($_SESSION['username'],getUserIP(),$_SERVER['REQUEST_URI'],urlencode(http_build_query($_POST, '', '&amp;')),date_format($date, 'Y-m-d H:i:s'));


    
    $connection = mysqli_connect($servername, $username, $password, $dbname);
	$query = "Delete from ".$_POST["table"]." where Username like '".$_SESSION['username']."';";
	
	$res  = mysqli_query($connection,$query);
	$query = "Insert into ".$_POST["table"]." Values".$_POST['rows']."";
	echo ("alert('{$query}')");
	$res  = mysqli_query($connection,$query) or die(mysqli_error($connection));
	echo $_POST["table"];
	
?>
